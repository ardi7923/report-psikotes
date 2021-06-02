<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;

class ImportDataController extends Controller
{
    public function index()
    {
        return view('pages.admin.import-data.index');
    }


    public function store(Request $request)
    {
        $request->validate([
            'file_import' => 'required|mimes:xls,xlsx,csv,txt'
        ]);

        $file  = file($request->file_import->getRealPath());
        $data  = array_slice($file,1);
        $parts = (array_chunk($data,500));

        foreach($parts as $i => $part){
            $fileName = storage_path('pending-files/'.date('y-m-d-H-i-s').$i.'.csv');

            file_put_contents($fileName,$part);
        }

        (new Result())->importToDb();


        return redirect('import-data')->with('status', 'Data Telah Masuk Dalam Antrian');
    }
}
