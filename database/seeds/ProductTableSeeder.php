<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $product = new Product;
            $product->name = Str::random(10);
            $product->picture = Str::random(10) . '.png';
            $product->description = Str::random(100);
            $product->price = rand(0,1000);
            $product->weight = rand(0,1000);
            $product->stock = rand(0,1000);
            $product->category_id = rand(1,4);
            $product->save();
        }


    }
}