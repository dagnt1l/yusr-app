<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'homeView'])->name('/');

Route::get('register', [PageController::class, 'registerView'])->name('register.view')->middleware('guest');
Route::get('login', [PageController::class, 'loginView'])->name('login.view')->middleware('guest');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('check/{contractSerial}', [PageController::class, 'checkView'])->name('check');


Route::post('register', [AuthController::class, 'register'])->name('register.submit');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');

// Route::resource();