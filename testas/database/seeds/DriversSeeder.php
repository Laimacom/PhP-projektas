<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('drivers')->insert([
            'name' => 'Jonas Jonaitis',
            'city' => 'Babtai'
        ]);
    }
}
