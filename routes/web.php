<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/', [HomeController::class, 'dashboard']);

Route::get('/user', [HomeController::class, 'index'])->name('index');

Route::get('/create', [HomeController::class, 'create'])->name('create');

Route::post('/store', [HomeController::class, 'store'])->name('store');

Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [HomeController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('delete');

Route::get('/cetak-pdf/{id}', [HomeController::class, 'cetakPdf'])->name('cetak.pdf');
