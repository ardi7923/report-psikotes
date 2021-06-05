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

            if(!$request->limit){

                $dataCount = Result::where('sekolah',$request->school_name)->count();
                
                if($dataCount > 100){

                    $part = round($dataCount / 100);
                    $offset = 0; 
                    for($i=0; $i < $part; $i++){
                        $offset += 100;
                        $url = env('APP_URL').'/report-result?type=multiple&school_name='.$request->school_name.'&limit=100&offset='.$offset;
                        echo  "<script>window.open('". $url ."')</script>";
                    }
                }

            }else{
                $datas = Result::where('sekolah',$request->school_name)->limit($request->limit)->offset($request->offset)->get();
                $pdf = PDF::loadView('reports.multiple', compact('datas'))
                ->setOption('enable-javascript', true)
                ->setOption('javascript-delay', 1500)
                ->setOption('enable-smart-shrinking', true)
                ->setOption('no-stop-slow-scripts', true)
                ->setWarnings(true);

                return $pdf->download('Hasil Ujian '.$request->school_name.'.pdf');
            }   

            
        }
    }
}
