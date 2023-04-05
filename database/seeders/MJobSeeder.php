<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MJobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_jobs')->insert([
            [
                'name' => "Web Developer",
            ],
            [
                'name' => "Mobile Developer",
            ],
            [
                'name' => "Tester/ QA/ QC",
            ],
        ]);
    }
}
