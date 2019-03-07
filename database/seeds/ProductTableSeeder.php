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
        DB::table("products")->insert(
            [
                "title"=> "traceur GPS",
                "description"=>"il suit votre chien à la trace !",
                "price"=> 99.99,
                "weight"=> 0.2,
                "stock"=> 59,
                "photo"=> "traceurtractive.jpg"
            ]);
        DB::table("products")->insert(
            [
                "title"=> "tour connectée",
                "description"=>"pour observer votre chien à distance et le récompenser",
                "price"=> 199.99,
                "weight"=> 1.1,
                "stock"=> 37,
                "photo"=> "tour-connectee.jpg"
            ]);
        DB::table("products")->insert(
            [
                "title"=> "capteur d'activité",
                "description"=>"surveille la forme de médor",
                "price"=> 49.99,
                "weight"=> 0.15,
                "stock"=> 79,
                "photo"=> "capteur-activite.jpg"
            ]);
    }
}
