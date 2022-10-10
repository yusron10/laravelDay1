<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'gender', 'nis', 'class_id'];

    public function class () {
    	return $this->belongsTo(Classroom::class);
    }

    public function ekstrakurikulers() {
    	return $this->belongsToMany(Ekstrakurikuler::class, 'student_ekstrakurikuler', 'student_id', 'ekstrakurikuler_id');
    }
}
