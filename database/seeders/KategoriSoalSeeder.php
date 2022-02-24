<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSoalSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_soal')->delete();

        DB::table('kategori_soal')->insert(array(
            0 =>
            array(
                'id' => 6,
                'urutan' => 1,
                'nama' => 'Demografi',
                'nama_survey_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:18:44',
                'updated_at' => '2022-02-22 02:18:44',
            ),
            1 =>
            array(
                'id' => 7,
                'urutan' => 2,
                'nama' => 'Faktor Pengetahuan, Sikap dan Tindakan (Perilaku)',
                'nama_survey_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:19:13',
                'updated_at' => '2022-02-22 02:19:13',
            ),
            2 =>
            array(
                'id' => 8,
                'urutan' => 3,
                'nama' => 'Faktor Sosial Budaya',
                'nama_survey_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:19:24',
                'updated_at' => '2022-02-22 02:19:24',
            ),
            3 =>
            array(
                'id' => 9,
                'urutan' => 4,
                'nama' => 'Faktor Ekonomi',
                'nama_survey_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:19:44',
                'updated_at' => '2022-02-22 02:19:44',
            ),
            4 =>
            array(
                'id' => 10,
                'urutan' => 5,
                'nama' => 'Faktor Lingkungan',
                'nama_survey_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:19:57',
                'updated_at' => '2022-02-22 02:19:57',
            ),
        ));
    }
}
