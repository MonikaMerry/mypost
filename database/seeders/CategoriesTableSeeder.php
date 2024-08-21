<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $categoryName =
        [
             [
                'category_name' => 'Animal'
             ],
             [
                'category_name' => 'Bird'
             ],
             [
                'category_name' => 'Nature'
             ],
             [
                'category_name' => 'Technology'
             ],
        ];
       echo '---------------Category---------------'."\n";
        foreach ($categoryName as $value) {
            $categoryName       = new Category;
            $categoryName->category_name = $value['category_name'];
            $categoryName->save();
       
        echo "---------------Category Name => $categoryName->category_name---------------"."\n";
        
        }
       echo '---------------Category ends---------------'."\n";

    }
}
