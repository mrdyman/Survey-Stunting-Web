<?php

namespace App\Http\Controllers\survey;


use Illuminate\Http\Request;
use App\Imports\SurveyImport;
use App\Imports\RespondenImport;
use App\Http\Controllers\Controller;
use App\Imports\JawabanSurveyImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;



class ImportSurveyController extends Controller
{
    public function index(){
        return view('pages.survey.importSurvey.index');
    }

    public function store(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'file_survey' => 'required',
                'file_jawaban_survey' => 'required',
                'file_responden' => 'required',
            ],
            [
                'file_survey.required' => "File Survey Tidak Boleh Dikosongkan",
                'file_jawaban_survey.required' => "File Jawaban Survey Tidak Boleh Dikosongkan",
                'file_responden.required' => "File Responden Tidak Boleh Dikosongkan",
            ]
        );
       
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
        
        // return name request file
        // $file_survey = $request->file('file_survey');
        // $file_jawaban_survey = $request->file('file_jawaban_survey');
        // $file_responden = $request->file('file_responden');
        // $data = [
        //     'file_survey' => $file_survey->getClientOriginalName(),
        //     'file_jawaban_survey' => $file_jawaban_survey->getClientOriginalName(),
        //     'file_responden' => $file_responden->getClientOriginalName(),
        // ];

        Excel::import(new SurveyImport, $request->file('file_survey'));
        Excel::import(new JawabanSurveyImport, $request->file('file_jawaban_survey'));
        Excel::import(new RespondenImport, $request->file('file_responden'));
        return response()->json(['success' => 'Data Berhasil Diimport']);

        

    }
}
