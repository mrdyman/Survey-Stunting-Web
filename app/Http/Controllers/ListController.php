<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kecamatan;
use App\Models\Responden;
use Illuminate\Http\Request;
use App\Models\Desa_kelurahan;
use App\Models\Kabupaten_kota;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function listProvinsi(Request $request)
    {
        if ($request->is_responden == 1) {
            $url = Provinsi::where('status', 1)->orderBy('nama', 'ASC')->get();
        } else {
            $url = Provinsi::orderBy('nama', 'ASC')->get();
        }
        $json = json_decode(($url));
        return $json;
    }

    public function listKabupatenKota(Request $request)
    {
        if ($request->is_responden == 1) {
            $url = Kabupaten_kota::where('provinsi_id', $request->idProvinsi)->where('status', 1)->orderBy('nama', 'ASC')->get();
        } else {
            $url = Kabupaten_kota::where('provinsi_id', $request->idProvinsi)->orderBy('nama', 'ASC')->get();
        }
        $json = json_decode(($url));
        return $json;
    }

    public function listKecamatan(Request $request)
    {
        if ($request->is_responden == 1) {
            $url = Kecamatan::where('kabupaten_kota_id', $request->idKabupatenKota)->where('status', 1)->orderBy('nama', 'ASC')->get();
        } else {
            $url = Kecamatan::where('kabupaten_kota_id', $request->idKabupatenKota)->orderBy('nama', 'ASC')->get();
        }
        $json = json_decode(($url));
        return $json;
    }

    public function listDesaKelurahan(Request $request)
    {
        if ($request->is_responden == 1) {
            $url = Desa_kelurahan::where('kecamatan_id', $request->idKecamatan)->where('status', 1)->orderBy('nama', 'ASC')->get();
        } else {
            $url = Desa_kelurahan::where('kecamatan_id', $request->idKecamatan)->orderBy('nama', 'ASC')->get();
        }
        $json = json_decode(($url));
        return $json;
    }
}
