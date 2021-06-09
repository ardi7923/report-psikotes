<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use App\Exports\RekapExport;

class ExportExcelRekapController extends Controller
{
    public function export(Request $request)
    {
        return Excel::download(new RekapExport($request->school_name), 'rekap '.$request->school_name .'.xlsx');    
    }
}
