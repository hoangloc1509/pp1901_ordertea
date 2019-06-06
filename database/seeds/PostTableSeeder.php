<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create 10 posts
        for($i = 0; $i < 10; $i++) {
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'content' => Str::random(10),
                'image' => Str::random(10),
            ]);
        }
    }
}
