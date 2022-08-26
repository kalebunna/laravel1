<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelass';
    use HasFactory;

    /**
     * Get all of the Student for the Kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Student()
    {
        return $this->hasMany(Student::class);
    }

    public function kelasTeacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
