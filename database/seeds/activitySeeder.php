<?php

use Illuminate\Database\Seeder;

class activitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('active_club')->insert([
            ['id_club'=>'1','content' => 'Tháng 07/2010, sau khi tham gia giải thưởng Chim Én, CLB đã thành lập cơ sở tại Hà Nội (24/07/2010) và dần chuyển định hướng theo Tình Nguyện và đổi tên thành CLB Tình Nguyện Hope. ','image'=>'1.jpg'],
            ['id_club'=>'2','content' => 'Tháng 05/2011, sau khi tham gia giải thưởng Lạc Đà Xanh, CLB đã thành lập cơ sở tại Hà Nội (24/07/2010) và dần chuyển định hướng theo Tình Nguyện và đổi tên thành CLB Ánh Hồng. ','image'=>'2.jpg'],
            ['id_club'=>'3','content' => 'Câu lạc bộ thành lập chỉ có 5 thành viên sau đó phát triển trong 2 năm lấy tên thành CLB Thiện Tâm','image'=>'3.jpg'],
            ['id_club'=>'4','content' => 'Được thàn lập năm 2018 câu lạc bộ được nhiều bạn tình nguyện viên ủng hộ và tham gia lấy tên là CLB Kim Hằng','image'=>'4.jpg'],
            
        ]);
    }
}
