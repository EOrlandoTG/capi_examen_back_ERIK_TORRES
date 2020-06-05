<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Address;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {

            $year = rand(1950, 2020);
            $month = rand(1, 12);
            $day = rand(1, 28);

            $date = Carbon::create($year,$month ,$day , 0, 0, 0);

            $user = factory(App\User::class)->create([
                'birthdate' =>  $date->format('Y-m-d H:i:s')
            ]);

            factory(Address::class)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
