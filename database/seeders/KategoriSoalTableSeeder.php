<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSoalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_soal')->insert(array(
            0 =>
            array(
                'id' => 11,
                'urutan' => 1,
                'nama' => 'DEMOGRAFI',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:21:27',
                'updated_at' => '2022-03-01 16:22:54',
            ),
            1 =>
            array(
                'id' => 12,
                'urutan' => 2,
                'nama' => 'Faktor Pengetahuan, Sikap dan Tindakan (Perilaku)',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:37:55',
                'updated_at' => '2022-03-01 16:37:55',
            ),
            2 =>
            array(
                'id' => 13,
                'urutan' => 3,
                'nama' => 'Faktor Sosial Budaya',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:41:36',
                'updated_at' => '2022-03-01 16:41:36',
            ),
            3 =>
            array(
                'id' => 14,
                'urutan' => 4,
                'nama' => 'Faktor Ekonomi',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:44:00',
                'updated_at' => '2022-03-01 16:44:00',
            ),
            4 =>
            array(
                'id' => 15,
                'urutan' => 5,
                'nama' => 'Faktor Lingkungan',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:56:51',
                'updated_at' => '2022-03-01 16:56:51',
            ),
            5 =>
            array(
                'id' => 16,
                'urutan' => 6,
                'nama' => 'Faktor Kesehatan',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:08:44',
                'updated_at' => '2022-03-01 17:08:44',
            ),
            6 =>
            array(
                'id' => 24,
                'urutan' => 7,
                'nama' => 'Faktor Psikologi',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 01:50:25',
                'updated_at' => '2022-03-02 01:50:25',
            ),
        ));
    }
}
