<?php

namespace App\Http\Controllers\masterData;

use Illuminate\Http\Request;
use App\Imports\SurveyImport;
use App\Imports\RespondenImport;
use App\Http\Controllers\Controller;
use App\Imports\JawabanSurveyImport;
use App\Imports\RespondenOnlyImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class ImportRespondenController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'file_import_responden' => 'required',
            ],
            [
                'file_import_responden.required' => "File Responden Tidak Boleh Dikosongkan",
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        // $responden = new RespondenImport;
        // Excel::import($responden, $request->file('file_responden'));
        // $bentrok = $responden->getBentrok();
        Excel::import(new RespondenOnlyImport, $request->file('file_import_responden'));
        // Excel::import(new JawabanSurveyImport, $request->file('file_jawaban_survey'));
        // return response()->json(['success' => 'Data Berhasil Diimport']);
    }
}
