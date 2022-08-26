<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'nis',
        'jenis_kelamin',
        'kelas_id',
    ];

    /**
     * Get the user that owns the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Kelas()
    {
        return $this->belongsTo(Kelas::class);
    }


    public function extraculiler()
    {
        return $this->belongsToMany(extraculiculer::class, 'student_extraculicular', 'student_id', 'extraculicular_id');
    }
}
