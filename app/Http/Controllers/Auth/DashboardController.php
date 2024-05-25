<?php

namespace App\Http\Controllers\Auth;

use App\Models\Student;
use App\Models\Teacher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalStudents = Student::count();
        $totalTeachers = Teacher::count();
    
        return view('auth.dashboard', compact('totalStudents', 'totalTeachers'));
    }
}
