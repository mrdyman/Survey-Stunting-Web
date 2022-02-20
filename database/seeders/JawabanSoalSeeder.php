<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JawabanSoalSeeder extends Seeder
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
                'jawaban' => '< Rp.1.000.000',
                'is_lainnya' => 0,
                'soal_id' => 1
            ],
            [
                'jawaban' => 'Rp. 1.000.000 - Rp. 3.000.000 ',
                'is_lainnya' => 0,
                'soal_id' => 1
            ],
            [
                'jawaban' => 'Rp. 3.000.000 - Rp. 5.000.000 ',
                'is_lainnya' => 0,
                'soal_id' => 1
            ],
            [
                'jawaban' => '> Rp. 5.000.0000 ',
                'is_lainnya' => 0,
                'soal_id' => 1
            ],
            [
                'jawaban' => 'Lainnya',
                'is_lainnya' => 1,
                'soal_id' => 1
            ],
            [
                'jawaban' => 'Membeli Bahan makanan ',
                'is_lainnya' => 0,
                'soal_id' => 2
            ],
            [
                'jawaban' => 'Membeli Pakaian',
                'is_lainnya' => 0,
                'soal_id' => 2
            ],
            [
                'jawaban' => 'Membeli Perabotan rumah tangga',
                'is_lainnya' => 0,
                'soal_id' => 2
            ],
            [
                'jawaban' => 'Biaya sekolah/pendidikan ',
                'is_lainnya' => 0,
                'soal_id' => 2
            ],
            [
                'jawaban' => 'Membayar Cicilan Kendaraan ',
                'is_lainnya' => 0,
                'soal_id' => 2
            ],
            [
                'jawaban' => 'Lainnya',
                'is_lainnya' => 1,
                'soal_id' => 2,
            ],
            [
                'jawaban' => '< Rp.1.000.000',
                'is_lainnya' => 0,
                'soal_id' => 4
            ],
            [
                'jawaban' => 'Rp. 1.000.000 - Rp. 3.000.000 ',
                'is_lainnya' => 0,
                'soal_id' => 4
            ],
            [
                'jawaban' => 'Rp. 3.000.000 - Rp. 5.000.000 ',
                'is_lainnya' => 0,
                'soal_id' => 4
            ],
            [
                'jawaban' => '> Rp. 5.000.0000 ',
                'is_lainnya' => 0,
                'soal_id' => 4
            ],
            [
                'jawaban' => 'Lainnya',
                'is_lainnya' => 1,
                'soal_id' => 4
            ],
            [
                'jawaban' => 'Membeli Bahan makanan ',
                'is_lainnya' => 0,
                'soal_id' => 5
            ],
            [
                'jawaban' => 'Membeli Pakaian',
                'is_lainnya' => 0,
                'soal_id' => 5
            ],
            [
                'jawaban' => 'Membeli Perabotan rumah tangga',
                'is_lainnya' => 0,
                'soal_id' => 5
            ],
            [
                'jawaban' => 'Biaya sekolah/pendidikan ',
                'is_lainnya' => 0,
                'soal_id' => 5
            ],
            [
                'jawaban' => 'Membayar Cicilan Kendaraan ',
                'is_lainnya' => 0,
                'soal_id' => 5
            ],
            [
                'jawaban' => 'Lainnya',
                'is_lainnya' => 1,
                'soal_id' => 5,
            ]
        ];

        DB::table('jawaban_soal')->insert($data);
    }
}
