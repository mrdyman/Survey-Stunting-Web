<?php

namespace App\Http\Controllers\survey;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        $file_survey = $request->file('file_survey');
        $file_jawaban_survey = $request->file('file_jawaban_survey');
        $file_responden = $request->file('file_responden');
        $data = [
            'file_survey' => $file_survey->getClientOriginalName(),
            'file_jawaban_survey' => $file_jawaban_survey->getClientOriginalName(),
            'file_responden' => $file_responden->getClientOriginalName(),
        ];
        
        return $data;

    }
}
