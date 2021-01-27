<?php

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
        // $this->call(UserSeeder::class);
        //factory(App\Acessories::class,3)->create();
        //factory(App\Tops::class,3)->create();
        //factory(App\Bottom::class,3)->create();
        //factory(App\Bkk::class,3)->create();
        //factory(App\Dress::class,3)->create();
        //factory(App\Cosmetics::class,3)->create();
        factory(App\Food::class,3)->create();
        //factory(App\Shoe::class,3)->create();

    }
}
