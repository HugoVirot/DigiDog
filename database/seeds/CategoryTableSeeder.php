<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category = new Category;
        $category->name = 'Traceurs GPS';
        $category->save();

        $category = new Category;
        $category->name = 'Caméras';
        $category->save();

        $category = new Category;
        $category->name = 'Capteurs d\'activité';
        $category->save();

        $category = new Category;
        $category->name = 'Distributeurs';
        $category->save();

    }
}
