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
                array(
                    'name' => 'Super Admin',
                    'email' => 'super@admin.com',
                    'phone'=>'123456789',
                    'password' => bcrypt('super123'),
                    'gender'=>'male',
                    'address' => 'Kathmandu',
                    'roleid'=>1
                ),
                array(
                    'name' => 'Admin',
                    'email' => 'admin@admin.com',
                    'phone'=>'123456789',
                    'password' => bcrypt('admin123'),
                    'gender'=>'male',
                    'address' => 'Kathmandu',
                    'roleid'=>2
                ),
                array(
                    'name' => 'Staff',
                    'email' => 'staff@staff.com',
                    'phone'=>'123456789',
                    'password' => bcrypt('staff123'),
                    'gender'=>'male',
                    'address' => 'Kathmandu',
                    'roleid'=>3
                ),
                array(
                    'name' => 'Customer',
                    'email' => 'customer@customer.com',
                    'phone'=>'123456789',
                    'password' => bcrypt('customer123'),
                    'gender'=>'male',
                    'address' => 'Kathmandu',
                    'roleid'=>4
                ),
                array(
                    'name' => 'Vendor',
                    'email' => 'vendor@vendor.com',
                    'phone'=>'123456789',
                    'password' => bcrypt('vendor123'),
                    'gender'=>'male',
                    'address' => 'Kathmandu',
                    'roleid'=>5
                ),
        );
        DB::table('users')->insert($user);
    }
}
