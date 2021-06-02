<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;


class ResultPublicController extends Controller
{
    public function index()
    {
        return view('pages.front.result-public.index');
    }


    public function check(Request $request)
    {
        $result = Result::where('no_tes',$request->no_tes)->first();

        if(isset($result)){
             return response()->json($result, 200);
        }else{
            return response()->json('Data Tidak Ditemukan',404);
        }
    }
}
