<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'students_id',
        'subjects_id',
        'comment',
        'date',
    ];
    
    use HasFactory;
}
