<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* User::factory()->count(10)->create()->each(function ($user) {
             Book::factory()->count(10)->create([
                 'user_id' => $user->id
             ])->each(function ($post) use ($user) {
                 Image::factory()->count(3)->for($post, 'imageable')
                     ->create();
                 Comment::factory()->count(20)->create([
                     'user_id' => $user->id,
                     'post_id' => $post->id
                 ]);
             });

         });*/

        $this->call(CategorySeeder::class);
        $this->call(BookSeeder::class);


    }
}
