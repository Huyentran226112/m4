<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()

{

   $product = new Product();

   $product->name = "Women's Blouse";

   $product->image = "images/products/img-1.jpg";

   $product->desc = "Women's Blouse";

   $product->price = 1000;

   $product->save();



   $product = new Product();

   $product->name = "Men's Plain Tshirt";

   $product->image = "images/products/img-2.jpg";

   $product->desc = "Men's Plain Tshirt";

   $product->price = 1000;

   $product->save();



   $product = new Product();

   $product->name = "Men's Plain Tshirt";

   $product->image = "images/products/img-3.jpg";

   $product->desc = "Men's Plain Tshirt";

   $product->price = 1000;

   $product->save();

}
}
