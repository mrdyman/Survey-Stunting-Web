<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\JawabanSurvey;
use Illuminate\Http\Request;

class ApiJawabanSurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $Id
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $soalId = $request->soal_id;
        $surveyId = $request->survey_id;
        
        if($id != null){
            // Get jawaban soal by id
            $data = JawabanSurvey::where('id', $id)->orderBy('id', 'asc')->get();
        } else {
            if($soalId != null){
                $data = JawabanSurvey::where('soal_id', $soalId)->orderBy('id', 'asc')->get();
            } else if($surveyId != null){
                $data = JawabanSurvey::where('survey_id', $surveyId)->orderBy('id', 'asc')->get();
            } 
            else {
                // Get all soal
                $data = JawabanSurvey::all();
            }
        }
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
    public function update(Request $request)
    {
        $id = $request->id;
        $request->validate([
            'soal_id' => 'required|numeric',
            'survey_id' => 'required|numeric',
            'kategori_soal_id' => 'required|numeric',
            'jawaban_soal_id' => 'numeric'
        ]);

        $data = JawabanSurvey::find($id);
        $data->update($request->all());
        
        if($data){
            return response([
                'message' => 'data updated.'
            ], 201);
        } else {
            return response([
                'message' => 'failed to update data.'
            ], 500);
        }
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
