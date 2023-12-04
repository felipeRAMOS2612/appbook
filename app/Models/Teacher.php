<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'last_name', 'email', 'phone', 'address', 'rut', 'password', 'user_id'];
    
    use HasFactory;

    public function subject()
    {
        return $this->belongsToMany(Subject::class, 'subject_teachers');
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
