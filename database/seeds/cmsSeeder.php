<?php

use Illuminate\Database\Seeder;

class cmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class,10)->create();
    }
}
