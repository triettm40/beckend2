<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<1000;$i++){
            DB::table('trainer')->insert([
                'train_name' => 'a',
                'train_wed' => 'aa',
                'train_email' => 'aa',
                'train_phone' => '1111111'
            ]);
        }
    }
}
