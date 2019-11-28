<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert([
            ['name' => 'Iphone Xs Max 64gb Gold bản world chính hãng fpt','id_subcat' => '1','price'=>13700000000,'image' => '1.jpg','description'=>'Điện thaoij Iphone X','status' => 1],

            ['name' => 'Sony E4 dual 2s2s chữa cháy garb','id_subcat' => '1','price'=>400000,'image' => '2.jpg|3.jpg','description'=>'Sony E4 dual 2s2s chữa cháy garb','status' => 1],
            ['name' => 'Galaxy j7 prime máy chính hãng samsung việt nam ','id_subcat' => '1','price'=>1400000,'image' => '4.jpg|5.jpg|6.jpg','description'=>'Galaxy j7 prime máy chính hãng samsung việt nam','status' => 1],
            
            

            //Insert data cho máy tính bảng
            ['name'=>'Bán sam sung galaxy tab a6 7 inch','id_subcat'=>'2','price'=>360000,'image'=>'maytinhbang1.png','description'=>'samsung galaxy tab a 7inch,Máy đẹp không lỗi lầm','status'=>1],
            ['name'=>'iPad air 2','id_subcat'=>'2','price'=>400000,'image'=>'maytinhbang3.jpg','description'=>'Siêu đẹp, siêu bền và chỉ mới dùng','status'=>1],
            ['name'=>'Ipad Air 2 - 128GB wifi xách tay Mỹ','id_subcat'=>'2','price'=>420000,'image'=>'maytinhbang4.jpg','description'=>'Siêu mỏng, siêu bền và chỉ mới dùng','status'=>1],
           
            

            // Insert data cho Báo, Tạp chí

            ['name'=>'cân điện tử FEH','id_subcat'=>'10','price'=>310000,'image'=>'candientu.jpg','description'=>'tuyết vời lắm mọi người ơi','status'=>1],
            ['name'=>'cân điện tử YEH','id_subcat'=>'10','price'=>350000,'image'=>'candientu1.jpg','description'=>'tuyết vời lắm mọi người ơi','status'=>1],
            ['name'=>'Báo tạp chí nhân','id_subcat'=>'10','price'=>450000,'image'=>'tapchi.jpg','description'=>'tuyết vời lắm mọi người ơi','status'=>1],
            

             //Insert cho Sách

            
            ['name'=>'Tôi là một con lừa','id_subcat'=>'11','price'=>162000,'image'=>'sach7.jpg','description'=>'Mang lại những giá trị hay trong cuộc sống','status'=>1],
            ['name'=>'What we were promised','id_subcat'=>'11','price'=>162000,'image'=>'sach8.jpg','description'=>'Mang lại những giá trị hay trong cuộc sống','status'=>1],
            ['name'=>'Những tấm lòng cho ai','id_subcat'=>'11','price'=>332000,'image'=>'sach9.jpg','description'=>'Mang lại những giá trị hay trong cuộc sống','status'=>1],
        ]);
    }
}