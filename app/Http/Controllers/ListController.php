<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function listProvinsi(){
        $url = "https://mitrateknologi1.github.io/api-wilayah-indonesia/api/provinces.json";
        $json = json_decode(file_get_contents($url));   
        return $json;
    }

    public function listKabupatenKota(Request $request){
        $url = "https://mitrateknologi1.github.io/api-wilayah-indonesia/api/regencies/".$request->idProvinsi.".json";
        $json = json_decode(file_get_contents($url));   
        return $json;
    }

    public function listKecamatan(Request $request){
        $url = "https://mitrateknologi1.github.io/api-wilayah-indonesia/api/districts/".$request->idKabupatenKota.".json";
        $json = json_decode(file_get_contents($url));   
        return $json;
    }

    public function listDesaKelurahan(Request $request){
        $url = "https://mitrateknologi1.github.io/api-wilayah-indonesia/api/villages/".$request->idKecamatan.".json";
        $json = json_decode(file_get_contents($url));   
        return $json;
    }
}
