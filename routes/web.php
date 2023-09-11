<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/register',[FormController::class,'register_'])->name('register_');
Route::post('/register',[FormController::class,'register'])->name('register');

Route::get('/login',[FormController::class,'login_'])->name('login_');
Route::post('/login',[FormController::class,'login'])->name('login');

Route::get('/home',[TaskController::class,'home'])->name('home');

Route::get('/taskAdd',[TaskController::class,'taskAdd_'])->name('taskAdd_');
Route::post('/taskAdd',[TaskController::class,'taskAdd'])->name('taskAdd')->middleware('auth');

Route::get('/taskUpdate',[TaskController::class,'taskUpdate_'])->name('taskUpdate_');
Route::post('/taskUpdate/{id}',[TaskController::class,'taskUpdate'])->name('taskUpdate');

Route::get('/delete/{id}',[TaskController::class,'delete'])->name('delete');