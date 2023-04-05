<?php

namespace Database\Seeders;

use App\Http\Middleware\PreventRequestsDuringMaintenance;
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
        // 300 CV va` 50 Job
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
            ".NET", "MySQL", "PostgreSQL", "MongoDB", "Redis", "JavaScript", "TypeScript", "ReactJS",
            "VueJS", "AngularJS", "jQuery", "Bootstrap", "Material UI", "Sass/Less", "Git", "NodeJS", "NestJS"
        );

        $mobileSkills = array(
            "Swift",
            "Objective-C",
            "Kotlin",
            "React Native",
            "Flutter",
            "Android",
            "iOS"
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

        $limitCandidate = 150;

        for ($i = 0; $i < $limitCandidate; $i++) {
            if ($i < 80) {
                if ($i < 20) {
                    $m_experience_id = rand(4, 6);
                } else {
                    $m_experience_id = rand(2, 5);
                }
            } else {
                $m_experience_id = rand(1, 8);
            }

            // 1. Web
            // 2. Mobile
            // 3. Tester
            $job_category = rand(1, 3);

            DB::table('users')->insert([
                'name' => $ten_nguoi[$i],
                'email' => $email_prefix .  "_" . ($i + 1) . '@gmail.com',
                'password' => bcrypt('123123'),
                'role' => User::ROLE["CANDIDATE"]
            ]);

            // 100 ứng viên có CV, 50 ứng viên không có CV
            if ($i < 100) {
                DB::table('resumes')->insert([
                    'name' => $ten_nguoi[$i],
                    'title' => $ten_nguoi[$i] . ' đang tìm việc làm',
                    'email' => $email_prefix .  "_" . ($i + 1) . '@gmail.com',
                    'birthday' => $faker->dateTimeBetween('01-01-1990', '31-12-1998'),
                    'phone_number' => $faker->phoneNumber,

                    "m_job_id" => $job_category,
                    "user_id" => ($i + 1),

//                "m_location_id" => rand(1, 2),
//                "m_education_level_id" => rand(1, 5),
//                "m_experience_id" => rand(1, 8),
//                "m_working_form_id" => 1,

                    "m_location_id" => 1,
                    "m_education_level_id" => 4, // Đại học
                    "m_experience_id" => $m_experience_id,
                    "m_working_form_id" => 1
                ]);

                $job_category = rand(1, 3);
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
                    default:
                        break;
                }


                $pivot = count($skills);

                $jj = 0;

                // Nếu người có trình độ duới 1 năm kinh nghiêm
                if ($m_experience_id <= 2) {
                    $jj = 3;
                } else if ($m_experience_id <= 4) { // 1 năm < x < 2 năm
                    $jj = rand(4, 5);
                } else {
                    $jj = rand(5, 7);
                }

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

                print_r("Candidate: " . $i . " StartId: " . $startId . ", " . $job_category . ", skills: " . $jj . ", " . $m_experience_id. "\n");

            }
        }

        // Generate Data Companies
        $companies = array("Công ty TNHH Solashi", "Công ty cổ phần Misa", "Công ty cổ phần viễn thông FPT", "Công ty Cổ Phần OneSoft - Falcon Game Studio",
            "Công ty TNHH Shopee Express",
            "Công ty Cổ phần đầu tư Công Nghệ và Thương Mại Softdreams",
            "Công ty TNHH A", "Công ty TNHH B", "Công ty TNHH ZZZ");

        $desc = array("- Solashi tuy là một công ty non trẻ, nhưng chúng tôi luôn cố gắng đáp ứng sự tin tưởng của khách hàng bằng cách tạo ra các sản phẩm tốt nhất.

- Phương châm quản lý: góp phần tạo dựng và phát triển nên hình ảnh của xã hội với những ý tưởng sáng tạo và hữu ích tập trung vào phát triển con người.

- Chính sách bảo mật: với chính sách bảo mật của chúng tôi, thông tin cá nhân của bạn sẽ được xử lý và bảo vệ cẩn thận.

- Dịch vụ: tất cả bộ phận, nhân viên đều có trách nhiệm, nghĩa vụ mang lại lợi ích, gây dựng lòng tin cho khách hàng. ",
            "Trải qua 28 năm hình thành và phát triển, đến nay MISA đã xây dựng được đội ngũ hơn 3000 nhân sự, khẳng định được vị thế của mình trong lĩnh vực phát triển phần mềm: Top 5 công ty CNTT và Top 1 công ty làm sản phẩm tại Việt Nam với quy trình làm việc chuyên nghiệp, lộ trình phát triển sự nghiệp rõ ràng. Với khát khao vươn cao bay xa hơn nữa chúng tôi hy vọng bạn sẽ trở thành một mảnh ghép để đưa MISA vươn ra biển lớn, cùng bạn kiến tạo nên những thành tựu tuyệt vời

1. Tầm nhìn

Bằng nỗ lực sáng tạo trong khoa học, công nghệ và đổi mới trong quản trị, MISA mong muốn trở thành công ty có nền tảng, phần mềm và dịch vụ được sử dụng phổ biến nhất trong nước và quốc tế.

2. Sứ mệnh

Sứ mệnh của MISA là phát triển các nền tảng, phần mềm và dịch vụ công nghệ thông tin để thay đổi ngành kinh tế và giúp khách hàng thực hiện công việc theo phương thức mới, năng suất và hiệu quả hơn nhằm thúc đẩy sự phát triển của đất nước và các quốc gia trên thế giới.

3. Giá trị cốt lõi

Tin cậy: Các nền tảng, sản phẩm và dịch vụ MISA mang lại cho khách hàng đều có độ tin cậy cao, con người MISA với tri thức và văn hóa cao luôn mang lại cho khách hàng cảm giác tin cậy trong giao dịch và chuyển giao tri thức, công nghệ.

Tiện ích: Các nền tảng, sản phẩm và dịch vụ MISA luôn thỏa mãn mọi yêu cầu nghiệp vụ của khách hàng. Khách hàng có thể dễ dàng tiếp cận và sử dụng nền tảng, sản phẩm, dịch vụ của MISA bất cứ khi nào, bất cứ nơi nào. Đội ngũ tư vấn, hỗ trợ khách hàng của MISA luôn sẵn sàng phục vụ 365 ngày/năm và 24 giờ/ngày.

Tận tình: Con người MISA từ những người phát triển nền tảng, sản phẩm đến những người kinh doanh tư vấn và các bộ phận khác luôn luôn tận tâm, tận lực phục vụ vì lợi ích của khách hàng, làm cho khách hàng tin cậy và yêu mến như một người bạn, một người đồng hành trong sự nghiệp.",
            "FPT Telecom – Công ty thành viên có lợi nhuận lớn nhất, quản lý số thành viên đông đảo nhất trong Tập đoàn FPT. Đồng thời FPT Telecom cũng là đơn vị FPT đạt nhiều giải thưởng Sao Khuê nhất trong 3 năm liền, lọt TOP FAST 500 – Doanh nghiệp tăng trưởng nhanh nhất. Hiện nay, FPT Telecom đang ngày càng lớn mạnh và phát triển không ngừng. Với tiêu chí “Sáng tạo – Tăng trưởng”, chúng tôi đã có mặt tại tại 59 tỉnh, thành trên toàn quốc.

Ở FPT Telecom bạn sẽ tìm thấy sức trẻ, lòng nhiệt huyết và tinh thần dám đương đầu với thử thách. Hãy cho chúng tôi thấy được sự cam kết và tiềm năng của bạn để giúp chúng tôi đạt được những mục tiêu chiến lược của công ty, chúng tôi sẽ mở ra cho bạn cơ hội để vươn tới những mục tiêu phát triển sự nghiệp của bản thân bạn!",
            "Falcon - OneSoft thành lập năm 2010. Tới nay, Falcon tự hào là công ty phát triển ứng dụng di động hàng đầu Việt Nam, đơn vị sản xuất game top 3 Đông Nam Á. Hiện Falcon đã có hàng triệu người dùng từ các sản phẩm trên store của Apple và Google Play. Mục tiêu của chúng tôi là lọt vào top 10 những nhà phát triển Game hàng đầu thế giới. Với mục tiêu đó, chúng tôi cần những người giỏi. Chúng tôi đảm bảo môi trường làm việc thoải mái nhất, tốt nhất cho những người giỏi phát huy khả năng, sức sáng tạo và đảm bảo quyền lợi xứng đáng với thành quả họ tạo ra.

Đôi nét về sự phát triển của Falcon trong thời gian qua:

- Là công ty sản xuất game có doanh thu inapp cao nhất Việt Nam (game 1945) theo số liệu Sensor Tower. Mục tiêu trở thành công ty có game đạt doanh thu 1 triệu $ inapp đầu tiên do Việt Nam phát triển trong 2021.

- Là công ty sản xuất game thứ 3 của Việt Nam có game đạt 100 triệu + lượt tải. (tựa game Bob's World)",
            "Shopee là nền tảng thương mại điện tử ở Đông Nam Á và Đài Loan.

Ra mắt năm 2015, nền tảng thương mại Shopee được xây dựng nhằm cung cấp cho người sử dùng những trải nghiệm dễ dàng, an toàn và nhanh chóng khi mua sắm trực tuyến thông qua hệ thống hỗ trợ thanh toán và vận hành vững mạnh.

Chúng tôi có niềm tin mạnh mẽ rằng trải nghiệm mua sắm trực tuyến phải đơn giản, dễ dàng và mang đến cảm xúc vui thích. Niềm tin này truyền cảm hứng và thúc đẩy chúng tôi mỗi ngày tại Shopee.",
           "Công ty Cổ phần đầu tư công nghệ và thương mại Softdreams (gọi tắt là Softdreams) được thành lập vào năm 2012 tại Hà Nội với hoạt động ban đầu trong lĩnh vực phát triển phần mềm, công nghệ thông tin phục vụ doanh nghiệp và chính phủ.

Các sản phẩm phần mềm của Softdreams đang cung cấp cho hàng trăm nghìn doanh nghiệp với hàng chục triệu người dùng trên toàn quốc.

Các sản phẩm nổi bật trên thị trường

+ Hóa đơn điện tử Easyinvoice
+ Phần mềm kế toán Easybooks
+ Chữ ký số EasyCA
+ Phần mềm kế khai Easypit
+ Phần mềm in vé điện tử Easyticket", "Đây là mô tả của công ty CNHH A", "Đây là mô tả của công ty TNHH B", "Đây là mô tả của công ty TNHH ZZZ");

        $photoCompany = array("https://cdn.topcv.vn/140/company_logos/cong-ty-tnhh-solashi-600fd89f28f5c.jpg",
            "https://cdn.topcv.vn/80/company_logos/YVVFSY05ZUhqjlVHtBl2kOD1a189WFj0_1652947920____d78c5dd2ab820dcbb9a367b40e712067.jpg",
            "https://cdn.topcv.vn/80/company_logos/fpt-telecom-595c8c48f0e07_rs.jpg",
            "https://cdn.topcv.vn/80/company_logos/cong-ty-co-phan-onesoft-603358ac50d4b.jpg",
            "https://cdn.topcv.vn/80/company_logos/3hGPe93OfHOUL2QUpNJijMwJ6s0uZ3Gr_1637140440____ea75d9fb6acf791dbeee91c457f6863e.png",
            "https://cdn.topcv.vn/80/company_logos/cong-ty-co-phan-dau-tu-cong-nghe-va-thuong-mai-softdreams-5c6cb0f7177cb_rs.jpg", null, null, null);

        for ($i = 0; $i < count($companies); $i++) {
            DB::table('users')->insert([
                'name' => $companies[$i],
                'email' => $email_prefix . "_company_" . ($i + 1) . '@gmail.com',
                'password' => bcrypt('123123'),
                'role' => User::ROLE["COMPANY"]
            ]);

            DB::table('companies')->insert([
                'name' => $companies[$i],
                'description' => $desc[$i],
                'photo' => $photoCompany[$i],
                'user_id' => $i + $limitCandidate + 1
            ]);
        }
    }
}
