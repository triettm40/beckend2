<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Semester extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10;$i++){ 
            DB::table('Semester')->insert([
                'semester_name' => "2019", 
                
            ]);
        }
    }
}