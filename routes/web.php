<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\ClassController;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
    	'name' => 'Kuno', 
    	'role' => 'admin',
    	'buah' => ['pisang', 'apel', 'semangka']

    ]);
});

Route::get('/students', [StudentController::class, 'index']);

Route::get('/student/{id}', [StudentController::class, 'show']);

Route::get('/student-add', [StudentController::class, 'create']);

Route::post('/student', [StudentController::class, 'store']);

Route::get('/student-edit/{id}', [StudentController::class, 'edit']);

Route::put('/student/{id}', [StudentController::class, 'update']);

Route::get('/student-delete/{id}', [StudentController::class, 'delete']);
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy']);



Route::get('/class', [ClassController::class, 'index']);

Route::get('/class/{id}', [ClassController::class, 'show']);

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index']);
Route::get('/ekstrakurikuler-detail/{id}', [EkstrakurikulerController::class, 'show']);
Route::get('teacher', [TeacherController::class, 'index']);
Route::get('teacher-detail/{id}', [TeacherController::class, 'show']);

