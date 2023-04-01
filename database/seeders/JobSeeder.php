<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     * @return void
     */
    public function run()
    {
        // 1. Web
        // 2. Mobile
        // 3. Tester

        $limitJob = 50;

        $webSkills = array("PHP", "Laravel", "FrontEnd", "BackEnd", "Python", "Django",
            "Flask", "Ruby", "Ruby on Rails", "Java", "Spring Framework",
            "ASP.NET", "MySQL", "PostgreSQL", "MongoDB", "Redis", "JavaScript", "TypeScript", "ReactJS",
            "VueJS", "AngularJS", "jQuery", "Bootstrap", "Material UI", "Sass/Less", "Git", "NodeJS", "NestJS"
        );

        $mobileSkills = array(
            "Swift",
            "Objective-C",
            "Java",
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

        $job_solashi = array(
            [
                'title' => ''
            ]
        );

        $job_softdreams = array(
            [
                'title' => 'Cộng Tác Viên Mobile (Flutter)',
                'description' => 'Tham gia xây dựng sản phẩm phần mềm của công ty, bao gồm:
+ Phát triển, nâng cấp ứng dụng Mobile đang triển khai cho hơn 150.000 người dùng cá nhân tại Việt Nam.
+ Xây dựng các ứng dụng Mobile phục vụ cho hơn 100.000 khách hàng doanh nghiệp Việt Nam đang sử dụng sản phẩm, dịch vụ phần mềm của SDS, cụ thể Phần mềm Hóa đơn điện tử EasyInvoice, Phần mềm Kế toán EasyBooks, Phần mềm chữ ký số trên Mobile EasyCA
- Đồng thời tham gia nghiên cứu, đề xuất, phát triển (R&D) các giải pháp kỹ thuật, các công nghệ áp dụng cho ứng dụng Mobile, đặc biệt là các công nghệ trên Framework Flutter.
- Tham gia cùng phòng phát triển Mobile trong việc định hình, đề xuất, xây dựng các kế hoạch công việc cho phòng. Tham gia định hướng chiến lược và phát triển sản phẩm của công ty.
- Nhận công việc, báo cáo kết quả làm việc với Quản lý trực tiếp.',
                'number_of_recruit' => 3,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id'=> 2,
                'm_salary_id' => 3,
//                'Flutter'
            ],
            [
                'title' => 'LẬP TRÌNH VIÊN NODEJS (FRESHER/JUNIOR/MIDDLE)',
                'description' => 'Tham gia phát triển, bảo trì các ứng dụng trên nền tảng web, sử dụng một trong các framework NodeJS.
Tìm hiểu yêu cầu, phân tích, thiết kế hệ thống theo yêu cầu từ phía khách hàng
Lên kế hoạch, quản lý tiến độ, đánh giá chất lượng của bản thân và các thành viên trong team.',
                'number_of_recruit' => 3,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id'=> 3,
                'm_salary_id' => 4
//                'NodeJS, NestJS, BackEnd'

            ]
        );

//        for ($i = 0; $i < $limitJob; $i++) {
//            DB::table('jobs')->insert([
//
//            ]);
//        }

        for ($i = 0; $i < count($job_softdreams); $i++) {
            DB::table('jobs')->insert($job_softdreams[$i]);
        }
    }
}
