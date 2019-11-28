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
        DB::table('Categories')->insert([
        	['name_cat' => 'Đồ điện tử'],
            ['name_cat' => 'Sách báo'],
            ['name_cat' => 'Văn phòng phẩm'],
            ['name_cat' => 'Đồ gia dụng'],
            ['name_cat' => 'Thể thao'],
            ['name_cat' => 'Thời trang'],
            ['name_cat' => 'Khác'],
        ]);
    }
}
