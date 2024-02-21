<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\patientController;
use App\Http\Controllers\adminController;

use App\Http\Controllers\forgotpasswordController;

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
});
  
  

Route::get('/index', function () {
    return view('website/index');
});

Route::get('/about', function () {
    return view('website/about');
});


Route::get('/contact', function () {
    return view('website/contact');
});

//Route::get('/contact',[contactController::class,'create']);
//Route::post('/contact',[contactController::class,'store']);
    

Route::get('/doctor', function () {
    return view('website/doctor');
});

Route::get('/testimonial', function () {
    return view('website/testimonial');
});

Route::get('/treatment', function () {
    return view('website/treatment');
});
Route::get('/signup', [patientController::class,'create']);
    
Route::post('/signup',[patientController::class,'store']);

Route::get('/login',[patientController::class,'login']);
Route::post('/login_auth',[patientController::class,'login_auth']);

Route::get('/userlogout',[patientController::class,'logout']);

Route::get('/profile',[patientController::class,'profile']);
Route::get('/profile/{id}',[patientController::class,'edit']);

Route::post('/profile/{id}',[patientController::class,'update']);



Route::get('forgot',[forgotpasswordController::class,'index']);
Route::post('/forgot_pass',[forgotpasswordController::class,'forgot_pass']);
Route::post('/otp_match',[forgotpasswordController::class,'otp_match']);
Route::post('/reset_pass',[forgotpasswordController::class,'reset_pass']);


Route::get('otp_match', function () {
 return view('website/otp_match');
});
Route::get('reset', function () {
 return view('website/reset');
});
    
/*======================================================================================================*/



Route::get('/admin_index',[adminController::class,'admin_index']);
Route::post('/alogin_auth',[adminController::class,'login_auth']);

Route::get('/logout',[adminController::class,'logout']);
    

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/form', function () {
    return view('admin/form');
});

Route::get('/manage_pat',[patientController::class,'show']);
    

Route::get('/manage_doct', function () {
    return view('admin/manage_doct');
});

Route::get('/ui', function () {
    return view('admin/ui');
});

