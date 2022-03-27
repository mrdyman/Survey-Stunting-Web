<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Survey;
use App\Models\Profile;
use App\Models\KategoriSoal;
use App\Models\JawabanSurvey;
use App\Models\NamaSurvey;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ApiSurveyController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  str  $status
     * @param  str  $surveyId
     * @param  str  $search
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $namaSurveyId = $request->namaSurveyId;
        $status = $request->status;
        $search = $request->search;

        if($id != null){
           return $this->show($id);
        }

        $data = Survey::with(['responden', 'namaSurvey', 'profile'])->whereHas('namaSurvey', function ($namaSurvey) use ($namaSurveyId) {
            if ($namaSurveyId != 'semua' && $namaSurveyId != null) {
                // Get all survey
                $namaSurvey->where('nama_survey_id', $namaSurveyId);
            }
        })->where(function ($query) {
            if (Auth::user()->role == "Surveyor") {
                $query->where('profile_id', Auth::user()->profile->id);
            }
        })->where(function ($query) use ($status) {
            if (Auth::user()->role == "Surveyor") {
                if ($status != 'semua' && $status != null) {
                    //get survey by status
                    if ($status == 'selesai') {
                        $query->where('is_selesai', 1);
                    } else {
                        $query->where('is_selesai', 0);
                    }
                }
            } else {
                $query->where('is_selesai', 1);
            }
        })->where(function ($query) use ($search) {
            if ($search) {
                $query->whereHas('responden', function ($query) use ($search) {
                    $query->where('kartu_keluarga', 'like', '%' . $search . '%');
                });

                $query->orWhereHas('namaSurvey', function ($query) use ($search) {
                    $query->where('nama', 'like', '%' . $search . '%');
                });

                $query->orWhereHas('profile', function ($query) use ($search) {
                    $query->where('nama_lengkap', 'like', '%' . $search . '%');
                });
            }
        })->orderBy('id', 'DESC')->get();

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
     * Display a count of the survey resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function count()
    {
        $profile = Profile::where('user_id', Auth::user()->profile->user_id)->first();

        if(!$profile){
            return response([
                'message' => 'Bad credentials.'
            ],401);
        }

        $totalResponden = Survey::where('profile_id', $profile->id)->count();
        $respondenPre = Survey::with('responden', 'namaSurvey', 'profile')->where('profile_id', $profile->id)->whereHas('namaSurvey', function ($query) {
            $query->where('tipe', 'Pre');
        })->count();
        $respondenPost = Survey::with('responden', 'namaSurvey', 'profile')->where('profile_id', $profile->id)->whereHas('namaSurvey', function ($query) {
            $query->where('tipe', 'Post');
        })->count();

        $response = [
            'responden_pre' => $respondenPre,
            'responden_post' => $respondenPost,
            'total_responden' => $totalResponden
        ];

        return response([
            'message' => 'OK',
            'data' => $response
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeJawaban(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
                'responden_id' => ['required', Rule::unique('survey')->where(function ($query) use ($request) {
                    $query->where([
                        ['responden_id', $request->responden_id],
                        ['nama_survey_id', $request->nama_survey_id]
                    ]);
                })],
                'nama_survey_id' => ['required', Rule::unique('survey')->where(function ($query) use ($request) {
                    $query->where([
                        ['responden_id', $request->responden_id],
                        ['nama_survey_id', $request->nama_survey_id]
                    ]);
                })],
            ],
            [
                'responden_id.required' => "Responden Tidak Boleh Dikosongkan",
                'nama_survey_id.required' => "Nama Survey Tidak Boleh Dikosongkan",
                'nama_survey_id.unique' => "Survey Sudah Ada",
                'responden_id.unique' => "Survey Sudah Ada",
            ]);

        $namaSurvey = NamaSurvey::find($request->nama_survey_id);
        $kategoriAwal = $namaSurvey->kategoriSoal[0]->id;
        if ($namaSurvey->kategoriSoal->count() == 0) {
            return response()->json([
                'status' => 'error',
                'pesan' => 'Survey Belum Memiliki Kategori Soal'
            ]);
        } else {
            foreach ($namaSurvey->kategoriSoal as $kategoriSoal) {
                if ($kategoriSoal->soal->count() == 0) {
                    return response()->json([
                        'status' => 'error',
                        'pesan' => 'Pastikan Setiap Kategori Memiliki Minimal 1 Soal'
                    ]);
                }
            }
        }

        $survey = new Survey();
        $survey->responden_id = intval($request->responden_id);
        $survey->nama_survey_id = intval($request->nama_survey_id);
        $survey->kategori_selanjutnya = $kategoriAwal;
        $survey->profile_id = auth()->user()->profile->id;
        $survey->save();

        return response([
            'message' => 'data created.',
            'data' => $survey
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $survey = Survey::with(['responden', 'namaSurvey', 'profile'])->where('id', $id)->first();

        if(!$survey){
            return response([
                'message' => 'data not found.'
            ], 404);
        }

        $daftarKategori = KategoriSoal::with(['soal'])->where('nama_survey_id', $survey->nama_survey_id)->get();
        $response = [];
        foreach($daftarKategori as $kategori){
            array_push($response, $kategori);
            foreach($kategori->soal as $soal){
                $daftarJawaban = JawabanSurvey::with(['jawabanSoal'])
                                                ->where('survey_id', $survey->id)
                                                ->where('kategori_soal_id', $kategori->id)
                                                ->where('soal_id', $soal->id)
                                                ->get();
                if(count($daftarJawaban) > 0){
                    array_push($response, $daftarJawaban);
                }
            }
        }

        return response([
            'message' => 'OK',
            'data' => $response
        ], 200);
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

        if($id == null){
            return response([
                'message' => 'please provide an id'
            ], 400);
        }

        $request->validate([
            'responden_id' => 'required|numeric',
            'nama_survey_id' => 'required|numeric',
            'profile_id' => 'required|numeric',
            'is_selesai' => 'required|numeric'
        ]);

        $data = Survey::find($id);
        $data->update($request->all());
        
        if($data){
            return response([
                'data' => $data,
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
    public function destroy(Request $request)
    {
        $id = $request->id;

        $survey = Survey::find($id);
        $survey->delete();

        $jawabanSurvey = JawabanSurvey::where('survey_id', $id)->get();
        if ($jawabanSurvey->count() > 0) {
            $jawabanSurvey = JawabanSurvey::where('survey_id', $id)->delete();
        }

        if($survey){
            return response([
                'message' => 'Data deleted.'
            ], 200);
        } else {
            return response([
                'message' => 'failed to delete data.'
            ], 500);
        }
    }
}
