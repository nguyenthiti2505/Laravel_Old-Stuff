<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slide')->insert([
            ['image' => '1.jpg'],
            ['image' => '2.jpg'],
            ['image' => '3.jpg'],
           
        ]);
    }
}
