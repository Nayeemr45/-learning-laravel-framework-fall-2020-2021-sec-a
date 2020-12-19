<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\employeeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;

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

Route::get('/',  function () {
    return view('login.index');
});

/*
|--------------------------------------------------------------------------
| login Routes
|--------------------------------------------------------------------------
*/
Route::get('/login',  [loginController::class,'index']);
Route::post('/login', [loginController::class,'verify']);
/*
|--------------------------------------------------------------------------
| logout Routes
|--------------------------------------------------------------------------
*/
Route::get('/logout', [logoutController::class,'index']);
/*
|--------------------------------------------------------------------------
| middleware for Session
|--------------------------------------------------------------------------
*/
Route::group(['middleware'=>['sess']] , function(){

/*
|--------------------------------------------------------------------------
| home Routes
|--------------------------------------------------------------------------
*/
Route::get('/home', [homeController::class,'index'])->name('home.index');
Route::get('/employee', [employeeController::class,'index'])->name('employee.index');

/*
|--------------------------------------------------------------------------
| home Routes for userlist
|--------------------------------------------------------------------------
*/
Route::get('/userlist', [homeController::class,'userlist']);
Route::get('/details/{id}', [homeController::class,'show']);

Route::get('/productlist', [employeeController::class,'productlist']);

/*
|--------------------------------------------------------------------------
| middleware for user type
|--------------------------------------------------------------------------
*/
Route::group(['middleware'=>['usertype']] , function(){

/*
|--------------------------------------------------------------------------
| home Routes for create
|--------------------------------------------------------------------------
*/
Route::get('/create', [homeController::class,'create']);
Route::post('/create', [homeController::class,'store']);
/*
|--------------------------------------------------------------------------
| home Routes for edit
|--------------------------------------------------------------------------
*/
Route::get('/edit/{id}', [homeController::class,'edit']);
Route::post('/edit/{id}', [homeController::class,'update']);
/*
|--------------------------------------------------------------------------
| home Routes for delete
|--------------------------------------------------------------------------
*/
Route::get('/delete/{id}', [homeController::class,'delete'])->middleware('usertype');
Route::post('/delete/{id}', [homeController::class,'destroy'])->middleware('usertype');



});
Route::get('/create', [employeeController::class,'create']);
Route::post('/create', [employeeController::class,'store']);

Route::get('/edit/{id}', [employeeController::class,'edit']);
Route::post('/edit/{id}', [employeeController::class,'update']);

Route::get('/delete/{id}', [employeeController::class,'delete']);
Route::post('/delete/{id}', [employeeController::class,'destroy']);



});

