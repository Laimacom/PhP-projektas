<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        //kuriam admina
        $user = new \App\User();
        $user->name = "Adminas";
        $user->email = "admin@firma.lt";
        $user->is_admin = true;
        $user->password = bcrypt("qwerty");
        $user->save();

//        $radarsDistance = [5000, 4500, 5100];
//
//        $raide = 'ABCDEFGHIJKLMNOPRSTUVZ';
//        for ($i = 0; $i < 10; ++$i) {
//            $driver = new \App\Driver();
//            $driver->name = "Jonas " . ($i + 1);
//            $driver->city = "Babtai " . ($i + 1);
//        }
//        $sk = strlen($raide) - 1;
//        $timeFrom = Carbon::create(2017, 1, 1, 0, 0, 0)->timestamp;
//        $timeTo = Carbon::now()->timestamp;
//        for ($i = 0; $i < 1000; $i++) {
//
//            $distance = $radarsDistance[rand(0, 2)];
//            $speed = rand(120, 190);
//            $time = round($distance / ($speed / 3.6));
//            $timestamp = rand($timeFrom, $timeTo);
//            $number = $raide[rand(0, $sk)] . $raide[rand(0, $sk)] . $raide[rand(0, $sk)] .
//                rand(0, 9) . rand(0, 9) . rand(0, 9);
//            $radar = new \App\Radar();
//            $radar->date = Carbon::createFromTimestamp($timestamp);
//            $radar->number = $number;
//            $radar->distance = $distance;
//            $radar->time = $time;
//
//            if ($i % 50 == 0) {
//                $radar->driver_id = rand(1, 3);
//            }

            // $this->call(UsersTableSeeder::class);
        $date = Carbon::create(2017, 1, 1, 23, 25, 50);
        $raides = 'ABCDEFGHIJKLMNOPRSTUVZ';
        for ($i = 0; $i < 10; ++$i) {
            $driver = new \App\Driver();
            $driver->name = "Jonas " . ($i + 1);
            $driver->city = "Babtai " . ($i + 1);
            $driver->save();
        }
        for ($i = 0; $i < 1000; ++$i) {
            $date->addSecond(rand(1, 7200));
            DB::table('radars')->insert([
                'date' => $date,
                'number' =>
                    substr($raides, rand(0, strlen($raides) - 1), 1)
                    .substr($raides, rand(0, strlen($raides) - 1), 1)
                    .substr($raides, rand(0, strlen($raides) - 1), 1)
                    .rand(100, 999),
                'distance' => rand(900, 1000),
                'time' => rand(20, 40),
                'created_at' => $date,
                'updated_at' => $date
            ]);
        }
    }
}


