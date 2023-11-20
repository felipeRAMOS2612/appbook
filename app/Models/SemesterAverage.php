<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SemesterAverage extends Model
{
    protected $fillable = [
        'semester_id',
        'averages_id',
    ];
    use HasFactory;
}
