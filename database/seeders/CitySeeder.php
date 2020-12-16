<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city =array(
            array('city_name'=> 'Kathmandu'),
            array('city_name'=> 'Pokhara'),
            array('city_name'=> 'Lalitpur'),
            array('city_name'=> 'Biratnagar'),
            array('city_name'=> 'Birganj'),
            array('city_name'=> 'Dharan'),
            array('city_name'=> 'Bharatpur'),
            array('city_name'=> 'BhimDutta'),
            array('city_name'=> 'Butwal'),
            array('city_name'=> 'Hetauda'),
            array('city_name'=> 'Bhaktapur'),
            array('city_name'=> 'Janakpur'),
            array('city_name'=> 'Dhangadhi'),
            array('city_name'=> 'Itahari'),
            array('city_name'=> 'Triyuga'),
            array('city_name'=> 'SiddharthaNagar'),
            array('city_name'=> 'Nepalgunj'),
            array('city_name'=> 'MechiNagar'),
            array('city_name'=> 'Ghorahi'),
            array('city_name'=> 'Birendranagar'),
            array('city_name'=> 'Gulariya'),
            array('city_name'=> 'Tikapur'),
            array('city_name'=> 'Tulshipur'),
            array('city_name'=> 'Kalaiya'),
            array('city_name'=> 'Sindhuli'),
            array('city_name'=> 'Damak'),
            array('city_name'=> 'Gorkha'),
            array('city_name'=> 'Rajbiraj'),
            array('city_name'=> 'Kapilvastu'),
            array('city_name'=> 'Byas'),
            array('city_name'=> 'Lahan'),
            array('city_name'=> 'PutaliBazar'),
            array('city_name'=> 'Panauti'),
            array('city_name'=> 'Gaur'),
            array('city_name'=> 'Dipayal'),
            array('city_name'=> 'Inaruwa'),
            array('city_name'=> 'Jaleswor'),
            array('city_name'=> 'Baglung'),
            array('city_name'=> 'Tansen'),
            array('city_name'=> 'Khadbari'),
            array('city_name'=> 'Dhankuta'),
            array('city_name'=> 'Bidur'),
            array('city_name'=> 'Waling'),
            array('city_name'=> 'Malangwa'),
            array('city_name'=> 'Bhadrapur'),
            array('city_name'=> 'Ilam'),
            array('city_name'=> 'Banepa'),
            array('city_name'=> 'Dhulikhel'),
            array('city_name'=> 'MahendraNagar'),
            array('city_name'=> 'Birtamod'),
        );
        DB::table('cities')->insert($city);
    }
}
