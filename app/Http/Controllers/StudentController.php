<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Models\Classroom;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
	public function index() 
	{
    	$student = Student::get();
    	return view('student', ['studentlist' => $student ]);

        // $n = [9,8,7,6,5,10,13,16];



        // $aa = collect($n)->filter(function ($value) {
        //     return $value > 7;
        // })->all();

        // dd($aa);

        // $biod = [
        //     ['name' => 'Budi', 'umur' => 18],
        //     ['name' => 'Eko', 'umur'=> 12],
        // ];

        // $aa = collect($biod)->pluck('name')->all();
        // dd($aa);

        // contains = cek apakah sebuah array memiliki sesuatu

        // $aa = collect($n)->contains(function ($value){
        //     return $value < 6;
        // });

        // dd($aa);

        // $restoran = ["burger", "Siomay", "pizza"];
        // $warteg = ["Nasgor", "Pecel", "Soto"];

        // $menu = collect($restoran)->diff($warteg);

        // dd($menu);


        // php biasa
        // 1. hitung jumlah nilai
        // 2. hitung berapa banyak nilai 
        // 3. baru bisa hitung nilai rata"
        // $cn = count($n);
        // $tn = array_sum($n);
        // $hn = $tn / $cn;
        // collection
        // 1. langsung hitung rata"
	}


    public function show($id) //Detail
    {
        $student = Student::with(['class.homeroomTeacher', 'ekstrakurikulers'])->findOrFail($id);
        return view('student-view', ['studentView' => $student]);
    }

    public function create()
    {
        $class = Classroom::select('id', 'name')->get();
        return view('student-add', ['class' => $class]);
    }

    public function store(StudentCreateRequest $request)
    {
        // $student = new Student;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

        $student = Student::create($request->all());

        if($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new student berhasil');

        }

        return redirect('/students');
    }


    public function edit( Request $request , $id)
    {
        $student = Student::with('class')->findOrFail($id);
        $class = Classroom::where('id', '!=', $student->class_id)->get(['id', 'name']);

        return view('student-edit', ['studentEdit' => $student, 'classEdit' => $class]);
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

        $student->update($request->all());
        return redirect('/students');
    }


    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('student-delete', ['studentDelete' => $student]);
    }

    public function destroy($id)
    {
        $deleteStudent = Student::findOrFail($id);
        $deleteStudent->delete();

        if($deleteStudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'Delete data Berhasil');

        }

        return redirect('/students');


    }
}

