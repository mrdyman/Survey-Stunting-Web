<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JawabanSoalSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('jawaban_soal')->delete();

        DB::table('jawaban_soal')->insert(array(
            0 =>
            array(
                'id' => 12,
                'jawaban' => 'SD',
                'soal_id' => 5,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:22:04',
                'updated_at' => '2022-02-22 02:22:04',
            ),
            1 =>
            array(
                'id' => 13,
                'jawaban' => 'SMP',
                'soal_id' => 5,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:22:04',
                'updated_at' => '2022-02-22 02:22:04',
            ),
            2 =>
            array(
                'id' => 14,
                'jawaban' => 'SMA',
                'soal_id' => 5,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:22:04',
                'updated_at' => '2022-02-22 02:22:04',
            ),
            3 =>
            array(
                'id' => 15,
                'jawaban' => 'Diploma',
                'soal_id' => 5,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:22:04',
                'updated_at' => '2022-02-22 02:22:04',
            ),
            4 =>
            array(
                'id' => 16,
                'jawaban' => 'S1',
                'soal_id' => 5,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:22:04',
                'updated_at' => '2022-02-22 02:22:04',
            ),
            5 =>
            array(
                'id' => 17,
                'jawaban' => 'S2',
                'soal_id' => 5,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:22:04',
                'updated_at' => '2022-02-22 02:22:04',
            ),
            6 =>
            array(
                'id' => 18,
                'jawaban' => 'S3',
                'soal_id' => 5,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:22:04',
                'updated_at' => '2022-02-22 02:22:04',
            ),
            7 =>
            array(
                'id' => 19,
                'jawaban' => 'Lainnya',
                'soal_id' => 5,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:22:12',
                'updated_at' => '2022-02-22 02:22:12',
            ),
            8 =>
            array(
                'id' => 20,
                'jawaban' => 'Udang',
                'soal_id' => 6,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:26:23',
                'updated_at' => '2022-02-22 02:26:23',
            ),
            9 =>
            array(
                'id' => 21,
                'jawaban' => 'Kepiting',
                'soal_id' => 6,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:26:23',
                'updated_at' => '2022-02-22 02:26:23',
            ),
            10 =>
            array(
                'id' => 22,
                'jawaban' => 'Ikan',
                'soal_id' => 6,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:26:23',
                'updated_at' => '2022-02-22 02:26:23',
            ),
            11 =>
            array(
                'id' => 23,
                'jawaban' => 'Cumi-cumi',
                'soal_id' => 6,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:26:23',
                'updated_at' => '2022-02-22 02:26:23',
            ),
            12 =>
            array(
                'id' => 24,
                'jawaban' => 'Lainnya',
                'soal_id' => 6,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:26:23',
                'updated_at' => '2022-02-22 02:26:23',
            ),
            13 =>
            array(
                'id' => 25,
                'jawaban' => 'Ya',
                'soal_id' => 7,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:27:36',
                'updated_at' => '2022-02-22 02:27:36',
            ),
            14 =>
            array(
                'id' => 26,
                'jawaban' => 'Tidak',
                'soal_id' => 7,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:27:36',
                'updated_at' => '2022-02-22 02:27:36',
            ),
            15 =>
            array(
                'id' => 27,
                'jawaban' => 'Teman/Keluarga',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            16 =>
            array(
                'id' => 28,
                'jawaban' => 'Sosmed',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            17 =>
            array(
                'id' => 29,
                'jawaban' => 'Baliho',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            18 =>
            array(
                'id' => 30,
                'jawaban' => 'Surat Kabar online/offline',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            19 =>
            array(
                'id' => 31,
                'jawaban' => 'Tv',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            20 =>
            array(
                'id' => 32,
                'jawaban' => 'Lainnya',
                'soal_id' => 8,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            21 =>
            array(
                'id' => 33,
                'jawaban' => 'Ya',
                'soal_id' => 11,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:03',
                'updated_at' => '2022-02-22 02:30:03',
            ),
            22 =>
            array(
                'id' => 34,
                'jawaban' => 'Tidak',
                'soal_id' => 11,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:03',
                'updated_at' => '2022-02-22 02:30:03',
            ),
            23 =>
            array(
                'id' => 35,
                'jawaban' => 'Ya, Ada',
                'soal_id' => 12,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:19',
                'updated_at' => '2022-02-22 02:30:19',
            ),
            24 =>
            array(
                'id' => 36,
                'jawaban' => 'Tidak Ada',
                'soal_id' => 12,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:19',
                'updated_at' => '2022-02-22 02:30:19',
            ),
            25 =>
            array(
                'id' => 37,
                'jawaban' => '< Rp.1.000.000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            26 =>
            array(
                'id' => 38,
                'jawaban' => 'Rp. 1.000.000 -  Rp. 3.000.000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            27 =>
            array(
                'id' => 39,
                'jawaban' => 'Rp. 3.000.000 – Rp. 5.000.000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            28 =>
            array(
                'id' => 40,
                'jawaban' => '> Rp. 5.000.0000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            29 =>
            array(
                'id' => 41,
                'jawaban' => 'Hasil Pertanian',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            30 =>
            array(
                'id' => 42,
                'jawaban' => 'Hasil perkebunan',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            31 =>
            array(
                'id' => 43,
                'jawaban' => 'Hasil Peternakan',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            32 =>
            array(
                'id' => 44,
                'jawaban' => 'Hasil usaha/bisnis',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            33 =>
            array(
                'id' => 45,
                'jawaban' => 'Hasil kerja di Perusahaan/ Kantor',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            34 =>
            array(
                'id' => 46,
                'jawaban' => 'Ya',
                'soal_id' => 15,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:35',
                'updated_at' => '2022-02-22 02:32:35',
            ),
            35 =>
            array(
                'id' => 47,
                'jawaban' => 'Tidak',
                'soal_id' => 15,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:35',
                'updated_at' => '2022-02-22 02:32:35',
            ),
            36 =>
            array(
                'id' => 48,
                'jawaban' => 'Tidak ada',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            37 =>
            array(
                'id' => 49,
                'jawaban' => 'Ada, bukan milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            38 =>
            array(
                'id' => 50,
                'jawaban' => 'Ada, milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            39 =>
            array(
                'id' => 51,
                'jawaban' => 'Ada, bukan milik sendiri dan memenuhi syaratkesehatan',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            40 =>
            array(
                'id' => 52,
                'jawaban' => 'Ada, milik sendiri',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            41 =>
            array(
                'id' => 53,
                'jawaban' => 'Tidak ada',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            42 =>
            array(
                'id' => 54,
                'jawaban' => 'Sungai',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            43 =>
            array(
                'id' => 55,
                'jawaban' => 'Kebun',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            44 =>
            array(
                'id' => 56,
                'jawaban' => 'Ada, bukan leher angsa, tidak ada tutup, disalurkan ke sungai/kolam',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            45 =>
            array(
                'id' => 57,
                'jawaban' => 'Ada, bukan leher angsa ada ditutup (leher angsa), disalurkan ke sungai/kolam',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            46 =>
            array(
                'id' => 58,
                'jawaban' => 'Ada, bukan leher angsa ada tutup, septic tank',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            47 =>
            array(
                'id' => 59,
                'jawaban' => 'Ada, leher angsa, septic tank',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            48 =>
            array(
                'id' => 60,
                'jawaban' => 'Tidak Ada',
                'soal_id' => 18,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:50',
                'updated_at' => '2022-02-22 02:35:50',
            ),
            49 =>
            array(
                'id' => 61,
                'jawaban' => 'Ada',
                'soal_id' => 18,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:50',
                'updated_at' => '2022-02-22 02:35:50',
            ),
        ));
    }
}
