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
                    'name' => 'Super Admin',
                    'email' => 'super@admin.com',
                    'password' => bcrypt('super123'),
                    'roleid'=>1,
                    'department' =>1,
                );
        DB::table('users')->insert($user);
    }
}
