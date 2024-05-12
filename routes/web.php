<?php

use App\Models\Batch;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Auth\DashboardController;

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


//show teacher record
Route::get('show-teacher',[TeacherController::class,'show'])->name('show.teacher');


//Update teacher record
Route::get('teacher/update/{teacher:slug}',[TeacherController::class,'view'])->name('teacher.update');
Route::patch('/update/teacher/{teacher:slug}/now', [TeacherController::class, 'update_teacher'])->name('update.teacher.now');

//course page

Route::get('create-course',[CourseController::class,'index'])->name('add.course');
Route::post('create-course',[CourseController::class,'store'])->name('create.course');

//show course record
Route::get('show-course',[CourseController::class,'show'])->name('show.course');


//Update course record
Route::get('course/update/{course:slug}',[CourseController::class,'view'])->name('course.update');
Route::patch('/update/course/{course:slug}/now', [CourseController::class, 'update_course'])->name('update.course.now');




//Batch page

Route::get('create-batch',[BatchController::class,'index'])->name('add.batch');
Route::post('create-batch',[BatchController::class,'store'])->name('create.batch');

//show Batch record
Route::get('show-batch',[BatchController::class,'show'])->name('show.batch');


//Update Batch record
Route::get('batch/update/{batch:slug}',[BatchController::class,'view'])->name('batch.update');
Route::patch('/update/batch/{batch:slug}/now', [BatchController::class, 'update_batch'])->name('update.batch.now');