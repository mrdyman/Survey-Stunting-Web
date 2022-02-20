<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NamaSurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Survey Dummy 1',
                'tipe' => 'Pre'
            ],
            [
                'nama' => 'Survey Dummy 2',
                'tipe' => 'Post'
            ],
        ];

        DB::table('nama_survey')->insert($data);
    }
}
