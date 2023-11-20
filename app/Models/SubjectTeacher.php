<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectTeacher extends Model
{
    protected $fillable = [
        'subjects_id',
        'teachers_id',
    ];
    use HasFactory;
}
