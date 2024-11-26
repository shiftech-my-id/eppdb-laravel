<?php

use App\Http\Controllers\Staff\AuthController as StaffAuthController;
use App\Http\Controllers\Staff\IndexController as StaffIndexController;
use App\Http\Controllers\Student\AuthController as StudentAuthController;
use App\Http\Controllers\Student\IndexController as StudentIndexController;
use App\Http\Controllers\Web\IndexController;
use App\Http\Middleware\OnlyStaff;
use App\Http\Middleware\OnlyStudent;
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

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('staff')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('login', [StaffAuthController::class, 'login'])->name('staff.login');
        Route::post('authenticate', [StaffAuthController::class, 'authenticate'])->name('staff.authenticate');
        Route::get('logout', [StaffAuthController::class, 'logout'])->name('staff.logout');
    });

    Route::middleware(OnlyStaff::class)->group(function () {
        Route::get('', [StaffIndexController::class, 'index'])->name('staff.home');
        Route::get('profile', [StaffIndexController::class, 'profile'])->name('staff.profile');
    });
});

Route::prefix('student')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('login', [StudentAuthController::class, 'login'])->name('student.login');
        Route::post('authenticate', [StudentAuthController::class, 'authenticate'])->name('student.authenticate');
        Route::get('logout', [StudentAuthController::class, 'logout'])->name('student.logout');
    });

    Route::middleware(OnlyStudent::class)->group(function () {
        Route::get('', [StudentIndexController::class, 'index'])->name('student.home');
        Route::get('profile', [StudentIndexController::class, 'profile'])->name('student.profile');
    });
});
