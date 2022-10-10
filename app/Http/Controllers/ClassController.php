<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassController extends Controller
{
    public function index() {
    	// lazy loading
    	// $class = Classroom::all(); 
    	// cara request data ketika di butuhkan ambil data
    	// select * from table class
    	// select * from student where calss

    	// Eager Loading
    	$class = Classroom::get(); //cara request data
    	// select * from table class
    	// select * from student where class in ( kimia dll)
    	return view('classroom', ['classlist' => $class]);
    }

    public function show($id)
    {
        $class = Classroom::with(['student', 'homeroomTeacher'])->findOrFail($id);
        return view('class-view', ['classView' => $class]);
    }
}
