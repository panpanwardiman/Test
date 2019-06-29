<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
            $name = $faker->name;
            $email = $faker->unique()->email               ;
            $address = $faker->address;
            $phone = $faker->phoneNumber;
            $users[$i] = [
                'name' => $name,
                'email' => $email,
                'address' => $address,
                'phone' => $phone
            ];
        }
        DB::table('users')->insert($users);
    }
}
