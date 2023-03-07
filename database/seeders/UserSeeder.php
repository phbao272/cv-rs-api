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

        $limitCandidate = 100;

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
                'phone_number' => $faker->phoneNumber,

                "m_location_id" => rand(1, 3),
                "user_id" => ($i + 1)
            ]);

            $isSkill = $i <= 70 ? "software" : "hardware";
            $pivot = $i <= 70 ? count($softwareSkills) : count($hardwareSkills);

            $jj = rand(0, $pivot);

            print_r("jj", $jj);

            $arrSkill = [];

            for ($j = 0; $j < rand(1, $jj); $j++) {
                do {
                    $skillId = $isSkill == "software" ? rand(1, $pivot) : rand(count($softwareSkills),count($softwareSkills) + $pivot);
                } while (in_array($skillId, $arrSkill));

                $arrSkill[] = $skillId;

                DB::table('resume_skills')->insert([
                    'resume_id' => ($i + 1),
                    'm_skill_id' => $isSkill == "software" ? rand(1, $pivot) : rand(count($softwareSkills) + 1, count($softwareSkills) + $pivot)
                ]);
            }

//            print_r($arrSkill);
        }

        // Generate Data Companies
        $companies = array("Công ty Solashi", "Công ty Misa", "Công ty Tânaka", "Công ty Misamoa", "Công ty KTCK", "Công ty JWT");

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
