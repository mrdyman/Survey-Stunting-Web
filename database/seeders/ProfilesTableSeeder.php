<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('profiles')->delete();
        
        \DB::table('profiles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'institusi_id' => 1,
                'nama_lengkap' => 'Administrator',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Palopo',
                'tanggal_lahir' => '1997-09-07',
                'alamat' => 'Jl. Palopo',
                'provinsi' => 73,
                'kabupaten_kota' => 7373,
                'kecamatan' => 7373020,
                'desa_kelurahan' => 7373020003,
                'nomor_hp' => '081212121212',
                'email' => 'inosuke@gmail.com',
                'deleted_at' => NULL,
                'created_at' => '2022-07-15 20:51:00',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'institusi_id' => 1,
                'nama_lengkap' => 'Inosuke',
                'jenis_kelamin' => 'Laki-laki',
                'tempat_lahir' => 'Palopo',
                'tanggal_lahir' => '2006-04-17',
                'alamat' => 'Jl. Bahonsuai',
                'provinsi' => 72,
                'kabupaten_kota' => 7203,
                'kecamatan' => 7203041,
                'desa_kelurahan' => 7203041003,
                'nomor_hp' => '081212121212',
                'email' => 'inosuke@gmail.com',
                'deleted_at' => NULL,
                'created_at' => '2022-07-15 20:51:00',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 2,
                'institusi_id' => 1,
                'nama_lengkap' => 'Zenetsu',
                'jenis_kelamin' => 'Perempuan',
                'tempat_lahir' => 'Siwa',
                'tanggal_lahir' => '2001-12-22',
                'alamat' => 'Jl. Siwa',
                'provinsi' => 73,
                'kabupaten_kota' => 7313,
                'kecamatan' => 7313120,
                'desa_kelurahan' => 7313120006,
                'nomor_hp' => '02187897989',
                'email' => 'zenetsu@gmail.com',
                'deleted_at' => NULL,
                'created_at' => '2022-07-15 20:51:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}