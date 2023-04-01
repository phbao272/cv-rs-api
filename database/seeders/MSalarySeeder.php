<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MSalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $salaries = array(
            "Dưới 3 triệu", "3 - 5 triệu", "5 - 7 triệu", "10 - 12 triệu", "12 - 15 triệu",
            "15 - 20 triệu", "20 - 25 triệu", "25 - 30 triệu", "trên 30 triệu", "thỏa thuận"
        );

        for ($i = 0; $i < count($salaries); $i++) {
            DB::table('m_salaries')->insert([
                'name' => $salaries[$i]
            ]);
        }
    }
}
