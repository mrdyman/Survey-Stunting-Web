<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NamaSurveyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('nama_survey')->delete();

        \DB::table('nama_survey')->insert(array(
            0 =>
            array(
                'id' => 2,
                'nama' => 'Stunting',
                'tipe' => 'Pre',
                'is_aktif' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:21:07',
                'updated_at' => '2022-03-01 16:21:07',
            ),
            1 =>
            array(
                'id' => 3,
                'nama' => 'survey',
                'tipe' => 'Post',
                'is_aktif' => 1,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            2 =>
            array(
                'id' => 4,
                'nama' => 'tes',
                'tipe' => 'Post',
                'is_aktif' => 1,
                'deleted_at' => '2022-06-07 13:19:29',
                'created_at' => '2022-05-29 23:49:04',
                'updated_at' => '2022-06-07 13:19:29',
            ),
            3 =>
            array(
                'id' => 5,
                'nama' => 'Stunting Pelatihan',
                'tipe' => 'Pre',
                'is_aktif' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
        ));
    }
}
