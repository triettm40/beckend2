<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DiaryWeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 7; $i++){
            DB::table('diary_week')->insert([
                'week' => $i + 1,
                'firstday' => "23-5-01",
                'lastday' => "23-5-01",
                'diary_id' => $i + 1,
            ]);
    }
    }
}
