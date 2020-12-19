<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department=array(
            'dep_name'=>'IT Department',
            'dep_description'=>'This is IT Department',

        );
    }
}
