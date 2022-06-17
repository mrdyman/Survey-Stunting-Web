<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriSoalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kategori_soal')->delete();
        
        \DB::table('kategori_soal')->insert(array (
            0 => 
            array (
                'id' => 11,
                'urutan' => 1,
                'nama' => 'DEMOGRAFI',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:21:27',
                'updated_at' => '2022-03-01 16:22:54',
            ),
            1 => 
            array (
                'id' => 12,
                'urutan' => 2,
            'nama' => 'Faktor Pengetahuan, Sikap dan Tindakan (Perilaku)',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:37:55',
                'updated_at' => '2022-03-01 16:37:55',
            ),
            2 => 
            array (
                'id' => 13,
                'urutan' => 3,
                'nama' => 'Faktor Sosial Budaya',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:41:36',
                'updated_at' => '2022-03-01 16:41:36',
            ),
            3 => 
            array (
                'id' => 14,
                'urutan' => 4,
                'nama' => 'Faktor Ekonomi',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:44:00',
                'updated_at' => '2022-03-01 16:44:00',
            ),
            4 => 
            array (
                'id' => 15,
                'urutan' => 5,
                'nama' => 'Faktor Lingkungan',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:56:51',
                'updated_at' => '2022-03-01 16:56:51',
            ),
            5 => 
            array (
                'id' => 16,
                'urutan' => 6,
                'nama' => 'Faktor Kesehatan',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:08:44',
                'updated_at' => '2022-03-01 17:08:44',
            ),
            6 => 
            array (
                'id' => 24,
                'urutan' => 7,
                'nama' => 'Faktor Psikologi',
                'nama_survey_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 01:50:25',
                'updated_at' => '2022-03-02 01:50:25',
            ),
            7 => 
            array (
                'id' => 25,
                'urutan' => 1,
                'nama' => 'DEMOGRAFI',
                'nama_survey_id' => 3,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            8 => 
            array (
                'id' => 26,
                'urutan' => 2,
            'nama' => 'Faktor Pengetahuan, Sikap dan Tindakan (Perilaku)',
                'nama_survey_id' => 3,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            9 => 
            array (
                'id' => 27,
                'urutan' => 3,
                'nama' => 'Faktor Sosial Budaya',
                'nama_survey_id' => 3,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            10 => 
            array (
                'id' => 28,
                'urutan' => 4,
                'nama' => 'Faktor Ekonomi',
                'nama_survey_id' => 3,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            11 => 
            array (
                'id' => 29,
                'urutan' => 5,
                'nama' => 'Faktor Lingkungan',
                'nama_survey_id' => 3,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            12 => 
            array (
                'id' => 30,
                'urutan' => 6,
                'nama' => 'Faktor Kesehatan',
                'nama_survey_id' => 3,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            13 => 
            array (
                'id' => 31,
                'urutan' => 7,
                'nama' => 'Faktor Psikologi',
                'nama_survey_id' => 3,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            14 => 
            array (
                'id' => 32,
                'urutan' => 2,
                'nama' => 's',
                'nama_survey_id' => 4,
                'deleted_at' => '2022-06-07 13:19:29',
                'created_at' => '2022-05-29 23:55:39',
                'updated_at' => '2022-06-07 13:19:29',
            ),
            15 => 
            array (
                'id' => 33,
                'urutan' => 1,
                'nama' => 'DEMOGRAFI',
                'nama_survey_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            16 => 
            array (
                'id' => 34,
                'urutan' => 2,
            'nama' => 'Faktor Pengetahuan, Sikap dan Tindakan (Perilaku)',
                'nama_survey_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            17 => 
            array (
                'id' => 35,
                'urutan' => 3,
                'nama' => 'Faktor Sosial Budaya',
                'nama_survey_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            18 => 
            array (
                'id' => 36,
                'urutan' => 4,
                'nama' => 'Faktor Ekonomi',
                'nama_survey_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            19 => 
            array (
                'id' => 37,
                'urutan' => 5,
                'nama' => 'Faktor Lingkungan',
                'nama_survey_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            20 => 
            array (
                'id' => 38,
                'urutan' => 7,
                'nama' => 'Faktor Kesehatan',
                'nama_survey_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:53:41',
            ),
            21 => 
            array (
                'id' => 39,
                'urutan' => 6,
                'nama' => 'Faktor Psikologi',
                'nama_survey_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:53:36',
            ),
        ));
        
        
    }
}