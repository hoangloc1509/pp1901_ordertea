<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create 10 users
        for($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(5),
                'fullname' => Str::random(10),
                'acc' => Str::random(5),
                'address' => Str::random(5),
                'phone' => rand(1000000000, 99999999999),
                'birth' => Str::random(8),
                'password'=> bcrypt('1234567890'),
                'image'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfT0oX711cENMRfp_MWtvPW6KTyRP06lJa1p_6k3lsK0GjRhf8',
            ]);
        }
    }
}
