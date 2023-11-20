<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'rut',
        'password',
        'emergency_phone',
    ];
    use HasFactory;
}
