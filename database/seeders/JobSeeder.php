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

                'm_job_id' => 1,
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
                'm_job_id' => 2,
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
                'm_job_id' => 1,
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
                'm_job_id' => 1,
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
                'm_job_id' => 2,
                'm_salary_id' => 2,
                'skills' => [34, 35, 32] // Android, iOS, ReactNative
            ],
        ); // 5

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
                'm_job_id' => 1,
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
                'm_job_id' => 3,
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
                'm_job_id' => 1,
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
                'm_job_id' => 1,
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
                'm_job_id' => 1,
                'm_salary_id' => 3,
                'skills' => [3, 4, 10, 13, 11] // FrontEnd, BackEnd, Java, MySQL, Spring Framework
            ],
        ); // 5

        $job_fpt = array(
            [
                'title' => 'Lập Trình Web - Fresher Web PHP (8M-12M)',
                'description' => 'Tham gia dự án với vai trò Lập trình viên hỗ trợ phát triển dịch vụ Thiết kế Website của dự án
Tham gia xây dựng sản phẩm, phát triển các tính năng mới, sản phẩm mới cùng đội dự án
Các công việc khác trao đổi cụ thể khi phỏng vấn. ​',
                'number_of_recruit' => 4,
                'company_id' => 3,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 2,
                'm_job_id' => 1,
                'm_salary_id' => 4,
                'skills' => [1, 2, 17] // PHP, Laravel, Javascript
            ],
            [
                'title' => 'Senior Full Stack Developer',
                'description' => 'Bạn sẽ là một trong những nhân tố chính trong đội Tech của chúng tôi, phụ trách về sáng tạo và phát triển dưới góc nhìn về công nghệ, trong mô hình kinh doanh của công ty. Bạn đảm bảo các tiêu chuẩn cao trong hiệu suất và sự cam kết đối với công việc, và thúc đẩy những kỹ năng này với cấp dưới của bạn. Bạn sẽ đóng góp những ý tưởng và đổi mới với công ty dưới tư cách là một chuyên gia công nghệ.',
                'number_of_recruit' => 1,
                'company_id' => 3,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 5,
                'm_job_id' => 1,
                'm_salary_id' => 10,
                'skills' => [13, 27, 19, 20, 21] // MySQL, NodeJS, ReactJS, VueJS, AngularJS
            ],
            [
                'title' => 'Front-End Developer (React Native, ReactJS)',
                'description' => 'Lập trình các giao diện Front trong hệ thống phần mềm cho ngành tài chính như:
Phần mềm giao dịch trực tuyến (web và app) cho core chứng khoán
Phần mềm giao dịch trực tuyến (web và app) cho ngân hàng lưu ký, giám sát
Hệ thống cung cấp dữ liệu chứng khoán thời gian thực
Và đặc biệt tham gia xây dựng hệ thống hỗ trợ phân tích trong đầu tư chứng khoán, tài chính
Làm việc với các dự án tại công ty chứng khoán như WSS, VTSS, VICS, VCBS, SHS và các ngân hàng như VCB, CTG, TPB ... cũng như hệ thống cung cấp dữ liệu datapro.vn, stockprice.vn.
Hỗ trợ kỹ thuật trong quá trình triển khai dự án và bảo hành bảo trì.',
                'number_of_recruit' => 2,
                'company_id' => 3,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 3,
                'm_job_id' => 1,
                'm_salary_id' => 10,
                'skills' => [13, 17, 19, 23, 32] // MySQL, Javascript, ReactJS, Bootstrap, ReactNative
            ],
            [
                'title' => 'Phát triên ứng dụng trên hệ điều hàng iOS',
                'description' => 'Phát triên ứng dụng trên hệ điều hàng iOS',
                'number_of_recruit' => 2,
                'company_id' => 3,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 3,
                'm_job_id' => 2,
                'm_salary_id' => 10,
                'skills' => [29, 30, 35] // Swift, Objective-C, iOS
            ],
            [
                'title' => 'Backend Developer (.Net)',
                'description' => 'Tốt nghiệp đại học chuyên ngành công nghệ thông tin / điện tử viễn thông hoặc có kinh nghiệm và đam mê lập trình (không cần bằng cấp nếu có kinh nghiệm).
Sử dụng tốt .Net, C#
Có kiến thức về phần mềm quản trị doanh nghiệp ERP hoặc phần mềm kế toán, chứng khoán là một lợi thế.
Đã làm với các chuẩn kết nối SWIFT và FIX là một lợi thế
Có kiến thức về Thread, Synchronization (mutex, semaphore...), socket là một lợi thế
Do các dự án của RPSoft tương đối dài nên Ưu tiên người xác định gắn bó lâu dài với công ty
Chấp nhận sinh viên mới tốt nghiệp: sẽ được đào tạo on job',
                'number_of_recruit' => 3,
                'company_id' => 3,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 2,
                'm_job_id' => 1,
                'm_salary_id' => 3,
                'skills' => [12, 4, 13, 14] // ASP.NET, BackEnd, MySQL, PostgreSQL
            ],
            [
                'title' => 'Nodejs Developer',
                'description' => '- Hỗ trợ một sản phẩm có hiệu suất cao và có thể mở rộng trong một khung thời gian tối thiểu

- Có thể viết mã mô-đun, được kiểm tra tốt và có thể bảo trì

- Duy trì hệ thống hiện tại và các công nghệ của nó cũng như chuyển sang hệ thống mới

- Triển khai các tính năng mới, tái cấu trúc mã và sửa lỗi & giải quyết các vấn đề kỹ thuật

- Xác định, đánh giá, theo dõi và giảm thiểu các vấn đề/rủi ro ở nhiều cấp độ

- Quản lý vòng đời phát triển ứng dụng một cách linh hoạt/hiệu quả một cách nhanh chóng

- Truyền đạt tiến độ, dự đoán các tắc nghẽn hiệu suất (cung cấp báo cáo bất cứ khi nào được yêu cầu)

- Phối hợp tốt với các kỹ sư đồng đẳng, trưởng nhóm công nghệ và các bên liên quan kỹ thuật trong các dự án',
                'number_of_recruit' => 3,
                'company_id' => 3,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 2,
                'm_job_id' => 1,
                'm_salary_id' => 3,
                'skills' => [27, 4, 15, 14] // NodeJS, BackEnd, MongoDB, PostgreSQL
            ],
            [
                'title' => 'Lập Trình Viên Mobile (Android/Flutter Developer)',
                'description' => '
Nghiên cứu các ứng dụng Quản trị, vận hành doanh nghiệp
Nghiên cứu Hệ thống vận hành F&B
Nghiên cứu Hệ thống IT phục  vụ F&B
Đề xuất lựa chọn giải pháp Công nghệ
Khảo sát yêu cầu: Phân tích yêu cầu, phân tích Gaps
Phân tích thiết kế: Giải pháp đáp ứng; Quy trình tương lai; Kịch bản kiểm thử
Xây dựng phần mềm và Kiểm thử nội bộ
Kiểm thử phần mềm: xây dựng kịch bản kiểm thử và Unit test
Quản lý các version thay đổi phần mềm
Chuyển giao và nghiệm thu phần mềm
Bảo trì, sửa chữa và nâng cấp phần mềm
Hỗ trợ đào tạo người dùng sử dụng phần mềm
Các công việc khác theo sự chỉ đạo của Trưởng phòng',
                'number_of_recruit' => 2,
                'company_id' => 3,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 2,
                'm_job_id' => 2,
                'm_salary_id' => 3,
                'skills' => [34, 33] // Android, Flutter
            ],
            [
                'title' => 'Thực Tập Sinh Frontend Reactjs',
                'description' => '- Có đam mê làm việc với ReactJs/NextJs

- Hiểu biết về REST API

- Có tinh thần học hỏi, cầu thị, sẵn sàng làm việc trong môi trường startup.

- Được đào tạo chuyên sâu về Frontend',
                'number_of_recruit' => 3,
                'company_id' => 3,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 1,
                'm_job_id' => 1,
                'm_salary_id' => 1,
                'skills' => [3, 19, 17] // FrontEnd, ReactJS, Javascript
            ],
        ); // 8

        $job_shopee = array(
            [
                'title' => '[Senior] PHP Developer',
                'description' => '
Có kinh nghiệm với ít nhất một trong các PHP framework (Zend Framework, Yii, Laravel, Moodle, Wordpress...);
Kiến thức vững chắc về OOP và Design Patterns;
Có kinh nghiệm với MySQL, thiết kế cơ sở dữ liệu, lập hồ sơ truy vấn và tối ưu hóa;
Có kinh nghiệm với NoSQL (Redis, MongoDB, Couchbase, v.v.);
Có kinh nghiệm phát triển dự án PHP thuần;
Kinh nghiệm xây dựng các ứng dụng web có tính sẵn sàng cao là một lợi thế;
Kiến thức về JavaScript, HTML, CSS.',
                'number_of_recruit' => 1,
                'company_id' => 5,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 5,
                'm_job_id' => 1,
                'm_salary_id' => 10,
                'skills' => [1, 2, 13] // PHP, Laravel, MySQL
            ],
            [
                'title' => '[Senior] Tester',
                'description' => 'Xuất sắc trong tư duy logic.

Ham học hỏi những điều mới trong công việc.

Kỹ năng giải quyết vấn đề, tập trung, chủ động và độc lập.

Tinh thần làm việc nhóm và giao tiếp tốt.

Có khả năng làm việc dưới áp lực cao.',
                'number_of_recruit' => 1,
                'company_id' => 5,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 5,
                'm_job_id' => 3,
                'm_salary_id' => 10,
                'skills' => [36, 44, 42, 48, 49] //
            ],
            [
                'title' => 'Technical Leader FrontEnd',
                'description' => 'Dẫn dắt các nhóm trong việc lập kế hoạch, thiết kế và phát triển các ứng dụng phần mềm hoặc các chương trình tiện ích chuyên biệt/mạng và/hoặc môi trường phần cứng sẽ nâng cao khả năng của tổ chức/khách hàng để đạt được các mục tiêu và mục tiêu chiến lược

Kỹ năng thiết kế an ninh mạng, Kỹ năng thiết kế mạng

Xây dựng kế hoạch và khuôn khổ kinh doanh liên tục

Kỹ năng Đảm bảo chất lượng phần mềm

Cung cấp hướng dẫn kỹ thuật và hướng dẫn phù hợp cho các thành viên cấp thấp',
                'number_of_recruit' => 1,
                'company_id' => 5,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 8,
                'm_job_id' => 1,
                'm_salary_id' => 10,
                'skills' => [3, 17, 18, 19, 20, 21, 22, 26] // FrontEnd, Javascript, Typescript, ReactJS, VueJS, AngularJS, jQuery, git
            ],
            [
                'title' => '[Junior-Senior] Software Developer (Java)',
                'description' => 'Kiến thức sâu về phát triển phần mềm Java với ít nhất 2 năm kinh nghiệm thực tế

Đảm bảo chất lượng mã và duy trì tính toàn vẹn của chức năng

Xem lại mã của bạn và chịu trách nhiệm về công việc lập trình của bạn

Sẵn sàng học hỏi và thích nghi với công nghệ mới',
                'number_of_recruit' => 1,
                'company_id' => 5,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 4,
                'm_job_id' => 1,
                'm_salary_id' => 5,
                'skills' => [10, 11] // Java, Spring, Typescript, ReactJS, VueJS, AngularJS, jQuery, git
            ],
        ); // 4

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
                'company_id' => 6,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 2,
                'm_job_id' => 2,
                'm_salary_id' => 3,
                'skills' => [33] // Flutter
            ],
            [
                'title' => 'LẬP TRÌNH VIÊN NODEJS (FRESHER/JUNIOR/MIDDLE)',
                'description' => 'Tham gia phát triển, bảo trì các ứng dụng trên nền tảng web, sử dụng một trong các framework NodeJS.
Tìm hiểu yêu cầu, phân tích, thiết kế hệ thống theo yêu cầu từ phía khách hàng
Lên kế hoạch, quản lý tiến độ, đánh giá chất lượng của bản thân và các thành viên trong team.',
                'number_of_recruit' => 3,
                'company_id' => 6,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_job_id' => 1,
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
                'company_id' => 6,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 3,
                'm_job_id' => 3,
                'm_salary_id' => 4,
                'skills' => [44, 42, 36] // Unit test, Kiểm thử tích hợp (Integration testing), Automation test
            ],
            [
                'title' => 'Mobile Developers',
                'description' => '- Tốt nghiệp ĐH chuyên ngành CNTT hoặc ĐTVT hoặc tương đương

- Thuần thục trong lĩnh vực lập trình di động: iOS (Objective-C,Swift) hoặc Android (Java, Kotlin), submit app lên store

- Hiểu sâu về thread, multi-threading và quản lý Memory

- Có hiểu biết về protocol, delegate và higher order functions, GCD

- Có hiểu biết về thiết kế UI, hiểu biết sâu về AFNetworking, Alamofire, JSON encoder, decoder

- Có khả năng lập trình Cross-platform (Flutter hoặc tương đương) là một lợi thế

- Có thể sử dụng tiếng Anh trong công việc

- Đam mê công nghệ

- Đọc và hiểu tài liệu kỹ thuật tiếng Anh

- Làm việc nhóm hiệu quả linh hoạt

- Trung thực và có tinh thần trách nhiệm

- Chủ động sáng tạo',
                'number_of_recruit' => 2,
                'company_id' => 6,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 4,
                'm_job_id' => 2,
                'm_salary_id' => 10,
                'skills' => [29, 30, 31, 10] // Objective-C, Swift, Java, Kotlin
            ],
            [
                'title' => 'Mobile Developers ( IOS / Android)',
                'description' => '- Tốt nghiệp ĐH chuyên ngành CNTT hoặc ĐTVT hoặc tương đương

- Thuần thục trong lĩnh vực lập trình di động: iOS (Objective-C,Swift) hoặc Android (Java, Kotlin), submit app lên store

- Hiểu sâu về thread, multi-threading và quản lý Memory

- Có hiểu biết về protocol, delegate và higher order functions, GCD

- Có hiểu biết về thiết kế UI, hiểu biết sâu về AFNetworking, Alamofire, JSON encoder, decoder

- Có khả năng lập trình Cross-platform (Flutter hoặc tương đương) là một lợi thế

- Có thể sử dụng tiếng Anh trong công việc

- Đam mê công nghệ

- Đọc và hiểu tài liệu kỹ thuật tiếng Anh

- Làm việc nhóm hiệu quả linh hoạt

- Trung thực và có tinh thần trách nhiệm

- Chủ động sáng tạo',
                'number_of_recruit' => 2,
                'company_id' => 6,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 4,
                'm_job_id' => 2,
                'm_salary_id' => 4,
                'skills' => [34, 35, 31, 10] // Android, iOS, Java, Kotlin
            ],
            [
                'title' => 'LẬP TRÌNH WEB, APP (CSS/HTML)',
                'description' => 'Tối thiểu biết cơ bản về Front-end: CSS, HTML, JS..
Có ít nhất 3 năm kinh nghiệm làm các sản phẩm
Thành thạo php, biết về drupal 7
Đã làm ít nhất 2 app và đã cho lên CH play và Apple store
Biết cài đặt, sử dụng môi trường chạy web, app với Linux
Đã từng làm cổng thanh toán online',
                'number_of_recruit' => 2,
                'company_id' => 6,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 5,
                'm_job_id' => 1,
                'm_salary_id' => 6,
                'skills' => [1, 2, 3, 10] // PHP, Laravel, FrontEnd, Java
            ],
            [
                'title' => 'Web Developer (Java, Spring, JavaScript)',
                'description' => 'Ít nhất 3-5 năm kinh nghiệm

Front Web Developer Giỏi Java, Spring boot, HTML, CSS, và JavaScript Technologies

Điều kiện ưu tiên cho ứng viên

CNTT hoặc chuyên ngành liên quan

Những người có thể nói tiếng Anh hoặc tiếng Hàn

Khả năng phát triển web front-end

Kinh nghiệm phát triển Java Back-end hoặc kiến ​​thức về Ứng dụng Back-end

Những người tiếp tục nghiên cứu và ứng dụng nhanh các công nghệ CNTT mới

Nhiều dự án phát triển web có kinh nghiệm

Những người có kỹ năng giải quyết vấn đề kỹ thuật xuất sắc

Một người có thể lãnh đạo nhóm tốt',
                'number_of_recruit' => 1,
                'company_id' => 6,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 5,
                'm_job_id' => 1,
                'm_salary_id' => 6,
                'skills' => [17, 11, 10] // Javascript, Spring, Java
            ],
            [
                'title' => 'Web Engineer (NodeJS, TypeScript, JavaScript)',
                'description' => 'Thiết kế, triển khai và bảo trì các thành phần phần mềm trong các hệ thống phân tán, phức tạp.

Phối hợp chặt chẽ với các nhóm khác (QA, Hỗ trợ kỹ thuật) để chẩn đoán và giải quyết các lỗi phần mềm một cách hiệu quả.

Tham gia vào các hoạt động thiết kế hợp tác nhóm và đánh giá mã.

Ưu tiên các nhiệm vụ và liên lạc với các ước tính nỗ lực quản lý cấp cao và tình trạng dự án theo định kỳ.

Có kinh nghiệm phát triển giao diện web.

Phát triển các sản phẩm mới an toàn, dễ bảo trì và mở rộng quy mô.

Làm quen với thiết kế hướng đối tượng và các mẫu thiết kế hiện đại.',
                'number_of_recruit' => 1,
                'company_id' => 6,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 6,
                'm_job_id' => 1,
                'm_salary_id' => 7,
                'skills' => [1, 13, 27, 19, 20, 21, 28] // PHP, MySQL, NodeJS, ReactJS, VueJS, AngularJS, NestJS
            ],
        ); // 8

        $job_a = array(
            [
                'title' => 'Software Engineering Intern',
                'description' => 'Software Engineering Intern',
                'number_of_recruit' => 2,
                'company_id' => 7,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 2,
                'm_job_id' => 1,
                'm_salary_id' => 3,
                'skills' => [17, 5] // Javascript, Python
            ],
            [
                'title' => 'Senior Frontend Developer (Reactjs)',
                'description' => '• Làm việc với Người quản lý sản phẩm và Nhà thiết kế để triển khai và thiết kế thế hệ sản phẩm tiếp theo
• Xây dựng và viết bài kiểm tra đơn vị cho các tính năng mới
• Hợp tác với các nhóm phụ trợ để giúp định hình các điểm cuối API
• Làm việc với các nhóm UX để cung cấp chức năng quan trọng cho ứng dụng hàng đầu của chúng tôi
• Là thành viên chủ chốt của đội ngũ kỹ sư front end
• Duy trì các tiêu chuẩn và thông lệ mã hóa xuất sắc
• Đào tạo cho Fresher/Junior dev
• Thiết kế, phát triển, xem xét, triển khai và quản lý mã ứng dụng ReactJS cho sản xuất
• Hiểu các yêu cầu của doanh nghiệp và sử dụng kiến ​​thức này để phát triển các ứng dụng phù hợp với yêu cầu này
• Làm việc với các nhóm phân phối để đạt được thành công thông qua phát triển bằng cách sử dụng các phương pháp, quy trình và công cụ của CI/CD và DevOps',
                'number_of_recruit' => 2,
                'company_id' => 7,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 6,
                'm_job_id' => 1,
                'm_salary_id' => 6,
                'skills' => [3, 17, 19] // FrontEnd, Javascript, ReactJS
            ],
            [
                'title' => 'Senior Software Engineer Back End',
                'description' => 'Mô tả công việc:

- Thiết kế, triển khai và bảo trì các thành phần phần mềm trong các hệ thống phân tán, phức tạp.

- Phối hợp chặt chẽ với các nhóm khác (QA, Hỗ trợ kỹ thuật) để chẩn đoán và giải quyết các lỗi phần mềm một cách hiệu quả.

- Tham gia vào các hoạt động thiết kế hợp tác nhóm và đánh giá mã.

- Sắp xếp thứ tự ưu tiên các nhiệm vụ và liên lạc với các ước tính nỗ lực quản lý cấp cao và tình trạng dự án theo định kỳ.

Những lợi ích:

- Mức lương hấp dẫn',
                'number_of_recruit' => 2,
                'company_id' => 7,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 6,
                'm_job_id' => 1,
                'm_salary_id' => 6,
                'skills' => [4, 16, 15, 8, 9, 13] // BackEnd, Redis, MongoDB, Ruby, Ruby on Rails, MySQL
            ],
            [
                'title' => 'Senior ReactJS Engineer',
                'description' => '- Chơi trong một nền văn hóa năng động, hợp tác, minh bạch, không phân cấp và không có cái tôi, nơi tài năng của bạn được đánh giá cao hơn chức danh.

- Kiến thức thực tế về lập trình để đưa ra các tiêu chuẩn bảo mật, thông số kỹ thuật thiết kế, kiểm tra sự tuân thủ và duy trì trách nhiệm kỹ thuật trong tất cả các giai đoạn phát triển

- Giao tiếp với các đồng nghiệp quốc tế để hiểu các yêu cầu, vấn đề, kỳ vọng; đóng góp ý kiến; để nhanh chóng chia sẻ rủi ro/vấn đề cũng như giải quyết chúng…

- Xác định các phương pháp tiếp cận mới tốt nhất cho tổ chức và chịu trách nhiệm đào tạo các nhà phát triển mới về cách triển khai phương pháp đó

- Thực hành phát triển phần mềm nhanh nhẹn và trở thành một người chơi tuyệt vời trong nhóm.',
                'number_of_recruit' => 1,
                'company_id' => 7,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 6,
                'm_job_id' => 1,
                'm_salary_id' => 6,
                'skills' => [3, 19, 25] // FrontEnd, ReactJS, Sass,
            ],
        ); // 4

        $job_b = array(
            [
                'title' => 'Junior Tester',
                'description' => 'Hiểu biết thấu đáo về vòng đời của phần mềm

Hiểu biết tốt về các loại thử nghiệm và kỹ thuật thiết kế trường hợp thử nghiệm khác nhau

Kiến thức về các công cụ theo dõi lỗi như Redmine, Trac, Bugzilla, Mantis, Testlink, JIRA

Kinh nghiệm làm việc trong báo cáo và mô tả sự bất thường

Kiến thức về KPI chính chất lượng

Tư duy lấy khách hàng làm trọng tâm, thái độ can-do và tinh thần làm việc nhóm cao

Khả năng đặt câu hỏi đúng

Chú ý đến chi tiết

Tư duy phê phán và khả năng nhìn thấy bức tranh lớn

Khả năng tóm tắt và đi thẳng vào vấn đề, chủ động trong giao tiếp

Tiếng Anh giao tiếp tốt

Kiến thức / kinh nghiệm về các chủ đề sau là một lợi thế

Nhà phát triển Azure

thử tải

Kiểm tra năng suất

Kiến thức cơ bản về HTML/CSS, client/server flow

Có kinh nghiệm sử dụng công cụ kiểm thử tự động (NeoLoad)',
                'number_of_recruit' => 2,
                'company_id' => 8,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 3,
                'm_job_id' => 3,
                'm_salary_id' => 4,
                'skills' => [44, 36] //
            ],
            [
                'title' => 'Manual/Automation QA Engineer (Software Tester)',
                'description' => 'Hơn 2 năm kinh nghiệm làm việc trong việc thử nghiệm các giải pháp phần mềm dựa trên web và ứng dụng cũng như Đảm bảo chất lượng.

Kiến thức vững chắc về các phương pháp, công cụ và quy trình QA phần mềm.

Thành tích đã được chứng minh khi làm việc với quản lý sản phẩm, nhà phát triển và kỹ sư sản xuất trong môi trường Agile.

Có kinh nghiệm về thử nghiệm tự động dịch vụ web (REST API) là một lợi thế.

Trải nghiệm thực tế với QA từ đầu đến cuối vòng đời phát triển phần mềm.

Kỹ năng tổ chức, giao tiếp và giao tiếp rất tốt (bao gồm cả kỹ năng quản lý / hợp tác nhóm).

Có thể giao tiếp bằng tiếng Anh.

Kỹ năng phân tích và giải quyết vấn đề mạnh mẽ.',
                'number_of_recruit' => 4,
                'company_id' => 8,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 4,
                'm_job_id' => 3,
                'm_salary_id' => 4,
                'skills' => [44, 36, 41] //
            ],
            [
                'title' => '[Fresher] Lập trình viên Mobile Flutter/iOS/Android',
                'description' => 'Tham gia phát triển dự án mobile theo phân công của công ty.
Làm việc theo mô hình phát triển dự án Agile, Scrum.
Cùng cấp quản lý phân tích và thiết kế các tính năng sản phẩm.
Nghiên cứu công nghệ mới, đưa ra giải pháp áp dụng vào sản phẩm dịch vụ của công ty.
Thực hiện bảo trì và nâng cấp các sản phẩm dịch vụ của công ty.
Phối hợp với đồng nghiệp trong nhóm để hoàn thành nhiệm vụ.
Thực hiện các công việc khác theo phân công của cấp quản lý.',
                'number_of_recruit' => 2,
                'company_id' => 8,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 2,
                'm_job_id' => 2,
                'm_salary_id' => 3,
                'skills' => [29, 34, 35, 33] // Swift, Android, iOS, Flutter
            ],
            [
                'title' => '[Middle-Senior] iOS Developer',
                'description' => '2-5 năm kinh nghiệm. Các nghiên cứu đã được chứng minh về khoa học máy tính hoặc công nghệ phần mềm. Kinh nghiệm đã được chứng minh với tư cách là nhà phát triển ứng dụng iOS cấp cao. Kiến thức về nguyên tắc thiết kế của Apple, nguyên tắc giao diện ứng dụng, Dịch vụ phụ trợ của iOS. Có kinh nghiệm làm việc với dữ liệu từ xa thông qua REST và JSON, WebSocket, HTTPS. Có kinh nghiệm với Cổng thông tin Apple, Quy trình làm việc kết nối App Store, Tạo và xuất hồ sơ và chứng chỉ phát triển và phân phối. Quen thuộc với Thông báo đẩy từ xa và trong ứng dụng, Sinh trắc học, Nguyên tắc bảo mật ứng dụng dành cho thiết bị di động, Thuật toán mã hóa, Keycloak. Kiến thức về các dịch vụ Firebase, đặc biệt là Crashlytics và Phân phối ứng dụng. Kiến thức về các thư viện dựa trên C, thư viện của bên thứ ba và API. Trải nghiệm Android là một lợi thế bổ sung. Kinh nghiệm với các ứng dụng tài chính và/hoặc thuật ngữ và phương pháp tài chính cũng sẽ là một lợi thế',
                'number_of_recruit' => 2,
                'company_id' => 8,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 4,
                'm_job_id' => 2,
                'm_salary_id' => 4,
                'skills' => [29, 35, 26, 30] // Swift, iOS, Git, Object-C
            ],
            [
                'title' => 'Mobile Developer (Android/iOS)',
                'description' => 'Android:

Tham gia thiết kế, phát triển và tối ưu hóa hiệu suất của ứng dụng trên Android
Phân tích, thiết kế, lập trình, kiểm tra, viết tài liệu và bảo trì các sản phẩm dự án
Nghiên cứu các công nghệ và thư viện mới, giúp cải tiến chất lượng sản phẩm
Phối hợp chặt chẽ với BA, Designer, và các thành viên khác trong nhóm dự án để đề xuất, đưa ra các ý tưởng, kế hoạch của dự án
iOS:

Thiết kế, phát triển và tối ưu hóa hiệu suất của các sản phẩm trên nền tảng iOS
Phối hợp với nhóm Thiết kế Sản phẩm để xác định, thiết kế và tinh chỉnh các tính năng của sản phẩm
Phối hợp với QA trong việc tích hợp, triển khai CI/CD nhằm kiểm tra nghiêm ngặt đảm bảo chất lượng ứng dụng tốt nhất
Liên tục khám phá, đánh giá và triển khai các công nghệ mới nhằm tối đa hóa hiệu quả phát triển của ứng dụng sản phẩm',
                'number_of_recruit' => 2,
                'company_id' => 8,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 4,
                'm_job_id' => 2,
                'm_salary_id' => 4,
                'skills' => [29, 35, 26, 30, 34, 31] // Swift, iOS, Git, Object-C, Android, Kotlin
            ],
            [
                'title' => 'Web Developer (PHP, VueJS)',
                'description' => 'Đam mê lập trình và hứng thú các công nghệ lĩnh vực web.
Phát triển dự án Website, Web application đa lĩnh vực cho công ty và khách hàng.
Xây dựng hệ thống doanh nghiệp ERP, CMS, E-commerce, Crypto website … ứng dụng kỹ năng cả Frontend và Backend.
Có cơ hội làm việc trong môi trường Cross-team (Mobile, Crypto, Game,…)',
                'number_of_recruit' => 2,
                'company_id' => 8,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 3,
                'm_experience_id' => 3,
                'm_job_id' => 1,
                'm_salary_id' => 4,
                'skills' => [1, 17, 20, 25] // PHP, Javascript, VueJS, Sass
            ],
        ); // 6

        $job_c = array(
            [
                'title' => 'Web Developer (.NET, PHP, Java)',
                'description' => '
Các nhiệm vụ chính:

Tham gia các team Agile thiết kế, lập trình xây dựng các sản phẩm Cloud (CDN, Camera AI, Kubernetes...), hệ thống CRM, BOC... sử dụng ngôn ngữ lập trình như: .Net. Java , PHP, Android,…
Quản trị, nâng cấp, sửa lỗi các công cụ phần mềm đã lập trình và được phân công tiếp nhận
Thực hiện review code, tối ưu source, fix bug
Tham gia thiết kế CSDL, mô hình hệ thống CNTT trong Công ty',
                'number_of_recruit' => 1,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 3,
                'm_job_id' => 1,
                'm_salary_id' => 4,
                'skills' => [1, 10, 12, 25] // PHP, Java, .NET
            ],
            [
                'title' => '05 Web Developers (PHP/NodeJS/Python/Java)',
                'description' => 'Có kinh nghiệm về ngôn ngữ phụ trợ như PHP, Node.js, Java hoặc Python. Đó là một điểm cộng lớn nếu có kinh nghiệm về ReactJS các framework khác như Angular, Vue

Có kinh nghiệm thiết kế hệ thống, hệ thống phụ (áp dụng best practice)

Kiến thức chuyên sâu về các công nghệ HTML hiện đại: HTML5/CSS3, Bootstrap, jQuery và các plugin của nó, thiết kế đáp ứng

Chẩn đoán vấn đề tích cực và kỹ năng giải quyết vấn đề sáng tạo

Kỹ năng tiếng Anh trung cấp',
                'number_of_recruit' => 5,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 3,
                'm_job_id' => 1,
                'm_salary_id' => 4,
                'skills' => [1, 10, 5, 27] // PHP, Java, Python, NodeJS
            ],
            [
                'title' => 'Web System Engineer',
                'description' => 'Ứng viên có tối thiểu 6 tháng kinh nghiệm lập trình web, hoặc tốt nghiệp chuyên ngành IT (đã qua intern các vị trí liên quan), có thể đi làm Full-time.
Ứng viên có khả năng với một trong số ngôn ngữ chúng tôi đang lập trình dưới đây, hoặc có kinh nghiệm với các ngôn ngữ khác.
Server side: PHP (fuelphp), Python (flask, fastapi)
Client side: Javascript (Vue.js, Angular JS), HTML, CSS, RectJS
Database: Postgresql, Elasticsearch, Redis',
                'number_of_recruit' => 5,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 3,
                'm_job_id' => 1,
                'm_salary_id' => 4,
                'skills' => [1, 21, 17, 5, 19, 16] // PHP, AngularJS, Javascript, Python, ReactJS, Redis
            ],
            [
                'title' => 'Full-stack Web Developer',
                'description' => 'Phát triển các tính năng mới

Duy trì các tính năng hiện tại

Phát triển nền tảng cung cấp API RESTful & JS API để tùy chỉnh sản phẩm của Cybozu hoặc tích hợp với các hệ thống khác

Phát triển thử nghiệm tự động hóa

Thực hiện R&D các công nghệ mới để áp dụng cho sản phẩm của Cybozu

Xây dựng các công cụ/tiện ích CI (Continuous Integration) & CD (Continuous Delivery) hỗ trợ triển khai môi trường phát triển & kiểm thử tự động

Phạm vi công việc: phân tích yêu cầu, viết thông số kỹ thuật, cải thiện UI/UX, thiết kế cơ sở dữ liệu & mã hóa

Phương pháp phát triển: Agile/Scrum

Ngôn ngữ lập trình: PHP, JavaScript/TypeScript/React, NodeJS, Shell Script, C/C++... có thể áp dụng theo nhu cầu công việc

Cơ sở dữ liệu: MySQL',
                'number_of_recruit' => 5,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 5,
                'm_job_id' => 1,
                'm_salary_id' => 4,
                'skills' => [1, 17, 19, 27] // PHP, Javascript, ReactJS, NodeJS
            ],
            [
                'title' => 'PHP Developer – Web Application',
                'description' => 'Phát triển ứng dụng web & sản phẩm di động mới được xây dựng trên LAMP stack

Hỗ trợ kiểm tra phần mềm và giải quyết lỗi

Hỗ trợ tài liệu phần mềm bao gồm đào tạo thành viên nhóm phát triển mới

Thực hành quy trình và phương pháp phát triển nhanh

Theo kịp các công nghệ mới nhất và thực tiễn tốt nhất; hỗ trợ đánh giá và tận dụng các công nghệ mới

Đóng góp vào chiến lược và đổi mới sản phẩm – giúp chúng tôi thiết kế và xây dựng thế hệ sản phẩm tiếp theo',
                'number_of_recruit' => 2,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 3,
                'm_job_id' => 1,
                'm_salary_id' => 3,
                'skills' => [1, 17] // PHP, Javascript
            ],
            [
                'title' => 'Front-end Lead Software Engineer (Angular/ReactJS/VueJS)',
                'description' => 'Bạn sẽ chịu trách nhiệm phát triển web sau đây.

Phát triển ứng dụng web với ReactJS.

Quản lý một nhóm kỹ sư dưới 10 người với nhiệm vụ phát triển và thiết kế một ứng dụng web được sử dụng trong ngành xây dựng.

Tham gia vào quy trình lập tài liệu, phân tích yêu cầu, thiết kế, triển khai, đánh giá mã, thử nghiệm đơn vị và vận hành sản phẩm.

Thảo luận, đề xuất giải pháp cho nhóm và quản lý tiến độ của các thành viên.

Dẫn dắt nhóm hoàn thành mục tiêu và sứ mệnh của công ty.

Đào tạo, hỗ trợ và động viên các thành viên trong nhóm.

Giải quyết vấn đề (kỹ thuật và con người).

Nhiệm vụ khác sẽ được giao bởi người quản lý.',
                'number_of_recruit' => 2,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 7,
                'm_job_id' => 1,
                'm_salary_id' => 9,
                'skills' => [3, 17, 19, 20, 21] // FrontEnd, Javascript, ReactJS, VueJS, AngularJS
            ],
            [
                'title' => 'INTERN/JUNIOR/MIDDLE .NET DEVELOPER',
                'description' => 'Phát triển ứng dụng chuyển đổi và trực quan hóa 3D dựa trên Windows. Chủ yếu phát triển/tham gia dự án liên quan đến 3D

Phát triển phần mềm trực quan/VR.

Phát triển một ứng dụng windows để chuyển đổi dữ liệu

Phát triển phần mềm trực quan 3D

Phát triển phần mềm Plugin cho các chương trình CAD

Phát triển giải pháp',
                'number_of_recruit' => 4,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 4,
                'm_job_id' => 1,
                'm_salary_id' => 4,
                'skills' => [12] // .NET
            ],
            [
                'title' => 'Front-end Developer (HTML, CSS, Javascript)',
                'description' => 'Tham gia phát triển các dự án phần mềm trên nền tảng Web PC và mobile.
Triển khai giao diện HTML/CSS Javascript theo yêu cầu của khách hàng trên hệ thống ứng dụng website xây dựng sẵn.
Phối hợp với các back-end developers để cải thiện tính mới đáp ứng nhu cầu của người sử dụng.
Tối ưu hóa giao diện các ứng dụng/trang web để có được tốc độ và hiệu suất tối đa.
Thu thập ý kiến phản hồi và xây dựng các hướng giải quyết cho người sử dụng và khách hàng.
Nghiên cứu, tìm hiểu các công nghệ về HTML/CSS Javascript mới nhất để áp dụng cái tiến sản phẩm.
Đảm bảo đáp ứng các tiêu chuẩn về đồ họa trên giao diện.',
                'number_of_recruit' => 4,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 2,
                'm_job_id' => 1,
                'm_salary_id' => 3,
                'skills' => [17, 18, 19, 3] // Javascript, Typescript, ReactJS, FrontEnd
            ],
            [
                'title' => 'Fresher Java Developer',
                'description' => '
Tìm hiểu, phân tích yêu cầu hệ thống từ các phòng ban nghiệp vụ.
Phân tích, thiết kế các dịch vụ cần thiết dựa trên các yêu cầu nghiệp vụ
Tuân thủ quy trình phát triển ứng dụng, quy định nghiệp vụ của công ty.
Phân tích dữ liệu, thiết kế và phát triển các báo cáo đáp ứng yêu cầu nghiệp vụ.
Bảo trì, phát triển các chức năng của hệ thống ứng dụng theo yêu cầu nghiệp vụ được giao.
Quản trị, vận hành các ứng dụng của công ty theo đúng quy trình và tiêu chuẩn của công ty.
Tham gia công tác huấn luyện, đào tạo và chuyển giao phần mềm, ứng dụng…
Và các nhiệm vụ khác liên quan được phân công..',
                'number_of_recruit' => 2,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 1,
                'm_job_id' => 1,
                'm_salary_id' => 2,
                'skills' => [10, 17] // Javascript, Java
            ],
            [
                'title' => 'Java Software Developer',
                'description' => 'Theo sự chỉ đạo của Leader và Line manager trong việc nghiên cứu công nghệ mới.

Đánh giá chéo chất lượng thiết kế và triển khai của đồng nghiệp.

Tạo mã nguồn chất lượng; mã tài liệu và thủ tục triệt để theo quy định của các tiêu chuẩn kỹ thuật.

Sử dụng các công cụ phát triển phổ biến như trình biên dịch, trình gỡ lỗi, công cụ định hình và hệ thống kiểm soát nguồn theo quy định của tiêu chuẩn kỹ thuật.

Báo cáo cho Leader và Line Manager.
Tốt nghiệp Cao đẳng hoặc Đại học chuyên ngành Công nghệ thông tin, Khoa học máy tính, Kỹ thuật máy tính hoặc bất kỳ lĩnh vực nào khác liên quan đến CNTT.

6 tháng ~ 3 năm kinh nghiệm với tư cách là Lập trình viên / Nhà phát triển Java cho các Giải pháp Phần mềm Dựa trên.

Fair bằng tiếng Anh hoặc tiếng Nhật.

Niềm đam mê thực sự đối với sự hợp tác và kỹ năng giao tiếp giữa các cá nhân mạnh mẽ.

Năng động bản thân, làm việc theo nhóm tốt và định hướng kết quả.

Có khả năng làm việc dưới áp lực cao.

Thông thạo phát triển web Java',
                'number_of_recruit' => 2,
                'company_id' => 9,
                'm_working_form_id' => 1,
                'm_location_id' => 1,
                'm_education_level_id' => 4,
                'm_experience_id' => 2,
                'm_job_id' => 1,
                'm_salary_id' => 4,
                'skills' => [10, 4, 11, 14] // Java, BackEnd, Spring, PostgreSQL
            ],
        ); // 10

        $jobs = array_merge($job_solashi, $job_misa, $job_fpt, $job_shopee, $job_softdreams, $job_a, $job_b, $job_c);

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
