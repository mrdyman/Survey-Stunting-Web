<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('soal')->delete();
        DB::table('soal')->insert(array(
            0 =>
            array(
                'id' => 4,
                'soal' => 'Nama Responden',
                'urutan' => 1,
                'tipe_jawaban' => 'Jawaban Singkat',
                'kategori_soal_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:20:39',
                'updated_at' => '2022-02-22 02:20:39',
            ),
            1 =>
            array(
                'id' => 5,
                'soal' => 'Pendidikan Terakhir',
                'urutan' => 2,
                'tipe_jawaban' => 'Pilihan Ganda',
                'kategori_soal_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:22:04',
                'updated_at' => '2022-02-22 02:22:04',
            ),
            2 =>
            array(
                'id' => 6,
                'soal' => 'Seafood Kesukaan Anda',
                'urutan' => 3,
                'tipe_jawaban' => 'Kotak Centang',
                'kategori_soal_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:26:23',
                'updated_at' => '2022-02-22 02:26:23',
            ),
            3 =>
            array(
                'id' => 7,
                'soal' => 'Apakah Anda mengetahui kata “STUNTING” ?',
                'urutan' => 1,
                'tipe_jawaban' => 'Pilihan Ganda',
                'kategori_soal_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:27:36',
                'updated_at' => '2022-02-22 02:27:36',
            ),
            4 =>
            array(
                'id' => 8,
                'soal' => 'Dari mana Anda mengetahui STUNTING?',
                'urutan' => 2,
                'tipe_jawaban' => 'Kotak Centang',
                'kategori_soal_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:26',
                'updated_at' => '2022-02-22 02:28:26',
            ),
            5 =>
            array(
                'id' => 9,
                'soal' => 'Apa yang dimaksud dengan Stunting menurut Anda ?',
                'urutan' => 3,
                'tipe_jawaban' => 'Jawaban Singkat',
                'kategori_soal_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:28:41',
                'updated_at' => '2022-02-22 02:28:41',
            ),
            6 =>
            array(
                'id' => 10,
                'soal' => 'Apakah ada makanan yang dilarang saat hamil ? sebutkan !',
                'urutan' => 1,
                'tipe_jawaban' => 'Jawaban Singkat',
                'kategori_soal_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:29:44',
                'updated_at' => '2022-02-22 02:29:44',
            ),
            7 =>
            array(
                'id' => 11,
                'soal' => 'Apakah dirumah Anda mendahulukan laki-laki makan sebelum perempuan ?',
                'urutan' => 2,
                'tipe_jawaban' => 'Pilihan Ganda',
                'kategori_soal_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:03',
                'updated_at' => '2022-02-22 02:30:03',
            ),
            8 =>
            array(
                'id' => 12,
                'soal' => 'Apakah Ada Paksaan dalam pernikahan (Kesiapan Menikah)?',
                'urutan' => 3,
                'tipe_jawaban' => 'Pilihan Ganda',
                'kategori_soal_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:30:19',
                'updated_at' => '2022-02-22 02:30:19',
            ),
            9 =>
            array(
                'id' => 13,
                'soal' => 'Jumlah Pendapatan',
                'urutan' => 1,
                'tipe_jawaban' => 'Pilihan Ganda',
                'kategori_soal_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:31:31',
                'updated_at' => '2022-02-22 02:31:31',
            ),
            10 =>
            array(
                'id' => 14,
                'soal' => 'Sumber pendapatan (boleh memilih lebih dari 1 pilihan)',
                'urutan' => 2,
                'tipe_jawaban' => 'Kotak Centang',
                'kategori_soal_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:09',
                'updated_at' => '2022-02-22 02:32:09',
            ),
            11 =>
            array(
                'id' => 15,
                'soal' => 'Apakah Anda memilik kartu keluarga sejahtera atau perlindungan sosial ?',
                'urutan' => 3,
                'tipe_jawaban' => 'Pilihan Ganda',
                'kategori_soal_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:32:35',
                'updated_at' => '2022-02-22 02:32:35',
            ),
            12 =>
            array(
                'id' => 16,
                'soal' => 'Sarana air bersih',
                'urutan' => 1,
                'tipe_jawaban' => 'Pilihan Ganda',
                'kategori_soal_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:34:28',
                'updated_at' => '2022-02-22 02:34:28',
            ),
            13 =>
            array(
                'id' => 17,
                'soal' => 'Jamban (sarana pembuangan kotoran)',
                'urutan' => 2,
                'tipe_jawaban' => 'Pilihan Ganda',
                'kategori_soal_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:23',
                'updated_at' => '2022-02-22 02:35:23',
            ),
            14 =>
            array(
                'id' => 18,
                'soal' => 'Jendela kamar tidur',
                'urutan' => 3,
                'tipe_jawaban' => 'Pilihan Ganda',
                'kategori_soal_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2022-02-22 02:35:50',
                'updated_at' => '2022-02-22 02:35:50',
            ),
        ));
    }
}
