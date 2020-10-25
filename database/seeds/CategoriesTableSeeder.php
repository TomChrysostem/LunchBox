<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('categories')->insert([
              'category' => Str::random(10),
              'description' => Str::random(10),
            ]); 
        }
    }
}
