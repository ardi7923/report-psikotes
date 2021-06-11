<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserSchoolRequest;
use App\Models\School;
use Illuminate\Http\Request;
use MainService;
use CrudService;
use App\Models\User;
use DataTables;
use App\Services\Facades\UserSchoolFacade;

class UserSchoolController extends Controller
{
    private $model,$validator,$crud_service,$facade;

    public function __construct(User $model,UserSchoolRequest $validator,CrudService $crud_service, UserSchoolFacade $facade)
    {
        $this->url = "user-school/";
        $this->folder = "pages.admin.user-school.";
        $this->model = $model;
        $this->validator = $validator;
        $this->crud_service = $crud_service;
        $this->facade = $facade;
    }
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

        return view('pages.admin.user-school.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schools = School::all();
        return MainService::renderToJson($this->folder.'create',compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return $this->crud_service
                    ->setModel( $this->model )
                    ->setValidator( $this->validator )
                    ->setRequest( $request )
                    ->setFacade( $this->facade )
                    ->save();
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
        $data = $this->model->find($id);
        $schools = School::all();
        return MainService::renderToJson($this->folder.'edit',compact('data','schools'));
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
        $data = $this->model->find($id);
        return $this->crud_service
                    ->setModel( $this->model )
                    ->setValidator( $this->validator )
                    ->setRequest( $request )
                    ->setParams([ 'id' => $id ])
                    ->setFacade( $this->facade )
                    ->setIdOld( $data->username )
                    ->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->crud_service
                    ->setModel( $this->model )
                    ->setParams([ 'id' => $id ])
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

        $data = $this->model->query()->isSchool()->with('school');

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                return view('components.datatables.action', [
                    'data'        => $data,
                    'url_edit'    => url($this->url . $data->id . '/edit'),
                    'url_destroy' => url($this->url . $data->id),
                    'delete_text' => view($this->folder . 'delete', compact('data'))->render()
                ]);
            })
            ->make(true);
    }
}
