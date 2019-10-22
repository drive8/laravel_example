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
        for($i = 0; $i < 3; $i++){
            DB::table('sections')->insert([
                'parent_id' => 0,
                'sort' => 100,
                'name' => "section_{$i}",
                'code' => "section_{$i}",
                'description' => 'Example description',
                'active' => 1,
            ]);
        }
    }
}
