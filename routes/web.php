<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DekanController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware(["guest"])->group(function () {
    Route::get("/", [SesiController::class,"loginpage"]);
    Route::post("/", [SesiController::class,"login"]);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get("/dashboard-dekan", [DekanController::class,"dashboard_dekan"]);
    Route::get("/dashboard-mahasiswa", [MahasiswaController::class,"dashboard_mahasiswa"]);
    Route::get("/dashboard-kaprodi", [KaprodiController::class,"dashboard_kaprodi"]);
    Route::get("/dashboard-dosen", [DosenController::class,"dashboard_dosen"]);
    Route::get("/dashboard-akademik", [AkademikController::class,"dashboard_akademik"]);
    Route::get("/registrasimhs", [MahasiswaController::class,"registrasi_mahasiswa"]);
    Route::get("/perubahannilaiakdmk", [AkademikController::class,"perubahannilai_akademik"]);
});





