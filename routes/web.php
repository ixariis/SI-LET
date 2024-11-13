<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DekanController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Routing\RouteUri;
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
    Route::get("/penyetujuanruangkuliah-dekan", [DekanController::class, "penyetujuanruangkuliah_dekan"]);
    Route::get("/penyetujuanjadwalkuliah-dekan", [DekanController::class, "penyetujuanjadwalkuliah_dekan"]);
    
    //Kaprodi
    Route::get("/dashboard-kaprodi", [KaprodiController::class,"dashboard_kaprodi"]);
    Route::get("/penyusunanjadwalkuliah-kaprodi", [KaprodiController::class, "penyusunanjadwalkuliah_kaprodi"]);
    Route::get("/penyusunanjadwalkuliah-kaprodi2", [KaprodiController::class, "penyusunanjadwalkuliah_kaprodi2"]);
    Route::get("/penyusunanjadwalkuliah-kaprodi3", [KaprodiController::class, "penyusunanjadwalkuliah_kaprodi3"]);
    Route::get("/penyusunanjadwalkuliah-kaprodi4", [KaprodiController::class, "penyusunanjadwalkuliah_kaprodi4"]);
    Route::get("/verifikasiIRS-kaprodi", [KaprodiController::class, "verifikasiIRS_kaprodi"]);
    Route::get("/verifikasiIRS-kaprodi2", [KaprodiController::class, "verifikasiIRS_kaprodi2"]);

    //Dosen
    Route::get("/dashboard-dosen", [DosenController::class,"dashboard_dosen"]);
    Route::get("/perkembanganmahasiswa-dosen", [DosenController::class,"statusperkembanganmhs_dosen"]);
    Route::get("/perkembanganmahasiswa-dosen2", [DosenController::class, "statusperkembanganmhs_dosen2"]);
    Route::get("/perkembanganmahasiswa-dosen3", [DosenController::class, "statusperkembanganmhs_dosen3"]);
    Route::get("/perkembanganmahasiswa-dosen4", [DosenController::class, "statusperkembanganmhs_dosen4"]);
    Route::get("/verifikasiIRS-dosen", [DosenController::class, "verifikasiIRS_dosen"]);
    
    //Akademik
    Route::get("/dashboard-akademik", [AkademikController::class,"dashboard_akademik"]);
    Route::get("/perubahannilai-akademik", [AkademikController::class,"perubahannilai_akademik"]);
    Route::get("/penentuanruangkuliah-akademik", [AkademikController::class, "penentuanruangkuliah_akademik"]);
    Route::get("/perubahanjadwalkuliah-akademik", [AkademikController::class, "perubahanjadwalkuliah_akademik"]);

    //logout
    Route::get("/logout", [SesiController::class, "logout"]) -> name('logout');
    
});