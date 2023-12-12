<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ['start_time', 'end_time', 'subject_id', 'teacher_id', 'course_id'];
    use HasFactory;
}
