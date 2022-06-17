<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JawabanSoalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jawaban_soal')->delete();
        
        \DB::table('jawaban_soal')->insert(array (
            0 => 
            array (
                'id' => 25,
                'jawaban' => 'Ya',
                'soal_id' => 7,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:27:36',
                'updated_at' => '2022-02-22 02:27:36',
            ),
            1 => 
            array (
                'id' => 26,
                'jawaban' => 'Tidak',
                'soal_id' => 7,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:27:36',
                'updated_at' => '2022-02-22 02:27:36',
            ),
            2 => 
            array (
                'id' => 27,
                'jawaban' => 'Teman/Keluarga',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            3 => 
            array (
                'id' => 28,
                'jawaban' => 'Sosmed',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            4 => 
            array (
                'id' => 29,
                'jawaban' => 'Baliho',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            5 => 
            array (
                'id' => 30,
                'jawaban' => 'Surat Kabar online/offline',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            6 => 
            array (
                'id' => 31,
                'jawaban' => 'Tv',
                'soal_id' => 8,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            7 => 
            array (
                'id' => 32,
                'jawaban' => 'Lainnya',
                'soal_id' => 8,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            8 => 
            array (
                'id' => 33,
                'jawaban' => 'Ya',
                'soal_id' => 11,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:03',
                'updated_at' => '2022-02-22 02:30:03',
            ),
            9 => 
            array (
                'id' => 34,
                'jawaban' => 'Tidak',
                'soal_id' => 11,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:03',
                'updated_at' => '2022-02-22 02:30:03',
            ),
            10 => 
            array (
                'id' => 35,
                'jawaban' => 'Ya, Ada',
                'soal_id' => 12,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:19',
                'updated_at' => '2022-02-22 02:30:19',
            ),
            11 => 
            array (
                'id' => 36,
                'jawaban' => 'Tidak Ada',
                'soal_id' => 12,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:19',
                'updated_at' => '2022-02-22 02:30:19',
            ),
            12 => 
            array (
                'id' => 37,
                'jawaban' => '< Rp.1.000.000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            13 => 
            array (
                'id' => 38,
                'jawaban' => 'Rp. 1.000.000 -  Rp. 3.000.000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            14 => 
            array (
                'id' => 39,
                'jawaban' => 'Rp. 3.000.000 – Rp. 5.000.000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            15 => 
            array (
                'id' => 40,
                'jawaban' => '> Rp. 5.000.0000',
                'soal_id' => 13,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            16 => 
            array (
                'id' => 41,
                'jawaban' => 'Hasil Pertanian',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            17 => 
            array (
                'id' => 42,
                'jawaban' => 'Hasil perkebunan',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            18 => 
            array (
                'id' => 43,
                'jawaban' => 'Hasil Peternakan',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            19 => 
            array (
                'id' => 44,
                'jawaban' => 'Hasil usaha/bisnis',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            20 => 
            array (
                'id' => 45,
                'jawaban' => 'Hasil kerja di Perusahaan/ Kantor',
                'soal_id' => 14,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            21 => 
            array (
                'id' => 46,
                'jawaban' => 'Ya',
                'soal_id' => 15,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:35',
                'updated_at' => '2022-02-22 02:32:35',
            ),
            22 => 
            array (
                'id' => 47,
                'jawaban' => 'Tidak',
                'soal_id' => 15,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:35',
                'updated_at' => '2022-02-22 02:32:35',
            ),
            23 => 
            array (
                'id' => 48,
                'jawaban' => 'Tidak ada',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            24 => 
            array (
                'id' => 49,
                'jawaban' => 'Ada, bukan milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            25 => 
            array (
                'id' => 50,
                'jawaban' => 'Ada, milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            26 => 
            array (
                'id' => 51,
                'jawaban' => 'Ada, bukan milik sendiri dan memenuhi syaratkesehatan',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            27 => 
            array (
                'id' => 52,
                'jawaban' => 'Ada, milik sendiri',
                'soal_id' => 16,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            28 => 
            array (
                'id' => 53,
                'jawaban' => 'Tidak ada',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            29 => 
            array (
                'id' => 54,
                'jawaban' => 'Sungai',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            30 => 
            array (
                'id' => 55,
                'jawaban' => 'Kebun',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            31 => 
            array (
                'id' => 56,
                'jawaban' => 'Ada, bukan leher angsa, tidak ada tutup, disalurkan ke sungai/kolam',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            32 => 
            array (
                'id' => 57,
            'jawaban' => 'Ada, bukan leher angsa ada ditutup (leher angsa), disalurkan ke sungai/kolam',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            33 => 
            array (
                'id' => 58,
                'jawaban' => 'Ada, bukan leher angsa ada tutup, septic tank',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            34 => 
            array (
                'id' => 59,
                'jawaban' => 'Ada, leher angsa, septic tank',
                'soal_id' => 17,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            35 => 
            array (
                'id' => 60,
                'jawaban' => 'Tidak Ada',
                'soal_id' => 18,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:50',
                'updated_at' => '2022-02-22 02:35:50',
            ),
            36 => 
            array (
                'id' => 61,
                'jawaban' => 'Ada',
                'soal_id' => 18,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:50',
                'updated_at' => '2022-02-22 02:35:50',
            ),
            37 => 
            array (
                'id' => 62,
                'jawaban' => 'Laki-laki',
                'soal_id' => 30,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:27:58',
                'updated_at' => '2022-03-01 16:27:58',
            ),
            38 => 
            array (
                'id' => 63,
                'jawaban' => 'Perempuan',
                'soal_id' => 30,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:27:58',
                'updated_at' => '2022-03-01 16:27:58',
            ),
            39 => 
            array (
                'id' => 64,
                'jawaban' => 'SD',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            40 => 
            array (
                'id' => 65,
                'jawaban' => 'SMP',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            41 => 
            array (
                'id' => 66,
                'jawaban' => 'SMA',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            42 => 
            array (
                'id' => 67,
                'jawaban' => 'Diploma',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            43 => 
            array (
                'id' => 68,
                'jawaban' => 'S1',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            44 => 
            array (
                'id' => 69,
                'jawaban' => 'S2',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            45 => 
            array (
                'id' => 70,
                'jawaban' => 'S3',
                'soal_id' => 32,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:30:34',
                'updated_at' => '2022-03-01 16:30:34',
            ),
            46 => 
            array (
                'id' => 71,
                'jawaban' => 'Ya',
                'soal_id' => 38,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:34:53',
                'updated_at' => '2022-03-01 16:34:53',
            ),
            47 => 
            array (
                'id' => 72,
                'jawaban' => 'Tidak',
                'soal_id' => 38,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:34:53',
                'updated_at' => '2022-03-01 16:34:53',
            ),
            48 => 
            array (
                'id' => 73,
                'jawaban' => 'Ya',
                'soal_id' => 40,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:38:23',
                'updated_at' => '2022-03-02 02:43:37',
            ),
            49 => 
            array (
                'id' => 74,
                'jawaban' => 'Tidak',
                'soal_id' => 40,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:38:23',
                'updated_at' => '2022-03-02 02:43:37',
            ),
            50 => 
            array (
                'id' => 75,
                'jawaban' => 'Teman/Keluarga',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            51 => 
            array (
                'id' => 76,
                'jawaban' => 'Sosmed',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            52 => 
            array (
                'id' => 77,
                'jawaban' => 'Baliho',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            53 => 
            array (
                'id' => 78,
                'jawaban' => 'Surat Kabar online/offline',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            54 => 
            array (
                'id' => 79,
                'jawaban' => 'Tv',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            55 => 
            array (
                'id' => 80,
                'jawaban' => 'Lainnya',
                'soal_id' => 41,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:39:34',
                'updated_at' => '2022-03-01 16:39:34',
            ),
            56 => 
            array (
                'id' => 81,
                'jawaban' => 'Ya',
                'soal_id' => 44,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:42:28',
                'updated_at' => '2022-03-01 16:42:28',
            ),
            57 => 
            array (
                'id' => 82,
                'jawaban' => 'Tidak',
                'soal_id' => 44,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:42:28',
                'updated_at' => '2022-03-01 16:42:28',
            ),
            58 => 
            array (
                'id' => 83,
                'jawaban' => 'Ya, ada',
                'soal_id' => 45,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:42:52',
                'updated_at' => '2022-03-01 16:43:39',
            ),
            59 => 
            array (
                'id' => 84,
                'jawaban' => 'Tidak ada',
                'soal_id' => 45,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:42:52',
                'updated_at' => '2022-03-01 16:43:39',
            ),
            60 => 
            array (
                'id' => 85,
                'jawaban' => 'Ya',
                'soal_id' => 46,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:43:11',
                'updated_at' => '2022-03-01 16:43:11',
            ),
            61 => 
            array (
                'id' => 86,
                'jawaban' => 'Tidak',
                'soal_id' => 46,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:43:11',
                'updated_at' => '2022-03-01 16:43:11',
            ),
            62 => 
            array (
                'id' => 87,
                'jawaban' => '< Rp. 1.000.000',
                'soal_id' => 47,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:45:54',
                'updated_at' => '2022-03-01 16:45:54',
            ),
            63 => 
            array (
                'id' => 88,
                'jawaban' => 'Rp. 1.000.000 - Rp. 3.000.000',
                'soal_id' => 47,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:45:54',
                'updated_at' => '2022-03-01 16:45:54',
            ),
            64 => 
            array (
                'id' => 89,
                'jawaban' => 'Rp. 3.000.000 - Rp. 5.000.000',
                'soal_id' => 47,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:45:54',
                'updated_at' => '2022-03-01 16:45:54',
            ),
            65 => 
            array (
                'id' => 90,
                'jawaban' => '> Rp. 5.000.000',
                'soal_id' => 47,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:45:54',
                'updated_at' => '2022-03-01 16:45:54',
            ),
            66 => 
            array (
                'id' => 91,
                'jawaban' => 'Hasil Pertanian',
                'soal_id' => 48,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:19',
                'updated_at' => '2022-03-01 16:47:19',
            ),
            67 => 
            array (
                'id' => 92,
                'jawaban' => 'Hasil Perkebunan',
                'soal_id' => 48,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:19',
                'updated_at' => '2022-03-01 16:47:19',
            ),
            68 => 
            array (
                'id' => 93,
                'jawaban' => 'Hasil Peternakan',
                'soal_id' => 48,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:19',
                'updated_at' => '2022-03-01 16:47:19',
            ),
            69 => 
            array (
                'id' => 94,
                'jawaban' => 'Hasil Usaha/Bisnis',
                'soal_id' => 48,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:19',
                'updated_at' => '2022-03-01 16:47:19',
            ),
            70 => 
            array (
                'id' => 95,
                'jawaban' => 'Hasil Kerja di Perusahaan/Kantor',
                'soal_id' => 48,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:19',
                'updated_at' => '2022-03-01 16:47:19',
            ),
            71 => 
            array (
                'id' => 96,
                'jawaban' => 'Ya',
                'soal_id' => 49,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:48',
                'updated_at' => '2022-03-01 16:47:48',
            ),
            72 => 
            array (
                'id' => 97,
                'jawaban' => 'Tidak',
                'soal_id' => 49,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:47:48',
                'updated_at' => '2022-03-01 16:47:48',
            ),
            73 => 
            array (
                'id' => 98,
                'jawaban' => 'Membeli Bahan Makanan',
                'soal_id' => 50,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            74 => 
            array (
                'id' => 99,
                'jawaban' => 'Membeli Pakaian',
                'soal_id' => 50,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            75 => 
            array (
                'id' => 100,
                'jawaban' => 'Membeli Perabotan Rumah Tangga',
                'soal_id' => 50,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            76 => 
            array (
                'id' => 101,
                'jawaban' => 'Biaya Sekolah/Pendidikan',
                'soal_id' => 50,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            77 => 
            array (
                'id' => 102,
                'jawaban' => 'Membayar Cicilan Kendaraan',
                'soal_id' => 50,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            78 => 
            array (
                'id' => 103,
                'jawaban' => 'Lainnya',
                'soal_id' => 50,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:49:05',
                'updated_at' => '2022-03-01 16:49:05',
            ),
            79 => 
            array (
                'id' => 104,
                'jawaban' => 'Tidak dapat bantuan',
                'soal_id' => 51,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:55:24',
                'updated_at' => '2022-03-01 16:55:24',
            ),
            80 => 
            array (
                'id' => 105,
                'jawaban' => 'Lainnya',
                'soal_id' => 51,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 16:55:24',
                'updated_at' => '2022-03-01 16:55:24',
            ),
            81 => 
            array (
                'id' => 106,
                'jawaban' => 'Tidak ada',
                'soal_id' => 52,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:00:56',
                'updated_at' => '2022-03-01 17:00:56',
            ),
            82 => 
            array (
                'id' => 107,
                'jawaban' => 'Ada, bukan milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 52,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:00:56',
                'updated_at' => '2022-03-01 17:00:56',
            ),
            83 => 
            array (
                'id' => 108,
                'jawaban' => 'Ada, milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 52,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:00:56',
                'updated_at' => '2022-03-01 17:00:56',
            ),
            84 => 
            array (
                'id' => 109,
                'jawaban' => 'Ada, bukan milik sendiri dan memenuhi syaratkesehatan',
                'soal_id' => 52,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:00:56',
                'updated_at' => '2022-03-01 17:00:56',
            ),
            85 => 
            array (
                'id' => 110,
                'jawaban' => 'Ada, milik sendiri',
                'soal_id' => 52,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:00:56',
                'updated_at' => '2022-03-01 17:00:56',
            ),
            86 => 
            array (
                'id' => 111,
                'jawaban' => 'Tidak ada',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            87 => 
            array (
                'id' => 112,
                'jawaban' => 'Sungai',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            88 => 
            array (
                'id' => 113,
                'jawaban' => 'Kebun',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            89 => 
            array (
                'id' => 114,
                'jawaban' => 'Ada, bukan leher angsa, tidak ada tutup, disalurkan ke sungai/kolam',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            90 => 
            array (
                'id' => 115,
            'jawaban' => 'Ada, bukan leher angsa ada ditutup (leher angsa), disalurkan ke sungai/kolam',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            91 => 
            array (
                'id' => 116,
                'jawaban' => 'Ada, bukan leher angsa ada tutup, septic tank',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            92 => 
            array (
                'id' => 117,
                'jawaban' => 'Ada, leher angsa, septic tank',
                'soal_id' => 53,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:02:20',
                'updated_at' => '2022-03-01 17:02:20',
            ),
            93 => 
            array (
                'id' => 118,
                'jawaban' => 'Tidak ada, sehingga tergenang tidak teratur di halaman rumah',
                'soal_id' => 54,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:00',
                'updated_at' => '2022-03-01 17:03:00',
            ),
            94 => 
            array (
                'id' => 119,
            'jawaban' => 'Ada, diresapkan tetapi mencemari sumber air (jarak dengan sumber air < 10 m)',
                'soal_id' => 54,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:00',
                'updated_at' => '2022-03-01 17:03:00',
            ),
            95 => 
            array (
                'id' => 120,
                'jawaban' => 'Ada, dialirkan ke selokan terbuka',
                'soal_id' => 54,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:00',
                'updated_at' => '2022-03-01 17:03:00',
            ),
            96 => 
            array (
                'id' => 121,
            'jawaban' => 'Ada, diresapkan dan tidak mencemari sumber air (jarak dengan sumer air >10m)',
                'soal_id' => 54,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:00',
                'updated_at' => '2022-03-01 17:03:00',
            ),
            97 => 
            array (
                'id' => 122,
            'jawaban' => 'Ada, disalurkan ke selokan tertutup (saluran kota) untuk diolah lebih lanjut)',
                'soal_id' => 54,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:00',
                'updated_at' => '2022-03-01 17:03:00',
            ),
            98 => 
            array (
                'id' => 123,
                'jawaban' => 'Tidak ada',
                'soal_id' => 55,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:37',
                'updated_at' => '2022-03-01 17:03:37',
            ),
            99 => 
            array (
                'id' => 124,
                'jawaban' => 'Ada, tapi kedap air dan tidak ada tutup',
                'soal_id' => 55,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:37',
                'updated_at' => '2022-03-01 17:03:37',
            ),
            100 => 
            array (
                'id' => 125,
                'jawaban' => 'Ada, kedap air dan tidak bertutup',
                'soal_id' => 55,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:37',
                'updated_at' => '2022-03-01 17:03:37',
            ),
            101 => 
            array (
                'id' => 126,
                'jawaban' => 'Ada, kedap air dan bertutup',
                'soal_id' => 55,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:03:37',
                'updated_at' => '2022-03-01 17:03:37',
            ),
            102 => 
            array (
                'id' => 127,
                'jawaban' => 'Dibuang ke sungai/kebun/kolam/sembarangan',
                'soal_id' => 56,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:13',
                'updated_at' => '2022-03-01 17:04:13',
            ),
            103 => 
            array (
                'id' => 128,
                'jawaban' => 'Kadang-kadang di buang ke tempat sampah',
                'soal_id' => 56,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:13',
                'updated_at' => '2022-03-01 17:04:13',
            ),
            104 => 
            array (
                'id' => 129,
                'jawaban' => 'Setiap hari dibuang ke tempat sampah',
                'soal_id' => 56,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:13',
                'updated_at' => '2022-03-01 17:04:13',
            ),
            105 => 
            array (
                'id' => 130,
            'jawaban' => 'Bukan tembok (terbuat darianyaman bambu/ilalang)',
                'soal_id' => 57,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:51',
                'updated_at' => '2022-03-01 17:04:51',
            ),
            106 => 
            array (
                'id' => 131,
                'jawaban' => 'Semi permanen/setengah tembok/pasangan bata atau batu yang tidak diplester/papan tidak kedap air',
                'soal_id' => 57,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:51',
                'updated_at' => '2022-03-01 17:04:51',
            ),
            107 => 
            array (
                'id' => 132,
            'jawaban' => 'Permanen (tembok/pasangan batu bata yang diplester), papan kedap air',
                'soal_id' => 57,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:04:51',
                'updated_at' => '2022-03-01 17:04:51',
            ),
            108 => 
            array (
                'id' => 133,
                'jawaban' => 'Tanah',
                'soal_id' => 58,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:05:18',
                'updated_at' => '2022-03-01 17:05:18',
            ),
            109 => 
            array (
                'id' => 134,
                'jawaban' => 'Papan/anyaman bambu dekat dengan tanah/plesteran yang retak dan berdebu',
                'soal_id' => 58,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:05:18',
                'updated_at' => '2022-03-01 17:05:18',
            ),
            110 => 
            array (
                'id' => 135,
            'jawaban' => 'Diplester/ubin/keramik/papan (rumah panggung)',
                'soal_id' => 58,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:05:18',
                'updated_at' => '2022-03-01 17:05:18',
            ),
            111 => 
            array (
                'id' => 136,
                'jawaban' => 'Tidak ada',
                'soal_id' => 59,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:05:39',
                'updated_at' => '2022-03-01 17:05:39',
            ),
            112 => 
            array (
                'id' => 137,
                'jawaban' => 'Ada',
                'soal_id' => 59,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:05:39',
                'updated_at' => '2022-03-01 17:05:39',
            ),
            113 => 
            array (
                'id' => 138,
                'jawaban' => 'Tidak ada',
                'soal_id' => 60,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:06:15',
                'updated_at' => '2022-03-01 17:06:15',
            ),
            114 => 
            array (
                'id' => 139,
                'jawaban' => 'Ada',
                'soal_id' => 60,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:06:15',
                'updated_at' => '2022-03-01 17:06:15',
            ),
            115 => 
            array (
                'id' => 140,
                'jawaban' => 'Tidak ada',
                'soal_id' => 61,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:06:43',
                'updated_at' => '2022-03-01 17:06:43',
            ),
            116 => 
            array (
                'id' => 141,
                'jawaban' => 'Ada, luas ventilasi permanen < 10% dari luas lantai',
                'soal_id' => 61,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:06:43',
                'updated_at' => '2022-03-01 17:06:43',
            ),
            117 => 
            array (
                'id' => 142,
                'jawaban' => 'Ada, luas ventilasi permanen > 10% dari luas lantai',
                'soal_id' => 61,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:06:43',
                'updated_at' => '2022-03-01 17:06:43',
            ),
            118 => 
            array (
                'id' => 143,
                'jawaban' => 'Tidak ada',
                'soal_id' => 62,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:16',
                'updated_at' => '2022-03-01 17:07:16',
            ),
            119 => 
            array (
                'id' => 144,
                'jawaban' => 'Ada, lubang ventilasi dapur < 10% dari luas lantai',
                'soal_id' => 62,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:16',
                'updated_at' => '2022-03-01 17:07:16',
            ),
            120 => 
            array (
                'id' => 145,
            'jawaban' => 'Ada, lubang ventilasi dapur > 10% dari luas lantai dapur (asap keluar dengan sempurna) atau ada exhaust fan/ada peralatan lain yang sejenis',
                'soal_id' => 62,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:16',
                'updated_at' => '2022-03-01 17:07:16',
            ),
            121 => 
            array (
                'id' => 146,
            'jawaban' => 'Tidak terang (tidak dapat digunakan untuk membaca)',
                'soal_id' => 63,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:45',
                'updated_at' => '2022-03-01 17:07:45',
            ),
            122 => 
            array (
                'id' => 147,
                'jawaban' => 'Kurang terang sehingga kurang jelas untuk dipergunakan membaca dengan normal',
                'soal_id' => 63,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:45',
                'updated_at' => '2022-03-01 17:07:45',
            ),
            123 => 
            array (
                'id' => 148,
                'jawaban' => 'Terang dan tidak silau sehingga dapat dipergunakan untuk membaca dengan normal',
                'soal_id' => 63,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:07:45',
                'updated_at' => '2022-03-01 17:07:45',
            ),
            124 => 
            array (
                'id' => 149,
                'jawaban' => 'Kayu Bakar',
                'soal_id' => 64,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:08:28',
                'updated_at' => '2022-03-01 17:08:28',
            ),
            125 => 
            array (
                'id' => 150,
                'jawaban' => 'Kompor Minyak Tanah',
                'soal_id' => 64,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:08:28',
                'updated_at' => '2022-03-01 17:08:28',
            ),
            126 => 
            array (
                'id' => 151,
                'jawaban' => 'Kompor Gas',
                'soal_id' => 64,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:08:28',
                'updated_at' => '2022-03-01 17:08:28',
            ),
            127 => 
            array (
                'id' => 152,
                'jawaban' => 'Kompor Listrik',
                'soal_id' => 64,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:08:28',
                'updated_at' => '2022-03-01 17:08:28',
            ),
            128 => 
            array (
                'id' => 153,
                'jawaban' => 'ISPA',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            129 => 
            array (
                'id' => 154,
                'jawaban' => 'Covid',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            130 => 
            array (
                'id' => 155,
                'jawaban' => 'TB Paru',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            131 => 
            array (
                'id' => 156,
                'jawaban' => 'Kecacingan',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            132 => 
            array (
                'id' => 157,
                'jawaban' => 'Pneumonia',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            133 => 
            array (
                'id' => 158,
                'jawaban' => 'Diare',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            134 => 
            array (
                'id' => 159,
                'jawaban' => 'Campak',
                'soal_id' => 65,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:10:38',
                'updated_at' => '2022-03-01 17:10:38',
            ),
            135 => 
            array (
                'id' => 160,
                'jawaban' => 'Sering',
                'soal_id' => 66,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:08',
                'updated_at' => '2022-03-01 17:11:08',
            ),
            136 => 
            array (
                'id' => 161,
                'jawaban' => 'Jarang',
                'soal_id' => 66,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:08',
                'updated_at' => '2022-03-01 17:11:08',
            ),
            137 => 
            array (
                'id' => 162,
                'jawaban' => 'Tidak Pernah',
                'soal_id' => 66,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:08',
                'updated_at' => '2022-03-01 17:11:08',
            ),
            138 => 
            array (
                'id' => 163,
                'jawaban' => '1 kali dalam beberapa hari',
                'soal_id' => 67,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:40',
                'updated_at' => '2022-03-01 17:11:40',
            ),
            139 => 
            array (
                'id' => 164,
                'jawaban' => '1 kali sehari',
                'soal_id' => 67,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:40',
                'updated_at' => '2022-03-01 17:11:40',
            ),
            140 => 
            array (
                'id' => 165,
                'jawaban' => '2 kali sehari',
                'soal_id' => 67,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:11:40',
                'updated_at' => '2022-03-01 17:11:40',
            ),
            141 => 
            array (
                'id' => 166,
                'jawaban' => '1 kali sehari',
                'soal_id' => 68,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:12:21',
                'updated_at' => '2022-03-01 17:12:21',
            ),
            142 => 
            array (
                'id' => 167,
                'jawaban' => '2 kali sehari',
                'soal_id' => 68,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:12:21',
                'updated_at' => '2022-03-01 17:12:21',
            ),
            143 => 
            array (
                'id' => 168,
                'jawaban' => '3 kali sehari',
                'soal_id' => 68,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:12:21',
                'updated_at' => '2022-03-01 17:12:21',
            ),
            144 => 
            array (
                'id' => 169,
                'jawaban' => 'Lebih dari 3 kali sehari',
                'soal_id' => 68,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:12:21',
                'updated_at' => '2022-03-01 17:12:21',
            ),
            145 => 
            array (
                'id' => 170,
                'jawaban' => 'Ya',
                'soal_id' => 69,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:15:05',
                'updated_at' => '2022-03-01 17:15:05',
            ),
            146 => 
            array (
                'id' => 171,
                'jawaban' => 'Tidak',
                'soal_id' => 69,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:15:05',
                'updated_at' => '2022-03-01 17:15:05',
            ),
            147 => 
            array (
                'id' => 172,
                'jawaban' => '- Tidak mengonsumsi suplemen',
                'soal_id' => 70,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:20:43',
                'updated_at' => '2022-03-01 17:49:26',
            ),
            148 => 
            array (
                'id' => 173,
                'jawaban' => '3-5 bulan',
                'soal_id' => 70,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:20:43',
                'updated_at' => '2022-03-01 17:20:43',
            ),
            149 => 
            array (
                'id' => 174,
                'jawaban' => '6-12 bulan',
                'soal_id' => 70,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:20:43',
                'updated_at' => '2022-03-01 17:20:43',
            ),
            150 => 
            array (
                'id' => 175,
                'jawaban' => '1-3 tahun',
                'soal_id' => 70,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:20:43',
                'updated_at' => '2022-03-01 17:20:43',
            ),
            151 => 
            array (
                'id' => 176,
                'jawaban' => '>3 tahun',
                'soal_id' => 70,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:20:43',
                'updated_at' => '2022-03-01 17:20:43',
            ),
            152 => 
            array (
                'id' => 177,
                'jawaban' => '- Tidak mengonsumsi suplemen',
                'soal_id' => 71,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:23:09',
                'updated_at' => '2022-03-01 17:49:37',
            ),
            153 => 
            array (
                'id' => 178,
            'jawaban' => 'Selalu ( 1-3 kali/hari)',
                'soal_id' => 71,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:23:09',
                'updated_at' => '2022-03-01 17:23:09',
            ),
            154 => 
            array (
                'id' => 179,
            'jawaban' => 'Sering (1-4 kali/ minggu)',
                'soal_id' => 71,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:23:09',
                'updated_at' => '2022-03-01 17:23:09',
            ),
            155 => 
            array (
                'id' => 180,
            'jawaban' => 'Jarang (1-3 kali/ bulan)',
                'soal_id' => 71,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:23:09',
                'updated_at' => '2022-03-01 17:23:09',
            ),
            156 => 
            array (
                'id' => 181,
                'jawaban' => 'Mahal',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            157 => 
            array (
                'id' => 182,
                'jawaban' => 'Takut ketergantungan',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            158 => 
            array (
                'id' => 183,
                'jawaban' => 'Tidak tahu manfaat/ kegunaannya',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            159 => 
            array (
                'id' => 184,
                'jawaban' => 'Sudah makan banyak obat',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            160 => 
            array (
                'id' => 185,
                'jawaban' => 'Makan 3 kali / hari sudah cukup',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            161 => 
            array (
                'id' => 186,
                'jawaban' => 'Banyak efek samping',
                'soal_id' => 72,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:24:41',
                'updated_at' => '2022-03-01 17:24:41',
            ),
            162 => 
            array (
                'id' => 187,
                'jawaban' => 'Ikan',
                'soal_id' => 73,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            163 => 
            array (
                'id' => 188,
                'jawaban' => 'Sayur',
                'soal_id' => 73,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            164 => 
            array (
                'id' => 189,
                'jawaban' => 'Daging Sapi',
                'soal_id' => 73,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            165 => 
            array (
                'id' => 190,
                'jawaban' => 'Ayam',
                'soal_id' => 73,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            166 => 
            array (
                'id' => 191,
                'jawaban' => 'Buah',
                'soal_id' => 73,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            167 => 
            array (
                'id' => 192,
                'jawaban' => 'Lainnya',
                'soal_id' => 73,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:25:49',
                'updated_at' => '2022-03-01 17:25:49',
            ),
            168 => 
            array (
                'id' => 193,
                'jawaban' => 'Ya',
                'soal_id' => 83,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:37:16',
                'updated_at' => '2022-03-01 17:37:16',
            ),
            169 => 
            array (
                'id' => 194,
                'jawaban' => 'Tidak',
                'soal_id' => 83,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:37:16',
                'updated_at' => '2022-03-01 17:37:16',
            ),
            170 => 
            array (
                'id' => 195,
                'jawaban' => 'Lengkap',
                'soal_id' => 85,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:42:41',
                'updated_at' => '2022-03-01 17:42:41',
            ),
            171 => 
            array (
                'id' => 196,
                'jawaban' => 'Tidak Lengkap',
                'soal_id' => 85,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:42:41',
                'updated_at' => '2022-03-01 17:42:41',
            ),
            172 => 
            array (
                'id' => 197,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 85,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:42:41',
                'updated_at' => '2022-03-01 17:50:39',
            ),
            173 => 
            array (
                'id' => 198,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 83,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:43:10',
                'updated_at' => '2022-03-01 17:50:17',
            ),
            174 => 
            array (
                'id' => 199,
                'jawaban' => 'Ya',
                'soal_id' => 86,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:14',
                'updated_at' => '2022-03-01 17:44:14',
            ),
            175 => 
            array (
                'id' => 200,
                'jawaban' => 'Tidak',
                'soal_id' => 86,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:14',
                'updated_at' => '2022-03-01 17:44:14',
            ),
            176 => 
            array (
                'id' => 201,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 86,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:14',
                'updated_at' => '2022-03-01 17:50:55',
            ),
            177 => 
            array (
                'id' => 202,
                'jawaban' => 'Ya',
                'soal_id' => 87,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:56',
                'updated_at' => '2022-03-01 17:44:56',
            ),
            178 => 
            array (
                'id' => 203,
                'jawaban' => 'Tidak',
                'soal_id' => 87,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:56',
                'updated_at' => '2022-03-01 17:44:56',
            ),
            179 => 
            array (
                'id' => 204,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 87,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:44:56',
                'updated_at' => '2022-03-01 17:51:05',
            ),
            180 => 
            array (
                'id' => 205,
                'jawaban' => 'Ada',
                'soal_id' => 88,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:45:44',
                'updated_at' => '2022-03-01 17:45:44',
            ),
            181 => 
            array (
                'id' => 206,
                'jawaban' => 'Tidak Ada',
                'soal_id' => 88,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:45:44',
                'updated_at' => '2022-03-01 17:45:44',
            ),
            182 => 
            array (
                'id' => 207,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 88,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:45:44',
                'updated_at' => '2022-03-01 17:51:19',
            ),
            183 => 
            array (
                'id' => 208,
                'jawaban' => 'Dukun Bayi',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            184 => 
            array (
                'id' => 209,
                'jawaban' => 'Bidan Desa',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            185 => 
            array (
                'id' => 210,
                'jawaban' => 'Bidan Praktek Swasta',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            186 => 
            array (
                'id' => 211,
                'jawaban' => 'Dokter Umum',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            187 => 
            array (
                'id' => 212,
                'jawaban' => 'Dokter ahli kebidanan',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            188 => 
            array (
                'id' => 213,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 89,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:48:42',
                'updated_at' => '2022-03-01 17:48:42',
            ),
            189 => 
            array (
                'id' => 214,
                'jawaban' => 'Ya',
                'soal_id' => 90,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:52:36',
                'updated_at' => '2022-03-01 17:52:36',
            ),
            190 => 
            array (
                'id' => 215,
                'jawaban' => 'Tidak',
                'soal_id' => 90,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:52:36',
                'updated_at' => '2022-03-01 17:52:36',
            ),
            191 => 
            array (
                'id' => 216,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 90,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:52:36',
                'updated_at' => '2022-03-01 17:52:36',
            ),
            192 => 
            array (
                'id' => 217,
                'jawaban' => 'Segera setelah dilahirkan',
                'soal_id' => 91,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:53:44',
                'updated_at' => '2022-03-01 17:53:44',
            ),
            193 => 
            array (
                'id' => 218,
                'jawaban' => '1 hari setelah dilahirkan',
                'soal_id' => 91,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:53:44',
                'updated_at' => '2022-03-01 17:53:44',
            ),
            194 => 
            array (
                'id' => 219,
                'jawaban' => '1 minggu setelah dilahirkan',
                'soal_id' => 91,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:53:44',
                'updated_at' => '2022-03-01 17:53:44',
            ),
            195 => 
            array (
                'id' => 220,
                'jawaban' => 'Tidak memberikan ASI',
                'soal_id' => 91,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:53:44',
                'updated_at' => '2022-03-01 17:53:44',
            ),
            196 => 
            array (
                'id' => 221,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 91,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:53:44',
                'updated_at' => '2022-03-01 17:53:44',
            ),
            197 => 
            array (
                'id' => 222,
                'jawaban' => 'Ya',
                'soal_id' => 92,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:55:18',
                'updated_at' => '2022-03-01 17:55:18',
            ),
            198 => 
            array (
                'id' => 223,
                'jawaban' => 'Tidak',
                'soal_id' => 92,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:55:18',
                'updated_at' => '2022-03-01 17:55:18',
            ),
            199 => 
            array (
                'id' => 224,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 92,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:55:18',
                'updated_at' => '2022-03-01 17:55:18',
            ),
            200 => 
            array (
                'id' => 225,
                'jawaban' => 'Lengkap',
                'soal_id' => 97,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:58:31',
                'updated_at' => '2022-03-01 17:58:31',
            ),
            201 => 
            array (
                'id' => 226,
                'jawaban' => 'Tidak Lengkap',
                'soal_id' => 97,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:58:31',
                'updated_at' => '2022-03-01 17:58:31',
            ),
            202 => 
            array (
                'id' => 227,
                'jawaban' => '- Tidak Ada Bayi, Baduta, dan Balita',
                'soal_id' => 97,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:58:31',
                'updated_at' => '2022-03-01 17:58:31',
            ),
            203 => 
            array (
                'id' => 228,
                'jawaban' => 'Ada',
                'soal_id' => 98,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:59:09',
                'updated_at' => '2022-03-01 17:59:09',
            ),
            204 => 
            array (
                'id' => 229,
                'jawaban' => 'Tidak ada',
                'soal_id' => 98,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:59:09',
                'updated_at' => '2022-03-01 17:59:09',
            ),
            205 => 
            array (
                'id' => 230,
                'jawaban' => '- Tidak Ada Bayi, Baduta, dan Balita',
                'soal_id' => 98,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 17:59:09',
                'updated_at' => '2022-03-01 17:59:09',
            ),
            206 => 
            array (
                'id' => 231,
                'jawaban' => 'Tidak tahu',
                'soal_id' => 99,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:10',
                'updated_at' => '2022-03-01 18:00:10',
            ),
            207 => 
            array (
                'id' => 232,
                'jawaban' => 'ASI yang selalu diberikan kepada bayi sejak lahir',
                'soal_id' => 99,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:10',
                'updated_at' => '2022-03-01 18:00:10',
            ),
            208 => 
            array (
                'id' => 233,
                'jawaban' => 'ASI yang pertama kali keluar dan berwarna kekuningan',
                'soal_id' => 99,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:10',
                'updated_at' => '2022-03-01 18:00:10',
            ),
            209 => 
            array (
                'id' => 234,
                'jawaban' => 'Zat gizi yang dimiliki oleh bayi',
                'soal_id' => 99,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:10',
                'updated_at' => '2022-03-01 18:00:10',
            ),
            210 => 
            array (
                'id' => 235,
                'jawaban' => 'Ya',
                'soal_id' => 100,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:45',
                'updated_at' => '2022-03-01 18:00:45',
            ),
            211 => 
            array (
                'id' => 236,
                'jawaban' => 'Tidak',
                'soal_id' => 100,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:00:45',
                'updated_at' => '2022-03-01 18:00:45',
            ),
            212 => 
            array (
                'id' => 237,
                'jawaban' => 'Ya',
                'soal_id' => 101,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:01:06',
                'updated_at' => '2022-03-01 18:01:06',
            ),
            213 => 
            array (
                'id' => 238,
                'jawaban' => 'Tidak',
                'soal_id' => 101,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:01:06',
                'updated_at' => '2022-03-01 18:01:06',
            ),
            214 => 
            array (
                'id' => 239,
                'jawaban' => 'Bayi diletakkan di samping ibu.',
                'soal_id' => 102,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:10',
                'updated_at' => '2022-03-01 18:02:10',
            ),
            215 => 
            array (
                'id' => 240,
                'jawaban' => 'Bayi diletakkan di dada atau perut ibu.',
                'soal_id' => 102,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:10',
                'updated_at' => '2022-03-01 18:02:10',
            ),
            216 => 
            array (
                'id' => 241,
                'jawaban' => 'Bayi diletakkan di tempat tidur bayi.',
                'soal_id' => 102,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:10',
                'updated_at' => '2022-03-01 18:02:10',
            ),
            217 => 
            array (
                'id' => 242,
                'jawaban' => 'Bayi digendong agar berhenti menangis.',
                'soal_id' => 102,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:10',
                'updated_at' => '2022-03-01 18:02:10',
            ),
            218 => 
            array (
                'id' => 243,
                'jawaban' => '15 menit',
                'soal_id' => 103,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:42',
                'updated_at' => '2022-03-01 18:02:42',
            ),
            219 => 
            array (
                'id' => 244,
                'jawaban' => '30 menit',
                'soal_id' => 103,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:42',
                'updated_at' => '2022-03-01 18:02:42',
            ),
            220 => 
            array (
                'id' => 245,
                'jawaban' => '=1jam',
                'soal_id' => 103,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:42',
                'updated_at' => '2022-03-01 18:02:42',
            ),
            221 => 
            array (
                'id' => 246,
                'jawaban' => 'Lainnya',
                'soal_id' => 103,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:02:42',
                'updated_at' => '2022-03-01 18:02:42',
            ),
            222 => 
            array (
                'id' => 247,
                'jawaban' => 'Ya',
                'soal_id' => 104,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:03:01',
                'updated_at' => '2022-03-01 18:03:01',
            ),
            223 => 
            array (
                'id' => 248,
                'jawaban' => 'Tidak',
                'soal_id' => 104,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:03:01',
                'updated_at' => '2022-03-01 18:03:01',
            ),
            224 => 
            array (
                'id' => 249,
                'jawaban' => 'Ya',
                'soal_id' => 105,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:03:50',
                'updated_at' => '2022-03-01 18:03:50',
            ),
            225 => 
            array (
                'id' => 250,
                'jawaban' => 'Tidak',
                'soal_id' => 105,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:03:50',
                'updated_at' => '2022-03-01 18:03:50',
            ),
            226 => 
            array (
                'id' => 251,
                'jawaban' => 'Ya',
                'soal_id' => 106,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:04:07',
                'updated_at' => '2022-03-01 18:04:07',
            ),
            227 => 
            array (
                'id' => 252,
                'jawaban' => 'Tidak',
                'soal_id' => 106,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:04:07',
                'updated_at' => '2022-03-01 18:04:07',
            ),
            228 => 
            array (
                'id' => 253,
                'jawaban' => '- Belum Pernah Mengetahui Kata "STUNTING"',
                'soal_id' => 41,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-01 18:12:41',
                'updated_at' => '2022-03-01 18:12:41',
            ),
            229 => 
            array (
                'id' => 254,
                'jawaban' => 'Ya',
                'soal_id' => 107,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 01:50:45',
                'updated_at' => '2022-03-02 01:50:45',
            ),
            230 => 
            array (
                'id' => 255,
                'jawaban' => 'Tidak',
                'soal_id' => 107,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 01:50:45',
                'updated_at' => '2022-03-02 01:50:45',
            ),
            231 => 
            array (
                'id' => 256,
                'jawaban' => 'Ya',
                'soal_id' => 108,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:25:42',
                'updated_at' => '2022-03-02 02:25:42',
            ),
            232 => 
            array (
                'id' => 257,
                'jawaban' => 'Tidak',
                'soal_id' => 108,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:25:42',
                'updated_at' => '2022-03-02 02:25:42',
            ),
            233 => 
            array (
                'id' => 258,
                'jawaban' => 'Ya',
                'soal_id' => 109,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:01',
                'updated_at' => '2022-03-02 02:26:01',
            ),
            234 => 
            array (
                'id' => 259,
                'jawaban' => 'Tidak',
                'soal_id' => 109,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:01',
                'updated_at' => '2022-03-02 02:26:01',
            ),
            235 => 
            array (
                'id' => 260,
                'jawaban' => 'Ya',
                'soal_id' => 110,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:21',
                'updated_at' => '2022-03-02 02:26:21',
            ),
            236 => 
            array (
                'id' => 261,
                'jawaban' => 'Tidak',
                'soal_id' => 110,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:21',
                'updated_at' => '2022-03-02 02:26:21',
            ),
            237 => 
            array (
                'id' => 262,
                'jawaban' => 'Ya',
                'soal_id' => 111,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:36',
                'updated_at' => '2022-03-02 02:26:36',
            ),
            238 => 
            array (
                'id' => 263,
                'jawaban' => 'Tidak',
                'soal_id' => 111,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:36',
                'updated_at' => '2022-03-02 02:26:36',
            ),
            239 => 
            array (
                'id' => 264,
                'jawaban' => 'Ya',
                'soal_id' => 112,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:55',
                'updated_at' => '2022-03-02 02:26:55',
            ),
            240 => 
            array (
                'id' => 265,
                'jawaban' => 'Tidak',
                'soal_id' => 112,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:26:55',
                'updated_at' => '2022-03-02 02:26:55',
            ),
            241 => 
            array (
                'id' => 266,
                'jawaban' => 'Ya',
                'soal_id' => 113,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:15',
                'updated_at' => '2022-03-02 02:27:15',
            ),
            242 => 
            array (
                'id' => 267,
                'jawaban' => 'Tidak',
                'soal_id' => 113,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:15',
                'updated_at' => '2022-03-02 02:27:15',
            ),
            243 => 
            array (
                'id' => 268,
                'jawaban' => 'Ya',
                'soal_id' => 114,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:36',
                'updated_at' => '2022-03-02 02:27:36',
            ),
            244 => 
            array (
                'id' => 269,
                'jawaban' => 'Tidak',
                'soal_id' => 114,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:36',
                'updated_at' => '2022-03-02 02:27:36',
            ),
            245 => 
            array (
                'id' => 270,
                'jawaban' => 'Ya',
                'soal_id' => 115,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:54',
                'updated_at' => '2022-03-02 02:27:54',
            ),
            246 => 
            array (
                'id' => 271,
                'jawaban' => 'Tidak',
                'soal_id' => 115,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:27:54',
                'updated_at' => '2022-03-02 02:27:54',
            ),
            247 => 
            array (
                'id' => 272,
                'jawaban' => 'Ya',
                'soal_id' => 116,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:10',
                'updated_at' => '2022-03-02 02:28:10',
            ),
            248 => 
            array (
                'id' => 273,
                'jawaban' => 'Tidak',
                'soal_id' => 116,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:10',
                'updated_at' => '2022-03-02 02:28:10',
            ),
            249 => 
            array (
                'id' => 274,
                'jawaban' => 'Ya',
                'soal_id' => 117,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:42',
                'updated_at' => '2022-03-02 02:28:42',
            ),
            250 => 
            array (
                'id' => 275,
                'jawaban' => 'Tidak',
                'soal_id' => 117,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:42',
                'updated_at' => '2022-03-02 02:28:42',
            ),
            251 => 
            array (
                'id' => 276,
                'jawaban' => 'Ya',
                'soal_id' => 118,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:58',
                'updated_at' => '2022-03-02 02:28:58',
            ),
            252 => 
            array (
                'id' => 277,
                'jawaban' => 'Tidak',
                'soal_id' => 118,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:28:58',
                'updated_at' => '2022-03-02 02:28:58',
            ),
            253 => 
            array (
                'id' => 278,
                'jawaban' => 'Ya',
                'soal_id' => 119,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:29:34',
                'updated_at' => '2022-03-02 02:29:34',
            ),
            254 => 
            array (
                'id' => 279,
                'jawaban' => 'Tidak',
                'soal_id' => 119,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:29:34',
                'updated_at' => '2022-03-02 02:29:34',
            ),
            255 => 
            array (
                'id' => 280,
                'jawaban' => 'Ya',
                'soal_id' => 120,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:29:49',
                'updated_at' => '2022-03-02 02:29:49',
            ),
            256 => 
            array (
                'id' => 281,
                'jawaban' => 'Tidak',
                'soal_id' => 120,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:29:49',
                'updated_at' => '2022-03-02 02:29:49',
            ),
            257 => 
            array (
                'id' => 282,
                'jawaban' => 'Ya',
                'soal_id' => 121,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:30:05',
                'updated_at' => '2022-03-02 02:30:05',
            ),
            258 => 
            array (
                'id' => 283,
                'jawaban' => 'Tidak',
                'soal_id' => 121,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-03-02 02:30:05',
                'updated_at' => '2022-03-02 02:30:05',
            ),
            259 => 
            array (
                'id' => 284,
                'jawaban' => 'Laki-laki',
                'soal_id' => 132,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            260 => 
            array (
                'id' => 285,
                'jawaban' => 'Perempuan',
                'soal_id' => 132,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            261 => 
            array (
                'id' => 286,
                'jawaban' => 'SD',
                'soal_id' => 134,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            262 => 
            array (
                'id' => 287,
                'jawaban' => 'SMP',
                'soal_id' => 134,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            263 => 
            array (
                'id' => 288,
                'jawaban' => 'SMA',
                'soal_id' => 134,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            264 => 
            array (
                'id' => 289,
                'jawaban' => 'Diploma',
                'soal_id' => 134,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            265 => 
            array (
                'id' => 290,
                'jawaban' => 'S1',
                'soal_id' => 134,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            266 => 
            array (
                'id' => 291,
                'jawaban' => 'S2',
                'soal_id' => 134,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            267 => 
            array (
                'id' => 292,
                'jawaban' => 'S3',
                'soal_id' => 134,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            268 => 
            array (
                'id' => 293,
                'jawaban' => 'Ya',
                'soal_id' => 139,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            269 => 
            array (
                'id' => 294,
                'jawaban' => 'Tidak',
                'soal_id' => 139,
                'is_lainnya' => 0,
                'deleted_at' => '2022-05-28 17:43:02',
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:43:02',
            ),
            270 => 
            array (
                'id' => 295,
                'jawaban' => 'Ya',
                'soal_id' => 141,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            271 => 
            array (
                'id' => 296,
                'jawaban' => 'Tidak',
                'soal_id' => 141,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            272 => 
            array (
                'id' => 297,
                'jawaban' => 'Teman/Keluarga',
                'soal_id' => 142,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            273 => 
            array (
                'id' => 298,
                'jawaban' => 'Sosmed',
                'soal_id' => 142,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            274 => 
            array (
                'id' => 299,
                'jawaban' => 'Baliho',
                'soal_id' => 142,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            275 => 
            array (
                'id' => 300,
                'jawaban' => 'Surat Kabar online/offline',
                'soal_id' => 142,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            276 => 
            array (
                'id' => 301,
                'jawaban' => 'Tv',
                'soal_id' => 142,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            277 => 
            array (
                'id' => 302,
                'jawaban' => 'Lainnya',
                'soal_id' => 142,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            278 => 
            array (
                'id' => 303,
                'jawaban' => '- Belum Pernah Mengetahui Kata "STUNTING"',
                'soal_id' => 142,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            279 => 
            array (
                'id' => 304,
                'jawaban' => 'Ya',
                'soal_id' => 145,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            280 => 
            array (
                'id' => 305,
                'jawaban' => 'Tidak',
                'soal_id' => 145,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            281 => 
            array (
                'id' => 306,
                'jawaban' => 'Ya, ada',
                'soal_id' => 146,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            282 => 
            array (
                'id' => 307,
                'jawaban' => 'Tidak ada',
                'soal_id' => 146,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            283 => 
            array (
                'id' => 308,
                'jawaban' => 'Ya',
                'soal_id' => 147,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            284 => 
            array (
                'id' => 309,
                'jawaban' => 'Tidak',
                'soal_id' => 147,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            285 => 
            array (
                'id' => 310,
                'jawaban' => '< Rp. 1.000.000',
                'soal_id' => 148,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            286 => 
            array (
                'id' => 311,
                'jawaban' => 'Rp. 1.000.000 - Rp. 3.000.000',
                'soal_id' => 148,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            287 => 
            array (
                'id' => 312,
                'jawaban' => 'Rp. 3.000.000 - Rp. 5.000.000',
                'soal_id' => 148,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            288 => 
            array (
                'id' => 313,
                'jawaban' => '> Rp. 5.000.000',
                'soal_id' => 148,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            289 => 
            array (
                'id' => 314,
                'jawaban' => 'Hasil Pertanian',
                'soal_id' => 149,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            290 => 
            array (
                'id' => 315,
                'jawaban' => 'Hasil Perkebunan',
                'soal_id' => 149,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            291 => 
            array (
                'id' => 316,
                'jawaban' => 'Hasil Peternakan',
                'soal_id' => 149,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            292 => 
            array (
                'id' => 317,
                'jawaban' => 'Hasil Usaha/Bisnis',
                'soal_id' => 149,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            293 => 
            array (
                'id' => 318,
                'jawaban' => 'Hasil Kerja di Perusahaan/Kantor',
                'soal_id' => 149,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            294 => 
            array (
                'id' => 319,
                'jawaban' => 'Ya',
                'soal_id' => 150,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            295 => 
            array (
                'id' => 320,
                'jawaban' => 'Tidak',
                'soal_id' => 150,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            296 => 
            array (
                'id' => 321,
                'jawaban' => 'Membeli Bahan Makanan',
                'soal_id' => 151,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            297 => 
            array (
                'id' => 322,
                'jawaban' => 'Membeli Pakaian',
                'soal_id' => 151,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            298 => 
            array (
                'id' => 323,
                'jawaban' => 'Membeli Perabotan Rumah Tangga',
                'soal_id' => 151,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            299 => 
            array (
                'id' => 324,
                'jawaban' => 'Biaya Sekolah/Pendidikan',
                'soal_id' => 151,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            300 => 
            array (
                'id' => 325,
                'jawaban' => 'Membayar Cicilan Kendaraan',
                'soal_id' => 151,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            301 => 
            array (
                'id' => 326,
                'jawaban' => 'Lainnya',
                'soal_id' => 151,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            302 => 
            array (
                'id' => 327,
                'jawaban' => 'Tidak dapat bantuan',
                'soal_id' => 152,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            303 => 
            array (
                'id' => 328,
                'jawaban' => 'Lainnya',
                'soal_id' => 152,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            304 => 
            array (
                'id' => 329,
                'jawaban' => 'Tidak ada',
                'soal_id' => 153,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            305 => 
            array (
                'id' => 330,
                'jawaban' => 'Ada, bukan milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 153,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            306 => 
            array (
                'id' => 331,
                'jawaban' => 'Ada, milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 153,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            307 => 
            array (
                'id' => 332,
                'jawaban' => 'Ada, bukan milik sendiri dan memenuhi syaratkesehatan',
                'soal_id' => 153,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            308 => 
            array (
                'id' => 333,
                'jawaban' => 'Ada, milik sendiri',
                'soal_id' => 153,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            309 => 
            array (
                'id' => 334,
                'jawaban' => 'Tidak ada',
                'soal_id' => 154,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            310 => 
            array (
                'id' => 335,
                'jawaban' => 'Sungai',
                'soal_id' => 154,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            311 => 
            array (
                'id' => 336,
                'jawaban' => 'Kebun',
                'soal_id' => 154,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            312 => 
            array (
                'id' => 337,
                'jawaban' => 'Ada, bukan leher angsa, tidak ada tutup, disalurkan ke sungai/kolam',
                'soal_id' => 154,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            313 => 
            array (
                'id' => 338,
            'jawaban' => 'Ada, bukan leher angsa ada ditutup (leher angsa), disalurkan ke sungai/kolam',
                'soal_id' => 154,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            314 => 
            array (
                'id' => 339,
                'jawaban' => 'Ada, bukan leher angsa ada tutup, septic tank',
                'soal_id' => 154,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            315 => 
            array (
                'id' => 340,
                'jawaban' => 'Ada, leher angsa, septic tank',
                'soal_id' => 154,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            316 => 
            array (
                'id' => 341,
                'jawaban' => 'Tidak ada, sehingga tergenang tidak teratur di halaman rumah',
                'soal_id' => 155,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            317 => 
            array (
                'id' => 342,
            'jawaban' => 'Ada, diresapkan tetapi mencemari sumber air (jarak dengan sumber air < 10 m)',
                'soal_id' => 155,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            318 => 
            array (
                'id' => 343,
                'jawaban' => 'Ada, dialirkan ke selokan terbuka',
                'soal_id' => 155,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            319 => 
            array (
                'id' => 344,
            'jawaban' => 'Ada, diresapkan dan tidak mencemari sumber air (jarak dengan sumer air >10m)',
                'soal_id' => 155,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            320 => 
            array (
                'id' => 345,
            'jawaban' => 'Ada, disalurkan ke selokan tertutup (saluran kota) untuk diolah lebih lanjut)',
                'soal_id' => 155,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            321 => 
            array (
                'id' => 346,
                'jawaban' => 'Tidak ada',
                'soal_id' => 156,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            322 => 
            array (
                'id' => 347,
                'jawaban' => 'Ada, tapi kedap air dan tidak ada tutup',
                'soal_id' => 156,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            323 => 
            array (
                'id' => 348,
                'jawaban' => 'Ada, kedap air dan tidak bertutup',
                'soal_id' => 156,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            324 => 
            array (
                'id' => 349,
                'jawaban' => 'Ada, kedap air dan bertutup',
                'soal_id' => 156,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            325 => 
            array (
                'id' => 350,
                'jawaban' => 'Dibuang ke sungai/kebun/kolam/sembarangan',
                'soal_id' => 157,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            326 => 
            array (
                'id' => 351,
                'jawaban' => 'Kadang-kadang di buang ke tempat sampah',
                'soal_id' => 157,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            327 => 
            array (
                'id' => 352,
                'jawaban' => 'Setiap hari dibuang ke tempat sampah',
                'soal_id' => 157,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            328 => 
            array (
                'id' => 353,
            'jawaban' => 'Bukan tembok (terbuat darianyaman bambu/ilalang)',
                'soal_id' => 158,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            329 => 
            array (
                'id' => 354,
                'jawaban' => 'Semi permanen/setengah tembok/pasangan bata atau batu yang tidak diplester/papan tidak kedap air',
                'soal_id' => 158,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            330 => 
            array (
                'id' => 355,
            'jawaban' => 'Permanen (tembok/pasangan batu bata yang diplester), papan kedap air',
                'soal_id' => 158,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            331 => 
            array (
                'id' => 356,
                'jawaban' => 'Tanah',
                'soal_id' => 159,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            332 => 
            array (
                'id' => 357,
                'jawaban' => 'Papan/anyaman bambu dekat dengan tanah/plesteran yang retak dan berdebu',
                'soal_id' => 159,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            333 => 
            array (
                'id' => 358,
            'jawaban' => 'Diplester/ubin/keramik/papan (rumah panggung)',
                'soal_id' => 159,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            334 => 
            array (
                'id' => 359,
                'jawaban' => 'Tidak ada',
                'soal_id' => 160,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            335 => 
            array (
                'id' => 360,
                'jawaban' => 'Ada',
                'soal_id' => 160,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            336 => 
            array (
                'id' => 361,
                'jawaban' => 'Tidak ada',
                'soal_id' => 161,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            337 => 
            array (
                'id' => 362,
                'jawaban' => 'Ada',
                'soal_id' => 161,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            338 => 
            array (
                'id' => 363,
                'jawaban' => 'Tidak ada',
                'soal_id' => 162,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            339 => 
            array (
                'id' => 364,
                'jawaban' => 'Ada, luas ventilasi permanen < 10% dari luas lantai',
                'soal_id' => 162,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            340 => 
            array (
                'id' => 365,
                'jawaban' => 'Ada, luas ventilasi permanen > 10% dari luas lantai',
                'soal_id' => 162,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            341 => 
            array (
                'id' => 366,
                'jawaban' => 'Tidak ada',
                'soal_id' => 163,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            342 => 
            array (
                'id' => 367,
                'jawaban' => 'Ada, lubang ventilasi dapur < 10% dari luas lantai',
                'soal_id' => 163,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            343 => 
            array (
                'id' => 368,
            'jawaban' => 'Ada, lubang ventilasi dapur > 10% dari luas lantai dapur (asap keluar dengan sempurna) atau ada exhaust fan/ada peralatan lain yang sejenis',
                'soal_id' => 163,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            344 => 
            array (
                'id' => 369,
            'jawaban' => 'Tidak terang (tidak dapat digunakan untuk membaca)',
                'soal_id' => 164,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            345 => 
            array (
                'id' => 370,
                'jawaban' => 'Kurang terang sehingga kurang jelas untuk dipergunakan membaca dengan normal',
                'soal_id' => 164,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            346 => 
            array (
                'id' => 371,
                'jawaban' => 'Terang dan tidak silau sehingga dapat dipergunakan untuk membaca dengan normal',
                'soal_id' => 164,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            347 => 
            array (
                'id' => 372,
                'jawaban' => 'Kayu Bakar',
                'soal_id' => 165,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            348 => 
            array (
                'id' => 373,
                'jawaban' => 'Kompor Minyak Tanah',
                'soal_id' => 165,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            349 => 
            array (
                'id' => 374,
                'jawaban' => 'Kompor Gas',
                'soal_id' => 165,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            350 => 
            array (
                'id' => 375,
                'jawaban' => 'Kompor Listrik',
                'soal_id' => 165,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            351 => 
            array (
                'id' => 376,
                'jawaban' => 'ISPA',
                'soal_id' => 166,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            352 => 
            array (
                'id' => 377,
                'jawaban' => 'Covid',
                'soal_id' => 166,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            353 => 
            array (
                'id' => 378,
                'jawaban' => 'TB Paru',
                'soal_id' => 166,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            354 => 
            array (
                'id' => 379,
                'jawaban' => 'Kecacingan',
                'soal_id' => 166,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            355 => 
            array (
                'id' => 380,
                'jawaban' => 'Pneumonia',
                'soal_id' => 166,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            356 => 
            array (
                'id' => 381,
                'jawaban' => 'Diare',
                'soal_id' => 166,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            357 => 
            array (
                'id' => 382,
                'jawaban' => 'Campak',
                'soal_id' => 166,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            358 => 
            array (
                'id' => 383,
                'jawaban' => 'Sering',
                'soal_id' => 167,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            359 => 
            array (
                'id' => 384,
                'jawaban' => 'Jarang',
                'soal_id' => 167,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            360 => 
            array (
                'id' => 385,
                'jawaban' => 'Tidak Pernah',
                'soal_id' => 167,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            361 => 
            array (
                'id' => 386,
                'jawaban' => '1 kali dalam beberapa hari',
                'soal_id' => 168,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            362 => 
            array (
                'id' => 387,
                'jawaban' => '1 kali sehari',
                'soal_id' => 168,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            363 => 
            array (
                'id' => 388,
                'jawaban' => '2 kali sehari',
                'soal_id' => 168,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            364 => 
            array (
                'id' => 389,
                'jawaban' => '1 kali sehari',
                'soal_id' => 169,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            365 => 
            array (
                'id' => 390,
                'jawaban' => '2 kali sehari',
                'soal_id' => 169,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            366 => 
            array (
                'id' => 391,
                'jawaban' => '3 kali sehari',
                'soal_id' => 169,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            367 => 
            array (
                'id' => 392,
                'jawaban' => 'Lebih dari 3 kali sehari',
                'soal_id' => 169,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            368 => 
            array (
                'id' => 393,
                'jawaban' => 'Ya',
                'soal_id' => 170,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            369 => 
            array (
                'id' => 394,
                'jawaban' => 'Tidak',
                'soal_id' => 170,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            370 => 
            array (
                'id' => 395,
                'jawaban' => '- Tidak mengonsumsi suplemen',
                'soal_id' => 171,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            371 => 
            array (
                'id' => 396,
                'jawaban' => '3-5 bulan',
                'soal_id' => 171,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            372 => 
            array (
                'id' => 397,
                'jawaban' => '6-12 bulan',
                'soal_id' => 171,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            373 => 
            array (
                'id' => 398,
                'jawaban' => '1-3 tahun',
                'soal_id' => 171,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            374 => 
            array (
                'id' => 399,
                'jawaban' => '>3 tahun',
                'soal_id' => 171,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            375 => 
            array (
                'id' => 400,
                'jawaban' => '- Tidak mengonsumsi suplemen',
                'soal_id' => 172,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            376 => 
            array (
                'id' => 401,
            'jawaban' => 'Selalu ( 1-3 kali/hari)',
                'soal_id' => 172,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            377 => 
            array (
                'id' => 402,
            'jawaban' => 'Sering (1-4 kali/ minggu)',
                'soal_id' => 172,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            378 => 
            array (
                'id' => 403,
            'jawaban' => 'Jarang (1-3 kali/ bulan)',
                'soal_id' => 172,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            379 => 
            array (
                'id' => 404,
                'jawaban' => 'Mahal',
                'soal_id' => 173,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            380 => 
            array (
                'id' => 405,
                'jawaban' => 'Takut ketergantungan',
                'soal_id' => 173,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            381 => 
            array (
                'id' => 406,
                'jawaban' => 'Tidak tahu manfaat/ kegunaannya',
                'soal_id' => 173,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            382 => 
            array (
                'id' => 407,
                'jawaban' => 'Sudah makan banyak obat',
                'soal_id' => 173,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            383 => 
            array (
                'id' => 408,
                'jawaban' => 'Makan 3 kali / hari sudah cukup',
                'soal_id' => 173,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            384 => 
            array (
                'id' => 409,
                'jawaban' => 'Banyak efek samping',
                'soal_id' => 173,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            385 => 
            array (
                'id' => 410,
                'jawaban' => 'Ikan',
                'soal_id' => 174,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            386 => 
            array (
                'id' => 411,
                'jawaban' => 'Sayur',
                'soal_id' => 174,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            387 => 
            array (
                'id' => 412,
                'jawaban' => 'Daging Sapi',
                'soal_id' => 174,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            388 => 
            array (
                'id' => 413,
                'jawaban' => 'Ayam',
                'soal_id' => 174,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            389 => 
            array (
                'id' => 414,
                'jawaban' => 'Buah',
                'soal_id' => 174,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            390 => 
            array (
                'id' => 415,
                'jawaban' => 'Lainnya',
                'soal_id' => 174,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            391 => 
            array (
                'id' => 416,
                'jawaban' => 'Ya',
                'soal_id' => 184,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            392 => 
            array (
                'id' => 417,
                'jawaban' => 'Tidak',
                'soal_id' => 184,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            393 => 
            array (
                'id' => 418,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 184,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            394 => 
            array (
                'id' => 419,
                'jawaban' => 'Lengkap',
                'soal_id' => 185,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            395 => 
            array (
                'id' => 420,
                'jawaban' => 'Tidak Lengkap',
                'soal_id' => 185,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            396 => 
            array (
                'id' => 421,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 185,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            397 => 
            array (
                'id' => 422,
                'jawaban' => 'Ya',
                'soal_id' => 186,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            398 => 
            array (
                'id' => 423,
                'jawaban' => 'Tidak',
                'soal_id' => 186,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            399 => 
            array (
                'id' => 424,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 186,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            400 => 
            array (
                'id' => 425,
                'jawaban' => 'Ya',
                'soal_id' => 187,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            401 => 
            array (
                'id' => 426,
                'jawaban' => 'Tidak',
                'soal_id' => 187,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            402 => 
            array (
                'id' => 427,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 187,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            403 => 
            array (
                'id' => 428,
                'jawaban' => 'Ada',
                'soal_id' => 188,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            404 => 
            array (
                'id' => 429,
                'jawaban' => 'Tidak Ada',
                'soal_id' => 188,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            405 => 
            array (
                'id' => 430,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 188,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            406 => 
            array (
                'id' => 431,
                'jawaban' => 'Dukun Bayi',
                'soal_id' => 189,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            407 => 
            array (
                'id' => 432,
                'jawaban' => 'Bidan Desa',
                'soal_id' => 189,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            408 => 
            array (
                'id' => 433,
                'jawaban' => 'Bidan Praktek Swasta',
                'soal_id' => 189,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            409 => 
            array (
                'id' => 434,
                'jawaban' => 'Dokter Umum',
                'soal_id' => 189,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            410 => 
            array (
                'id' => 435,
                'jawaban' => 'Dokter ahli kebidanan',
                'soal_id' => 189,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            411 => 
            array (
                'id' => 436,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 189,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            412 => 
            array (
                'id' => 437,
                'jawaban' => 'Ya',
                'soal_id' => 190,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            413 => 
            array (
                'id' => 438,
                'jawaban' => 'Tidak',
                'soal_id' => 190,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            414 => 
            array (
                'id' => 439,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 190,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            415 => 
            array (
                'id' => 440,
                'jawaban' => 'Segera setelah dilahirkan',
                'soal_id' => 191,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            416 => 
            array (
                'id' => 441,
                'jawaban' => '1 hari setelah dilahirkan',
                'soal_id' => 191,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            417 => 
            array (
                'id' => 442,
                'jawaban' => '1 minggu setelah dilahirkan',
                'soal_id' => 191,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            418 => 
            array (
                'id' => 443,
                'jawaban' => 'Tidak memberikan ASI',
                'soal_id' => 191,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            419 => 
            array (
                'id' => 444,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 191,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            420 => 
            array (
                'id' => 445,
                'jawaban' => 'Ya',
                'soal_id' => 192,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            421 => 
            array (
                'id' => 446,
                'jawaban' => 'Tidak',
                'soal_id' => 192,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            422 => 
            array (
                'id' => 447,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 192,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            423 => 
            array (
                'id' => 448,
                'jawaban' => 'Lengkap',
                'soal_id' => 197,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            424 => 
            array (
                'id' => 449,
                'jawaban' => 'Tidak Lengkap',
                'soal_id' => 197,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            425 => 
            array (
                'id' => 450,
                'jawaban' => '- Tidak Ada Bayi, Baduta, dan Balita',
                'soal_id' => 197,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            426 => 
            array (
                'id' => 451,
                'jawaban' => 'Ada',
                'soal_id' => 198,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            427 => 
            array (
                'id' => 452,
                'jawaban' => 'Tidak ada',
                'soal_id' => 198,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            428 => 
            array (
                'id' => 453,
                'jawaban' => '- Tidak Ada Bayi, Baduta, dan Balita',
                'soal_id' => 198,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            429 => 
            array (
                'id' => 454,
                'jawaban' => 'Tidak tahu',
                'soal_id' => 199,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            430 => 
            array (
                'id' => 455,
                'jawaban' => 'ASI yang selalu diberikan kepada bayi sejak lahir',
                'soal_id' => 199,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            431 => 
            array (
                'id' => 456,
                'jawaban' => 'ASI yang pertama kali keluar dan berwarna kekuningan',
                'soal_id' => 199,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            432 => 
            array (
                'id' => 457,
                'jawaban' => 'Zat gizi yang dimiliki oleh bayi',
                'soal_id' => 199,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            433 => 
            array (
                'id' => 458,
                'jawaban' => 'Ya',
                'soal_id' => 200,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            434 => 
            array (
                'id' => 459,
                'jawaban' => 'Tidak',
                'soal_id' => 200,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            435 => 
            array (
                'id' => 460,
                'jawaban' => 'Ya',
                'soal_id' => 201,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            436 => 
            array (
                'id' => 461,
                'jawaban' => 'Tidak',
                'soal_id' => 201,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            437 => 
            array (
                'id' => 462,
                'jawaban' => 'Bayi diletakkan di samping ibu.',
                'soal_id' => 202,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            438 => 
            array (
                'id' => 463,
                'jawaban' => 'Bayi diletakkan di dada atau perut ibu.',
                'soal_id' => 202,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            439 => 
            array (
                'id' => 464,
                'jawaban' => 'Bayi diletakkan di tempat tidur bayi.',
                'soal_id' => 202,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            440 => 
            array (
                'id' => 465,
                'jawaban' => 'Bayi digendong agar berhenti menangis.',
                'soal_id' => 202,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            441 => 
            array (
                'id' => 466,
                'jawaban' => '15 menit',
                'soal_id' => 203,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            442 => 
            array (
                'id' => 467,
                'jawaban' => '30 menit',
                'soal_id' => 203,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            443 => 
            array (
                'id' => 468,
                'jawaban' => '=1jam',
                'soal_id' => 203,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            444 => 
            array (
                'id' => 469,
                'jawaban' => 'Lainnya',
                'soal_id' => 203,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            445 => 
            array (
                'id' => 470,
                'jawaban' => 'Ya',
                'soal_id' => 204,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            446 => 
            array (
                'id' => 471,
                'jawaban' => 'Tidak',
                'soal_id' => 204,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            447 => 
            array (
                'id' => 472,
                'jawaban' => 'Ya',
                'soal_id' => 205,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            448 => 
            array (
                'id' => 473,
                'jawaban' => 'Tidak',
                'soal_id' => 205,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            449 => 
            array (
                'id' => 474,
                'jawaban' => 'Ya',
                'soal_id' => 206,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            450 => 
            array (
                'id' => 475,
                'jawaban' => 'Tidak',
                'soal_id' => 206,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            451 => 
            array (
                'id' => 476,
                'jawaban' => 'Ya',
                'soal_id' => 207,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            452 => 
            array (
                'id' => 477,
                'jawaban' => 'Tidak',
                'soal_id' => 207,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            453 => 
            array (
                'id' => 478,
                'jawaban' => 'Ya',
                'soal_id' => 208,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            454 => 
            array (
                'id' => 479,
                'jawaban' => 'Tidak',
                'soal_id' => 208,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            455 => 
            array (
                'id' => 480,
                'jawaban' => 'Ya',
                'soal_id' => 209,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            456 => 
            array (
                'id' => 481,
                'jawaban' => 'Tidak',
                'soal_id' => 209,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            457 => 
            array (
                'id' => 482,
                'jawaban' => 'Ya',
                'soal_id' => 210,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            458 => 
            array (
                'id' => 483,
                'jawaban' => 'Tidak',
                'soal_id' => 210,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            459 => 
            array (
                'id' => 484,
                'jawaban' => 'Ya',
                'soal_id' => 211,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            460 => 
            array (
                'id' => 485,
                'jawaban' => 'Tidak',
                'soal_id' => 211,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            461 => 
            array (
                'id' => 486,
                'jawaban' => 'Ya',
                'soal_id' => 212,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            462 => 
            array (
                'id' => 487,
                'jawaban' => 'Tidak',
                'soal_id' => 212,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            463 => 
            array (
                'id' => 488,
                'jawaban' => 'Ya',
                'soal_id' => 213,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            464 => 
            array (
                'id' => 489,
                'jawaban' => 'Tidak',
                'soal_id' => 213,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            465 => 
            array (
                'id' => 490,
                'jawaban' => 'Ya',
                'soal_id' => 214,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            466 => 
            array (
                'id' => 491,
                'jawaban' => 'Tidak',
                'soal_id' => 214,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            467 => 
            array (
                'id' => 492,
                'jawaban' => 'Ya',
                'soal_id' => 215,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            468 => 
            array (
                'id' => 493,
                'jawaban' => 'Tidak',
                'soal_id' => 215,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            469 => 
            array (
                'id' => 494,
                'jawaban' => 'Ya',
                'soal_id' => 216,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            470 => 
            array (
                'id' => 495,
                'jawaban' => 'Tidak',
                'soal_id' => 216,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            471 => 
            array (
                'id' => 496,
                'jawaban' => 'Ya',
                'soal_id' => 217,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            472 => 
            array (
                'id' => 497,
                'jawaban' => 'Tidak',
                'soal_id' => 217,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            473 => 
            array (
                'id' => 498,
                'jawaban' => 'Ya',
                'soal_id' => 218,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            474 => 
            array (
                'id' => 499,
                'jawaban' => 'Tidak',
                'soal_id' => 218,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            475 => 
            array (
                'id' => 500,
                'jawaban' => 'Ya',
                'soal_id' => 219,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            476 => 
            array (
                'id' => 501,
                'jawaban' => 'Tidak',
                'soal_id' => 219,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            477 => 
            array (
                'id' => 502,
                'jawaban' => 'Ya',
                'soal_id' => 220,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            478 => 
            array (
                'id' => 503,
                'jawaban' => 'Tidak',
                'soal_id' => 220,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            479 => 
            array (
                'id' => 504,
                'jawaban' => 'Ya',
                'soal_id' => 221,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            480 => 
            array (
                'id' => 505,
                'jawaban' => 'Tidak',
                'soal_id' => 221,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-28 17:36:59',
                'updated_at' => '2022-05-28 17:36:59',
            ),
            481 => 
            array (
                'id' => 506,
                'jawaban' => 'Laki-laki',
                'soal_id' => 232,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            482 => 
            array (
                'id' => 507,
                'jawaban' => 'Perempuan',
                'soal_id' => 232,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            483 => 
            array (
                'id' => 508,
                'jawaban' => 'SD',
                'soal_id' => 234,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            484 => 
            array (
                'id' => 509,
                'jawaban' => 'SMP',
                'soal_id' => 234,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            485 => 
            array (
                'id' => 510,
                'jawaban' => 'SMA',
                'soal_id' => 234,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            486 => 
            array (
                'id' => 511,
                'jawaban' => 'Diploma',
                'soal_id' => 234,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            487 => 
            array (
                'id' => 512,
                'jawaban' => 'S1',
                'soal_id' => 234,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            488 => 
            array (
                'id' => 513,
                'jawaban' => 'S2',
                'soal_id' => 234,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            489 => 
            array (
                'id' => 514,
                'jawaban' => 'S3',
                'soal_id' => 234,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            490 => 
            array (
                'id' => 515,
                'jawaban' => 'Ya',
                'soal_id' => 239,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            491 => 
            array (
                'id' => 516,
                'jawaban' => 'Tidak',
                'soal_id' => 239,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            492 => 
            array (
                'id' => 517,
                'jawaban' => 'Ya',
                'soal_id' => 241,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            493 => 
            array (
                'id' => 518,
                'jawaban' => 'Tidak',
                'soal_id' => 241,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            494 => 
            array (
                'id' => 519,
                'jawaban' => 'Teman/Keluarga',
                'soal_id' => 242,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            495 => 
            array (
                'id' => 520,
                'jawaban' => 'Sosmed',
                'soal_id' => 242,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            496 => 
            array (
                'id' => 521,
                'jawaban' => 'Baliho',
                'soal_id' => 242,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            497 => 
            array (
                'id' => 522,
                'jawaban' => 'Surat Kabar online/offline',
                'soal_id' => 242,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            498 => 
            array (
                'id' => 523,
                'jawaban' => 'Tv',
                'soal_id' => 242,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            499 => 
            array (
                'id' => 524,
                'jawaban' => 'Lainnya',
                'soal_id' => 242,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
        ));
        \DB::table('jawaban_soal')->insert(array (
            0 => 
            array (
                'id' => 525,
                'jawaban' => '- Belum Pernah Mengetahui Kata "STUNTING"',
                'soal_id' => 242,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            1 => 
            array (
                'id' => 526,
                'jawaban' => 'Ya',
                'soal_id' => 245,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            2 => 
            array (
                'id' => 527,
                'jawaban' => 'Tidak',
                'soal_id' => 245,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            3 => 
            array (
                'id' => 528,
                'jawaban' => 'Ya, ada',
                'soal_id' => 246,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            4 => 
            array (
                'id' => 529,
                'jawaban' => 'Tidak ada',
                'soal_id' => 246,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            5 => 
            array (
                'id' => 530,
                'jawaban' => 'Ya',
                'soal_id' => 247,
                'is_lainnya' => 0,
                'deleted_at' => '2022-06-14 20:37:20',
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 20:37:20',
            ),
            6 => 
            array (
                'id' => 531,
                'jawaban' => 'Tidak',
                'soal_id' => 247,
                'is_lainnya' => 0,
                'deleted_at' => '2022-06-14 20:37:20',
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 20:37:20',
            ),
            7 => 
            array (
                'id' => 532,
                'jawaban' => '< Rp. 1.000.000',
                'soal_id' => 248,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            8 => 
            array (
                'id' => 533,
                'jawaban' => 'Rp. 1.000.000 - Rp. 3.000.000',
                'soal_id' => 248,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            9 => 
            array (
                'id' => 534,
                'jawaban' => 'Rp. 3.000.000 - Rp. 5.000.000',
                'soal_id' => 248,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            10 => 
            array (
                'id' => 535,
                'jawaban' => '> Rp. 5.000.000',
                'soal_id' => 248,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            11 => 
            array (
                'id' => 536,
                'jawaban' => 'Hasil Pertanian',
                'soal_id' => 249,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            12 => 
            array (
                'id' => 537,
                'jawaban' => 'Hasil Perkebunan',
                'soal_id' => 249,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            13 => 
            array (
                'id' => 538,
                'jawaban' => 'Hasil Peternakan',
                'soal_id' => 249,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            14 => 
            array (
                'id' => 539,
                'jawaban' => 'Hasil Usaha/Bisnis',
                'soal_id' => 249,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            15 => 
            array (
                'id' => 540,
                'jawaban' => 'Hasil Kerja di Perusahaan/Kantor',
                'soal_id' => 249,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            16 => 
            array (
                'id' => 541,
                'jawaban' => 'Ya',
                'soal_id' => 250,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            17 => 
            array (
                'id' => 542,
                'jawaban' => 'Tidak',
                'soal_id' => 250,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            18 => 
            array (
                'id' => 543,
                'jawaban' => 'Membeli Bahan Makanan',
                'soal_id' => 251,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            19 => 
            array (
                'id' => 544,
                'jawaban' => 'Membeli Pakaian',
                'soal_id' => 251,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            20 => 
            array (
                'id' => 545,
                'jawaban' => 'Membeli Perabotan Rumah Tangga',
                'soal_id' => 251,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            21 => 
            array (
                'id' => 546,
                'jawaban' => 'Biaya Sekolah/Pendidikan',
                'soal_id' => 251,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            22 => 
            array (
                'id' => 547,
                'jawaban' => 'Membayar Cicilan Kendaraan',
                'soal_id' => 251,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            23 => 
            array (
                'id' => 548,
                'jawaban' => 'Lainnya',
                'soal_id' => 251,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            24 => 
            array (
                'id' => 549,
                'jawaban' => 'Tidak dapat bantuan',
                'soal_id' => 252,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            25 => 
            array (
                'id' => 550,
                'jawaban' => 'Lainnya',
                'soal_id' => 252,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            26 => 
            array (
                'id' => 551,
                'jawaban' => 'Tidak ada',
                'soal_id' => 253,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            27 => 
            array (
                'id' => 552,
                'jawaban' => 'Ada, bukan milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 253,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            28 => 
            array (
                'id' => 553,
                'jawaban' => 'Ada, milik sendiri dan tidak memenuhi syarat kesehatan',
                'soal_id' => 253,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            29 => 
            array (
                'id' => 554,
                'jawaban' => 'Ada, bukan milik sendiri dan memenuhi syaratkesehatan',
                'soal_id' => 253,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            30 => 
            array (
                'id' => 555,
                'jawaban' => 'Ada, milik sendiri',
                'soal_id' => 253,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            31 => 
            array (
                'id' => 556,
                'jawaban' => 'Tidak ada',
                'soal_id' => 254,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            32 => 
            array (
                'id' => 557,
                'jawaban' => 'Sungai',
                'soal_id' => 254,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            33 => 
            array (
                'id' => 558,
                'jawaban' => 'Kebun',
                'soal_id' => 254,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            34 => 
            array (
                'id' => 559,
                'jawaban' => 'Ada, bukan leher angsa, tidak ada tutup, disalurkan ke sungai/kolam',
                'soal_id' => 254,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            35 => 
            array (
                'id' => 560,
            'jawaban' => 'Ada, bukan leher angsa ada ditutup (leher angsa), disalurkan ke sungai/kolam',
                'soal_id' => 254,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            36 => 
            array (
                'id' => 561,
                'jawaban' => 'Ada, bukan leher angsa ada tutup, septic tank',
                'soal_id' => 254,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            37 => 
            array (
                'id' => 562,
                'jawaban' => 'Ada, leher angsa, septic tank',
                'soal_id' => 254,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            38 => 
            array (
                'id' => 563,
                'jawaban' => 'Tidak ada, sehingga tergenang tidak teratur di halaman rumah',
                'soal_id' => 255,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            39 => 
            array (
                'id' => 564,
            'jawaban' => 'Ada, diresapkan tetapi mencemari sumber air (jarak dengan sumber air < 10 m)',
                'soal_id' => 255,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            40 => 
            array (
                'id' => 565,
                'jawaban' => 'Ada, dialirkan ke selokan terbuka',
                'soal_id' => 255,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            41 => 
            array (
                'id' => 566,
            'jawaban' => 'Ada, diresapkan dan tidak mencemari sumber air (jarak dengan sumer air >10m)',
                'soal_id' => 255,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            42 => 
            array (
                'id' => 567,
            'jawaban' => 'Ada, disalurkan ke selokan tertutup (saluran kota) untuk diolah lebih lanjut)',
                'soal_id' => 255,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            43 => 
            array (
                'id' => 568,
                'jawaban' => 'Tidak ada',
                'soal_id' => 256,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            44 => 
            array (
                'id' => 569,
                'jawaban' => 'Ada, tapi kedap air dan tidak ada tutup',
                'soal_id' => 256,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            45 => 
            array (
                'id' => 570,
                'jawaban' => 'Ada, kedap air dan tidak bertutup',
                'soal_id' => 256,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            46 => 
            array (
                'id' => 571,
                'jawaban' => 'Ada, kedap air dan bertutup',
                'soal_id' => 256,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            47 => 
            array (
                'id' => 572,
                'jawaban' => 'Dibuang ke sungai/kebun/kolam/sembarangan',
                'soal_id' => 257,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            48 => 
            array (
                'id' => 573,
                'jawaban' => 'Kadang-kadang di buang ke tempat sampah',
                'soal_id' => 257,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            49 => 
            array (
                'id' => 574,
                'jawaban' => 'Setiap hari dibuang ke tempat sampah',
                'soal_id' => 257,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            50 => 
            array (
                'id' => 575,
            'jawaban' => 'Bukan tembok (terbuat darianyaman bambu/ilalang)',
                'soal_id' => 258,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            51 => 
            array (
                'id' => 576,
                'jawaban' => 'Semi permanen/setengah tembok/pasangan bata atau batu yang tidak diplester/papan tidak kedap air',
                'soal_id' => 258,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            52 => 
            array (
                'id' => 577,
            'jawaban' => 'Permanen (tembok/pasangan batu bata yang diplester), papan kedap air',
                'soal_id' => 258,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            53 => 
            array (
                'id' => 578,
                'jawaban' => 'Tanah',
                'soal_id' => 259,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            54 => 
            array (
                'id' => 579,
                'jawaban' => 'Papan/anyaman bambu dekat dengan tanah/plesteran yang retak dan berdebu',
                'soal_id' => 259,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            55 => 
            array (
                'id' => 580,
            'jawaban' => 'Diplester/ubin/keramik/papan (rumah panggung)',
                'soal_id' => 259,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            56 => 
            array (
                'id' => 581,
                'jawaban' => 'Tidak ada',
                'soal_id' => 260,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            57 => 
            array (
                'id' => 582,
                'jawaban' => 'Ada',
                'soal_id' => 260,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            58 => 
            array (
                'id' => 583,
                'jawaban' => 'Tidak ada',
                'soal_id' => 261,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            59 => 
            array (
                'id' => 584,
                'jawaban' => 'Ada',
                'soal_id' => 261,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            60 => 
            array (
                'id' => 585,
                'jawaban' => 'Tidak ada',
                'soal_id' => 262,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            61 => 
            array (
                'id' => 586,
                'jawaban' => 'Ada, luas ventilasi permanen < 10% dari luas lantai',
                'soal_id' => 262,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            62 => 
            array (
                'id' => 587,
                'jawaban' => 'Ada, luas ventilasi permanen > 10% dari luas lantai',
                'soal_id' => 262,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            63 => 
            array (
                'id' => 588,
                'jawaban' => 'Tidak ada',
                'soal_id' => 263,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            64 => 
            array (
                'id' => 589,
                'jawaban' => 'Ada, lubang ventilasi dapur < 10% dari luas lantai',
                'soal_id' => 263,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            65 => 
            array (
                'id' => 590,
            'jawaban' => 'Ada, lubang ventilasi dapur > 10% dari luas lantai dapur (asap keluar dengan sempurna) atau ada exhaust fan/ada peralatan lain yang sejenis',
                'soal_id' => 263,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            66 => 
            array (
                'id' => 591,
            'jawaban' => 'Tidak terang (tidak dapat digunakan untuk membaca)',
                'soal_id' => 264,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            67 => 
            array (
                'id' => 592,
                'jawaban' => 'Kurang terang sehingga kurang jelas untuk dipergunakan membaca dengan normal',
                'soal_id' => 264,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            68 => 
            array (
                'id' => 593,
                'jawaban' => 'Terang dan tidak silau sehingga dapat dipergunakan untuk membaca dengan normal',
                'soal_id' => 264,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            69 => 
            array (
                'id' => 594,
                'jawaban' => 'Kayu Bakar',
                'soal_id' => 265,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            70 => 
            array (
                'id' => 595,
                'jawaban' => 'Kompor Minyak Tanah',
                'soal_id' => 265,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            71 => 
            array (
                'id' => 596,
                'jawaban' => 'Kompor Gas',
                'soal_id' => 265,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            72 => 
            array (
                'id' => 597,
                'jawaban' => 'Kompor Listrik',
                'soal_id' => 265,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            73 => 
            array (
                'id' => 598,
                'jawaban' => 'ISPA',
                'soal_id' => 266,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            74 => 
            array (
                'id' => 599,
                'jawaban' => 'Covid',
                'soal_id' => 266,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            75 => 
            array (
                'id' => 600,
                'jawaban' => 'TB Paru',
                'soal_id' => 266,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            76 => 
            array (
                'id' => 601,
                'jawaban' => 'Kecacingan',
                'soal_id' => 266,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            77 => 
            array (
                'id' => 602,
                'jawaban' => 'Pneumonia',
                'soal_id' => 266,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            78 => 
            array (
                'id' => 603,
                'jawaban' => 'Diare',
                'soal_id' => 266,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            79 => 
            array (
                'id' => 604,
                'jawaban' => 'Campak',
                'soal_id' => 266,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            80 => 
            array (
                'id' => 605,
                'jawaban' => 'Sering',
                'soal_id' => 267,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            81 => 
            array (
                'id' => 606,
                'jawaban' => 'Jarang',
                'soal_id' => 267,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            82 => 
            array (
                'id' => 607,
                'jawaban' => 'Tidak Pernah',
                'soal_id' => 267,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            83 => 
            array (
                'id' => 608,
                'jawaban' => '1 kali dalam beberapa hari',
                'soal_id' => 268,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            84 => 
            array (
                'id' => 609,
                'jawaban' => '1 kali sehari',
                'soal_id' => 268,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            85 => 
            array (
                'id' => 610,
                'jawaban' => '2 kali sehari',
                'soal_id' => 268,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            86 => 
            array (
                'id' => 611,
                'jawaban' => '1 kali sehari',
                'soal_id' => 269,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            87 => 
            array (
                'id' => 612,
                'jawaban' => '2 kali sehari',
                'soal_id' => 269,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            88 => 
            array (
                'id' => 613,
                'jawaban' => '3 kali sehari',
                'soal_id' => 269,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            89 => 
            array (
                'id' => 614,
                'jawaban' => 'Lebih dari 3 kali sehari',
                'soal_id' => 269,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            90 => 
            array (
                'id' => 615,
                'jawaban' => 'Ya',
                'soal_id' => 270,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            91 => 
            array (
                'id' => 616,
                'jawaban' => 'Tidak',
                'soal_id' => 270,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            92 => 
            array (
                'id' => 617,
                'jawaban' => '- Tidak mengonsumsi suplemen',
                'soal_id' => 271,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            93 => 
            array (
                'id' => 618,
                'jawaban' => '3-5 bulan',
                'soal_id' => 271,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            94 => 
            array (
                'id' => 619,
                'jawaban' => '6-12 bulan',
                'soal_id' => 271,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            95 => 
            array (
                'id' => 620,
                'jawaban' => '1-3 tahun',
                'soal_id' => 271,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            96 => 
            array (
                'id' => 621,
                'jawaban' => '>3 tahun',
                'soal_id' => 271,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            97 => 
            array (
                'id' => 622,
                'jawaban' => '- Tidak mengonsumsi suplemen',
                'soal_id' => 272,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            98 => 
            array (
                'id' => 623,
            'jawaban' => 'Selalu ( 1-3 kali/hari)',
                'soal_id' => 272,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            99 => 
            array (
                'id' => 624,
            'jawaban' => 'Sering (1-4 kali/ minggu)',
                'soal_id' => 272,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            100 => 
            array (
                'id' => 625,
            'jawaban' => 'Jarang (1-3 kali/ bulan)',
                'soal_id' => 272,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            101 => 
            array (
                'id' => 626,
                'jawaban' => 'Mahal',
                'soal_id' => 273,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            102 => 
            array (
                'id' => 627,
                'jawaban' => 'Takut ketergantungan',
                'soal_id' => 273,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            103 => 
            array (
                'id' => 628,
                'jawaban' => 'Tidak tahu manfaat/ kegunaannya',
                'soal_id' => 273,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            104 => 
            array (
                'id' => 629,
                'jawaban' => 'Sudah makan banyak obat',
                'soal_id' => 273,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            105 => 
            array (
                'id' => 630,
                'jawaban' => 'Makan 3 kali / hari sudah cukup',
                'soal_id' => 273,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            106 => 
            array (
                'id' => 631,
                'jawaban' => 'Banyak efek samping',
                'soal_id' => 273,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            107 => 
            array (
                'id' => 632,
                'jawaban' => 'Ikan',
                'soal_id' => 274,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            108 => 
            array (
                'id' => 633,
                'jawaban' => 'Sayur',
                'soal_id' => 274,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            109 => 
            array (
                'id' => 634,
                'jawaban' => 'Daging Sapi',
                'soal_id' => 274,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            110 => 
            array (
                'id' => 635,
                'jawaban' => 'Ayam',
                'soal_id' => 274,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            111 => 
            array (
                'id' => 636,
                'jawaban' => 'Buah',
                'soal_id' => 274,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            112 => 
            array (
                'id' => 637,
                'jawaban' => 'Lainnya',
                'soal_id' => 274,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            113 => 
            array (
                'id' => 638,
                'jawaban' => 'Ya',
                'soal_id' => 284,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            114 => 
            array (
                'id' => 639,
                'jawaban' => 'Tidak',
                'soal_id' => 284,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            115 => 
            array (
                'id' => 640,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 284,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            116 => 
            array (
                'id' => 641,
                'jawaban' => 'Lengkap',
                'soal_id' => 285,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            117 => 
            array (
                'id' => 642,
                'jawaban' => 'Tidak Lengkap',
                'soal_id' => 285,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            118 => 
            array (
                'id' => 643,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 285,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            119 => 
            array (
                'id' => 644,
                'jawaban' => 'Ya',
                'soal_id' => 286,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            120 => 
            array (
                'id' => 645,
                'jawaban' => 'Tidak',
                'soal_id' => 286,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            121 => 
            array (
                'id' => 646,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 286,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            122 => 
            array (
                'id' => 647,
                'jawaban' => 'Ya',
                'soal_id' => 287,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            123 => 
            array (
                'id' => 648,
                'jawaban' => 'Tidak',
                'soal_id' => 287,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            124 => 
            array (
                'id' => 649,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 287,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            125 => 
            array (
                'id' => 650,
                'jawaban' => 'Ada',
                'soal_id' => 288,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            126 => 
            array (
                'id' => 651,
                'jawaban' => 'Tidak Ada',
                'soal_id' => 288,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            127 => 
            array (
                'id' => 652,
                'jawaban' => '- Bukan Responden Ibu Hamil',
                'soal_id' => 288,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            128 => 
            array (
                'id' => 653,
                'jawaban' => 'Dukun Bayi',
                'soal_id' => 289,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            129 => 
            array (
                'id' => 654,
                'jawaban' => 'Bidan Desa',
                'soal_id' => 289,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            130 => 
            array (
                'id' => 655,
                'jawaban' => 'Bidan Praktek Swasta',
                'soal_id' => 289,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            131 => 
            array (
                'id' => 656,
                'jawaban' => 'Dokter Umum',
                'soal_id' => 289,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            132 => 
            array (
                'id' => 657,
                'jawaban' => 'Dokter ahli kebidanan',
                'soal_id' => 289,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            133 => 
            array (
                'id' => 658,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 289,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            134 => 
            array (
                'id' => 659,
                'jawaban' => 'Ya',
                'soal_id' => 290,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            135 => 
            array (
                'id' => 660,
                'jawaban' => 'Tidak',
                'soal_id' => 290,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            136 => 
            array (
                'id' => 661,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 290,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            137 => 
            array (
                'id' => 662,
                'jawaban' => 'Segera setelah dilahirkan',
                'soal_id' => 291,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            138 => 
            array (
                'id' => 663,
                'jawaban' => '1 hari setelah dilahirkan',
                'soal_id' => 291,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            139 => 
            array (
                'id' => 664,
                'jawaban' => '1 minggu setelah dilahirkan',
                'soal_id' => 291,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            140 => 
            array (
                'id' => 665,
                'jawaban' => 'Tidak memberikan ASI',
                'soal_id' => 291,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            141 => 
            array (
                'id' => 666,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 291,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            142 => 
            array (
                'id' => 667,
                'jawaban' => 'Ya',
                'soal_id' => 292,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            143 => 
            array (
                'id' => 668,
                'jawaban' => 'Tidak',
                'soal_id' => 292,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            144 => 
            array (
                'id' => 669,
                'jawaban' => '- Bukan Ibu Nifas dan Menyusui',
                'soal_id' => 292,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            145 => 
            array (
                'id' => 670,
                'jawaban' => 'Lengkap',
                'soal_id' => 297,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            146 => 
            array (
                'id' => 671,
                'jawaban' => 'Tidak Lengkap',
                'soal_id' => 297,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            147 => 
            array (
                'id' => 672,
                'jawaban' => '- Tidak Ada Bayi, Baduta, dan Balita',
                'soal_id' => 297,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            148 => 
            array (
                'id' => 673,
                'jawaban' => 'Ada',
                'soal_id' => 298,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            149 => 
            array (
                'id' => 674,
                'jawaban' => 'Tidak ada',
                'soal_id' => 298,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            150 => 
            array (
                'id' => 675,
                'jawaban' => '- Tidak Ada Bayi, Baduta, dan Balita',
                'soal_id' => 298,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            151 => 
            array (
                'id' => 676,
                'jawaban' => 'Tidak tahu',
                'soal_id' => 299,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            152 => 
            array (
                'id' => 677,
                'jawaban' => 'ASI yang selalu diberikan kepada bayi sejak lahir',
                'soal_id' => 299,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            153 => 
            array (
                'id' => 678,
                'jawaban' => 'ASI yang pertama kali keluar dan berwarna kekuningan',
                'soal_id' => 299,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            154 => 
            array (
                'id' => 679,
                'jawaban' => 'Zat gizi yang dimiliki oleh bayi',
                'soal_id' => 299,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            155 => 
            array (
                'id' => 680,
                'jawaban' => 'Ya',
                'soal_id' => 300,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            156 => 
            array (
                'id' => 681,
                'jawaban' => 'Tidak',
                'soal_id' => 300,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            157 => 
            array (
                'id' => 682,
                'jawaban' => 'Ya',
                'soal_id' => 301,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            158 => 
            array (
                'id' => 683,
                'jawaban' => 'Tidak',
                'soal_id' => 301,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            159 => 
            array (
                'id' => 684,
                'jawaban' => 'Bayi diletakkan di samping ibu.',
                'soal_id' => 302,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            160 => 
            array (
                'id' => 685,
                'jawaban' => 'Bayi diletakkan di dada atau perut ibu.',
                'soal_id' => 302,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            161 => 
            array (
                'id' => 686,
                'jawaban' => 'Bayi diletakkan di tempat tidur bayi.',
                'soal_id' => 302,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            162 => 
            array (
                'id' => 687,
                'jawaban' => 'Bayi digendong agar berhenti menangis.',
                'soal_id' => 302,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            163 => 
            array (
                'id' => 688,
                'jawaban' => '15 menit',
                'soal_id' => 303,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            164 => 
            array (
                'id' => 689,
                'jawaban' => '30 menit',
                'soal_id' => 303,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            165 => 
            array (
                'id' => 690,
                'jawaban' => '=1jam',
                'soal_id' => 303,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            166 => 
            array (
                'id' => 691,
                'jawaban' => 'Lainnya',
                'soal_id' => 303,
                'is_lainnya' => 1,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            167 => 
            array (
                'id' => 692,
                'jawaban' => 'Ya',
                'soal_id' => 304,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            168 => 
            array (
                'id' => 693,
                'jawaban' => 'Tidak',
                'soal_id' => 304,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            169 => 
            array (
                'id' => 694,
                'jawaban' => 'Ya',
                'soal_id' => 305,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            170 => 
            array (
                'id' => 695,
                'jawaban' => 'Tidak',
                'soal_id' => 305,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            171 => 
            array (
                'id' => 696,
                'jawaban' => 'Ya',
                'soal_id' => 306,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            172 => 
            array (
                'id' => 697,
                'jawaban' => 'Tidak',
                'soal_id' => 306,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            173 => 
            array (
                'id' => 698,
                'jawaban' => 'Ya',
                'soal_id' => 307,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            174 => 
            array (
                'id' => 699,
                'jawaban' => 'Tidak',
                'soal_id' => 307,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            175 => 
            array (
                'id' => 700,
                'jawaban' => 'Ya',
                'soal_id' => 308,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            176 => 
            array (
                'id' => 701,
                'jawaban' => 'Tidak',
                'soal_id' => 308,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            177 => 
            array (
                'id' => 702,
                'jawaban' => 'Ya',
                'soal_id' => 309,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            178 => 
            array (
                'id' => 703,
                'jawaban' => 'Tidak',
                'soal_id' => 309,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            179 => 
            array (
                'id' => 704,
                'jawaban' => 'Ya',
                'soal_id' => 310,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            180 => 
            array (
                'id' => 705,
                'jawaban' => 'Tidak',
                'soal_id' => 310,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            181 => 
            array (
                'id' => 706,
                'jawaban' => 'Ya',
                'soal_id' => 311,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            182 => 
            array (
                'id' => 707,
                'jawaban' => 'Tidak',
                'soal_id' => 311,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            183 => 
            array (
                'id' => 708,
                'jawaban' => 'Ya',
                'soal_id' => 312,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            184 => 
            array (
                'id' => 709,
                'jawaban' => 'Tidak',
                'soal_id' => 312,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            185 => 
            array (
                'id' => 710,
                'jawaban' => 'Ya',
                'soal_id' => 313,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            186 => 
            array (
                'id' => 711,
                'jawaban' => 'Tidak',
                'soal_id' => 313,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            187 => 
            array (
                'id' => 712,
                'jawaban' => 'Ya',
                'soal_id' => 314,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            188 => 
            array (
                'id' => 713,
                'jawaban' => 'Tidak',
                'soal_id' => 314,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            189 => 
            array (
                'id' => 714,
                'jawaban' => 'Ya',
                'soal_id' => 315,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            190 => 
            array (
                'id' => 715,
                'jawaban' => 'Tidak',
                'soal_id' => 315,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            191 => 
            array (
                'id' => 716,
                'jawaban' => 'Ya',
                'soal_id' => 316,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            192 => 
            array (
                'id' => 717,
                'jawaban' => 'Tidak',
                'soal_id' => 316,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            193 => 
            array (
                'id' => 718,
                'jawaban' => 'Ya',
                'soal_id' => 317,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            194 => 
            array (
                'id' => 719,
                'jawaban' => 'Tidak',
                'soal_id' => 317,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            195 => 
            array (
                'id' => 720,
                'jawaban' => 'Ya',
                'soal_id' => 318,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            196 => 
            array (
                'id' => 721,
                'jawaban' => 'Tidak',
                'soal_id' => 318,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            197 => 
            array (
                'id' => 722,
                'jawaban' => 'Ya',
                'soal_id' => 319,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            198 => 
            array (
                'id' => 723,
                'jawaban' => 'Tidak',
                'soal_id' => 319,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            199 => 
            array (
                'id' => 724,
                'jawaban' => 'Ya',
                'soal_id' => 320,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            200 => 
            array (
                'id' => 725,
                'jawaban' => 'Tidak',
                'soal_id' => 320,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            201 => 
            array (
                'id' => 726,
                'jawaban' => 'Ya',
                'soal_id' => 321,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
            202 => 
            array (
                'id' => 727,
                'jawaban' => 'Tidak',
                'soal_id' => 321,
                'is_lainnya' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-06-14 10:42:17',
                'updated_at' => '2022-06-14 10:42:17',
            ),
        ));
        
        
    }
}