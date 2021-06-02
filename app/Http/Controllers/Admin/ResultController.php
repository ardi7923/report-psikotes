<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;
use DataTables;

class ResultController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->datatable($request);
        }
        return view('pages.admin.result.index');
    }


    private function datatable($request)
    {

        if ($request->type == 'school') {
            $data = Result::query()->where('sekolah', $request->school_name);
        } else if ($request->type == 'student') {
            $data = Result::query()->where('nama', $request->q)->orWhere('no_tes',$request->q);
        }

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                return '<a href="'.url('report-result?type=single?&id=').$data->id.'" target="_blank">
                        <button class="btn btn-danger"> 
                          <center>  <i class="fa fa-download"> </i> </center>
                        </button>
                        <a/>';
            })
            ->make(true);
    }
}
