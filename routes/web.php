<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\UserController;
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


Route::view('/', 'login')->name('home');
Route::post('register', [CustomAuthController::class, 'register'])->name('register');
Route::post('login', [CustomAuthController::class, 'login'])->name('login');
Route::post('logout', [CustomAuthController::class, 'logout'])->name('logout');
Route::view('/signup', 'signup')->name('signup');

Route::prefix('admin')->middleware(['auth:web'])->name('admin.')->group(function () {
    Route::view('/', 'admin.index')->name('index');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::resource('courses', CourseController::class);
    Route::resource('enroll', \App\Http\Controllers\EnrollmentController::class);
});
