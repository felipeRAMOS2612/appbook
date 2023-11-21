<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
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
