<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $user = array(
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone'=>'123456789',
            'password' => Hash::make('admin123'),
            'gender'=>'male',
            'gender'=>'male',
            'address' => 'Kathmandu',
            'roleid'=>1
        );
        \DB::table('users')->insert($user);
    }
}
