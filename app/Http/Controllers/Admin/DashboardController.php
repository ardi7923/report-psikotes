<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Result;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $schools = School::count();
            $students = Result::count();
            $userSchools = User::isSchool()->count();
            $student_schools = School::with("results")->get();
            $last_import = Result::limit(10)->orderBy('created_at')->get();

            return view('pages.admin.dashboard.index', compact('schools', 'students', 'userSchools', 'last_import','student_schools'));

        }else if(Auth::user()->role == 'school'){

            $students = Result::where('sekolah',Auth::user()->school->name)->count();
            $last_import = Result::where('sekolah',Auth::user()->school->name)->limit(10)->orderBy('created_at')->get();

            return view('pages.admin.dashboard.index-school',compact('students','last_import'));
        }
    }
}
