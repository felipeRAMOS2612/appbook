<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\SubjectTeacher;

class SubjectTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjectTeacher = SubjectTeacher::all();
        return view('subject.detail', compact('subjectTeacher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::all();
        $subjects = Subject::all();
        return view('admin.teacher.list', compact('tecahers', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        SubjectTeacher::create($data);
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubjectTeacher $subjectTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubjectTeacher $subjectTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubjectTeacher $subjectTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubjectTeacher $subjectTeacher)
    {
        //
    }
}
