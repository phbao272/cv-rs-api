<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email_prefix = "cv_recommender";
        $faker = Faker::create();

        // Generate Data user
        $ho = array(
            "Nguyễn", "Trần", "Lê", "Phạm", "Hoàng", "Huỳnh", "Phan", "Vũ", "Võ", "Đặng", "Bùi", "Đỗ", "Hồ", "Ngô", "Dương", "Lý"
        );

        $ten_dem = array(
            "Hữu", "Đức", "Thanh", "Ngọc", "Công", "Quang", "Thành", "Minh", "Mạnh", "Văn", "Thái", "Huy", "Quốc", "Tùng", "Tâm", "Trọng", "Đình"
        );

        $ten = array(
            "Anh", "Bình", "Cường", "Dũng", "Hiền", "Hùng", "Huy", "Khánh", "Linh", "Long", "Nam", "Nga", "Nhi", "Phong", "Phương", "Quân", "Quyên", "Thắng", "Thu", "Trang", "Trung", "Tuấn", "Việt"
        );

        $ten_nguoi = array();

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

        for ($i = 0; $i < count($ho); $i++) {
            $ho_rand = $ho[$i];
            for ($j = 0; $j < count($ho); $j++) {
                $ten_dem_rand = $ten_dem[$j];
                for ($k = 0; $k < count($ho); $k++) {
                    $ten_rand = $ten[$k];
                    $ten_nguoi[] = "$ho_rand $ten_dem_rand $ten_rand";
                }
            }
        }

//        shuffle($ten_nguoi);

        $limitCandidate = 50;

        for ($i = 0; $i < $limitCandidate; $i++) {

            DB::table('users')->insert([
                'name' => $ten_nguoi[$i],
                'email' => $email_prefix .  "_" . ($i + 1) . '@gmail.com',
                'password' => bcrypt('123123'),
                'role' => User::ROLE["CANDIDATE"]
            ]);

            DB::table('resumes')->insert([
                'name' => $ten_nguoi[$i],
                'title' => $ten_nguoi[$i] . ' đang tìm việc làm',
                'email' => $email_prefix .  "_" . ($i + 1) . '@gmail.com',
                'birthday' => $faker->dateTimeBetween('1990-01-01', '2001-12-31'),
                'phone_number' => $faker->phoneNumber,

                "m_location_id" => rand(1, 3),
                "m_education_level_id" => rand(1, 5),
                "user_id" => ($i + 1)
            ]);

            $job_category = rand(1, 4);
//            print_r("job_category" . $job_category);

            $skills = [];
            $startId = 0;

            switch($job_category) {
                case 1:
                    $skills = $webSkills;
                    break;
                case 2:
                    $skills = $mobileSkills;
                    $startId = count($webSkills);
                    break;
                case 3:
                    $skills = $testSkills;
                    $startId = count($mobileSkills) + count($webSkills);

                    break;
                case 4:
                    $skills = $AISkills;
                    $startId = count($testSkills) + count($mobileSkills) + count($webSkills);

                    break;
                default:
                    break;
            }

            print_r("Candidate: " . $i . " StartId: " . $startId . ", " . $job_category . "\n");

            $pivot = count($skills);

            $jj = rand(3, 5);

//            print_r("jj" . $jj);

            $arrSkill = [];

            for ($j = 0; $j < $jj; $j++) {
                do {
                    $skillId = rand(1, $pivot);
                } while (in_array($skillId, $arrSkill));

                $arrSkill[] = $skillId;

                DB::table('resume_skills')->insert([
                    'resume_id' => ($i + 1),
                    'm_skill_id' => $skillId + $startId
                ]);
            }
        }

        // Generate Data Companies
        $companies = array("Công ty TNHH Solashi", "Công ty cổ phần Misa", "Công ty cổ phần viễn thông FPT", "Công ty Hapo",
            "Công ty cổ phần Findhay Việt Nam", "Công ty TNHH Shopee Express", "Công ty cổ phần TDT Asia",
            "Công ty TNHH A", "Công ty TNHH B", "Công ty TNHH ZZZ");

        for ($i = 0; $i < count($companies); $i++) {
            DB::table('users')->insert([
                'name' => $companies[$i],
                'email' => $email_prefix . "_company_" . ($i + 1) . '@gmail.com',
                'password' => bcrypt('123123'),
                'role' => User::ROLE["COMPANY"]
            ]);

            DB::table('companies')->insert([
                'name' => $companies[$i],
                'description' => "Đây là công ty có tên là " . $companies[$i],
                'user_id' => $i + $limitCandidate
            ]);
        }
    }
}
