<?php

use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Club')->insert([
            ['name' => 'clubhope','email'=>'hope@gmail.com','phone'=>'0364731319','username'=>'CLB Hope Đà Nẵng','password'=>'hope123456','address'=>'Danang','avata'=>'hopepage.jpg'],
            ['name' => 'clubanhhong','email'=>'anhhong@gmail.com','phone'=>'0364731318','username'=>'CLB Ánh Hồng','password'=>'anhhong12345','address'=>'quang tri','avata'=>'anhsaopage.jpg'],
            ['name' => 'cluthientam','email'=>'thientam@gmail.com','phone'=>'0364731317','username'=>'CLB Thiện Tâm','password'=>'thientam12345','address'=>'Ha noi','avata'=>'thientampage.jpg'],
            ['name' => 'clubkimhang','email'=>'kimhang@gmail.com','phone'=>'0364731316','username'=>'CLB Kim Hằng','password'=>'kimhang12345','address'=>'Ha noi','avata'=>'kimhangpage.jpg'],
        ]);
    }
}
