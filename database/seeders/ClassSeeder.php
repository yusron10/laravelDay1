<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classroom;

use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Schema::disableForeignKeyConstraints();
    	Classroom::truncate();
    	Schema::enableForeignKeyConstraints();

    	$data = [

    		['name' => 'Biologi'],
    		['name' => 'Seni'],
    		['name' => 'Kimia'],
    	];

    	foreach($data as $d){

        Classroom::insert([
        	'name' => $d['name']
        ]);

        }
    }
}
