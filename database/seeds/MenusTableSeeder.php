<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('menus')->insert([
              'menu' => Str::random(10),
              'image' => Str::random(10),
              'description' => Str::random(10),
              'date' => Str::random(10),
              'kcal' => Str::random(10),
              'menu_type' => Str::random(10),
              'dish' => Str::random(10),
              'category_id' => 1,
              'price' => 100,
            ]); 
        }
    }
}
