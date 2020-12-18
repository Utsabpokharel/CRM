<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level=array(
        'level'=>'Mid Level',
        'description'=>'This is Mid Level',
        );
        DB::table('levels')->insert($level);
    }
}
