<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Excel;
use App\Exports\ExampleExcelExport;

class DownloadExampleExcelController extends Controller
{
    public function download()
    {
        return Excel::download(new ExampleExcelExport, 'example_data.csv');
    }
}
