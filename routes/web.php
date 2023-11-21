<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectStudentController;
use App\Http\Controllers\TeacherController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('/teacher', TeacherController::class)->except('index', 'edit', 'update');

Route::get('/create-student', [StudentController::class, 'create'])->name('student.create');

Route::post('/create-student', [StudentController::class, 'store'])->name('student.store');

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('/dashboard')->name('teacher')->group(function () {
        Route::get('', function(){
            return view('dashboard');
        })->name('dashboard');

        Route::resource('/notas', GradeController::class);
    });

    Route::resource('/mis-notas', GradeController::class);
    Route::resource('mis-asignaturas', SubjectStudentController::class);

    Route::resource('asistencias', AttendanceController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
