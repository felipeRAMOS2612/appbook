<?php

use App\Models\CourseStudent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseStudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MyGradeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectTeacherController;
use App\Http\Controllers\TeacherController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('courses', CourseController::class);
});

Route::middleware([
    'can:student.create', 
    'can:student.edit', 
    'can:student.store', 
    'can:student.update', 
    'can:student.destroy'])->group(function () {
        Route::resource('student', StudentController::class)->except('index');
});

Route::middleware([
    'can:student.index',
])->group(function(){
    Route::get('student', [StudentController::class, 'index'])->name('student');
});

Route::middleware([
    'can:teacher.create', 
    'can:teacher.edit', 
    'can:teacher.store', 
    'can:teacher.update', 
    'can:teacher.destroy'])->group(function () {
        Route::resource('teacher', TeacherController::class);
});

Route::middleware([
    'can:grade.index'
])->group(function () {
    Route::get('my-grade/{subject}', [MyGradeController::class, 'show']);
    Route::get('select-subject', [MyGradeController::class, 'index']);
    });

Route::resource('subject-teacher', SubjectTeacherController::class);

Route::resource('subject', SubjectController::class);

Route::resource('grade', GradeController::class);


Route::resource('course-student', CourseStudentController::class);

require __DIR__.'/auth.php';
