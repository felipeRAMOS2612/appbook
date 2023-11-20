<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'students_id',
        'subjects_id',
        'grade',
    ];    
    use HasFactory;
}
