<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\Category;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categoriesData = config('setting.categories');
      foreach($categoriesData as $name){
          $category = Category::where('name','=','$name')->first();

          if(empty($category))
              $category = new Category();
              $category->name = $name;
              $category->save();
          
      }
    }
}
