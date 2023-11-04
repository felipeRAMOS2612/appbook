<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Average extends Model
{
    protected $fillable = [
        'students_id',
        'subjects_id',
        'average',
    ];
    use HasFactory;
}
