<?php

namespace App\Http\Controllers\Autocomplete;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Result;

class AutocompleteStudentController extends Controller
{
    public function get(Request $request)
    {
        $cari      = $request->q;
        $pencarian = "%{$cari}%";

        $schools = Result::where('nama', 'like', $pencarian)
                            ->orWhere('no_tes','like',$pencarian)
                            ->limit(5)
                            ->offset(0)
                            ->get();
        
        foreach($schools as $s){
            $s->text ='<strong>'.$s->no_tes.' - ' . $s->nama .'<br>'.$s->sekolah.'</strong>';
        }

        return $schools;
    }
}
