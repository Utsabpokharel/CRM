<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            userSeeder::class,
            roleSeeder::class,
            districtSeeder::class,
            CitySeeder::class,
            DepartmentSeeder::class,
            LevelSeeder::class,
            TitleSeeder::class,
            BankAccountSeeder::class,
            StaffSeeder::class,
        ]);
    }
}
