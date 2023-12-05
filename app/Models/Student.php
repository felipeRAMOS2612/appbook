<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'email', 'phone', 'address', 'rut', 'password', 'user_id', 'course_id'];

    public function course(){
        return $this->hasOne(Course::class, 'course_students');
    }

    public function subject(){
        return $this->belongsToMany(Subject::class);
    }
}
