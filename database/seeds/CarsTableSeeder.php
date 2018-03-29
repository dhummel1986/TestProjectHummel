<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Cars::class, 1)->create()->each(function ($Cars) {
            // $u->posts()->save(factory(App\Post::class)->make());
        });
    }
}
