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
    Route::put('user/{user}', [UserController::class, 'update'])->name('user.update');
    Route::resource('courses', CourseController::class);
    Route::resource('enroll', \App\Http\Controllers\EnrollmentController::class);
    Route::resource('feedback', \App\Http\Controllers\CourseFeedbackController::class);
    Route::resource('assignments', \App\Http\Controllers\AssignmentController::class);
    Route::resource('student-assignments', \App\Http\Controllers\StudentAssignmentController::class);
    Route::get('grades', [\App\Http\Controllers\StudentAssignmentController::class, 'create'])->name('grades');
    Route::get('progress', [CourseController::class, 'progress'])->name('progress');
    Route::post('submit-assignment', [\App\Http\Controllers\AssignmentController::class, 'submit'])->name('assignments.submit');
});
