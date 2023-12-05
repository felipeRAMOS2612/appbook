<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyGradeController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        $user = Auth::user();
        return view('grade.select-subject', compact('user', 'subjects'));
    }

    public function show(Subject $subject)
    {
        $user = Auth::user();

        $grades = Grade::where('subject_id', $subject->id)
                   ->orderBy('semester_id')
                   ->get()
                   ->groupBy('semester_id');

        return view('grade.detail', compact('user', 'subject', 'grades'));
    }
}
