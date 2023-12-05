<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Course;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Semester;
use Illuminate\Http\Request;
use App\Models\SubjectTeacher;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class GradeController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:grade.create')->only('create', 'store');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        $students = Student::all();
        $subjects = Subject::all();
        return view('grade.list', compact('grades', 'students', 'subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $courses = Course::all();
    $students = Student::all();
    $semesters = Semester::all();
    $teacher = Teacher::where('user_id', $user->id)->first();

    // Obtén todos los IDs de subjects asociados a este profesor
    $subjectIds = SubjectTeacher::where('teacher_id', $teacher->id)->pluck('subject_id')->toArray();

    // Obtén todos los subjects cuyos IDs están en la lista obtenida
    $subjects = Subject::whereIn('id', $subjectIds)->get();

        return view('grade.create', compact('students', 'teacher', 'subjects', 'semesters', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Grade::create($data);

        return redirect()->route('grade.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        $user = Auth::user();
        $subjects = Subject::all();
        return view('grade.detail', compact('grade', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Grade $grade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        Grade::delete($grade);
        return view('grade.list');
    }
}
