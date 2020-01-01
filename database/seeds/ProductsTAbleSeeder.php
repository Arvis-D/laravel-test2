<?php

use Illuminate\Database\Seeder;

class ProductsTAbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Products::class, 50)->create();
    }
}
