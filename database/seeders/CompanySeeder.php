<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<1000;$i++){
            DB::table('companies')->insert([
                'company_name' => 'a',
                'company_web' => 'aa',
                'company_address' => 'a',
                'company_code' => 'a',
                'company_phone' => 'a'
            ]);
        }
    }
}
