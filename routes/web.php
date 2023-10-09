<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/register',[RegisterController::class,'register_'])->name('register_')->middleware('guest');
Route::post('/register',[RegisterController::class,'register'])->name('register')->middleware('guest');

Route::get('/login',[LoginController::class,'login_'])->name('login_')->middleware('guest');
Route::post('/login',[LoginController::class,'login'])->name('login')->middleware('guest');

Route::get('/logout',[LoginController::class,'logout'])->name('logout')->middleware('auth');

Route::get('/home',[TaskController::class,'home'])->name('home')->middleware('auth');

Route::get('/taskAdd',[TaskController::class,'taskAdd_'])->name('taskAdd_')->middleware('auth');
Route::post('/taskAdd',[TaskController::class,'taskAdd'])->name('taskAdd');

Route::get('/taskUpdate',[TaskController::class,'taskUpdate_'])->name('taskUpdate_')->middleware('auth');
Route::post('/taskUpdate/{id}',[TaskController::class,'taskUpdate'])->name('taskUpdate')->middleware('auth');

Route::get('/delete/{id}',[TaskController::class,'delete'])->name('delete')->middleware('auth');
