<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubjectTeacher extends Model
{
    protected $fillable = ['teacher_id', 'subject_id'];
    use HasFactory;

    public function subject(){
        return $this->hasMany(Subject::class);
    }

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
}
