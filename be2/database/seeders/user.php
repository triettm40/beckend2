<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++){
            DB::table('user')->insert([          
            'user_name' => 'Triet',
            'password' => 'ttt',
            'name' => 'triet',
            'email' => 'triet',
            'phone' => '11111111',
            'address' => 'ho chi minh',
            'student_id' => $i+1,
            ]);
        }
    }
}