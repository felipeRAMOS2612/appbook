<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\CourseStudent;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class CourseStudentController extends Controller
{

    public function __construct(){
        $this->middleware('can:course-student.create')->only('create', 'store');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();

        foreach ($courses as $course) {
            // Obtener los estudiantes asociados a este curso
            $students = CourseStudent::where('course_id', $course->id)->get();
    
            // Añadir la colección de estudiantes al modelo de curso
            $course->students = $students;
        }
        return view('course.list', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $students = Course::whereDoesntHave('student', function ($query) {
            $query->whereExists(function ($subquery) {
                $subquery->select(DB::raw(1))
                    ->from('course_students')
                    ->whereRaw('course_students.student_id = students.id');
            });
        });


        return view('course.student', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        CourseStudent::create($data);

        return view('admin.student.list', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseStudent $courseStudent)
    {
        return view('course.detail', compact('courseStudent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseStudent $courseStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseStudent $courseStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseStudent $courseStudent)
    {
        CourseStudent::deleted($courseStudent);
    }
}
