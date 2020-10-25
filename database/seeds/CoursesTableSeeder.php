<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('courses')->insert([
              'course' => Str::random(10),
              'image' => Str::random(10),
              'description' => Str::random(10),
              'price' => 100,
              'qty' => 1,
              'period' => 1,
              'category_id' => 1,
            ]); 
        }
    }
}
