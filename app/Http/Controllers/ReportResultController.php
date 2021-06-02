<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ReportResultController extends Controller
{
    public function index(Request $request)
    {


        $pdf = PDF::loadView('reports.pdf')
                    ->setOption('enable-javascript',true)
                    ->setOption('javascript-delay',5000)
                    ->setOption('enable-smart-shrinking', true)
                    ->setOption('no-stop-slow-scripts', true)
                    
                    ->setWarnings(true);
        return $pdf->stream();

        

        // return view( 'reports.pdf');
    }
}
