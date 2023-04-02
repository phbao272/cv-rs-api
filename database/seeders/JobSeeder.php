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

        $job_solashi = array(
            [
                'title' => 'Java Developer',
                'description' => 'Phát triển các hệ thống (phần mềm ứng dụng liên quan mảng tài chính, ngân hàng,...) từ các bộ phận trong Công ty và đối tác.
Nghiên cứu, phát triển, triển khai, nâng cấp hệ thống theo yêu cầu
Thực hiện estimate task, viết tài liệu thiết kế, coding và UT.
Trao đổi với team và BrSE để làm rõ yêu cầu dự án.
Báo cáo định kỳ hoặc theo yêu cầu cho quản lý.',
                'number_of_recruit' => 1,
                'company_id' => 1,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 3,
                'm_salary_id' => 4,
                'skills' => [10, 11, 13] // Java, Spring Framework, MySQL
            ],
            [
                'title' => 'Senior Android Developer',
                'description' => 'Thiết kế và triển khai các tính năng hướng tới người dùng mới trong ứng dụng Android, tập trung vào trải nghiệm và sản phẩm điện tử tiêu dùng.

Xác định và triển khai các kiến ​​trúc mã hóa ứng dụng để cho phép phát triển tính năng và khả năng bảo trì trong tương lai.

Cộng tác với các nhóm đa chức năng để xác định, thiết kế và cung cấp các tính năng mới.

Mã kiểm tra đơn vị về độ bền, bao gồm các trường hợp cạnh, khả năng sử dụng và độ tin cậy chung.

Làm việc về sửa lỗi và cải thiện hiệu suất ứng dụng.

Làm việc trực tiếp với các nhà thiết kế sản phẩm để triển khai trải nghiệm hình ảnh và hoạt ảnh hàng đầu trong lớp.

Liên tục khám phá, đánh giá và triển khai các công nghệ mới để tối đa hóa hiệu quả phát triển.',
                'number_of_recruit' => 1,
                'company_id' => 1,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 7,
                'm_salary_id' => 10,
                'skills' => [10, 31, 34] // Java, Kotlin, Android
            ],
            [
                'title' => '[GẤP] REACTJS DEVELOPER (FRESHER/JUNIOR/MIDDLE)',
                'description' => 'Trách nhiệm công việc:
Hiểu life cycle, cơ chế render cập nhật data trong ứng dụng reactJS và tối ưu hóa được performance của ứng dụng
Có nền tảng vững chắc về HTML,CSS, Javascript
Nắm vững về pattern redux (các thành phần giao tiếp, flow data...).
Sử dụng thành thạo ES5, ES6.
Sử dụng thành thạo API reactJS, nắm được các API của bản mới cập nhật
Tốt nghiệp đại học, cao đẳng chuyên ngành IT',
                'number_of_recruit' => 1,
                'company_id' => 1,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 4,
                'm_salary_id' => 10,
                'skills' => [17, 18, 3, 19] // Javascript, Typescript, FrontEnd, ReactJS
            ],
            [
                'title' => '[Intern] Software Engineer (.Net, PHP, Java)',
                'description' => 'Lập trình phần mềm, website và các ứng dụng trên mobile và web
Làm quen phần mềm CRM Salesforce CRM
Training về ngôn ngữ Apex (Salesforce)
Lập trình các chức năng trên Hệ thống Salesforce (Apex Page, Trigger, Batch, Testclass, LWC, ...)
Dựa vào tài liệu thiết kế sẽ làm ở cả FrontEnd và Backend',
                'number_of_recruit' => 3,
                'company_id' => 1,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 1,
                'm_salary_id' => 2,
                'skills' => [1, 10, 12] // PHP, Java, .NET
            ],
            [
                'title' => 'Mobile Engineer (React Native)',
                'description' => 'Phát triển các tính năng mới hoặc cải thiện các tính năng hiện có cho ứng dụng PhotoStudy hàng đầu của chúng tôi để cung cấp trải nghiệm người dùng tuyệt vời trên cả thiết bị di động và web.

Phát triển các thành phần PhotoStudy khác nhau có thể dễ dàng tích hợp với các sản phẩm của đối tác.

Cung cấp mã chất lượng cao theo các phương pháp hay nhất để có hiệu suất, trải nghiệm người dùng và khả năng sử dụng lại tốt hơn.

Tham gia vào các cuộc thảo luận thiết kế, đánh giá mã và các phiên động não nhóm.

Khắc phục sự cố cơ sở mã hiện có, tìm kiếm các lỗi khó chịu và cấu trúc lại mã.

Thực hiện đo điểm chuẩn, hiệu suất và phân tích bảo mật.',
                'number_of_recruit' => 3,
                'company_id' => 1,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 3,
                'm_salary_id' => 2,
                'skills' => [34, 35, 32] // Android, iOS, ReactNative
            ],
        );

        $job_misa = array(
            [
                'title' => 'Lập Trình Viên Backend (NodeJS, Asp.Net, Vuejs ..)',
                'description' => 'Tham gia phát triển các sản phẩm phục vụ cho hàng trăm nghìn khách hàng về các mảng Tài chính kế toán, Điều hành doanh nghiệp, Quản lý bán hàng cũng như eLearning
Xây dựng và tối ưu sản phẩm đáp ứng hàng trăm nghìn người sử dụng đồng thời
Tham gia nghiên cứu và ứng dụng các công nghệ mới vào sản phẩm: Blockchain, AI, Machine Learning, BigData, RPA, …
Phối hợp cùng đội ngũ BA phân tích, thiết kế, đưa ra giải pháp để phát triển phần mềm đáp ứng đúng, đủ, tiện các yêu cầu của người dùng cuối',
                'number_of_recruit' => 3,
                'company_id' => 2,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 3,
                'm_salary_id' => 10,
                'skills' => [12, 14, 20, 27, 26] // ASP.NET, PostgreSQL, VueJS, NodeJS, Git
            ],
            [
                'title' => 'Senior Tester (Thu Nhập 25M ++) ',
                'description' => 'Nghiên cứu yêu cầu người dùng, điều kiện chấp nhận, chi tiết yêu cầu về phần mềm, thiết kế để xác định yêu cầu kiểm thử của dự án
Lập kế hoạch kiểm thử dựa trên các rủi ro, mức độ quan trọng, tần suất sử dụng, và xác định các yêu tố liên quan như: phương pháp, đo lường, nguồn lực, điều kiện kiểm thử...
Xây dựng kịch bản kiểm thử, điều kiện kiểm thử, chuẩn bị dữ liệu kiểm thử
Chịu trách nhiệm chính cho quá trình kiểm thử SIT trước khi chuyển giao sang giai đoạn UAT
Thực hiện ghi nhận lỗi và lập báo cáo cáo kiểm thử; đồng thời phân tích dữ liệu kiểm thử để đưa ra các đánh giá, giải pháp khắc phục và kế hoạch nâng cao chất lượng kiểm thử
Phối hợp với các đơn vị chức năng trong Trung tâm CNTT và các đơn vị liên quan trong việc giải quyết, khắc phục sự cố, đảm bảo chất lượng hệ thống',
                'number_of_recruit' => 2,
                'company_id' => 2,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 5,
                'm_salary_id' => 8,
                'skills' => [36, 40, 43, 44, 47, 48] // ASP.NET, PostgreSQL, VueJS, NodeJS
            ],
            [
                'title' => 'Lập Trình Viên Python',
                'description' => 'Phát triển api cho dự án.
Đảm bảo code của các components và tổng thể ứng dụng sạch sẽ, chất lượng, dễ bảo trì.
Phối hợp với các thành viên khác trong nhóm (phía Frontend) để thiết kế, triển khai các yêu cầu.
Đảm bảo tiêu chuẩn hiệu suất của các api.
Thu thập ý kiến phản hồi và xây dựng các hướng giải quyết cho người sử dụng và khách hàng.
Sẵn sàng nghiên cứu các giải pháp công nghệ trên thị trường để áp dụng vào dự án hoặc sản phẩm mới.',
                'number_of_recruit' => 1,
                'company_id' => 2,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 3,
                'm_salary_id' => 10,
                'skills' => [5, 6, 14, 26] // Python, Django, PostgreSQL, Git
            ],
            [
                'title' => 'Thực Tập Sinh Frontend ( Vuejs Developer)',
                'description' => 'Tham gia phát triển các ứng dụng trên web/app cho các khách hàng Nhật và Âu Mỹ
Tham gia đầy đủ toàn bộ các quy trình phát triển của một dự án phần mềm: làm việc với khách hàng tìm hiểu yêu cầu, phân tích, thiết kế, lập trình, triển khai, nghiên cứu công nghệ....
Được đào tạo giải pháp của các hãng lớn trên thế giới như Oracle, IBM, Microsoft
Làm việc theo sự phân công của Trưởng nhóm/Quản lý dự án, phối hợp giữa các nhóm để phát triển sản phẩm.',
                'number_of_recruit' => 3,
                'company_id' => 2,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 1,
                'm_salary_id' => 2,
                'skills' => [20, 26, 23] // VueJS, Git, Bootstrap
            ],
            [
                'title' => 'Fresher Java Web Fullstack Developer',
                'description' => 'o Kiến thức về Database: Mô hình quan hệ thực thể (ERM). Hệ quản trị cơ sở dữ liệu Microsoft SQL Server - hiểu và làm việc với truy vấn SQL: T-SQL Statements, Advanced DML, SQL Join, Index, View., sử dụng các đối tượng nâng cao Database Objects: Transactions, Stored Procedure, User Defined Function, Trigger.

o Lập trình Java Web: Java Core – Java SE 8 (Basic concepts: control-flow, keyword…Classes and Objects; OOP; String, static, Collections, Java IO, Concurrency, Lambda Expressions, Exceptions; JDBC); Thiết kế web với HTML5/ CSS3/ Bootstrap 4, JS, jQuery, AJAX. JSP/Servlet Basics, Exception Handling, Mô hình MVC; Hibernate (Configuration; Hibernate Mapping; Queries and Criteria; Performance; Stored Procedure); Sử dụng thành thạo Spring Framework (Spring core: Spring MVC; XML, Javabase, Annotation; Spring Data JPA; Spring); Build Tools: Maven, Gradle.

o Phát triển phần mềm theo quy trình chuyên nghiệp: Hiểu các bước thực hiện dự án, bao gồm thiết kế ứng dụng, làm GUI, thiết kế code, Thực hiện Code Review (using StyleCop, FXCop), Unit Test (Nunit), kiểm tra chất lượng dự án. Luyện tập kỹ năng code trong dự án với các chuyên gia công nghệ & lập trình viên nhiều năm kinh nghiệm.',
                'number_of_recruit' => 30,
                'company_id' => 2,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 2,
                'm_salary_id' => 3,
                'skills' => [3, 4, 10, 13, 11] // FrontEnd, BackEnd, Java, MySQL, Spring Framework
            ],
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
                'm_experience_id' => 2,
                'm_salary_id' => 3,
                'skills' => [33] // Flutter
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
                'm_experience_id' => 3,
                'm_salary_id' => 4,
                'skills' => [27, 28, 4] // 'NodeJS, NestJS, BackEnd'
            ],
            [
                'title' => 'Kỹ sư kiểm thử phần mềm (Tester)',
                'description' => '- Kiểm tra chất lượng sản phẩm để đảm bảo sản phẩm được tạo ra đáp ứng yêu cầu của khách hàng

- Kiểm thử chương trình/sản phẩm theo kịch bản kiểm thử (test case)

- Nghiên cứu tài liệu yêu cầu khách hàng để thực hiện lập kịch bản kiểm thử (test case).

- Lập kế hoạch đảm bảo chất lượng, đề xuất phương pháp kiểm soát việc áp dụng quy trình cho các dự án

',
                'number_of_recruit' => 5,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 3,
                'm_salary_id' => 4,
                'skills' => [44, 42, 36] // Unit test, Kiểm thử tích hợp (Integration testing), Automation test
            ]
        );

        $jobs = array_merge($job_solashi, $job_misa, $job_softdreams);

        for ($i = 0; $i < count($jobs); $i++) {
            $job = $jobs[$i];
            $skills = $job['skills'];
            unset($job['skills']);

            DB::table('jobs')->insert($job);


            for ($j = 0; $j < count($skills); $j++) {
                DB::table('job_skills')->insert([
                    'job_id' => $i + 1,
                    'm_skill_id' => $skills[$j]
                ]);
            }
        }
    }
}
