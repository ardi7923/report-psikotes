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
                ->setOption('page-width', '210')
                ->setOption('page-height', '320')
                ->setWarnings(true);
            // return view('reports.pdf',compact('data'));  

            return $pdf->stream('Hasil Ujian ' . $data->nama . '.pdf');
        } else if ($request->type == 'multiple') {

            if (!$request->limit) {

                $limit  = 100;
                $offset = 0;
                $dataCount = Result::where('sekolah', $request->school_name)->count();

                if ($dataCount > $limit) {

                    $part = round($dataCount / $limit);

                    if ($dataCount % $part) {
                        $part += 1;
                    }

                    for ($i = 0; $i < $part; $i++) {
                        if ($i == 0) {
                            $offset += 0;
                        } else if ($i == 1) {
                            $offset += $limit;
                        } else {
                            $offset += $limit;
                        }

                        $url = env('APP_URL') . '/report-result?type=multiple&school_name=' . $request->school_name . '&limit=' . $limit . '&offset=' . $offset;
                        echo  "<script>window.open('" . $url . "')</script>";
                    }
                } else {
                    $datas = Result::where('sekolah', $request->school_name)->limit($limit)->offset(0)->get();
                    $pdf = PDF::loadView('reports.multiple', compact('datas'))
                        ->setOption('enable-javascript', true)
                        ->setOption('javascript-delay', 1500)
                        ->setOption('enable-smart-shrinking', true)
                        ->setOption('no-stop-slow-scripts', true)
                        ->setOption('page-width', '210')
                        ->setOption('page-height', '320')
                        ->setWarnings(true);

                    return $pdf->download('Hasil Ujian ' . $request->school_name . '.pdf');
                }
            } else {
                $datas = Result::where('sekolah', $request->school_name)->limit($request->limit)->offset($request->offset)->get();
                $pdf = PDF::loadView('reports.multiple', compact('datas'))
                    ->setOption('enable-javascript', true)
                    ->setOption('javascript-delay', 1500)
                    ->setOption('enable-smart-shrinking', true)
                    ->setOption('no-stop-slow-scripts', true)
                    ->setOption('page-width', '210')
                    ->setOption('page-height', '320')
                    ->setWarnings(true);

                return $pdf->download('Hasil Ujian ' . $request->school_name . '.pdf');
            }
        }
    }
}
