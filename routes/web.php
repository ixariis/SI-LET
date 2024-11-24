<?php
use App\Http\Controllers\IrsController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DekanController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Irstest;
use Illuminate\Routing\RouteUri;
use Illuminate\Routing\RouteUrlGenerator;

Route::middleware(["guest"])->group(function () {
    Route::get("/", [SesiController::class,"loginpage"]) -> name('loginpage');
    Route::post("/", [SesiController::class,"login"]) -> name('login');
});

Route::group(['middleware' => 'auth'], function () {
    //Mahasiswa
    Route::get("/dashboard-mahasiswa", [MahasiswaController::class,"dashboard_mahasiswa"]) -> name('mahasiswa.dashboard');
    Route::get("/registrasi-mahasiswa", [MahasiswaController::class,"registrasi_mahasiswa"]) -> name('mahasiswa.registrasi');
    Route::get('/pembayaranUKT-mahasiswa', [MahasiswaController::class, "Rpembayaran_mahasiswa"]);
    Route::get("/akademik-mahasiswa", [MahasiswaController::class, "akademik_mahasiswa"]) -> name('mahasiswa.akademik');
    Route::get('/lihatIRS-mahasiswa', [IrsController::class, "lihat_irs"]) -> name('mahasiswa.lihatIRS');
    Route::get('/lihatKHS-mahasiswa', [MahasiswaController::class, "lihatKHS_mahasiswa"]) -> name('mahasiswa.lihatKHS');
    Route::get('/buatIRS-mahasiswa', [MahasiswaController::class, "buatIRS_mahasiswa"]) -> name('mahasiswa.buatIRS');
    Route::get("/jadwalkuliah-mahasiswa", [MahasiswaController::class, "jadwalkuliah_mahasiswa"]) -> name('mahasiswa.jadwalkuliah');
    Route::get('/transkrip-mahasiswa', [MahasiswaController::class, "transkrip_mahasiswa"]);

    
    //Dekan
    Route::get("/dashboard-dekan", [DekanController::class,"dashboard_dekan"]) -> name('dekan.dashboard');
    Route::get("/penyetujuanruangkuliah-dekan", [DekanController::class, "penyetujuanruangkuliah_dekan"]) -> name('dekan.penyetujuanruangkuliah');
    Route::get("/penyetujuanjadwalkuliah-dekan", [DekanController::class, "penyetujuanjadwalkuliah_dekan"]) -> name('dekan.penyetujuanjadwalkuliah');
    
    //Kaprodi
    Route::get("/dashboard-kaprodi", [KaprodiController::class,"dashboard_kaprodi"]) -> name('kaprodi.dashboard');
    Route::get("/penyusunanjadwalkuliah-kaprodi", [KaprodiController::class, "penyusunanjadwalkuliah_kaprodi"]) -> name('kaprodi.penyusunanjadwalkuliah');
    Route::get("/penyusunanjadwalkuliah-kaprodi2", [KaprodiController::class, "penyusunanjadwalkuliah_kaprodi2"]) -> name('kaprodi.penyusunanjadwalkuliah2');
    Route::get("/penyusunanjadwalkuliah-kaprodi3", [KaprodiController::class, "penyusunanjadwalkuliah_kaprodi3"]) -> name('kaprodi.penyusunanjadwalkuliah3');
    Route::get("/penyusunanjadwalkuliah-kaprodi4", [KaprodiController::class, "penyusunanjadwalkuliah_kaprodi4"]) -> name('kaprodi.penyusunanjadwalkuliah3');
    Route::get("/verifikasiIRS-kaprodi", [KaprodiController::class, "verifikasiIRS_kaprodi"]);
    Route::get("/verifikasiIRS-kaprodi2", [KaprodiController::class, "verifikasiIRS_kaprodi2"]);

    //Dosen
    Route::get("/dashboard-dosen", [DosenController::class,"dashboard_dosen"]) -> name('dosen.dashboard');
    Route::get("/perkembanganmahasiswa-dosen", [DosenController::class,"statusperkembanganmhs_dosen"]) -> name('dosen.statusperkembangan');
    Route::get("/perkembanganmahasiswa-dosen2", [DosenController::class, "statusperkembanganmhs_dosen2"]);
    Route::get("/perkembanganmahasiswa-dosen3", [DosenController::class, "statusperkembanganmhs_dosen3"]);
    Route::get("/perkembanganmahasiswa-dosen4", [DosenController::class, "statusperkembanganmhs_dosen4"]);
    Route::get("/verifikasiIRSpermintaan-dosen", [DosenController::class, "verifikasiIRSpermintaan_dosen"]) -> name('dosen.verifikasiIRS');
    Route::get("/verifikasiIRSSah-dosen", [DosenController::class, "verifikasiIRSdisahkan_dosen"]);
    Route::get("/verifikasiIRSditolak-dosen", [DosenController::class, "verifikasiIRSditolak_dosen"]);


    //Akademik
    Route::get("/dashboard-akademik", [AkademikController::class,"dashboard_akademik"]) -> name('akademik.dashboard');
    Route::get("/perubahannilai-akademik", [AkademikController::class,"perubahannilai_akademik"]) -> name('akademik.perubahannilai');
    Route::get("/penentuanruangkuliah-akademik", [AkademikController::class, "penentuanruangkuliah_akademik"]) -> name('akademik.penentuanruangkuliah');
    Route::get("/perubahanjadwalkuliah-akademik", [AkademikController::class, "perubahanjadwalkuliah_akademik"]) -> name('akademik.perubahanjadwalkuliah');

    //logout
    Route::get("/logout", [SesiController::class, "logout"]) -> name('logout');
    
});