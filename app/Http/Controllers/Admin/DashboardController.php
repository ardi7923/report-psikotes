<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Result;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $schools = School::count();
        $students = Result::count();
        $userSchools = User::isSchool()->count();

        $last_import = Result::limit(10)->orderBy('created_at')->get();

        return view('pages.admin.dashboard.index',compact('schools','students','userSchools','last_import'));
    }
}
