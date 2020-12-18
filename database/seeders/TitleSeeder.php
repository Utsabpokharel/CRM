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
            'title'=>'Developer',
            'description'=>'This is Mid Level Developer',
            );
            DB::table('titles')->insert($title);
    }
}
