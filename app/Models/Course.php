<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function teacher(){
        return $this->hasOne(teacher::class);
    }

    public function student(){
        return $this->hasMany(Student::class);
    }
}
