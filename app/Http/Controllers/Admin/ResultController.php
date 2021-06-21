<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use DataTables;
use CrudService;
use MainService;
use App\Http\Requests\ResultRequest;
use App\Services\ResponseService;
use App\Jobs\DeleteStudent;

class ResultController extends Controller
{
    private $model, $crud_service;

    public function __construct(Result $model, CrudService $crud_service)
    {
        $this->crud_service = $crud_service;
        $this->model        = $model;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->datatable($request);
        }
        return view('pages.admin.result.index');
    }

    public function create()
    {
        return MainService::renderToJson('pages.admin.result.create');
    }

    public function store(Request $request,ResultRequest $validator)
    {
        return $this->crud_service
            ->setModel($this->model)
            ->setRequest($request)
            ->setValidator($validator)
            ->save();
    }

    public function edit($id, Request $request)
    {
        $data = $this->model->find($id);
        return MainService::renderToJson('pages.admin.result.edit', compact('data'));
    }

    public function update($id, Request $request, ResultRequest $validator)
    {
        $data = $this->model->find($id);
        return $this->crud_service
            ->setModel($this->model)
            ->setRequest($request)
            ->setValidator($validator)
            ->setParams(['id' => $id])
            ->setIdOld($data->no_tes)
            ->update();
    }

    public function destroy($id)
    {
        return $this->crud_service
            ->setModel($this->model)
            ->setParams(['id' => $id])
            ->delete();
    }

    private function datatable($request)
    {

        if ($request->type == 'school') {
            $data = Result::query()->where('sekolah', $request->school_name);
        } else if ($request->type == 'student') {
            $data = Result::query()->where('nama', $request->q)->orWhere('no_tes', $request->q);
        }

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                return '<a href="' . url('report-result?type=single&id=') . $data->id . '" target="_blank">
                        <button class="btn btn-danger"> 
                          <center>  <i class="fa fa-download"> </i> </center>
                        </button>
                        <a/>';
            })

            ->addColumn('action_full', function ($data) {
                return '<a href="' . url('report-result?type=single&id=') . $data->id . '" target="_blank">
                        <button class="btn btn-success btn-sm"> 
                          <center>  <i class="fa fa-download"> </i> </center>
                        </button>
                        <a/>
                        
                        <button 
                                class     = "btn btn-sm btn-warning btn_edit"
                                data-url  = ' . url('result/' . $data->id . '/edit') . '
                                data-toggle="tooltip" 
                                title="Ubah Data"
                                data-size = "lg"
                                > 
                                <i class  = "fa fa-edit"> </i> 
                        </button>

                        <button class="btn  btn-sm btn-danger btn_delete" data-url=' . url('result/' . $data->id) . ' data-text="' . $this->deleteText($data) . '" data-toggle="tooltip" title="Hapus Data">
                            <i class="fa fa-trash"> </i>
                        </button>
                        ';
            })
            ->rawColumns(['action', 'action_full'])
            ->make(true);
    }

    private function deleteText($data)
    {
        return view('pages.admin.result.delete', compact('data'))->render();
    }


    public function massdelete(Request $request,ResponseService $response)
    {
        $datas  = Result::where('sekolah',$request->school_name)->get();

        foreach($datas as $d){
            DeleteStudent::dispatch($d->id);
        }

        return $response->setCode(200)
                     	 ->setMsg("Data Berhasil Masuk di Antrian")
                     	 ->success();
        
    }
}
