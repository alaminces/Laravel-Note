<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// login routes
Route::get('/login',[LoginController::class,'login_page'])->name('login.page');
Route::post('/login',[LoginController::class,'login'])->name('login');

// registration routes
Route::get('/register',[RegistrationController::class,'register_page'])->name('register.page');
Route::post('/register',[RegistrationController::class,'register'])->name('register');

// dashboard & logout routes
Route::middleware('auth')->group(function() {
  Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
  Route::post('/logout',[LogoutController::class,'logout'])->name('logout');
});