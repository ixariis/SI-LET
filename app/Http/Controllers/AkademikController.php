<?php

namespace App\Http\Controllers;

use App\Models\Akademik;
use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkademikController extends Controller
{
    function dashboard_akademik(){

        $user = Auth::user();
        $akademik = Akademik::where('email',$user->email)->first();
        return view ('akademik/indexDashboardAkademik')->with('data',$akademik);
    }
    function perubahannilai_akademik(){

        
        return view ('akademik/indexPerubahanNilaiAkademik');
    }
    function penentuanruangkuliah_akademik(){

        $ruang = Ruang::all();
        return view('akademik/indexPenentuanRuangKuliah')->with('data',$ruang);
    }
    function perubahanjadwalkuliah_akademik(){
        return view('akademik/indexPerubahanJadwalKuliah');
    }
}
