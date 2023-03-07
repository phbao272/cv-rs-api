<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_experiences')->insert([
            [
                'name' => "Chưa có kinh nghiệm",
                'value' => 0
            ],
            [
                'name' => "Dưới 1 năm",
                'value' => 1
            ],
            [
                'name' => "1 năm",
                'value' => 2
            ],
            [
                'name' => "2 năm",
                'value' => 3
            ],
            [
                'name' => "3 năm",
                'value' => 4
            ],
            [
                'name' => "4 năm",
                'value' => 5
            ],
            [
                'name' => "5 năm",
                'value' => 5
            ],
            [
                'name' => "Trên 5 năm",
                'value' => 6
            ],
        ]);
    }
}
