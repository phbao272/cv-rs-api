<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Web
        // 2. Mobile
        // 3. Tester
        // 4. AI

        $limitJob = 30;

        for ($i = 0; $i < $limitJob; $i++) {
            DB::table('jobs')->insert([
                
            ]);

        }
    }
}
