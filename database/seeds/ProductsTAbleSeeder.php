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
        factory(Products::class, 50);
    }
}
