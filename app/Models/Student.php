<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'gender', 'nis', 'class_id', 'image'];

    public function class () {
    	return $this->belongsTo(Classroom::class);
    }

    public function ekstrakurikulers() {
    	return $this->belongsToMany(Ekstrakurikuler::class, 'student_ekstrakurikuler', 'student_id', 'ekstrakurikuler_id');
    }
}
