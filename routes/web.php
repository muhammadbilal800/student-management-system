<?php

use App\Models\Batch;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EnrollmentController;
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

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//Signup 
Route::get('signup',[SignupController::class,'index'])->name('signup');
Route::post('signup',[SignupController::class,'store'])->middleware('guest');

//Login
Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'store'])->middleware('guest');

//dashboard access
Route::middleware(['auth'])->group(function(){
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    // Student Page
Route::get('create-student',[StudentController::class,'index'])->name('add.student');
Route::post('create-student',[StudentController::class,'store'])->name('create.student');



//Update Student record
Route::get('student/update/{student:slug}',[StudentController::class,'view'])->name('student.update');
Route::patch('/update/student/{Student:slug}/now', [StudentController::class, 'update_student'])->name('update.student.now');


//Teacher page

Route::get('create-teacher',[TeacherController::class,'index'])->name('add.teacher');
Route::post('create-teacher',[TeacherController::class,'store'])->name('create.teacher');





//Update teacher record
Route::get('teacher/update/{teacher:slug}',[TeacherController::class,'view'])->name('teacher.update');
Route::patch('/update/teacher/{teacher:slug}/now', [TeacherController::class, 'update_teacher'])->name('update.teacher.now');

//course page

Route::get('create-course',[CourseController::class,'index'])->name('add.course');
Route::post('create-course',[CourseController::class,'store'])->name('create.course');




//Update course record
Route::get('course/update/{course:slug}',[CourseController::class,'view'])->name('course.update');
Route::patch('/update/course/{course:slug}/now', [CourseController::class, 'update_course'])->name('update.course.now');

//Batch page

Route::get('create-batch',[BatchController::class,'index'])->name('add.batch');
Route::post('create-batch',[BatchController::class,'store'])->name('create.batch');




//Update Batch record
Route::get('batch/update/{batch:slug}',[BatchController::class,'view'])->name('batch.update');
Route::patch('/update/batch/{batch:slug}/now', [BatchController::class, 'update_batch'])->name('update.batch.now');

//Enrollment page

Route::get('create-enroll',[EnrollmentController::class,'index'])->name('add.enroll');
Route::post('create-enroll',[EnrollmentController::class,'store'])->name('create.enroll');




//Update Enroll record
Route::get('enroll/update/{enrollment:slug}',[EnrollmentController::class,'view'])->name('enroll.update');
Route::patch('/update/enroll/{enrollment:slug}/now', [EnrollmentController::class, 'update_enroll'])->name('update.enroll.now');

//Payment page

Route::get('create-payment',[PaymentController::class,'index'])->name('add.payment');
Route::post('create-payment',[PaymentController::class,'store'])->name('create.payment');




//Update Payment record
Route::get('payment/update/{payment:slug}',[PaymentController::class,'view'])->name('payment.update');
Route::patch('/update/payment/{payment:slug}/now', [PaymentController::class, 'update_payment'])->name('update.payment.now');

});

//show student record
Route::get('show-student',[StudentController::class,'show'])->name('show.student');



//show teacher record
Route::get('show-teacher',[TeacherController::class,'show'])->name('show.teacher');

//show course record
Route::get('show-course',[CourseController::class,'show'])->name('show.course');

//show Batch record
Route::get('show-batch',[BatchController::class,'show'])->name('show.batch');

//show Enroll record
Route::get('show-enroll',[EnrollmentController::class,'show'])->name('show.enroll');

//show Payment record
Route::get('show-payment',[PaymentController::class,'show'])->name('show.payment');

// delete studenet record
Route::delete('/student/{student:slug}/delete',[StudentController::class,'destroy'])->name('student.delete');




//delete teacher record

Route::delete('/teacher/{teacher:slug}/delete',[TeacherController::class,'destroy'])->name('teacher.delete');



//delete Course record

Route::delete('/course/{course:slug}/delete',[CourseController::class,'destroy'])->name('course.delete');




//delete Batch record

Route::delete('/batch/{batch:slug}/delete',[BatchController::class,'destroy'])->name('batch.delete');



//delete enroll record

Route::delete('/enroll/{enrollment:slug}/delete',[EnrollmentController::class,'destroy'])->name('enroll.delete');




//delete payment record

Route::delete('/payment/{payment:slug}/delete',[PaymentController::class,'destroy'])->name('payment.delete');

// logout method

Route::delete('/logout',[LogoutController::class,'destroy'])->name('logout')->middleware('auth');