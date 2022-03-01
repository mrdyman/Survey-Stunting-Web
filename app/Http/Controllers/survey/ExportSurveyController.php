<?php

namespace App\Http\Controllers\survey;

use App\Exports\SurveyExport;
use App\Http\Controllers\Controller;
use App\Models\JawabanSurvey;
use Illuminate\Http\Request;
use App\Models\Survey;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;
use App\Models\KategoriSoal;
use App\Models\NamaSurvey;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ExportSurveyController extends Controller
{
    public function index(Request $request)
    {
        $namaSurvey = NamaSurvey::all();
        $surveyor = Profile::with(['user'])->whereHas('user', function ($user) {
            $user->where('role', '=', 'surveyor');
        })->orderBy('nama_lengkap')->get();

        // Filter
        $surveyor_id = $request->surveyor_id;
        $nama_survey_id = $request->nama_survey_id;

        if ($request->ajax()) {
            $data = Survey::with(['responden', 'namaSurvey', 'profile'])->where('is_selesai', 1)->where(function ($query) use ($surveyor_id) {
                if (Auth::user()->role == "Surveyor") {
                    $query->where('profile_id', Auth::user()->profile->id);
                } else {
                    if ($surveyor_id != 'semua' && $surveyor_id != null) {
                        $query->where('profile_id', $surveyor_id);
                    }
                }
            })->where('nama_survey_id', $nama_survey_id)->orderBy('id', 'DESC')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('nama', function ($row) {
                    return '<h6 class="text-uppercase mb-1 mt-4">Surveyor: ' . $row->profile->nama_lengkap . '</h6>
                                    <h6 class="text-uppercase fw-bold mb-0">Responden: ' . $row->responden->kartu_keluarga . '</h6>
                                    <span class="text-muted mb-4">Judul:  ' . $row->namaSurvey->nama . '</span>';
                })
                ->addColumn('tipe', function ($row) {
                    if ($row->namaSurvey->tipe == "Pre") {
                        return '<span class="badge badge-primary">PRE</span>';
                    } else {
                        return '<span class="badge badge-success">POST</span>';
                    }
                })
                ->addColumn('tanggal', function ($row) {
                    return Carbon::parse($row->created_at)->translatedFormat('d F Y');
                })
                ->rawColumns(['nama', 'tipe'])
                ->make(true);
        }
        return view('pages.survey.exportSurvey.index', compact('namaSurvey', 'surveyor'));
    }

    public function exportSurvey(Request $request)
    {
        $surveyor_id = $request->surveyor_id;
        $this->validate(
            $request,
            [
                'surveyor_id' => 'nullable',
                'nama_survey_id' => 'required'
            ],
            [
                'nama_survey_id.required' => "Nama Survey Tidak Boleh Dikosongkan",
            ]
        );

        $survey = Survey::with(['responden', 'namaSurvey', 'profile'])->where('is_selesai', 1)->where(function ($query) use ($surveyor_id) {
            if (Auth::user()->role == "Surveyor") {
                $query->where('profile_id', Auth::user()->profile->id);
            } else {
                if ($surveyor_id != 'semua' && $surveyor_id != null) {
                    $query->where('profile_id', $surveyor_id);
                }
            }
        })->where('nama_survey_id', $request->nama_survey_id)->orderBy('id', 'DESC')->get();

        if (count($survey) == 0) {
            return back()->with('error', 'Data Tidak Ditemukan');
        }

        $surveyor = Profile::with(['user'])->whereHas('user', function ($user) {
            $user->where('role', '=', 'surveyor');
        })->where('id', $surveyor_id)->orderBy('nama_lengkap')->first();

        if (!$surveyor) {
            $surveyor = '';
        }

        $kategori = KategoriSoal::with(['soal'])->where('nama_survey_id', $request->nama_survey_id)->get();

        $tanggal = Carbon::parse(Carbon::now())->translatedFormat('d F Y');

        return Excel::download(new SurveyExport($kategori, $survey, $surveyor), $survey[0]->namaSurvey->nama . "-" . $tanggal . "-" . rand(1, 9999) . '.xlsx');
    }
}
