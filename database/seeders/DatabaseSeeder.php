<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard();

        $this->call(MSkillSeeder::class);
        $this->call(MSalarySeeder::class);

        $this->call(UserSeeder::class);
        Model::reguard();
    }
}
