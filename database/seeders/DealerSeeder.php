<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DealerSeeder extends Seeder
{
    public function run()
    {
        DB::table('dealers')->insert([
            'id' => 1,
            'business_name' => 'A&H Prestige Motors',
            'email_address' => 'ashley.hindle@carandclassic.com',
        ]);
    }
}
