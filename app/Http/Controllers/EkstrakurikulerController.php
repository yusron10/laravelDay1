<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;

class EkstrakurikulerController extends Controller
{
    public function index() {
    	$ekskul = Ekstrakurikuler::get();
    	return view('ekstrakurikuler', ['ekskul' => $ekskul ]);
    }

    public function show($id)
    {
    	$ekskul = Ekstrakurikuler::with('students')->findOrfail($id);
    	return view('ekstrakurikuler-detail', ['ekskulView' => $ekskul]);
    }
}
