<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->category_id= 1 ;
        $category->name = "Sport";
        $category->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, magnam dolorum qui maxime perspiciatis enim, magni totam veniam inventore, provident dolores voluptates nihil doloremque nostrum ipsum quae sequi nobis doloribus.";
        $category->save();
    }
}
