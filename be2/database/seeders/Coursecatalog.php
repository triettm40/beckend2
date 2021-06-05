<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Coursecatalog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        public function run()
    {
        for ($i=0; $i < 10; $i++){ 
            DB::table('coursecatalog')->insert([
                
                'shoolyear' => "111"."$i", 
            ]);
        }
    }
}
