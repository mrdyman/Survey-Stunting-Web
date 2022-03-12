<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Soal;
use Illuminate\Http\Request;

class ApiSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $kategoriId
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kategori = $request->kategori;
        
        if($kategori != null){
            // Get soal by kategori soal
            $data = Soal::where('kategori_soal_id', $kategori)->orderBy('urutan', 'asc')->get();
            
            if(count($data) > 0){
                return response([
                    'message' => 'OK',
                    'data' => $data
                ], 200);
            } else {
                return response([
                    'message' => 'data not found.'
                ], 404);
            }
        } else {
            // Get all soal
            $data = Soal::all();
            if($data){
                return response([
                    'message' => 'OK',
                    'data' => $data
                ], 200);
            } else {
                return response([
                    'message' => 'data not found.'
                ], 404);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
