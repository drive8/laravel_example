<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            DB::table('sections')->insert([
                'parent_id' => $i - 1,
                'sort' => 100,
                'name' => "section_{$i}",
                'code' => "section_{$i}",
                'description' => 'Example description',
                'active' => 1,
            ]);
        }
    }
}
