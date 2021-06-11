<?php

namespace App\Http\Requests;

use Validator;
use Illuminate\Validation\Rule;

class ResultRequest
{
    public static function validation($request, $method, $id_old = "")
    {
        if($method == 'store'){
            $no_tes = ['required','unique:results,no_tes'];
        }else{
            $no_tes = ['required', Rule::unique('results')->ignore($id_old, 'no_tes')];
        }

        $validator = Validator::make($request->all(), [

            'no_tes'                       => $no_tes,
            'nama'                         => ['required'],
            'jenis_kelamin'       => ['required'],
            'umur'                => ['required'],
            'tanggal_lahir'       => ['required'],
            'tanggal_tes'         => ['required'],
            'sekolah'             => ['required','exists:schools,name'],
            'iq'                  => ['required'],

            'k_umum'              => ['required'],
            'k_sosial'            => ['required'],
            'k_verbal'            => ['required'],
            'k_berhitung'         => ['required'],
            'k_analisis'          => ['required'],
            'k_spasial'           => ['required'],
            'persepsi_bentuk'     => ['required'],
            'k_penalaran'         => ['required'],
            'konsentrasi'         => ['required'],
            'daya_ingat'          => ['required'],
            'k_memahami_masalah'  => ['required'],

            'conventional'        => ['required'],
            'enterprise'          => ['required'],
            'social'              => ['required'],
            'artistic'            => ['required'],
            'investigative'       => ['required'],
            'realistic'           => ['required'],
            'tertinggi'           => ['required'],
            'kedua'               => ['required'],
            'ketiga'              => ['required'],
            'kecenderungan'       => ['required'],
            'orientasisatupersen' => ['required'],
            'orientasiduapersen'  => ['required'],
            'orientasitigapersen' => ['required'],

            'rekom1'              => ['required'],
            'rekom2'              => ['required'],





        ]);

        return $validator;
    }
}
