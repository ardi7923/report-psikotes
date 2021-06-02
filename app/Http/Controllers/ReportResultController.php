<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ReportResultController extends Controller
{
    public function index(Request $request)
    {
      $chart =  " {
            type: 'bar',                                // Show a bar chart
            data: {
              labels: [2012, 2013, 2014, 2015, 2016],   // Set X-axis labels
              datasets: [{
                label: 'Users',                         // Create the 'Users' dataset
                data: [120, 60, 50, 180, 120]           // Add data to the chart
              }]
            }
          }";

        // $pdf = PDF::loadView('reports.pdf',compact('chart'))

        // ->setPaper([0,0,609.449,1105.433], 'potrait')->setWarnings(true);

        // return $pdf->stream();

        // $pdf = PDF::loadView('reports.pdf',compact('chart'))
        //             ->setOption('enable-javascript',true)
        //             ->setOption('javascript-delay',5000)
        //             ->setOption('enable-smart-shrinking', true)
        //             ->setOption('no-stop-slow-scripts', true)
                    
        //             ->setWarnings(true);
        // return $pdf->stream();

        

        return view('reports.pdf');
    }
}
