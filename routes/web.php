<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\TeacherController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Signup 
Route::get('signup',[SignupController::class,'index'])->name('signup');
Route::post('signup',[SignupController::class,'store']);

//Login
Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'store']);

//dashboard access
Route::middleware(['auth'])->group(function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
});

// Student Page
Route::get('create-student',[StudentController::class,'index'])->name('add.student');
Route::post('create-student',[StudentController::class,'store'])->name('create.student');


//show student record
Route::get('show-student',[StudentController::class,'show'])->name('show.student');

//Update Student record
Route::get('student/update/{student:slug}',[StudentController::class,'view'])->name('student.update');
Route::patch('/update/student/{Student:slug}/now', [StudentController::class, 'update_student'])->name('update.student.now');

//Teacher page

Route::get('create-teacher',[TeacherController::class,'index'])->name('add.teacher');
Route::post('create-student',[TeacherController::class,'store'])->name('create.teacher');


//show student record
Route::get('show-teacher',[TeacherController::class,'show'])->name('show.teacher');


//Update Student record
Route::get('teacher/update/{teacher:slug}',[TeacherController::class,'view'])->name('teacher.update');
Route::patch('/update/teacher/{teacher:slug}/now', [TeacherController::class, 'update_teacher'])->name('update.teacher.now');