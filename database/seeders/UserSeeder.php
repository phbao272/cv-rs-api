<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        $limit = 100;

        for ($i = 59; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => $ten_nguoi[$i],
                'email' => $email_prefix . $i . '@gmail.com',
                'password' => bcrypt('123123'),
            ]);
        }
    }
}
