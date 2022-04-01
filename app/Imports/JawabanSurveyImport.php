<?php

namespace App\Imports;

use App\Models\JawabanSurvey;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class JawabanSurveyImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new JawabanSurvey([
            'soal_id'  => $row['soal_id'],
            'kode_unik_survey'  => $row['kode_unik_survey'],
            'kategori_soal_id'  => $row['kategori_soal_id'],
            'jawaban_soal_id'  => $row['jawaban_soal_id'],
            'jawaban_lainnya'  => $row['jawaban_lainnya'],
        ]);
    }
}
