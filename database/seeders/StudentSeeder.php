<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	['name' => 'Eko', 'gender' => 'Laki-Laki', 'nis' => '001239', 'class_id' => 2],
        	['name' => 'Budi', 'gender' => 'Laki-Laki', 'nis' => '001238', 'class_id' => 1],
        	['name' => 'Ayu', 'gender' => 'Perempuan', 'nis' => '001234', 'class_id' => 2],
        ];


        foreach ($data as $d) {
        	Student::insert([
        		'name' => $d['name'],
        		'gender' => $d['gender'],
        		'nis' =>$d['nis'],
        		'class_id' => $d['class_id']
        	]);
        }
    }
}
