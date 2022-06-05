<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\SurveyorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\survey\SurveyController;
use App\Http\Controllers\masterData\UserController;
use App\Http\Controllers\masterSoal\SoalController;
use App\Http\Controllers\masterData\ProfileController;
use App\Http\Controllers\survey\ExportSurveyController;
use App\Http\Controllers\survey\ImportSurveyController;
use App\Http\Controllers\masterData\RespondenController;
use App\Http\Controllers\masterSoal\NamaSurveyController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\masterSoal\KategoriSoalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/landingPage');
});


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/cekLogin', [AuthController::class, 'cekLogin']);

// Role Admin dan Surveyor
Route::group(['middleware' => ['auth']], function () {
    Route::get('/edit-profile-account', [DashboardController::class, 'editProfileAccount'])->name('editProfileAccount');
    Route::post('/update-account', [DashboardController::class, 'updateAccount'])->name('updateAccount');
    Route::post('/update-profile', [DashboardController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/statistik', [DashboardController::class, 'statistikSurvey'])->name('dashboardStatistik');
    Route::get('/dashboard/survey-belum-selesai', [DashboardController::class, 'surveyBelumSelesai'])->name('surveyBelumSelesai');


    Route::get('/lengkapi-profile', function () {
        return view('pages.lengkapiProfile');
    })->name('lengkapiProfile');

    Route::get('/exportSurvey', [ExportSurveyController::class, 'index']);
    Route::post('/exportSurvey/exportExcel', [ExportSurveyController::class, 'exportSurvey']);
    Route::get('/importSurvey', [ImportSurveyController::class, 'index']);
    Route::post('/importSurvey/store', [ImportSurveyController::class, 'store']);
    Route::get('/survey/lihat-survey/{survey}', [SurveyController::class, 'lihatSurvey']);
    Route::post('/survey/cek-pilih-responden', [SurveyController::class, 'cekPilihResponden']);
    Route::get('/survey/daftar-survey', [SurveyController::class, 'index']);
    Route::delete('/survey/lihat-survey/{survey}', [SurveyController::class, 'delete']);
});




// Role Admin
Route::group(['middleware' => ['admin']], function () {
    Route::resource('/user', UserController::class);
    Route::resource('/profile', ProfileController::class);
    Route::resource('/responden', RespondenController::class)->parameters([
        'responden' => 'responden'
    ]);

    Route::resource('/namaSurvey', NamaSurveyController::class);
    Route::resource("/kategoriSoal/{namaSurvey}", KategoriSoalController::class)->parameters([
        '{namaSurvey}' => 'kategoriSoal'
    ]);
    Route::resource("/soal/{kategoriSoal}", SoalController::class)->parameters([
        '{kategoriSoal}' => 'soal'
    ]);
});


// Role Surveyor
Route::group(['middleware' => ['surveyor']], function () {
    Route::post('/survey/tambah-responden', [RespondenController::class, 'insertResponden'])->name('tambahResponden');
    Route::get('/survey/pilih-responden', [SurveyController::class, 'pilihResponden'])->name('pilihResponden');
    Route::get('/survey/pertanyaan-survey/{survey}/{kategori}', [SurveyController::class, 'pertanyaanSurvey']);
    Route::post('/survey/cek-jawaban/{survey}', [SurveyController::class, 'cekJawabanSurvey']);
});


// Wilayah Indonesia
Route::get('/provinsi', [ListController::class, 'listProvinsi'])->name('listProvinsi');
Route::get('/kabupaten-kota', [ListController::class, 'listKabupatenKota'])->name('listKabupatenKota');
Route::get('/kecamatan', [ListController::class, 'listKecamatan'])->name('listKecamatan');
Route::get('/desa-kelurahan', [ListController::class, 'listDesaKelurahan'])->name('listDesaKelurahan');

Route::post('/namaSurvey/{namaSurvey}/duplikat', [NamaSurveyController::class, 'duplikat']);
