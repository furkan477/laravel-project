<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/register',[FormController::class,'register_'])->name('register_')->middleware('guest');
Route::post('/register',[FormController::class,'register'])->name('register')->middleware('guest');

Route::get('/login',[FormController::class,'login_'])->name('login_')->middleware('guest');
Route::post('/login',[FormController::class,'login'])->name('login')->middleware('guest');

Route::get('/logout',[FormController::class,'logout'])->name('logout')->middleware('auth');

Route::get('/home',[TaskController::class,'home'])->name('home')->middleware('auth');

Route::get('/taskAdd',[TaskController::class,'taskAdd_'])->name('taskAdd_')->middleware('auth');
Route::post('/taskAdd',[TaskController::class,'taskAdd'])->name('taskAdd');

Route::get('/taskUpdate',[TaskController::class,'taskUpdate_'])->name('taskUpdate_')->middleware('auth');
Route::post('/taskUpdate/{id}',[TaskController::class,'taskUpdate'])->name('taskUpdate')->middleware('auth');

Route::get('/delete/{id}',[TaskController::class,'delete'])->name('delete')->middleware('auth');
