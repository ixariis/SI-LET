<?php

namespace App\Http\Controllers;

use App\Models\Kaprodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaprodiController extends Controller
{
    function dashboard_kaprodi(){
        $user = Auth::user();
        $kaprodi = Kaprodi::where('email',$user->email)->first();

        return view('kaprodi/indexDashboardKaprodi')->with('data',$kaprodi);
    }
    function penyusunanjadwalkuliah_kaprodi(){
        return view('kaprodi/indexPenyusunanJadwalKuliah');
    }
    function penyusunanjadwalkuliah_kaprodi2(){
        return view('kaprodi/indexPenyusunanJadwalKuliah2');
    }
    function penyusunanjadwalkuliah_kaprodi3(){
        return view('kaprodi/indexPenyusunanJadwalKuliah3');
    }
    function penyusunanjadwalkuliah_kaprodi4(){
        return view('kaprodi/indexPenyusunanJadwalKuliah4');
    }
    function verifikasiIRS_kaprodi(){
        return view('kaprodi/indexVerifikasiIRSKaprodi');
    }
    function verifikasiIRS_kaprodi2(){
        return view('kaprodi/indexVerifikasiIRSKaprodi2');
    }
}