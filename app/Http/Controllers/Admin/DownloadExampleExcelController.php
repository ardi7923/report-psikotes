<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DownloadExampleExcelController extends Controller
{
    public function download()
    {
        $file= public_path(). "/example-data-import.xls";

        $headers = array(
                  'Content-Type: application/pdf',
                );
    
        return response()->download($file, 'example-data-import.xls', $headers);
    }
}
