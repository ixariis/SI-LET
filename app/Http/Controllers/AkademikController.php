<?php

namespace App\Http\Controllers;

use App\Models\Akademik;
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
        return view('akademik/indexPenentuanRuangKuliah');
    }
    function perubahanjadwalkuliah_akademik(){
        return view('akademik/indexPerubahanJadwalKuliah');
    }
}
