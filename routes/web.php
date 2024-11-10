<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DekanController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Routing\RouteUrlGenerator;

Route::middleware(["guest"])->group(function () {
    Route::get("/", [SesiController::class,"loginpage"]) -> name('loginpage');
    Route::post("/", [SesiController::class,"login"]) -> name('login');
});

Route::group(['middleware' => 'auth'], function () {
    //Mahasiswa
    Route::get("/dashboard-mahasiswa", [MahasiswaController::class,"dashboard_mahasiswa"]);
    Route::get("/registrasi-mahasiswa", [MahasiswaController::class,"registrasi_mahasiswa"]) -> name('mahasiswa.registrasi');
    Route::get('/pembayaranUKT-mahasiswa', [MahasiswaController::class, "Rpembayaran_mahasiswa"]);
    Route::get("/akademik-mahasiswa", [MahasiswaController::class, "akademik_mahasiswa"]) -> name('mahasiswa.akademik');
    Route::get('/lihatIRS-mahasiswa', [MahasiswaController::class, "lihatIRS_mahasiswa"]) -> name('mahasiswa.lihatIRS');
    Route::get('/lihatKHS-mahasiswa', [MahasiswaController::class, "lihatKHS_mahasiswa"]) -> name('mahasiswa.lihatKHS');
    Route::get('/buatIRS-mahasiswa', [MahasiswaController::class, "buatIRS_mahasiswa"]) -> name('mahasiswa.buatIRS');
    Route::get("/jadwalkuliah-mahasiswa", [MahasiswaController::class, "jadwalkuliah_mahasiswa"]) -> name('mahasiswa.jadwalkuliah');

    
    //Dekan
    Route::get("/dashboard-dekan", [DekanController::class,"dashboard_dekan"]);
    
    
    //Kaprodi
    Route::get("/dashboard-kaprodi", [KaprodiController::class,"dashboard_kaprodi"]);
    
    
    //Dosen
    Route::get("/dashboard-dosen", [DosenController::class,"dashboard_dosen"]);
    
    
    
    //Akademik
    Route::get("/dashboard-akademik", [AkademikController::class,"dashboard_akademik"]);
    Route::get("/perubahannilai-akademik", [AkademikController::class,"perubahannilai_akademik"]);

    //logout
    Route::get("/logout", [SesiController::class, "logout"]) -> name('logout');
    
});