<?php

namespace App\Http\Controllers\masterData;

use App\Http\Controllers\Controller;
use App\Imports\AkunImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;

class ImportAkunController extends Controller
{
    public function index()
    {
        return view('pages.masterData.importAkun.index');
    }

    public function importData(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'file_akun' => 'required|mimes:xls,xlsx',
            ],
            [
                'file_akun.required' => "File Survey Tidak Boleh Dikosongkan",
                'file_akun.mimes' => "File Survey Harus Berupa File Excel",
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        Excel::import(new AkunImport, $request->file_akun);
        return response()->json([
            'res' => 'success'
        ]);
    }
}
