<?php

use Illuminate\Database\Seeder;

class ImageClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('image_club')->insert([
        ['id_activity'=>'1','image'=>'a1.jpg','content'=>'Dọn sạch đường làng'],
        ['id_activity'=>'1','image'=>'a2.jpg','content'=>'Dọn sạch khu phố'],
        ['id_activity'=>'1','image'=>'a3.jpg','content'=>'Thay đổi môi trường'],
        
        ['id_activity'=>'2','image'=>'b1.jpg','content'=>'Hiến màu tình nguyện'],
        ['id_activity'=>'2','image'=>'b2.jpg','content'=>'Bộ đội về làng'],
        ['id_activity'=>'2','image'=>'b3.jpg','content'=>'Tương thân tương ái'],

        ['id_activity'=>'3','image'=>'c1.jpg','content'=>'Bảo vệ môi trường'],
        ['id_activity'=>'3','image'=>'c2.jpg','content'=>'Cùng tắt điện'],
        ['id_activity'=>'3','image'=>'c3.jpg','content'=>'Bảo vệ biển'],
        ['id_activity'=>'4','image'=>'d1.jpg','content'=>'Bảo vệ môi trường'],
        ['id_activity'=>'4','image'=>'d2.jpg','content'=>'Dọn sạch đường làng'],
        ['id_activity'=>'4','image'=>'d3.jpg','content'=>'Trồng cây xanh'],
        ]);
    }
}
