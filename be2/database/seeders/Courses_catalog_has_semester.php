<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Courses_catalog_has_semester extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++){ 
            DB::table('courses_catalog_has_semester')->insert([
                
                'coursecaralog_id'  => rand(1,2),
                'semester_id'  => rand(1,10),
            ]);
        }
    }
}
