<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImportDataController extends Controller
{
    public function index()
    {
        return view('pages.admin.import-data.index');
    }


    public function store(Request $request)
    {
        dd('tes');
    }
}
