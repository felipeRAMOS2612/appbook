<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\SubjectTeacher;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class GradeController extends Controller
{

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
        $students = Student::all();
        $teacher = Teacher::where('user_id', $user->id)->first();
        $subjects = SubjectTeacher::where('teacher_id', $teacher->id)->pluck('teacher_id')->first();


        return view('grade.create', compact('students', 'teacher', 'subjects'));
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
        $subjects = Subject::all();
        return view('grade.detail', compact('grade'));
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
