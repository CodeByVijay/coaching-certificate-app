<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/contact-us', function () {
    return view('contact');
})->name('contactUs');

Route::get('/admin',function(){
    return view('admin.dashboard');
})->name('dashboard')->middleware('auth');
//
Route::get('/login',function(){
    return view('admin.login');
})->name('login');
Route::post('login',[AuthController::class,'login'])->name('admin.login');
Route::get('logout',[AuthController::class,'logout'])->name('admin.logout');

Route::get('student-register',function(){
    return view('admin.signup');
})->name('student.register');
Route::post('student-register',[HomeController::class,'StudentRegister'])->name('student.post.register');
