<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\EkstrakurikulerController;

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
	return view('home');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'autentikasi']);

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/students', [StudentController::class, 'index'])->middleware('auth');

Route::get('/student/{id}', [StudentController::class, 'show'])->middleware(['auth', 'admin-or-teacher']);

Route::get('/student-add', [StudentController::class, 'create'])->middleware(['auth', 'admin-or-teacher']);

Route::post('/student', [StudentController::class, 'store'])->middleware('auth');

Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->middleware('auth');

Route::put('/student/{id}', [StudentController::class, 'update'])->middleware('auth');

Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->middleware(['auth', 'admin']);
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])->middleware(['auth', 'admin']);





Route::get('/class', [ClassController::class, 'index'])->middleware('auth');

Route::get('/class/{id}', [ClassController::class, 'show'])->middleware('auth');

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->middleware('auth');
Route::get('/ekstrakurikuler-detail/{id}', [EkstrakurikulerController::class, 'show'])->middleware('auth');
Route::get('teacher', [TeacherController::class, 'index'])->middleware('auth');
Route::get('teacher-detail/{id}', [TeacherController::class, 'show'])->middleware('auth');

Route::get('/student-deleted', [StudentController::class, 'deletedStudent'])->middleware(['auth', 'admin']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware(['auth', 'admin']);