<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\School;
use App\Models\Result;
use App\Services\CrudService;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->datatable();
        }

        return view('pages.admin.school.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,CrudService $crud_service,School $model)
    {
        return $crud_service
                    ->setModel($model)
                    ->setParams(['id' => $id])
                    ->delete();
    }

    /**
     * json data for datatable.
     *
     * 
     * @return DataTables
     */
    public function datatable()
    {

        $data = School::query();

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data)  {
                    $disabled = (Result::where('sekolah',$data->name)->count() > 0) ? 'disabled' : 'btn_delete';

                  return '<button class="btn btn-circle btn-sm btn-danger  '. $disabled .'" data-url='. url("school/".$data->id) .' data-text="'. $this->deleteText($data) .'" data-toggle="tooltip" title="Hapus Data">
                  <i class="fa fa-trash"> </i>
                </button>';
                })
            ->make(true);
    }

    private function deleteText($data)
    {
        return view('pages.admin.school.delete', compact('data'))->render();
    }
}
