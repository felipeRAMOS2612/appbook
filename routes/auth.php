<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:teacher')->group(function () {
    Route::get('login-teacher', [AuthenticatedSessionController::class, 'create_teacher'])
        ->name('login.teacher');

    Route::post('login-teacher', [AuthenticatedSessionController::class, 'store_teacher'])->name('login.teacher');


    Route::post('registro-profesor', [TeacherController::class, 'store_teacher']);

    Route::post('registro-profesor', [TeacherController::class, 'store_teacher']);

    Route::get('login-student', [AuthenticatedSessionController::class, 'create_student'])
        ->name('login.student');

    Route::post('login-student', [AuthenticatedSessionController::class, 'store_student'])->name('login.student');
});

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

