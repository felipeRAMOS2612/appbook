<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    protected $fillable = ['course_id', 'student_id'];
    use HasFactory;

    public function course(){
        return $this->hasMany(Course::class);
    }

    public function students(){
        return $this->hasMany(Student::class);
    }
}
