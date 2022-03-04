<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JawabanSoalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('jawaban_soal')->insert(array(
            0 =>
            array(
                'id' => 25,
                'jawaban' => 'Ya',
                'soal_id' => 7,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:27:36',
                'updated_at' => '2022-02-22 02:27:36',
            ),
            1 =>
            array(
                'id' => 26,
                'jawaban' => 'Tidak',
                'soal_id' => 7,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:27:36',
                'updated_at' => '2022-02-22 02:27:36',
            ),
            2 =>
            array(
                'id' => 27,
                'jawaban' => 'Teman/Keluarga',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            3 =>
            array(
                'id' => 28,
                'jawaban' => 'Sosmed',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            4 =>
            array(
                'id' => 29,
                'jawaban' => 'Baliho',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            5 =>
            array(
                'id' => 30,
                'jawaban' => 'Surat Kabar online/offline',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            6 =>
            array(
                'id' => 31,
                'jawaban' => 'Tv',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            7 =>
            array(
                'id' => 32,
                'jawaban' => 'Lainnya',
                'soal_id' => 8,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            8 =>
            array(
                'id' => 33,
                'jawaban' => 'Ya',
                'soal_id' => 11,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:03',
                'updated_at' => '2022-02-22 02:30:03',
            ),
            9 =>
            array(
                'id' => 34,
                'jawaban' => 'Tidak',
                'soal_id' => 11,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:03',
                'updated_at' => '2022-02-22 02:30:03',
            ),
            10 =>
            array(
                'id' => 35,
                'jawaban' => 'Ya, Ada',
                'soal_id' => 12,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:19',
                'updated_at' => '2022-02-22 02:30:19',
            ),
            11 =>
            array(
                'id' => 36,
                'jawaban' => 'Tidak Ada',
                'soal_id' => 12,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:19',
                'updated_at' => '2022-02-22 02:30:19',
            ),
            12 =>
            array(
                'id' => 37,
                'jawaban' => '< Rp.1.000.000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            13 =>
            array(
                'id' => 38,
                'jawaban' => 'Rp. 1.000.000 -  Rp. 3.000.000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            14 =>
            array(
                'id' => 39,
                'jawaban' => 'Rp. 3.000.000 – Rp. 5.000.000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            15 =>
            array(
                'id' => 40,
                'jawaban' => '> Rp. 5.000.0000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            16 =>
            array(
                'id' => 41,
                'jawaban' => 'Hasil Pertanian',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            17 =>
            array(
                'id' => 42,
                'jawaban' => 'Hasil perkebunan',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            18 =>
            array(
                'id' => 43,
                'jawaban' => 'Hasil Peternakan',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            19 =>
            array(
                'id' => 44,
                'jawaban' => 'Hasil usaha/bisnis',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            20 =>
            array(
                'id' => 45,
                'jawaban' => 'Hasil kerja di Perusahaan/ Kantor',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            21 =>
            array(
                'id' => 46,
                'jawaban' => 'Ya',
                'soal_id' => 15,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:35',
                'updated_at' => '2022-02-22 02:32:35',
            ),
            22 =>
            array(
                'id' => 47,
                'jawaban' => 'Tidak',
                'soal_id' => 15,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:35',
                'updated_at' => '2022-02-22 02:32:35',
            ),
            23 =>
            array(
                'id' => 48,
                'jawaban' => 'Tidak ada',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            24 =>
            array(
                'id' => 49,
                'jawaban' => 'Ada, bukan milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            25 =>
            array(
                'id' => 50,
                'jawaban' => 'Ada, milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            26 =>
            array(
                'id' => 51,
                'jawaban' => 'Ada, bukan milik sendiri dan memenuhi syaratkesehatan',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            27 =>
            array(
                'id' => 52,
                'jawaban' => 'Ada, milik sendiri',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            28 =>
            array(
                'id' => 53,
                'jawaban' => 'Tidak ada',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            29 =>
            array(
                'id' => 54,
                'jawaban' => 'Sungai',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            30 =>
            array(
                'id' => 55,
                'jawaban' => 'Kebun',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            31 =>
            array(
                'id' => 56,
                'jawaban' => 'Ada, bukan leher angsa, tidak ada tutup, disalurkan ke sungai/kolam',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            32 =>
            array(
                'id' => 57,
                'jawaban' => 'Ada, bukan leher angsa ada ditutup (leher angsa), disalurkan ke sungai/kolam',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            33 =>
            array(
                'id' => 58,
                'jawaban' => 'Ada, bukan leher angsa ada tutup, septic tank',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            34 =>
            array(
                'id' => 59,
                'jawaban' => 'Ada, leher angsa, septic tank',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            35 =>
            array(
                'id' => 60,
                'jawaban' => 'Tidak Ada',
                'soal_id' => 18,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:50',
                'updated_at' => '2022-02-22 02:35:50',
            ),
            36 =>
            array(
                'id' => 61,
                'jawaban' => 'Ada',
                'soal_id' => 18,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:50',
                'updated_at' => '2022-02-22 02:35:50',
            ),
            37 =>
            array(
                'id' => 62,
                'jawaban' => 'Laki-laki',
                'soal_id' => 30,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:27:58',
                'updated_at' => '2022-03-01 16:27:58',
            ),
            38 =>
            array(
                'id' => 63,
                'jawaban' => 'Perempuan',
                'soal_id' => 30,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:27:58',
                'updated_at' => '2022-03-01 16:27:58',
            ),
            39 =>
            array(
                'id' => 64,
                'jawaban' => 'SD',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            40 =>
            array(
                'id' => 65,
                'jawaban' => 'SMP',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            41 =>
            array(
                'id' => 66,
                'jawaban' => 'SMA',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            42 =>
            array(
                'id' => 67,
                'jawaban' => 'Diploma',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            43 =>
            array(
                'id' => 68,
                'jawaban' => 'S1',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            44 =>
            array(
                'id' => 69,
                'jawaban' => 'S2',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            45 =>
            array(
                'id' => 70,
                'jawaban' => 'S3',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            46 =>
            array(
                'id' => 71,
                'jawaban' => 'Ya',
                'soal_id' => 38,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:34:53',
                'updated_at' => '2022-03-01 16:34:53',
            ),
            47 =>
            array(
                'id' => 72,
                'jawaban' => 'Tidak',
                'soal_id' => 38,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:34:53',
                'updated_at' => '2022-03-01 16:34:53',
            ),
            48 =>
            array(
                'id' => 73,
                'jawaban' => 'Ya',
                'soal_id' => 40,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:38:23',
                'updated_at' => '2022-03-02 02:43:37',
            ),
            49 =>
            array(
                'id' => 74,
                'jawaban' => 'Tidak',
                'soal_id' => 40,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:38:23',
                'updated_at' => '2022-03-02 02:43:37',
            ),
            50 =>
            array(
                'id' => 75,
                'jawaban' => 'Teman/Keluarga',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            51 =>
            array(
                'id' => 76,
                'jawaban' => 'Sosmed',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            52 =>
            array(
                'id' => 77,
                'jawaban' => 'Baliho',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            53 =>
            array(
                'id' => 78,
                'jawaban' => 'Surat Kabar online/offline',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            54 =>
            array(
                'id' => 79,
                'jawaban' => 'Tv',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            55 =>
            array(
                'id' => 80,
                'jawaban' => 'Lainnya',
                'soal_id' => 41,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            56 =>
            array(
                'id' => 81,
                'jawaban' => 'Ya',
                'soal_id' => 44,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:42:28',
                'updated_at' => '2022-03-01 16:42:28',
            ),
            57 =>
            array(
                'id' => 82,
                'jawaban' => 'Tidak',
                'soal_id' => 44,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:42:28',
                'updated_at' => '2022-03-01 16:42:28',
            ),
            58 =>
            array(
                'id' => 83,
                'jawaban' => 'Ya, ada',
                'soal_id' => 45,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:42:52',
                'updated_at' => '2022-03-01 16:43:39',
            ),
            59 =>
            array(
                'id' => 84,
                'jawaban' => 'Tidak ada',
                'soal_id' => 45,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:42:52',
                'updated_at' => '2022-03-01 16:43:39',
            ),
            60 =>
            array(
                'id' => 85,
                'jawaban' => 'Ya',
                'soal_id' => 46,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:43:11',
                'updated_at' => '2022-03-01 16:43:11',
            ),
            61 =>
            array(
                'id' => 86,
                'jawaban' => 'Tidak',
                'soal_id' => 46,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:43:11',
                'updated_at' => '2022-03-01 16:43:11',
            ),
            62 =>
            array(
                'id' => 87,
                'jawaban' => '< Rp. 1.000.000',
                'soal_id' => 47,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:45:54',
                'updated_at' => '2022-03-01 16:45:54',
            ),
            63 =>
            array(
                'id' => 88,
                'jawaban' => 'Rp. 1.000.000 - Rp. 3.000.000',
                'soal_id' => 47,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:45:54',
                'updated_at' => '2022-03-01 16:45:54',
            ),
            64 =>
            array(
                'id' => 89,
                'jawaban' => 'Rp. 3.000.000 - Rp. 5.000.000',
                'soal_id' => 47,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:45:54',
                'updated_at' => '2022-03-01 16:45:54',
            ),
            65 =>
            array(
                'id' => 90,
                'jawaban' => '> Rp. 5.000.000',
                'soal_id' => 47,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:45:54',
                'updated_at' => '2022-03-01 16:45:54',
            ),
            66 =>
            array(
                'id' => 91,
                'jawaban' => 'Hasil Pertanian',
                'soal_id' => 48,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:19',
                'updated_at' => '2022-03-01 16:47:19',
            ),
            67 =>
            array(
                'id' => 92,
                'jawaban' => 'Hasil Perkebunan',
                'soal_id' => 48,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:19',
                'updated_at' => '2022-03-01 16:47:19',
            ),
            68 =>
            array(
                'id' => 93,
                'jawaban' => 'Hasil Peternakan',
                'soal_id' => 48,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:19',
                'updated_at' => '2022-03-01 16:47:19',
            ),
            69 =>
            array(
                'id' => 94,
                'jawaban' => 'Hasil Usaha/Bisnis',
                'soal_id' => 48,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:19',
                'updated_at' => '2022-03-01 16:47:19',
            ),
            70 =>
            array(
                'id' => 95,
                'jawaban' => 'Hasil Kerja di Perusahaan/Kantor',
                'soal_id' => 48,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:19',
                'updated_at' => '2022-03-01 16:47:19',
            ),
            71 =>
            array(
                'id' => 96,
                'jawaban' => 'Ya',
                'soal_id' => 49,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:48',
                'updated_at' => '2022-03-01 16:47:48',
            ),
            72 =>
            array(
                'id' => 97,
                'jawaban' => 'Tidak',
                'soal_id' => 49,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:48',
                'updated_at' => '2022-03-01 16:47:48',
            ),
            73 =>
            array(
                'id' => 98,
                'jawaban' => 'Membeli Bahan Makanan',
                'soal_id' => 50,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            74 =>
            array(
                'id' => 99,
                'jawaban' => 'Membeli Pakaian',
                'soal_id' => 50,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            75 =>
            array(
                'id' => 100,
                'jawaban' => 'Membeli Perabotan Rumah Tangga',
                'soal_id' => 50,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            76 =>
            array(
                'id' => 101,
                'jawaban' => 'Biaya Sekolah/Pendidikan',
                'soal_id' => 50,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            77 =>
            array(
                'id' => 102,
                'jawaban' => 'Membayar Cicilan Kendaraan',
                'soal_id' => 50,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            78 =>
            array(
                'id' => 103,
                'jawaban' => 'Lainnya',
                'soal_id' => 50,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            79 =>
            array(
                'id' => 104,
                'jawaban' => 'Tidak dapat bantuan',
                'soal_id' => 51,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:55:24',
                'updated_at' => '2022-03-01 16:55:24',
            ),
            80 =>
            array(
                'id' => 105,
                'jawaban' => 'Lainnya',
                'soal_id' => 51,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:55:24',
                'updated_at' => '2022-03-01 16:55:24',
            ),
            81 =>
            array(
                'id' => 106,
                'jawaban' => 'Tidak ada',
                'soal_id' => 52,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:00:56',
                'updated_at' => '2022-03-01 17:00:56',
            ),
            82 =>
            array(
                'id' => 107,
                'jawaban' => 'Ada, bukan milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 52,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:00:56',
                'updated_at' => '2022-03-01 17:00:56',
            ),
            83 =>
            array(
                'id' => 108,
                'jawaban' => 'Ada, milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 52,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:00:56',
                'updated_at' => '2022-03-01 17:00:56',
            ),
            84 =>
            array(
                'id' => 109,
                'jawaban' => 'Ada, bukan milik sendiri dan memenuhi syaratkesehatan',
                'soal_id' => 52,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:00:56',
                'updated_at' => '2022-03-01 17:00:56',
            ),
            85 =>
            array(
                'id' => 110,
                'jawaban' => 'Ada, milik sendiri',
                'soal_id' => 52,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:00:56',
                'updated_at' => '2022-03-01 17:00:56',
            ),
            86 =>
            array(
                'id' => 111,
                'jawaban' => 'Tidak ada',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            87 =>
            array(
                'id' => 112,
                'jawaban' => 'Sungai',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            88 =>
            array(
                'id' => 113,
                'jawaban' => 'Kebun',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            89 =>
            array(
                'id' => 114,
                'jawaban' => 'Ada, bukan leher angsa, tidak ada tutup, disalurkan ke sungai/kolam',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            90 =>
            array(
                'id' => 115,
                'jawaban' => 'Ada, bukan leher angsa ada ditutup (leher angsa), disalurkan ke sungai/kolam',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            91 =>
            array(
                'id' => 116,
                'jawaban' => 'Ada, bukan leher angsa ada tutup, septic tank',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            92 =>
            array(
                'id' => 117,
                'jawaban' => 'Ada, leher angsa, septic tank',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            93 =>
            array(
                'id' => 118,
                'jawaban' => 'Tidak ada, sehingga tergenang tidak teratur di halaman rumah',
                'soal_id' => 54,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:00',
                'updated_at' => '2022-03-01 17:03:00',
            ),
            94 =>
            array(
                'id' => 119,
                'jawaban' => 'Ada, diresapkan tetapi mencemari sumber air (jarak dengan sumber air < 10 m)',
                'soal_id' => 54,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:00',
                'updated_at' => '2022-03-01 17:03:00',
            ),
            95 =>
            array(
                'id' => 120,
                'jawaban' => 'Ada, dialirkan ke selokan terbuka',
                'soal_id' => 54,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:00',
                'updated_at' => '2022-03-01 17:03:00',
            ),
            96 =>
            array(
                'id' => 121,
                'jawaban' => 'Ada, diresapkan dan tidak mencemari sumber air (jarak dengan sumer air >10m)',
                'soal_id' => 54,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:00',
                'updated_at' => '2022-03-01 17:03:00',
            ),
            97 =>
            array(
                'id' => 122,
                'jawaban' => 'Ada, disalurkan ke selokan tertutup (saluran kota) untuk diolah lebih lanjut)',
                'soal_id' => 54,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:00',
                'updated_at' => '2022-03-01 17:03:00',
            ),
            98 =>
            array(
                'id' => 123,
                'jawaban' => 'Tidak ada',
                'soal_id' => 55,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:37',
                'updated_at' => '2022-03-01 17:03:37',
            ),
            99 =>
            array(
                'id' => 124,
                'jawaban' => 'Ada, tapi kedap air dan tidak ada tutup',
                'soal_id' => 55,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:37',
                'updated_at' => '2022-03-01 17:03:37',
            ),
            100 =>
            array(
                'id' => 125,
                'jawaban' => 'Ada, kedap air dan tidak bertutup',
                'soal_id' => 55,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:37',
                'updated_at' => '2022-03-01 17:03:37',
            ),
            101 =>
            array(
                'id' => 126,
                'jawaban' => 'Ada, kedap air dan bertutup',
                'soal_id' => 55,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:37',
                'updated_at' => '2022-03-01 17:03:37',
            ),
            102 =>
            array(
                'id' => 127,
                'jawaban' => 'Dibuang ke sungai/kebun/kolam/sembarangan',
                'soal_id' => 56,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:13',
                'updated_at' => '2022-03-01 17:04:13',
            ),
            103 =>
            array(
                'id' => 128,
                'jawaban' => 'Kadang-kadang di buang ke tempat sampah',
                'soal_id' => 56,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:13',
                'updated_at' => '2022-03-01 17:04:13',
            ),
            104 =>
            array(
                'id' => 129,
                'jawaban' => 'Setiap hari dibuang ke tempat sampah',
                'soal_id' => 56,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:13',
                'updated_at' => '2022-03-01 17:04:13',
            ),
            105 =>
            array(
                'id' => 130,
                'jawaban' => 'Bukan tembok (terbuat darianyaman bambu/ilalang)',
                'soal_id' => 57,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:51',
                'updated_at' => '2022-03-01 17:04:51',
            ),
            106 =>
            array(
                'id' => 131,
                'jawaban' => 'Semi permanen/setengah tembok/pasangan bata atau batu yang tidak diplester/papan tidak kedap air',
                'soal_id' => 57,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:51',
                'updated_at' => '2022-03-01 17:04:51',
            ),
            107 =>
            array(
                'id' => 132,
                'jawaban' => 'Permanen (tembok/pasangan batu bata yang diplester), papan kedap air',
                'soal_id' => 57,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:51',
                'updated_at' => '2022-03-01 17:04:51',
            ),
            108 =>
            array(
                'id' => 133,
                'jawaban' => 'Tanah',
                'soal_id' => 58,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:05:18',
                'updated_at' => '2022-03-01 17:05:18',
            ),
            109 =>
            array(
                'id' => 134,
                'jawaban' => 'Papan/anyaman bambu dekat dengan tanah/plesteran yang retak dan berdebu',
                'soal_id' => 58,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:05:18',
                'updated_at' => '2022-03-01 17:05:18',
            ),
            110 =>
            array(
                'id' => 135,
                'jawaban' => 'Diplester/ubin/keramik/papan (rumah panggung)',
                'soal_id' => 58,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:05:18',
                'updated_at' => '2022-03-01 17:05:18',
            ),
            111 =>
            array(
                'id' => 136,
                'jawaban' => 'Tidak ada',
                'soal_id' => 59,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:05:39',
                'updated_at' => '2022-03-01 17:05:39',
            ),
            112 =>
            array(
                'id' => 137,
                'jawaban' => 'Ada',
                'soal_id' => 59,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:05:39',
                'updated_at' => '2022-03-01 17:05:39',
            ),
            113 =>
            array(
                'id' => 138,
                'jawaban' => 'Tidak ada',
                'soal_id' => 60,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:06:15',
                'updated_at' => '2022-03-01 17:06:15',
            ),
            114 =>
            array(
                'id' => 139,
                'jawaban' => 'Ada',
                'soal_id' => 60,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:06:15',
                'updated_at' => '2022-03-01 17:06:15',
            ),
            115 =>
            array(
                'id' => 140,
                'jawaban' => 'Tidak ada',
                'soal_id' => 61,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:06:43',
                'updated_at' => '2022-03-01 17:06:43',
            ),
            116 =>
            array(
                'id' => 141,
                'jawaban' => 'Ada, luas ventilasi permanen < 10% dari luas lantai',
                'soal_id' => 61,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:06:43',
                'updated_at' => '2022-03-01 17:06:43',
            ),
            117 =>
            array(
                'id' => 142,
                'jawaban' => 'Ada, luas ventilasi permanen > 10% dari luas lantai',
                'soal_id' => 61,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:06:43',
                'updated_at' => '2022-03-01 17:06:43',
            ),
            118 =>
            array(
                'id' => 143,
                'jawaban' => 'Tidak ada',
                'soal_id' => 62,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:16',
                'updated_at' => '2022-03-01 17:07:16',
            ),
            119 =>
            array(
                'id' => 144,
                'jawaban' => 'Ada, lubang ventilasi dapur < 10% dari luas lantai',
                'soal_id' => 62,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:16',
                'updated_at' => '2022-03-01 17:07:16',
            ),
            120 =>
            array(
                'id' => 145,
                'jawaban' => 'Ada, lubang ventilasi dapur > 10% dari luas lantai dapur (asap keluar dengan sempurna) atau ada exhaust fan/ada peralatan lain yang sejenis',
                'soal_id' => 62,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:16',
                'updated_at' => '2022-03-01 17:07:16',
            ),
            121 =>
            array(
                'id' => 146,
                'jawaban' => 'Tidak terang (tidak dapat digunakan untuk membaca)',
                'soal_id' => 63,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:45',
                'updated_at' => '2022-03-01 17:07:45',
            ),
            122 =>
            array(
                'id' => 147,
                'jawaban' => 'Kurang terang sehingga kurang jelas untuk dipergunakan membaca dengan normal',
                'soal_id' => 63,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:45',
                'updated_at' => '2022-03-01 17:07:45',
            ),
            123 =>
            array(
                'id' => 148,
                'jawaban' => 'Terang dan tidak silau sehingga dapat dipergunakan untuk membaca dengan normal',
                'soal_id' => 63,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:45',
                'updated_at' => '2022-03-01 17:07:45',
            ),
            124 =>
            array(
                'id' => 149,
                'jawaban' => 'Kayu Bakar',
                'soal_id' => 64,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:08:28',
                'updated_at' => '2022-03-01 17:08:28',
            ),
            125 =>
            array(
                'id' => 150,
                'jawaban' => 'Kompor Minyak Tanah',
                'soal_id' => 64,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:08:28',
                'updated_at' => '2022-03-01 17:08:28',
            ),
            126 =>
            array(
                'id' => 151,
                'jawaban' => 'Kompor Gas',
                'soal_id' => 64,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:08:28',
                'updated_at' => '2022-03-01 17:08:28',
            ),
            127 =>
            array(
                'id' => 152,
                'jawaban' => 'Kompor Listrik',
                'soal_id' => 64,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:08:28',
                'updated_at' => '2022-03-01 17:08:28',
            ),
            128 =>
            array(
                'id' => 153,
                'jawaban' => 'ISPA',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            129 =>
            array(
                'id' => 154,
                'jawaban' => 'Covid',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            130 =>
            array(
                'id' => 155,
                'jawaban' => 'TB Paru',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            131 =>
            array(
                'id' => 156,
                'jawaban' => 'Kecacingan',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            132 =>
            array(
                'id' => 157,
                'jawaban' => 'Pneumonia',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            133 =>
            array(
                'id' => 158,
                'jawaban' => 'Diare',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            134 =>
            array(
                'id' => 159,
                'jawaban' => 'Campak',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            135 =>
            array(
                'id' => 160,
                'jawaban' => 'Sering',
                'soal_id' => 66,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:08',
                'updated_at' => '2022-03-01 17:11:08',
            ),
            136 =>
            array(
                'id' => 161,
                'jawaban' => 'Jarang',
                'soal_id' => 66,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:08',
                'updated_at' => '2022-03-01 17:11:08',
            ),
            137 =>
            array(
                'id' => 162,
                'jawaban' => 'Tidak Pernah',
                'soal_id' => 66,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:08',
                'updated_at' => '2022-03-01 17:11:08',
            ),
            138 =>
            array(
                'id' => 163,
                'jawaban' => '1 kali dalam beberapa hari',
                'soal_id' => 67,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:40',
                'updated_at' => '2022-03-01 17:11:40',
            ),
            139 =>
            array(
                'id' => 164,
                'jawaban' => '1 kali sehari',
                'soal_id' => 67,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:40',
                'updated_at' => '2022-03-01 17:11:40',
            ),
            140 =>
            array(
                'id' => 165,
                'jawaban' => '2 kali sehari',
                'soal_id' => 67,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:40',
                'updated_at' => '2022-03-01 17:11:40',
            ),
            141 =>
            array(
                'id' => 166,
                'jawaban' => '1 kali sehari',
                'soal_id' => 68,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:12:21',
                'updated_at' => '2022-03-01 17:12:21',
            ),
            142 =>
            array(
                'id' => 167,
                'jawaban' => '2 kali sehari',
                'soal_id' => 68,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:12:21',
                'updated_at' => '2022-03-01 17:12:21',
            ),
            143 =>
            array(
                'id' => 168,
                'jawaban' => '3 kali sehari',
                'soal_id' => 68,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:12:21',
                'updated_at' => '2022-03-01 17:12:21',
            ),
            144 =>
            array(
                'id' => 169,
                'jawaban' => 'Lebih dari 3 kali sehari',
                'soal_id' => 68,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:12:21',
                'updated_at' => '2022-03-01 17:12:21',
            ),
            145 =>
            array(
                'id' => 170,
                'jawaban' => 'Ya',
                'soal_id' => 69,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:15:05',
                'updated_at' => '2022-03-01 17:15:05',
            ),
            146 =>
            array(
                'id' => 171,
                'jawaban' => 'Tidak',
                'soal_id' => 69,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:15:05',
                'updated_at' => '2022-03-01 17:15:05',
            ),
            147 =>
            array(
                'id' => 172,
                'jawaban' => '- Tidak mengonsumsi suplemen',
                'soal_id' => 70,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:20:43',
                'updated_at' => '2022-03-01 17:49:26',
            ),
            148 =>
            array(
                'id' => 173,
                'jawaban' => '3-5 bulan',
                'soal_id' => 70,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:20:43',
                'updated_at' => '2022-03-01 17:20:43',
            ),
            149 =>
            array(
                'id' => 174,
                'jawaban' => '6-12 bulan',
                'soal_id' => 70,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:20:43',
                'updated_at' => '2022-03-01 17:20:43',
            ),
            150 =>
            array(
                'id' => 175,
                'jawaban' => '1-3 tahun',
                'soal_id' => 70,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:20:43',
                'updated_at' => '2022-03-01 17:20:43',
            ),
            151 =>
            array(
                'id' => 176,
                'jawaban' => '>3 tahun',
                'soal_id' => 70,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:20:43',
                'updated_at' => '2022-03-01 17:20:43',
            ),
            152 =>
            array(
                'id' => 177,
                'jawaban' => '- Tidak mengonsumsi suplemen',
                'soal_id' => 71,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:23:09',
                'updated_at' => '2022-03-01 17:49:37',
            ),
            153 =>
            array(
                'id' => 178,
                'jawaban' => 'Selalu ( 1-3 kali/hari)',
                'soal_id' => 71,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:23:09',
                'updated_at' => '2022-03-01 17:23:09',
            ),
            154 =>
            array(
                'id' => 179,
                'jawaban' => 'Sering (1-4 kali/ minggu)',
                'soal_id' => 71,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:23:09',
                'updated_at' => '2022-03-01 17:23:09',
            ),
            155 =>
            array(
                'id' => 180,
                'jawaban' => 'Jarang (1-3 kali/ bulan)',
                'soal_id' => 71,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:23:09',
                'updated_at' => '2022-03-01 17:23:09',
            ),
            156 =>
            array(
                'id' => 181,
                'jawaban' => 'Mahal',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            157 =>
            array(
                'id' => 182,
                'jawaban' => 'Takut ketergantungan',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            158 =>
            array(
                'id' => 183,
                'jawaban' => 'Tidak tahu manfaat/ kegunaannya',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            159 =>
            array(
                'id' => 184,
                'jawaban' => 'Sudah makan banyak obat',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            160 =>
            array(
                'id' => 185,
                'jawaban' => 'Makan 3 kali / hari sudah cukup',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            161 =>
            array(
                'id' => 186,
                'jawaban' => 'Banyak efek samping',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            162 =>
            array(
                'id' => 187,
                'jawaban' => 'Ikan',
                'soal_id' => 73,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            163 =>
            array(
                'id' => 188,
                'jawaban' => 'Sayur',
                'soal_id' => 73,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            164 =>
            array(
                'id' => 189,
                'jawaban' => 'Daging Sapi',
                'soal_id' => 73,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            165 =>
            array(
                'id' => 190,
                'jawaban' => 'Ayam',
                'soal_id' => 73,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            166 =>
            array(
                'id' => 191,
                'jawaban' => 'Buah',
                'soal_id' => 73,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            167 =>
            array(
                'id' => 192,
                'jawaban' => 'Lainnya',
                'soal_id' => 73,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            168 =>
            array(
                'id' => 193,
                'jawaban' => 'Ya',
                'soal_id' => 83,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:37:16',
                'updated_at' => '2022-03-01 17:37:16',
            ),
            169 =>
            array(
                'id' => 194,
                'jawaban' => 'Tidak',
                'soal_id' => 83,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:37:16',
                'updated_at' => '2022-03-01 17:37:16',
            ),
            170 =>
            array(
                'id' => 195,
                'jawaban' => 'Lengkap',
                'soal_id' => 85,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:42:41',
                'updated_at' => '2022-03-01 17:42:41',
            ),
            171 =>
            array(
                'id' => 196,
                'jawaban' => 'Tidak Lengkap',
                'soal_id' => 85,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:42:41',
                'updated_at' => '2022-03-01 17:42:41',
            ),
            172 =>
            array(
                'id' => 197,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 85,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:42:41',
                'updated_at' => '2022-03-01 17:50:39',
            ),
            173 =>
            array(
                'id' => 198,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 83,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:43:10',
                'updated_at' => '2022-03-01 17:50:17',
            ),
            174 =>
            array(
                'id' => 199,
                'jawaban' => 'Ya',
                'soal_id' => 86,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:14',
                'updated_at' => '2022-03-01 17:44:14',
            ),
            175 =>
            array(
                'id' => 200,
                'jawaban' => 'Tidak',
                'soal_id' => 86,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:14',
                'updated_at' => '2022-03-01 17:44:14',
            ),
            176 =>
            array(
                'id' => 201,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 86,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:14',
                'updated_at' => '2022-03-01 17:50:55',
            ),
            177 =>
            array(
                'id' => 202,
                'jawaban' => 'Ya',
                'soal_id' => 87,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:56',
                'updated_at' => '2022-03-01 17:44:56',
            ),
            178 =>
            array(
                'id' => 203,
                'jawaban' => 'Tidak',
                'soal_id' => 87,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:56',
                'updated_at' => '2022-03-01 17:44:56',
            ),
            179 =>
            array(
                'id' => 204,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 87,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:56',
                'updated_at' => '2022-03-01 17:51:05',
            ),
            180 =>
            array(
                'id' => 205,
                'jawaban' => 'Ada',
                'soal_id' => 88,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:45:44',
                'updated_at' => '2022-03-01 17:45:44',
            ),
            181 =>
            array(
                'id' => 206,
                'jawaban' => 'Tidak Ada',
                'soal_id' => 88,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:45:44',
                'updated_at' => '2022-03-01 17:45:44',
            ),
            182 =>
            array(
                'id' => 207,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 88,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:45:44',
                'updated_at' => '2022-03-01 17:51:19',
            ),
            183 =>
            array(
                'id' => 208,
                'jawaban' => 'Dukun Bayi',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            184 =>
            array(
                'id' => 209,
                'jawaban' => 'Bidan Desa',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            185 =>
            array(
                'id' => 210,
                'jawaban' => 'Bidan Praktek Swasta',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            186 =>
            array(
                'id' => 211,
                'jawaban' => 'Dokter Umum',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            187 =>
            array(
                'id' => 212,
                'jawaban' => 'Dokter ahli kebidanan',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            188 =>
            array(
                'id' => 213,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            189 =>
            array(
                'id' => 214,
                'jawaban' => 'Ya',
                'soal_id' => 90,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:52:36',
                'updated_at' => '2022-03-01 17:52:36',
            ),
            190 =>
            array(
                'id' => 215,
                'jawaban' => 'Tidak',
                'soal_id' => 90,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:52:36',
                'updated_at' => '2022-03-01 17:52:36',
            ),
            191 =>
            array(
                'id' => 216,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 90,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:52:36',
                'updated_at' => '2022-03-01 17:52:36',
            ),
            192 =>
            array(
                'id' => 217,
                'jawaban' => 'Segera setelah dilahirkan',
                'soal_id' => 91,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:53:44',
                'updated_at' => '2022-03-01 17:53:44',
            ),
            193 =>
            array(
                'id' => 218,
                'jawaban' => '1 hari setelah dilahirkan',
                'soal_id' => 91,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:53:44',
                'updated_at' => '2022-03-01 17:53:44',
            ),
            194 =>
            array(
                'id' => 219,
                'jawaban' => '1 minggu setelah dilahirkan',
                'soal_id' => 91,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:53:44',
                'updated_at' => '2022-03-01 17:53:44',
            ),
            195 =>
            array(
                'id' => 220,
                'jawaban' => 'Tidak memberikan ASI',
                'soal_id' => 91,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:53:44',
                'updated_at' => '2022-03-01 17:53:44',
            ),
            196 =>
            array(
                'id' => 221,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 91,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:53:44',
                'updated_at' => '2022-03-01 17:53:44',
            ),
            197 =>
            array(
                'id' => 222,
                'jawaban' => 'Ya',
                'soal_id' => 92,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:55:18',
                'updated_at' => '2022-03-01 17:55:18',
            ),
            198 =>
            array(
                'id' => 223,
                'jawaban' => 'Tidak',
                'soal_id' => 92,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:55:18',
                'updated_at' => '2022-03-01 17:55:18',
            ),
            199 =>
            array(
                'id' => 224,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 92,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:55:18',
                'updated_at' => '2022-03-01 17:55:18',
            ),
            200 =>
            array(
                'id' => 225,
                'jawaban' => 'Lengkap',
                'soal_id' => 97,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:58:31',
                'updated_at' => '2022-03-01 17:58:31',
            ),
            201 =>
            array(
                'id' => 226,
                'jawaban' => 'Tidak Lengkap',
                'soal_id' => 97,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:58:31',
                'updated_at' => '2022-03-01 17:58:31',
            ),
            202 =>
            array(
                'id' => 227,
                'jawaban' => '- Tidak Ada Bayi, Baduta, dan Balita',
                'soal_id' => 97,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:58:31',
                'updated_at' => '2022-03-01 17:58:31',
            ),
            203 =>
            array(
                'id' => 228,
                'jawaban' => 'Ada',
                'soal_id' => 98,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:59:09',
                'updated_at' => '2022-03-01 17:59:09',
            ),
            204 =>
            array(
                'id' => 229,
                'jawaban' => 'Tidak ada',
                'soal_id' => 98,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:59:09',
                'updated_at' => '2022-03-01 17:59:09',
            ),
            205 =>
            array(
                'id' => 230,
                'jawaban' => '- Tidak Ada Bayi, Baduta, dan Balita',
                'soal_id' => 98,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:59:09',
                'updated_at' => '2022-03-01 17:59:09',
            ),
            206 =>
            array(
                'id' => 231,
                'jawaban' => 'Tidak tahu',
                'soal_id' => 99,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:10',
                'updated_at' => '2022-03-01 18:00:10',
            ),
            207 =>
            array(
                'id' => 232,
                'jawaban' => 'ASI yang selalu diberikan kepada bayi sejak lahir',
                'soal_id' => 99,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:10',
                'updated_at' => '2022-03-01 18:00:10',
            ),
            208 =>
            array(
                'id' => 233,
                'jawaban' => 'ASI yang pertama kali keluar dan berwarna kekuningan',
                'soal_id' => 99,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:10',
                'updated_at' => '2022-03-01 18:00:10',
            ),
            209 =>
            array(
                'id' => 234,
                'jawaban' => 'Zat gizi yang dimiliki oleh bayi',
                'soal_id' => 99,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:10',
                'updated_at' => '2022-03-01 18:00:10',
            ),
            210 =>
            array(
                'id' => 235,
                'jawaban' => 'Ya',
                'soal_id' => 100,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:45',
                'updated_at' => '2022-03-01 18:00:45',
            ),
            211 =>
            array(
                'id' => 236,
                'jawaban' => 'Tidak',
                'soal_id' => 100,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:45',
                'updated_at' => '2022-03-01 18:00:45',
            ),
            212 =>
            array(
                'id' => 237,
                'jawaban' => 'Ya',
                'soal_id' => 101,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:01:06',
                'updated_at' => '2022-03-01 18:01:06',
            ),
            213 =>
            array(
                'id' => 238,
                'jawaban' => 'Tidak',
                'soal_id' => 101,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:01:06',
                'updated_at' => '2022-03-01 18:01:06',
            ),
            214 =>
            array(
                'id' => 239,
                'jawaban' => 'Bayi diletakkan di samping ibu.',
                'soal_id' => 102,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:10',
                'updated_at' => '2022-03-01 18:02:10',
            ),
            215 =>
            array(
                'id' => 240,
                'jawaban' => 'Bayi diletakkan di dada atau perut ibu.',
                'soal_id' => 102,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:10',
                'updated_at' => '2022-03-01 18:02:10',
            ),
            216 =>
            array(
                'id' => 241,
                'jawaban' => 'Bayi diletakkan di tempat tidur bayi.',
                'soal_id' => 102,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:10',
                'updated_at' => '2022-03-01 18:02:10',
            ),
            217 =>
            array(
                'id' => 242,
                'jawaban' => 'Bayi digendong agar berhenti menangis.',
                'soal_id' => 102,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:10',
                'updated_at' => '2022-03-01 18:02:10',
            ),
            218 =>
            array(
                'id' => 243,
                'jawaban' => '15 menit',
                'soal_id' => 103,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:42',
                'updated_at' => '2022-03-01 18:02:42',
            ),
            219 =>
            array(
                'id' => 244,
                'jawaban' => '30 menit',
                'soal_id' => 103,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:42',
                'updated_at' => '2022-03-01 18:02:42',
            ),
            220 =>
            array(
                'id' => 245,
                'jawaban' => '=1jam',
                'soal_id' => 103,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:42',
                'updated_at' => '2022-03-01 18:02:42',
            ),
            221 =>
            array(
                'id' => 246,
                'jawaban' => 'Lainnya',
                'soal_id' => 103,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:42',
                'updated_at' => '2022-03-01 18:02:42',
            ),
            222 =>
            array(
                'id' => 247,
                'jawaban' => 'Ya',
                'soal_id' => 104,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:03:01',
                'updated_at' => '2022-03-01 18:03:01',
            ),
            223 =>
            array(
                'id' => 248,
                'jawaban' => 'Tidak',
                'soal_id' => 104,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:03:01',
                'updated_at' => '2022-03-01 18:03:01',
            ),
            224 =>
            array(
                'id' => 249,
                'jawaban' => 'Ya',
                'soal_id' => 105,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:03:50',
                'updated_at' => '2022-03-01 18:03:50',
            ),
            225 =>
            array(
                'id' => 250,
                'jawaban' => 'Tidak',
                'soal_id' => 105,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:03:50',
                'updated_at' => '2022-03-01 18:03:50',
            ),
            226 =>
            array(
                'id' => 251,
                'jawaban' => 'Ya',
                'soal_id' => 106,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:04:07',
                'updated_at' => '2022-03-01 18:04:07',
            ),
            227 =>
            array(
                'id' => 252,
                'jawaban' => 'Tidak',
                'soal_id' => 106,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:04:07',
                'updated_at' => '2022-03-01 18:04:07',
            ),
            228 =>
            array(
                'id' => 253,
                'jawaban' => '- Belum Pernah Mengetahui Kata "STUNTING"',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:12:41',
                'updated_at' => '2022-03-01 18:12:41',
            ),
            229 =>
            array(
                'id' => 254,
                'jawaban' => 'Ya',
                'soal_id' => 107,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 01:50:45',
                'updated_at' => '2022-03-02 01:50:45',
            ),
            230 =>
            array(
                'id' => 255,
                'jawaban' => 'Tidak',
                'soal_id' => 107,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 01:50:45',
                'updated_at' => '2022-03-02 01:50:45',
            ),
            231 =>
            array(
                'id' => 256,
                'jawaban' => 'Ya',
                'soal_id' => 108,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:25:42',
                'updated_at' => '2022-03-02 02:25:42',
            ),
            232 =>
            array(
                'id' => 257,
                'jawaban' => 'Tidak',
                'soal_id' => 108,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:25:42',
                'updated_at' => '2022-03-02 02:25:42',
            ),
            233 =>
            array(
                'id' => 258,
                'jawaban' => 'Ya',
                'soal_id' => 109,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:01',
                'updated_at' => '2022-03-02 02:26:01',
            ),
            234 =>
            array(
                'id' => 259,
                'jawaban' => 'Tidak',
                'soal_id' => 109,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:01',
                'updated_at' => '2022-03-02 02:26:01',
            ),
            235 =>
            array(
                'id' => 260,
                'jawaban' => 'Ya',
                'soal_id' => 110,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:21',
                'updated_at' => '2022-03-02 02:26:21',
            ),
            236 =>
            array(
                'id' => 261,
                'jawaban' => 'Tidak',
                'soal_id' => 110,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:21',
                'updated_at' => '2022-03-02 02:26:21',
            ),
            237 =>
            array(
                'id' => 262,
                'jawaban' => 'Ya',
                'soal_id' => 111,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:36',
                'updated_at' => '2022-03-02 02:26:36',
            ),
            238 =>
            array(
                'id' => 263,
                'jawaban' => 'Tidak',
                'soal_id' => 111,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:36',
                'updated_at' => '2022-03-02 02:26:36',
            ),
            239 =>
            array(
                'id' => 264,
                'jawaban' => 'Ya',
                'soal_id' => 112,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:55',
                'updated_at' => '2022-03-02 02:26:55',
            ),
            240 =>
            array(
                'id' => 265,
                'jawaban' => 'Tidak',
                'soal_id' => 112,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:55',
                'updated_at' => '2022-03-02 02:26:55',
            ),
            241 =>
            array(
                'id' => 266,
                'jawaban' => 'Ya',
                'soal_id' => 113,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:15',
                'updated_at' => '2022-03-02 02:27:15',
            ),
            242 =>
            array(
                'id' => 267,
                'jawaban' => 'Tidak',
                'soal_id' => 113,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:15',
                'updated_at' => '2022-03-02 02:27:15',
            ),
            243 =>
            array(
                'id' => 268,
                'jawaban' => 'Ya',
                'soal_id' => 114,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:36',
                'updated_at' => '2022-03-02 02:27:36',
            ),
            244 =>
            array(
                'id' => 269,
                'jawaban' => 'Tidak',
                'soal_id' => 114,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:36',
                'updated_at' => '2022-03-02 02:27:36',
            ),
            245 =>
            array(
                'id' => 270,
                'jawaban' => 'Ya',
                'soal_id' => 115,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:54',
                'updated_at' => '2022-03-02 02:27:54',
            ),
            246 =>
            array(
                'id' => 271,
                'jawaban' => 'Tidak',
                'soal_id' => 115,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:54',
                'updated_at' => '2022-03-02 02:27:54',
            ),
            247 =>
            array(
                'id' => 272,
                'jawaban' => 'Ya',
                'soal_id' => 116,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:10',
                'updated_at' => '2022-03-02 02:28:10',
            ),
            248 =>
            array(
                'id' => 273,
                'jawaban' => 'Tidak',
                'soal_id' => 116,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:10',
                'updated_at' => '2022-03-02 02:28:10',
            ),
            249 =>
            array(
                'id' => 274,
                'jawaban' => 'Ya',
                'soal_id' => 117,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:42',
                'updated_at' => '2022-03-02 02:28:42',
            ),
            250 =>
            array(
                'id' => 275,
                'jawaban' => 'Tidak',
                'soal_id' => 117,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:42',
                'updated_at' => '2022-03-02 02:28:42',
            ),
            251 =>
            array(
                'id' => 276,
                'jawaban' => 'Ya',
                'soal_id' => 118,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:58',
                'updated_at' => '2022-03-02 02:28:58',
            ),
            252 =>
            array(
                'id' => 277,
                'jawaban' => 'Tidak',
                'soal_id' => 118,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:58',
                'updated_at' => '2022-03-02 02:28:58',
            ),
            253 =>
            array(
                'id' => 278,
                'jawaban' => 'Ya',
                'soal_id' => 119,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:29:34',
                'updated_at' => '2022-03-02 02:29:34',
            ),
            254 =>
            array(
                'id' => 279,
                'jawaban' => 'Tidak',
                'soal_id' => 119,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:29:34',
                'updated_at' => '2022-03-02 02:29:34',
            ),
            255 =>
            array(
                'id' => 280,
                'jawaban' => 'Ya',
                'soal_id' => 120,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:29:49',
                'updated_at' => '2022-03-02 02:29:49',
            ),
            256 =>
            array(
                'id' => 281,
                'jawaban' => 'Tidak',
                'soal_id' => 120,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:29:49',
                'updated_at' => '2022-03-02 02:29:49',
            ),
            257 =>
            array(
                'id' => 282,
                'jawaban' => 'Ya',
                'soal_id' => 121,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:30:05',
                'updated_at' => '2022-03-02 02:30:05',
            ),
            258 =>
            array(
                'id' => 283,
                'jawaban' => 'Tidak',
                'soal_id' => 121,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:30:05',
                'updated_at' => '2022-03-02 02:30:05',
            ),
        ));
    }
}
