<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TrainerSeeder::class,
            CompaniesSeeder::class,
            Categories::class,
            User::class,
            Permission::class,
            group_has_permission::class,
            user_has_permission::class,
            user_has_group::class,
            Group::class,
            seedCompany_has_category::class
        ]);
    }
}
