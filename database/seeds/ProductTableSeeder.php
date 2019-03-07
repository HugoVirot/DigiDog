<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            "nom" => "collier gps",
            "description" => "utile pour suivre mon chien à la trace",
            "prix" => 47,
            "stock"=>5,
            "categorie"=>1,
            "images"=>"collier.jpg",

        ]);

        DB::table("products")->insert([
            "nom" => "gamelle ",
            "description" => "régule son apétit",
            "prix" => 45,
            "stock"=>4,
            "categorie"=>1,
            "images"=>"gamelle.jpg",

        ]);

        DB::table("products")->insert([
            "nom" => "panier",
            "description" => "confortable",
            "prix" => 35,
            "stock"=>6,
            "categorie"=>1,
            "images"=>"panier.jpg",

        ]);
    }
}