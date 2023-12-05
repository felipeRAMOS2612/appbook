<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Models\CourseStudent;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        $courses = Course::all();
        return view('admin.student.list', compact('students', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Student::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $courses = Course::all();
        return view('admin.student.edit', compact('student', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, Student $student)
    {
        $data = $request->validated();

        $student->update($data);
    
        // Verificar si ya existe una relación para este estudiante en CourseStudent
        $existingRelation = CourseStudent::where('student_id', $student->id)->first();
    
        if ($existingRelation) {
            // Si ya existe, actualiza el curso existente
            $existingRelation->update(['course_id' => $data['course_id']]);
        } else {
            // Si no existe, crea una nueva relación
            CourseStudent::create([
                "student_id" => $student->id,
                "course_id" => $data['course_id']
            ]);
        }
    
        return redirect()->route('student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
