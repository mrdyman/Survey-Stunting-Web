<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function listProvinsi(){
        $url = DB::table('provinsi')->get();
        $json = json_decode(($url));   
        return $json;
    }

    public function listKabupatenKota(Request $request){
        $url = DB::table('kabupaten_kota')->where('provinsi_id', $request->idProvinsi)->get();
        $json = json_decode(($url));   
        return $json;
    }

    public function listKecamatan(Request $request){
        $url = DB::table('kecamatan')->where('kabupaten_kota_id', $request->idKabupatenKota)->get();
        $json = json_decode(($url));   
        return $json;
    }

    public function listDesaKelurahan(Request $request){
        $url = DB::table('desa_kelurahan')->where('kecamatan_id', $request->idKecamatan)->get();
        $json = json_decode(($url));   
        return $json;
    }
}
