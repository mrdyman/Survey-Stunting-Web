<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSoalSeeder extends Seeder
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
                'nama' => 'Kategori 1',
                'urutan' => 1,
                'nama_survey_id' => 1,
            ],
            [
                'nama' => 'Kategori 2',
                'urutan' => 2,
                'nama_survey_id' => 1,
            ],
            [
                'nama' => 'Kategori 3',
                'urutan' => 3,
                'nama_survey_id' => 1,
            ],
            [
                'nama' => 'Kategori 4',
                'urutan' => 4,
                'nama_survey_id' => 1,
            ],
            [
                'nama' => 'Kategori 5',
                'urutan' => 5,
                'nama_survey_id' => 1,
            ],
        ];

        DB::table('kategori_soal')->insert($data);
    }
}
