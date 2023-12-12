<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Schedule;
use Illuminate\Http\Request;
use App\Models\SubjectTeacher;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $days = Day::all();
        $schedules = Schedule::all();
        return view('schedule.list', compact('schedules', 'days'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = SubjectTeacher::with('teacher', 'subject')->get();
        $courses = Course::all();
        return view('schedule.create', compact('courses', 'teachers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Schedule::create($data);

        return redirect()->route('schedule.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
