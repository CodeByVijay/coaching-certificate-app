<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\ContactUsController;
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

//=================================== Front End Routes =======================//
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contactUs');
Route::post('contact-us',[ContactUsController::class,'SaveContactUs'])->name('SaveContactUs');

Route::get('student-register', function () {
    return view('admin.signup');
})->name('student.register');
Route::post('student-register', [HomeController::class, 'StudentRegister'])->name('student.post.register');

Route::post('verify-certificate',[HomeController::class,'VerifyCertificate'])->name('VerifyCertificate');
// ========================== Front End Routes End =============================//

//=========================== Admin Routes ===========================//
Route::get('login',[AuthController::class,'loginView'])->name('login');
Route::post('login-admin', [AuthController::class, 'login'])->name('admin.login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin',[AdminHomeController::class,'dashboard'])->name('dashboard');
    Route::get('/admin/new-students',[AdminHomeController::class,'NewStudents'])->name('NewStudents');
    Route::get('/admin/student-message',[AdminHomeController::class,'StudentMessage'])->name('StudentMessage');
    Route::get('/admin/student-registration',[AdminHomeController::class,'StudentRegistration'])->name('StudentRegistration');
    Route::get('/admin/all-enroll-student',[AdminHomeController::class,'AllEnrollStudent'])->name('AllEnrollStudent');
    Route::get('/admin/not-issue-certificate',[AdminHomeController::class,'NotIssueCertificate'])->name('NotIssueCertificate');
    Route::get('/admin/issued-certificate',[AdminHomeController::class,'IssuedCertificate'])->name('IssuedCertificate');


    Route::get('admin/new-student-delete/{id}',[AdminHomeController::class,'newStudentDelete'])->name('newStudentDelete');
    Route::get('admin/student-message-delete/{id}',[AdminHomeController::class,'StudentMessageDelete'])->name('StudentMessageDelete');
    Route::post('admin/student-register',[AdminHomeController::class,'StudentRegistrationPost'])->name('StudentRegistrationPost');
    Route::get('admin/student-delete/{id}',[AdminHomeController::class,'StudentDelete'])->name('StudentDelete');

    Route::get('admin/student-certificate-generate/{id}',[AdminHomeController::class,'certificateGenerate'])->name('certificateGenerate');
    Route::get('admin/viewCertificate/{id}',[AdminHomeController::class,'viewCertificate'])->name('viewCertificate');

    Route::get('admin/profile_update',[AdminHomeController::class,'profileUpdate'])->name('profileUpdate');
    Route::post('admin/profile_update',[AdminHomeController::class,'profileUpdatePost'])->name('profileUpdatePost');

    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
});

// ============================ Admin Routes End ==================================//





