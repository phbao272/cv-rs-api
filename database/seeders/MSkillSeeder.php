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
        $webSkills = array("PHP", "Laravel", "FrontEnd", "BackEnd", "Python", "Django",
            "Flask", "Ruby", "Ruby on Rails", "Java", "Spring Framework",
            "ASP.NET", "MySQL", "PostgreSQL", "MongoDB", "Redis", "JavaScript", "TypeScript", "ReactJS",
            "VueJS", "AngularJS", "jQuery", "Bootstrap", "Material UI", "Sass/Less", "Git",
        );

        $mobileSkills = array(
            "Swift",
            "Objective-C",
            "Java",
            "Kotlin",
            "React Native",
            "Flutter",
        );

        $testSkills = array(
            "Kiểm thử tự động (Automation testing)",
            "Kiểm thử chức năng (Functional testing)",
            "Kiểm thử tải (Load testing)",
            "Kiểm thử hiệu năng (Performance testing)",
            "Kiểm thử bảo mật (Security testing)",
            "Kiểm thử giao diện người dùng (User interface testing)",
            "Kiểm thử tích hợp (Integration testing)",
            "Kiểm thử hệ thống (System testing)",
            "Kiểm thử đơn vị (Unit testing)",
            "Kiểm thử hồi quy (Regression testing)",
            "Kiểm thử chấp nhận người dùng (User acceptance testing)",
            "Phân tích yêu cầu (Requirement analysis)",
            "Đặc tả kiểm thử (Test case specification)",
            "Báo cáo kiểm thử (Test report)",
        );

        $AISkills = array('Matlab', 'TensorFlow', 'Scikit-learn', 'Computer Vision', 'Neural Networks',
            'Big Data Processing', "Data Mining", "AngularJS", "Data Analysis", "Natural Language Processing - NLP");


        for ($i = 0; $i < count($webSkills); $i++) {
            DB::table('m_skills')->insert([
                'name' => $webSkills[$i],
                'm_job_id' => 1,
            ]);
        }

        for ($j = 0; $j < count($mobileSkills); $j++) {
            DB::table('m_skills')->insert([
                'name' => $mobileSkills[$j],
                'm_job_id' => 2,
            ]);
        }

        for ($j = 0; $j < count($testSkills); $j++) {
            DB::table('m_skills')->insert([
                'name' => $testSkills[$j],
                'm_job_id' => 3,
            ]);
        }

        for ($j = 0; $j < count($AISkills); $j++) {
            DB::table('m_skills')->insert([
                'name' => $AISkills[$j],
                'm_job_id' => 4,
            ]);
        }
    }
}
