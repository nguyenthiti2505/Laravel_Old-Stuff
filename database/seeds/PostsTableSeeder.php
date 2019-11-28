<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['id_user'=>2,'id_prod'=>1,'contact' => 'Số Điện Thoại'],
            ['id_user'=>2,'id_prod'=>2,'contact' => 'Số Điện Thoại'],
            ['id_user'=>2,'id_prod'=>3,'contact' => 'Số Điện Thoại'],
            ['id_user'=>2,'id_prod'=>4,'contact' => 'Số Điện Thoại'],

            ['id_user'=>3,'id_prod'=>5,'contact' => 'Số Điện Thoại'],
            ['id_user'=>3,'id_prod'=>6,'contact' => 'Số Điện Thoại'],
            ['id_user'=>3,'id_prod'=>7,'contact' => 'Số Điện Thoại'],
            ['id_user'=>3,'id_prod'=>8,'contact' => 'Số Điện Thoại'],
           
        ]);
    }
}
