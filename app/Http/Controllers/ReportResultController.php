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
            return $pdf->download('Hasil Ujian ' . $data->nama . '.pdf');
        } else if ($request->type == 'multiple') {
            $datasGet = Result::where('sekolah', $request->school_name)->get();

            if (count($datasGet) > 100) {

                
                $part = round(count($datasGet) / 100);
                $html = '';
                
                for ($i = 0; $i < $part; $i++) {
                    
                    $offset  = $i * 100;

                    $datas = Result::where('sekolah', $request->school_name)->limit(100)->offset($offset)->get();

                    $html .= view('reports.multiple', compact('datas'))->render();
                   
                }

                $pdf = PDF::loadHTML($html);
                return $pdf->download('Hasil Ujian ' . $request->school_name . '.pdf');
            }
       
        }





        // return view( 'reports.pdf');
    }
}
