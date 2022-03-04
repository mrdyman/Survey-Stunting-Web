<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NamaSurveyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('nama_survey')->insert(array(
            0 =>
            array(
                'id' => 2,
                'nama' => 'Stunting',
                'tipe' => 'Pre',
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:21:07',
                'updated_at' => '2022-03-01 16:21:07',
            ),
        ));
    }
}
