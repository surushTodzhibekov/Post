<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        $posts= [];
        $faker = Factory::create();
        $date = Carbon::create(2019, 9, 25, 9);

        for($i=1; $i <= 10; $i++){
          $image = "garden_sq_0" . rand(1, 8) . ".jpg";
          $date->addDays(1);
          $publishedDate = clone($date);
          $createdDate = clone($date);

          $posts[] = [
               'author_id' => rand(1, 3),
               'title' => $faker->sentence(rand(8, 12)),
               'excerpt' => $faker->text(rand(250, 300)),
               'body' => $faker->paragraphs(rand(10, 15), true),
               'slug' => $faker->slug(),
               'image' => rand(0, 1) == 1 ? $image : NULL,
               'created_at'   => $createdDate,
               'updated_at'   => $createdDate,
               'published_at' => $i < 5 ? $publishedDate : ( rand(0, 1) == 0 ? NULL : $publishedDate->addDays(4) ),
                'view_count' => rand(1, 10) *10
           ];
        }

        DB::table('posts')->insert($posts);
    }
}
