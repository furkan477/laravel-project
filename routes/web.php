<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/register',[FormController::class,'register_'])->name('register_');
Route::post('/register',[FormController::class,'register'])->name('register');

Route::get('/login',[FormController::class,'login_'])->name('login_');
Route::post('/login',[FormController::class,'login'])->name('login');

Route::get('/home',[FlightController::class,'home'])->name('home');

Route::get('/flightAdd',[FlightController::class,'flightAdd_'])->name('flightAdd_');
Route::post('/flightAdd',[FlightController::class,'flightAdd'])->name('flightAdd')->middleware('auth');

Route::get('/flightUpdate',[FlightController::class,'flightUpdate_'])->name('flightUpdate_');
Route::post('/flightUpdate/{id}',[FlightController::class,'flightUpdate'])->name('flightUpdate');

Route::get('/delete/{id}',[FlightController::class,'delete'])->name('delete');