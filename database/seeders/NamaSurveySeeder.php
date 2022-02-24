<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NamaSurveySeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('nama_survey')->delete();

        DB::table('nama_survey')->insert(array(
            0 =>
            array(
                'id' => 1,
                'nama' => 'Survey Develop',
                'tipe' => 'Pre',
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:17:42',
                'updated_at' => '2022-02-22 02:17:42',
            ),
        ));
    }
}
