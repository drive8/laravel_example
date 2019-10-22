<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productsCount = 1000;

        for($i = 1; $i <= $productsCount; $i++){
            DB::table('products')->insert([
                'sort' => 100,
                'name' => "Test product {$i}",
                'code' => "test_product_{$i}",
                'description_short' => "Test product {$i} description short",
                'description' => "Test product {$i} description",
                'active' => 1,
            ]);
        }
    }
}
