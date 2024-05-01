<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignupController;
use Illuminate\Support\Facades\Route;

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
