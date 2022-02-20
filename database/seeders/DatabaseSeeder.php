<?php

namespace Database\Seeders;

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
        $this->call(UserSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(NamaSurveySeeder::class);
        $this->call(KategoriSoalSeeder::class);
        $this->call(SoalSeeder::class);
        $this->call(JawabanSoalSeeder::class);
    }
}
