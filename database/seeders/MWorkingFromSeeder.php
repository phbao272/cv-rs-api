<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MWorkingFromSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_working_froms')->insert([
            [
                'name' => "Làm việc toàn thời gian",
            ],
            [
                'name' => "làm việc bán thời gian",
            ],
            [
                'name' => "Làm việc từ xa",
            ],
        ]);
    }
}
