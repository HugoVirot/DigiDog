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
        DB::table('products')->insert([
            'nom' => "Produit 1",
            'image' => "tour-connectee.jpg",
            'description' => "Description du produit 1",
            'prix' => "100",
            'poids' => "200",
        ]);

        DB::table('products')->insert([
            'nom' => "Produit 2",
            'image' => "traceur.jpg",
            'description' => "Description du produit 2",
            'prix' => "300",
            'poids' => "400",
        ]);

        DB::table('products')->insert([
            'nom' => "Produit 3",
            'image' => "sante.jpg",
            'description' => "Description du produit 3",
            'prix' => "500",
            'poids' => "600",
        ]);
    }
}
