<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++){ 
            DB::table('courses')->insert([
                'course_name' => "qh".($i+1),        
                'course_catalog_id' => rand(1,10),
                'classes_id' => $i,
                'student_id'  => $i
                
            ]);
        }
    }
}
