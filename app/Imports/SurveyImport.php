<?php

namespace App\Imports;

use App\Models\Survey;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SurveyImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Survey([
            'kode_unik_responden'  => $row['kode_unik_responden'],
            'nama_survey_id' => $row['nama_survey_id'],
            'profile_id'    => $row['profile_id'],
            'kategori_selanjutnya'    => $row['kategori_selanjutnya'],
            'is_selesai' => $row['is_selesai'],
            'kode_unik' => $row['kode_unik'],
        ]);
    }
}
