<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $newUser = new User();

        $newUser->name = 'Donato';
        $newUser->email = 'emailprova@gmail.com';
        $newUser->email_verified_at = $faker->time();
        $newUser->password = Hash::make('12345678');


        $newUser->save();


        for ($i=0; $i < 5 ; $i++) {
            $newUser = new User();

            $newUser->name = $faker->unique()->name();
            $newUser->email = $faker->unique()->email();
            $newUser->email_verified_at = $faker->time();
            $newUser->password = Hash::make('12345678');


            $newUser->save();
        }



    }
}
