<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title=array(
            array('title'=>'Developer','description'=>'This is a Developer'),
            array('title'=>'Designer','description'=>'This is a Designer'),
            );
            DB::table('titles')->insert($title);
    }
}
