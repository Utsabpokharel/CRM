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
                    'phone'=>'123456789',
                    'password' => bcrypt('super123'),
                    'gender'=>'male',
                    'date_of_birth' =>'01/01/2001',
                    'roleid'=>1,
                    'mobileno'=>'9988776655',
                    'panno' =>'100200300400500',
                    'permanent_address' => 'NEPAL',
                    'temporary_address' => 'RAAJDHANI',
                    'district' => 'KTM',
                    'city' => 'KTMMMM',
                    'title' => 1,
                    'department' =>1,
                    'level' => 1,
                    'joined_date'=>'01/10/2020',
                );
        DB::table('users')->insert($user);
    }
}
