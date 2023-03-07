<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_locations')->insert([
            [
                'name' => "Hà Nội",
            ],
            [
                'name' => "TP Hồ Chí Minh",
            ],
            [
                'name' => "Đà Nẵng",
            ],
        ]);
    }
}
