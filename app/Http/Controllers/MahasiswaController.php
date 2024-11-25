<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MahasiswaController extends Controller
{
    function dashboard_mahasiswa(){

        $user=Auth::user();
       

      
        $mhs= Mahasiswa::where('email',$user->email)->first();
    

        return view('mahasiswa/indexDashboardMahasiswa')->with('data',$mhs);
    }
    function registrasi_mahasiswa(){
        return view('mahasiswa/indexRegistrasiMahasiswa');
    }
    function akademik_mahasiswa(){
        return view('mahasiswa/indexAkademikMahasiswa');
    }
    function Rpembayaran_mahasiswa(){
        return view('mahasiswa/indexRegistrasiPembayaranMahasiswa');
    }
    function lihatIRS_mahasiswa(){
        return view('mahasiswa/indexlihatIRSMahasiswa');
    }
    function lihatKHS_mahasiswa(){
        return view('mahasiswa/indexlihatKHSMahasiswa');
    }
    function buatIRS_mahasiswa(){
        return view('mahasiswa/indexbuatIRSMahasiswa');
    }

    function jadwalkuliah_mahasiswa(){
        return view('mahasiswa/indexJadwalKuliahMahasiswa');
    }
    function transkrip_mahasiswa(){
        return view('mahasiswa/indexTranskripMahasiswa');
    }
}