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
        $kodeUnik = $request->kode_unik;
        $namaSurveyId = $request->namaSurveyId;
        $status = $request->status;
        $search = $request->search;

        if($kodeUnik != null){
           return $this->show($kodeUnik);
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
                'kode_unik_responden' => ['required', Rule::unique('survey')->where(function ($query) use ($request) {
                    $query->where([
                        ['kode_unik_responden', $request->kode_unik_responden],
                        ['nama_survey_id', $request->nama_survey_id]
                    ]);
                })],
                'nama_survey_id' => ['required', Rule::unique('survey')->where(function ($query) use ($request) {
                    $query->where([
                        ['kode_unik_responden', $request->kode_unik_responden],
                        ['nama_survey_id', $request->nama_survey_id]
                    ]);
                })],
            ],
            [
                'kode_unik_responden.required' => "Responden Tidak Boleh Dikosongkan",
                'nama_survey_id.required' => "Nama Survey Tidak Boleh Dikosongkan",
                'nama_survey_id.unique' => "Survey Sudah Ada",
                'kode_unik_responden.unique' => "Survey Sudah Ada",
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
        $survey->kode_unik_responden = intval($request->kode_unik_responden);
        $survey->nama_survey_id = intval($request->nama_survey_id);
        $survey->kategori_selanjutnya = $kategoriAwal;
        $survey->profile_id = auth()->user()->profile->id;
        $survey->kode_unik = $this->generateKodeUnik();
        $survey->save();

        $kodeUnikResponden = $request->kode_unik_responden;
        $namaSurveyId = $request->nama_survey_id;

        $data = Survey::with(['responden', 'namaSurvey', 'profile'])->whereHas('namaSurvey', function ($namaSurvey) use ($namaSurveyId) {
                        $namaSurvey->where('nama_survey_id', $namaSurveyId);
                        })->whereHas('responden', function($responden) use ($kodeUnikResponden){
                                $responden->where('kode_unik_responden', $kodeUnikResponden);
                        })->where(function ($query) {
                            $query->where('profile_id', Auth::user()->profile->id);
                        })->orderBy('id', 'DESC')->get();

        return response([
            'message' => 'data created.',
            'data' => $data
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($kodeUnik)
    {
        $survey = Survey::with(['responden', 'namaSurvey', 'profile'])->where('kode_unik', $kodeUnik)->first();

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
                                                ->where('kode_unik_survey', $survey->kode_unik)
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
        $kodeUnik = $request->kode_unik;
        $kodeUnikResponden = $request->kode_unik_responden;
        $namaSurveyId = $request->nama_survey_id;

        if($kodeUnik == null){
            return response([
                'message' => 'please provide an kode_unik survey'
            ], 400);
        }

        $request->validate([
            'kode_unik_responden' => 'required|numeric',
            'nama_survey_id' => 'required|numeric',
            'profile_id' => 'required|numeric',
            'is_selesai' => 'required|numeric'
        ]);

        $data = Survey::where('kode_unik', $kodeUnik)->first();
        $data->update($request->all());

        $data1 = Survey::with(['responden', 'namaSurvey', 'profile'])->whereHas('namaSurvey', function ($namaSurvey) use ($namaSurveyId) {
            $namaSurvey->where('nama_survey_id', $namaSurveyId);
        })->whereHas('responden', function($responden) use ($kodeUnikResponden){
            $responden->where('kode_unik_responden', $kodeUnikResponden);
        })->where(function ($query) {
            $query->where('profile_id', Auth::user()->profile->id);
        })->orderBy('id', 'DESC')->get();
        
        // ->where(function ($query) {
        //     $query->where('profile_id', Auth::user()->profile->id);
        // })->orderBy('id', 'DESC')->get();
        
        if($data){
            return response([
                'message' => 'data updated.',
                'data' => $data1
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
        $kodeUnik = $request->kode_unik;

        $survey = Survey::where('kode_unik', $kodeUnik)->first();
        $survey->delete();

        $jawabanSurvey = JawabanSurvey::where('kode_unik_survey', $kodeUnik)->get();
        if ($jawabanSurvey->count() > 0) {
            $jawabanSurvey = JawabanSurvey::where('kode_unik_survey', $kodeUnik)->delete();
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

    public function generateKodeUnik()
    {
        do {
            $code = random_int(10000000, 99999999);
        } while (Survey::where("kode_unik", "=", $code)->first());

        return $code;
    }
}
