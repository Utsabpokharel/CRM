<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = array(
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone'=>'123456789',
            'password' => bcrypt('admin123'),
            'gender'=>'male',
            'address' => 'Kathmandu',
            'roleid'=>1
        );
        DB::table('users')->insert($user);
    }
}
