<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MEducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_education_levels')->insert([
            [
                'name' => "Chứng chỉ nghề",
                'value' => 0
            ],
            [
                'name' => "Trung cấp",
                'value' => 1
            ],
            [
                'name' => "Cao đẳng",
                'value' => 2
            ],
            [
                'name' => "Đại học",
                'value' => 3
            ],
            [
                'name' => " Trên Đại học",
                'value' => 4
            ]
        ]);
    }
}
