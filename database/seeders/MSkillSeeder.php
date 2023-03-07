<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $softwareSkills = array('Java', 'PHP', 'Python', 'C++', 'Rupy', 'C', 'C#',
            'ReactJS', "VueJS", "AngularJS", "Tester", "Front-End", "Back-End", "NestJS",
            'Web', 'Mobile', 'Xử lý ảnh', 'Học sâu',
            'Học máy', 'Công nghệ Blockchain', 'Phát triển trò chơi', 'Thiết kế UI/UX');

        $hardwareSkills = array(
            'Thiết kế vi mạch',
            'Mạng máy tính',
            'Thiết kế hệ thống',
            'Tối ưu hóa phần cứng',
            'Thiết kế linh kiện điện tử',
            'Thiết kế firmware',
            'Bảo trì phần cứng',
            'Thiết kế hệ thống nhúng'
        );

        for ($i = 0; $i < count($softwareSkills); $i++) {
            DB::table('m_skills')->insert([
                'name' => $softwareSkills[$i],
                'm_job_id' => 1,
            ]);
        }

        for ($j = 0; $j < count($hardwareSkills); $j++) {
            DB::table('m_skills')->insert([
                'name' => $hardwareSkills[$j],
                'm_job_id' => 2,
            ]);
        }
    }
}
