<?php

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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add-company', [App\Http\Controllers\CompanyController::class, 'create']);
Route::post('/add-company', [App\Http\Controllers\CompanyController::class, 'store']);
Route::get('/home/delete/{id}',[App\Http\Controllers\CompanyController::class,'destroy'])->name('company.destroy');
Route::get('/add-company/{id}',[App\Http\Controllers\CompanyController::class,'edit'])->name('company.edit');
Route::post('/home/update/{id}',[App\Http\Controllers\CompanyController::class,'update'])->name('company.update');
