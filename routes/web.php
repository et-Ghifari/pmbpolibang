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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/prof', [App\Http\Controllers\HomeController::class, 'prof'])->name('prof');
Route::get('/akun', [App\Http\Controllers\HomeController::class, 'akun'])->name('akun');
Route::get('/pand', [App\Http\Controllers\HomeController::class, 'pand'])->name('pand');
Route::get('/rform', [App\Http\Controllers\HomeController::class, 'rform'])->name('rform');
Route::get('/form', [App\Http\Controllers\HomeController::class, 'form'])->name('form');
Route::get('/peng', [App\Http\Controllers\HomeController::class, 'peng'])->name('peng');
