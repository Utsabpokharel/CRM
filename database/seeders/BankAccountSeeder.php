<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bank=array(
            'user_id'=> 1,
            'accountholder_name'=>'Account of Super Admin',
            'bank_name'=>'Bank of Super Admin',
            'branch_name'=>'Branch of Super Admin',
            'account_number'=>'1234567899124567'
            );
    }
}
