<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\GorevController;
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


Route::get('/home',[GorevController::class,'home'])->name('home')->middleware('auth');

Route::get('/update', [GorevController::class,'update'])->name('update');
Route::post('/edit/{id}',[GorevController::class,'edit'])->name('edit');

Route::get('/add', [GorevController::class,'add'])->name('add');
Route::post('/add',[GorevController::class,'join'])->name('join');

Route::get('/register',[FormController::class,'register'])->name('register')->middleware('guest');
Route::post('/register',[FormController::class,'register_success'])->name('r_success');

Route::get('/login', [FormController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[FormController::class,'login_success'])->name('l_success');

Route::get('/logout',[FormController::class,'logout'])->name('logout');
Route::get('/delete/{id}',[GorevController::class,'delete'])->name('delete');
