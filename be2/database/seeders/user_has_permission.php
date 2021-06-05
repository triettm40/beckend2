<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class user_has_permission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++){
            DB::table('user_has_permission')->insert([          
            'user_id' => '1',
            'permission_id' => '1',
            ]);
        }
    }
}
