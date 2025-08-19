<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ClassNameController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::resource('students', StudentController::class)->middleware('auth');
Route::resource('subjects', SubjectController::class)->middleware('auth');
Route::resource('staffs', StaffController::class)->middleware('auth');
Route::resource('classes', ClassNameController::class)->middleware('auth');

Route::resource('login', AuthController::class);

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'registration']);
Route::post('register', [AuthController::class, 'store_registration'])->name('register');

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');
