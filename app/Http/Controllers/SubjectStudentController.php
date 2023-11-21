<?php

namespace App\Http\Controllers;

use App\Models\SubjectStudent;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $signatures = SubjectStudent::all();
        return view('mis-asignaturas', compact('signatures'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SubjectStudent $subjectStudent)
    {
        $specified_signature = SubjectStudent::all()->where($subjectStudent)->id();

        return view('', compact('specified_signature'));
    }

}
