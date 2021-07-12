<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Result;
use Auth;

class StudentSchoolController extends Controller
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

        $total_student = Result::where('sekolah', Auth::user()->school->name)->count();
        return view('pages.admin.student-school.index',compact("total_student"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function datatable()
    {
        $data = Result::query()->where('sekolah', Auth::user()->school->name);

        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($data) {
                return '<a href="' . url('report-result?type=single?&id=') . $data->id . '" target="_blank">
                    <button class="btn btn-danger"> 
                      <center>  <i class="fa fa-download"> </i> </center>
                    </button>
                    <a/>';
            })
            ->make(true);
    }
}
