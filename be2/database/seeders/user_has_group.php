<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class user_has_group extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++){
            DB::table('user_has_group')->insert([          
            'user_id' => '1',
            'group_id' => '1',
            ]);
        }
    }
}
