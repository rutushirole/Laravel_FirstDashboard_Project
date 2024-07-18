<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
Route::get('/',function(){
 return view('index');
});


Route::get('/register',[CustomerController::class,'index']);
Route::post('/register',[CustomerController::class,'register']);
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::post('/customer',[CustomerController::class,'store']);
Route::get('/customer',[CustomerController::class,'view']);