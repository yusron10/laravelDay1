<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassController extends Controller
{
    public function index() {
    	$class = Classroom::all();
    	return view('classroom', ['classlist' => $class]);
    }
}
