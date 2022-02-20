<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'soal' => 'Jumlah Pendapatan',
                'tipe_jawaban' => 'Pilihan Ganda',
                'urutan' => 1,
                'kategori_soal_id' => 1
            ],
            [
                'soal' => 'Pengeluaran keluarga lebih banyak dihabiskan untuk apa? ',
                'tipe_jawaban' => 'Kotak Centang',
                'urutan' => 2,
                'kategori_soal_id' => 1
            ],
            [
                'soal' => 'Berapa HB Ibu Hamil (g/dL) ?',
                'tipe_jawaban' => 'Jawaban Singkat',
                'urutan' => 3,
                'kategori_soal_id' => 1
            ],
        ];

        DB::table('soal')->insert($data);
    }
}
