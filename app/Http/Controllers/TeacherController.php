<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index() {
    	$teacher = Teacher::all();
    	return view('teacher', ['teacherlist' => $teacher]);
    }

    public function show ($id)
    {
    	$teacher = Teacher::with('class.student')->findOrFail($id);
    	return view('teacher-detail', ['teacherView' => $teacher]);
    }
}
