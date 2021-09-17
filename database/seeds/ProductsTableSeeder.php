<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 11; $i++) {
            \Illuminate\Support\Facades\DB::table('products')->insert([
                'title' => 'Product '.$i,
                'count' => rand(0, 1000),
                'cost' => rand(200, 1500),
                'price' => rand(200, 1500),
                'in_stock' => 1,
                'description' => Str::random(250),
            ]);
        }
    }
}
