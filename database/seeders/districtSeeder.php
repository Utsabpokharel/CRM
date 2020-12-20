<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class districtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $district =array(
            array('district_name' => 'Taplejung','province'=>'1',),
            array('district_name' => 'Panchthar','province'=>'1',),
            array('district_name' => 'Ilam','province'=>'1',),
            array('district_name' => 'Jhapa','province'=>'1',),
            array('district_name' => 'Bhojpur','province'=>'1',),
            array('district_name' => 'Dhankuta','province'=>'1',),
            array('district_name' => 'Morang','province'=>'1',),
            array('district_name' => 'Sunsari','province'=>'1',),
            array('district_name' => 'Sankhuwasabha','province'=>'1',),
            array('district_name' => 'Solukhumbu','province'=>'1',),
            array('district_name' => 'Okhaldhunga','province'=>'1',),
            array('district_name' => 'Panchthar','province'=>'1',),
            array('district_name' => 'Terathum','province'=>'1',),
            array('district_name' => 'Udayapur','province'=>'1',),
            array('district_name' => 'Saptari','province'=>'2',),
            array('district_name' => 'Siraha','province'=>'2',),
            array('district_name' => 'Rautahat','province'=>'2',),
            array('district_name' => 'Dhanusha','province'=>'2',),
            array('district_name' => 'Mahottari','province'=>'2',),
            array('district_name' => 'Sarlahi','province'=>'2',),
            array('district_name' => 'Bara','province'=>'2',),
            array('district_name' => 'Parsa','province'=>'2',),
            array('district_name' => 'Sindhuli','province'=>'3',),
            array('district_name' => 'Ramechhap','province'=>'3',),
            array('district_name' => 'Dolakha','province'=>'3',),
            array('district_name' => 'Sindhupalchowk','province'=>'3',),
            array('district_name' => 'Kavrepalanchowk','province'=>'3',),
            array('district_name' => 'Rasuwa','province'=>'3',),
            array('district_name' => 'Dolakha','province'=>'3',),
            array('district_name' => 'Kathmandu','province'=>'3',),
            array('district_name' => 'Bhaktapur','province'=>'3',),
            array('district_name' => 'Lalitpur','province'=>'3',),
            array('district_name' => 'Nuwakot','province'=>'3',),
            array('district_name' => 'Chitwan','province'=>'3',),
            array('district_name' => 'Makwanpur','province'=>'3',),
            array('district_name' => 'Baglung','province'=>'4',),
            array('district_name' => 'Kaski','province'=>'4',),
            array('district_name' => 'Manang','province'=>'4',),
            array('district_name' => 'Mustang','province'=>'4',),
            array('district_name' => 'Lamjung','province'=>'4',),
            array('district_name' => 'Myagdi','province'=>'4',),
            array('district_name' => 'Parbat','province'=>'4',),
            array('district_name' => 'Nawalpur','province'=>'4',),
            array('district_name' => 'Syangja','province'=>'4',),
            array('district_name' => 'Gorkha','province'=>'4',),
            array('district_name' => 'Tanahun','province'=>'4',),
            array('district_name' => 'Kapilvastu','province'=>'5',),
            array('district_name' => 'Arghakhanchi','province'=>'5',),
            array('district_name' => 'Parasi','province'=>'5',),
            array('district_name' => 'Rupandehi','province'=>'5',),
            array('district_name' => 'Gulmi','province'=>'5',),
            array('district_name' => 'Palpa','province'=>'5',),
            array('district_name' => 'Dang','province'=>'5',),
            array('district_name' => 'Pyuthan','province'=>'5',),
            array('district_name' => 'Rolpa','province'=>'5',),
            array('district_name' => 'Eastern Rukum','province'=>'5',),
            array('district_name' => 'Banke','province'=>'5',),
            array('district_name' => 'Bardiya','province'=>'5',),
            array('district_name' => 'Salyan','province'=>'6',),
            array('district_name' => 'Western Rukum','province'=>'6',),
            array('district_name' => 'Dolpa','province'=>'6',),
            array('district_name' => 'Humla','province'=>'6',),
            array('district_name' => 'Jumla','province'=>'6',),
            array('district_name' => 'Kalikot','province'=>'6',),
            array('district_name' => 'Mugu','province'=>'6',),
            array('district_name' => 'Surkhet','province'=>'6',),
            array('district_name' => 'Dailekh','province'=>'6',),
            array('district_name' => 'Jajarkot','province'=>'6',),
            array('district_name' => 'Kailali','province'=>'7',),
            array('district_name' => 'Achham','province'=>'7',),
            array('district_name' => 'Doti','province'=>'7',),
            array('district_name' => 'Bajhang','province'=>'7',),
            array('district_name' => 'Bajura','province'=>'7',),
            array('district_name' => 'Kanchanpur','province'=>'7',),
            array('district_name' => 'Dadeldhura','province'=>'7',),
            array('district_name' => 'Baitadi','province'=>'7',),
            array('district_name' => 'Darchula','province'=>'7',),
        );
        DB::table('districts')->insert($district);
    }
}
