<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = array(
            'fname' => 'Super',
            'lname' => 'Admin',
            'gender' => 'male',
            'email' => 'super@admin.com',
            'department_id' =>1,
            'dob' => '1900-01-01',
            'pp_photo' => 'no image',
            'permanent_address' => 'Permanent',
            'temporary_address' => 'Temporary',
            'city' => 'Kathmandu',
            'district' => 'Kathmandu',
            'phoneno' => '1234567890',
            'mobileno' => '0987654321',
            'title_id' => 1,
            'level_id' => 1,
            'panno' => '11223344556677889900',
            'joined_date' => '2001-01-01',
            'ifuser' =>1,
            'ctzn_front' => 'Not Inserted',
            'ctzn_back' => 'Not Inserted',
            'resume' => 'Not Inserted',
            'offer_letter' => 'Not Inserted',
            'joining_letter' => 'Not Inserted',
            'contract_agreement' => 'Not Inserted',
        );
        DB::table('staff')->insert($staff);
    }
}
