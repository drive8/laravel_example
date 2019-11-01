<?php

use Illuminate\Database\Seeder;

class ProductSectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionCount = 10;
        $productInSection = 100;
        $productId = 1;

        for($i = 1; $i <= $sectionCount; $i++){
            for($p = 1; $p <= $productInSection; $p++){
                DB::table('product_section')->insert([
                    'product_id' => $productId++,
                    'section_id' => $i
                ]);
            }
        }
    }
}
