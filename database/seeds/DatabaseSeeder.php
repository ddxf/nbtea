<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Product')->insert([
            'classification_id' => rand(1,15),
            'Introduction' => str_random(10),
            'price' => rand(1000,15000),
            'orprice' => rand(1000,15000),
            'instock' => rand(1000,15000),
            'sold' => rand(1000,15000),
            'image' => rand(1000,15000),
            'Integral' => rand(1000,15000),
        ]);
    }
}
