<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectStudent extends Model
{
    protected $fillable = [
        'subjects_id',
        'students_id',
    ];
    use HasFactory;
}
