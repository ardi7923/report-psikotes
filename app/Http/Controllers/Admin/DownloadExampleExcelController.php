<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadExampleExcelController extends Controller
{
    public function download()
    {
        $file= storage_path(). "/example-data-import.csv";

        $headers = array(
                  'Content-Type: application/pdf',
                );
    
        return response()->download($file, 'example-data-import.csv', $headers);
    }
}
