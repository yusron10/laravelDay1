<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;

    protected $table = 'class';

    public function student() {
    	return $this->hasMany(Student::class, 'class_id', 'id');
    }

    public function homeroomTeacher() {
    	return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
