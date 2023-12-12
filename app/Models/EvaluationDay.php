<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationDay extends Model
{
    protected $fillable = ['schedule_id', 'evaluation'];
    use HasFactory;
}
