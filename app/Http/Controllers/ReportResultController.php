<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use PDF;

class ReportResultController extends Controller
{
    public function index(Request $request)
    {
        if ($request->type == 'single') {

            $data = Result::find($request->id);

            $pdf = PDF::loadView('reports.pdf', compact('data'))
                ->setOption('enable-javascript', true)
                ->setOption('javascript-delay', 1500)
                ->setOption('enable-smart-shrinking', true)
                ->setOption('no-stop-slow-scripts', true)
                ->setWarnings(true);
            return $pdf->download('Hasil Ujian '.$data->nama.'.pdf');
        } else if ($request->type == 'multiple') {
            $datas = Result::where('sekolah', $request->school_name)->get();

            $pdf = PDF::loadView('reports.multiple', compact('datas'))
                ->setOption('enable-javascript', true)
                ->setOption('javascript-delay', 5000)
                ->setOption('enable-smart-shrinking', true)
                ->setOption('no-stop-slow-scripts', true)
                ->setWarnings(true);
            return $pdf->download('Hasil Ujian '.$request->school_name.'.pdf');
        }





        // return view( 'reports.pdf');
    }
}
