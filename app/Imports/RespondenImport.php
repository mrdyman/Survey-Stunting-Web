<?php

namespace App\Imports;

use App\Models\Responden;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class RespondenImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            $responden = Responden::where('kartu_keluarga', $row['kartu_keluarga'])->first();
            if($responden == null){
                Responden::create([
                    'kartu_keluarga'    => $row['kartu_keluarga'],
                    'alamat'    => $row['alamat'],
                    'provinsi_id'    => $row['provinsi_id'],
                    'kabupaten_kota_id'    => $row['kabupaten_kota_id'],
                    'kecamatan_id'    => $row['kecamatan_id'],
                    'desa_kelurahan_id'    => $row['desa_kelurahan_id'],
                    'nomor_hp'    => $row['nomor_hp'],
                    'kode_unik'    => $row['kode_unik'],
                ]);
            }
            // if($row['kartu_keluarga'])
        }
    }
        // return new Responden([
        //     'kartu_keluarga'    => $row['kartu_keluarga'],
        //     'alamat'    => $row['alamat'],
        //     'provinsi_id'    => $row['provinsi_id'],
        //     'kabupaten_kota_id'    => $row['kabupaten_kota_id'],
        //     'kecamatan_id'    => $row['kecamatan_id'],
        //     'desa_kelurahan_id'    => $row['desa_kelurahan_id'],
        //     'nomor_hp'    => $row['nomor_hp'],
        //     'kode_unik'    => $row['kode_unik'],
        // ]);
    
}
