<?php

use Illuminate\Database\Seeder;

class Sub_CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_Categories')->insert([
        	['id_cat'=>1,'name' => 'Điện thoại'],
            ['id_cat'=>1,'name' => 'Máy tính bảng'],
            ['id_cat'=>1,'name' => 'Máy đọc sách'],
            ['id_cat'=>1,'name' => 'Máy tính bàn'],
            ['id_cat'=>1,'name' => 'Laptop'],
            ['id_cat'=>1,'name' => 'Máy ảnh'],
            ['id_cat'=>1,'name' => 'Linh kiện, phụ kiện di động'],
            ['id_cat'=>1,'name' => 'Linh kiện, phụ kiện máy tính'],
            ['id_cat'=>1,'name' => 'Khác'],
            ['id_cat'=>2,'name' => 'Sách'],
            ['id_cat'=>2,'name' => 'Báo, tạp chí'],
            ['id_cat'=>2,'name' => 'Truyện tranh'],
            ['id_cat'=>2,'name' => 'Tiểu thuyết'],
            ['id_cat'=>2,'name' => 'Sách giáo khoa'],
            ['id_cat'=>2,'name' => 'Sách tham khảo'],
            ['id_cat'=>2,'name' => 'Sách kĩ năng'],
            ['id_cat'=>2,'name' => 'Khác'],
            ['id_cat'=>3,'name' => 'Vở'],
            ['id_cat'=>3,'name' => 'Bút'],
            ['id_cat'=>3,'name' => 'Thước'],
            ['id_cat'=>3,'name' => 'Giấy'],
            ['id_cat'=>3,'name' => 'Compa'],
            ['id_cat'=>3,'name' => 'Máy tính bỏ túi'],
            ['id_cat'=>3,'name' => 'Phấn'],
            ['id_cat'=>3,'name' => 'Khác'],
            ['id_cat'=>4,'name' => 'Máy giặt '],
            ['id_cat'=>4,'name' => 'Tủ lạnh'],
            ['id_cat'=>4,'name' => 'Lò vi sóng'],
            ['id_cat'=>4,'name' => 'Quạt'],
            ['id_cat'=>4,'name' => 'Điều hòa'],
            ['id_cat'=>4,'name' => 'Máy lọc nước'],
            ['id_cat'=>4,'name' => 'Bàn ủi'],
            ['id_cat'=>4,'name' => 'Khác'],
            ['id_cat'=>5,'name' => 'Máy tập thể thao'],
            ['id_cat'=>5,'name' => 'Golf'],
            ['id_cat'=>5,'name' => 'Bóng bàn'],
            ['id_cat'=>5,'name' => 'Tennis'],
            ['id_cat'=>5,'name' => 'Cầu lông'],
            ['id_cat'=>5,'name' => 'Bơi lội'],
            ['id_cat'=>5,'name' => 'Bóng đá'],
            ['id_cat'=>5,'name' => 'Khác'],
            ['id_cat'=>6,'name' => 'Thời trang nam'],
            ['id_cat'=>6,'name' => 'Thời trang nữ'],
            ['id_cat'=>6,'name' => 'Trẻ em nam'],
            ['id_cat'=>6,'name' => 'Trẻ em nữ'],
            ['id_cat'=>6,'name' => 'Khác']
        ]);
        }
}
