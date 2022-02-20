<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function index()
    {
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        if($profile == null){
            return redirect(route('lengkapiProfile'));
        } else{
            if(Auth::user()->role == 'Admin'){
                $data = [
                    'totalSurvey' => DB::table('nama_survey')->count(),
                    'totalSurveyPre' => DB::table('nama_survey')->where('tipe', 'Pre')->count(),
                    'totalSurveyPost' => DB::table('nama_survey')->where('tipe', 'Post')->count(),
                    'totalSurveyor' => DB::table('users')->where('role', 'Surveyor')->count(),
                ];
                return view('pages.dashboard.admin', $data);
            } else if(Auth::user()->role == 'Surveyor'){
                // Jumlahnya masih mau diubah sesuai surveyor yang login
                $data = [
                    'totalSurvey' => DB::table('nama_survey')->count(),
                    'totalSurveyPre' => DB::table('nama_survey')->where('tipe', 'Pre')->count(),
                    'totalSurveyPost' => DB::table('nama_survey')->where('tipe', 'Post')->count(),
                    'totalSurveyor' => DB::table('users')->where('role', 'Surveyor')->count(),
                ];
                return view('pages.dashboard.surveyor', $data);
            } 
        }
    }

    public function editProfileAccount(){
        $data = [
            'user' => User::find(Auth::user()->id),
            'profile' => Profile::select('*', DB::raw('DATE_FORMAT(tanggal_lahir, "%d/%m/%Y") AS tanggal_lahir'))->where('user_id', '=', Auth::user()->id)->orderBy('created_at', 'DESC')->first(),

        ];
        return view('pages.editProfileUser', $data);
    }

    public function updateProfile(Request $request){
        $validator = Validator::make(
            $request->all(),
            [
                'nama_lengkap' => 'required',
                'jenis_kelamin' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'alamat' => 'required',
                'provinsi' => 'required',
                'kabupaten_kota' => 'required',
                'kecamatan' => 'required',
                'desa_kelurahan' => 'required',
                'nomor_hp' => 'required',                
            ],
            [
                'nama_lengkap.required' => 'Nama Lengkap tidak boleh kosong',
                'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong',
                'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong',
                'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh kosong',
                'alamat.required' => 'Alamat tidak boleh kosong',
                'provinsi.required' => 'Provinsi tidak boleh kosong',
                'kabupaten_kota.required' => 'Kabupaten/Kota tidak boleh kosong',
                'kecamatan.required' => 'Kecamatan tidak boleh kosong',
                'desa_kelurahan.required' => 'Desa/Kelurahan tidak boleh kosong',
                'nomor_hp.required' => 'Nomor HP tidak boleh'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }
        
        $data = [
            'user_id' => Auth::user()->id,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => date("Y-m-d", strtotime($request->tanggal_lahir)),
            'alamat' => $request->alamat,
            'provinsi' => $request->provinsi,
            'kabupaten_kota' => $request->kabupaten_kota,
            'kecamatan' => $request->kecamatan,
            'desa_kelurahan' => $request->desa_kelurahan,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
        ];

        $profile = Profile::where('user_id', '=', Auth::user()->id)->first();

        if($profile){
            $profile->update($data);
        } else{
            Profile::create($data);
        }

        // Profile::where('id', $profile->id)->update($data);

        return response()->json(['success' => 'Success']);
    }

    public function updateAccount(Request $request){
        $user = User::find(Auth::user()->id);
        
        $validator = Validator::make(
            $request->all(),
            [
                'username' => ['required', Rule::unique('users')->ignore($user->id)->withoutTrashed()],
                // 'password' => 'required',
            ],
            [
                'username.required' => 'Nama Pengguna tidak boleh kosong',
                'username.unique' => 'Nama Pengguna sudah terdaftar',
                // 'password.required' => 'Kata Sandi tidak boleh kosong',
            ]
        );

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()]);
        }

        if($request->password == ''){
            $password = $user->password;
        } else{
            $password = bcrypt($request->password);
        }

        $data =[
            'username' => $request->username,
            'password' => $password
        ];

        User::where('id', $user->id)->update($data);

        return response()->json(['success' => 'Success']);
    }
}
