<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\SurveyorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\masterData\UserController;
use App\Http\Controllers\masterSoal\SoalController;
use App\Http\Controllers\masterData\ProfileController;
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

Route::get('/', [AuthController::class, 'index'])->name('login');

Route::post('/cekLogin', [AuthController::class, 'cekLogin']);
Route::get('/edit-profile-account', [DashboardController::class, 'editProfileAccount'])->name('editProfileAccount');
Route::post('/update-account', [DashboardController::class, 'updateAccount'])->name('updateAccount');
Route::post('/update-profile', [DashboardController::class, 'updateProfile'])->name('updateProfile');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/lengkapi-profile', function(){
    return view('pages.lengkapiProfile');
})->name('lengkapiProfile');



// Route::get('/', function () {
//     return view('starterTemplate');
// });

Route::resource('/user', UserController::class);
Route::resource('/profile', ProfileController::class);
Route::resource('/namaSurvey', NamaSurveyController::class);
Route::resource("/kategoriSoal/{namaSurvey}", KategoriSoalController::class)->parameters([
    '{namaSurvey}' => 'kategoriSoal'
]);

Route::resource("/responden", RespondenController::class)->parameters([
    'responden' => 'responden'
]);



Route::resource("/soal/{kategoriSoal}", SoalController::class)->parameters([
    '{kategoriSoal}' => 'soal'
]);

// Pengisian survey yang dilakukan oleh surveyor
Route::get('/survey/pilih-responden', [RespondenController::class, 'pilihResponden'])->name('pilihResponden');
