<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance::all();
        return view('asistencias', compact('attendances'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendance $attendance)
    {
        $attendances = Attendance::find($attendance);
        return view('', compact('attendance'));
    }

}
