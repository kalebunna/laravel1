<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extraculiculer extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->belongsToMany(Student::class, 'student_extraculicular', 'extraculicular_id', 'student_id');
    }
}
