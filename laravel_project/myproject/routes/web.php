<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;
use App\Http\Controllers\contactController;
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
    return view('website/index');
});

Route::get('about', function () {
    return view('website/about');
});

Route::get('product', function () {
    return view('website/product');
});

Route::get('service', function () {
    return view('website/service');
});

Route::get('gallery', function () {
    return view('website/gallery');
});

Route::get('/contact',[contactController::class,'create']);
Route::post('/contact',[contactController::class,'store']);

Route::get('/login',[customerController::class,'login']);
Route::post('/login_auth',[customerController::class,'login_auth']);

Route::get('/userlogout',[customerController::class,'logout']);

Route::get('/signup',[customerController::class,'create']);
Route::post('/signup',[customerController::class,'store']);

Route::get('/profile',[customerController::class,'profile']);
Route::get('/profile/{id}',[customerController::class,'edit']);

Route::post('/profile/{id}',[customerController::class,'update']);

/********************************************************************************/

Route::get('/admin-login',[adminController::class,'admin_index']);
Route::get('/alogin_auth',[adminController::class,'login_auth']);
    
Route::get('dashboard', function () {
    return view('admin/dashboard');
});

Route::get('manage_cate', function () {
    return view('admin/manage_cate');
});

Route::get('add_cate', function () {
    return view('admin/add_cate');
});

Route::get('/manage_cust',[customerController::class,'show']);
Route::get('/manage_cust/{id}',[customerController::class,'destroy']);

Route::get('manage_flav', function () {
    return view('admin/manage_flav');
});

Route::get('add_flav', function () {
    return view('admin/add_flav');
});

Route::get('manage_emp', function () {
    return view('admin/manage_emp');
});

Route::get('add_emp', function () {
    return view('admin/add_emp');
});

Route::get('manage_feed', function () {
    return view('admin/manage_feed');
});

Route::get('/manage_cont',[contactController::class,'show']);
Route::get('/manage_cont/{id}',[contactController::class,'destroy']);

Route::get('ui', function () {
    return view('admin/ui');
});

Route::get('chart', function () {
    return view('admin/chart');
});

Route::get('form', function () {
    return view('admin/form');
});

Route::get('table', function () {
    return view('admin/table');
});

Route::get('tab-panel', function () {
    return view('admin/tab-panel');
});

