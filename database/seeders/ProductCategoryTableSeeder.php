<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        
        $categoryName =
        [
             [
                'category_name' => 'Dress'
             ],
             [
                'category_name' => 'Phone'
             ],
             [
                'category_name' => 'Toys'
             ],
             [
                'category_name' => 'Laptop'
             ],
             [
                'category_name' => 'Home Appliances'
             ],
        ];
       echo '---------------Category---------------'."\n";
        foreach ($categoryName as $value) 
        {
            $categoryName       = new ProductCategory();
            $categoryName->category_name = $value['category_name'];
            $categoryName->save();
       
        echo "---------------Category Name => $categoryName->category_name---------------"."\n";
        
        }
       echo '---------------Category ends---------------'."\n";

        } 
     
}
