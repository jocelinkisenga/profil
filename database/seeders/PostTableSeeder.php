<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post= Post::truncate();
        $faker = \Faker\Factory::create();
        for ($i=0;$i<5;$i++){
          
          Post::create([
                'names' => $faker->sentence,
                'description' => $faker->paragraph,
                'photo' => $faker->sentence,
            ]);
        
        }
    }
}
