<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    function dashboard_dosen (){

        $user = Auth::user();


        $dosen = Dosen::where('email',$user->email)->first();
        
        return view ('dosen/indexDashboardDosen')->with('data',$dosen);
    }
    function statusperkembanganmhs_dosen(){
        return view ('dosen/indexPerkembanganMahasiswa');
    }
    function statusperkembanganmhs_dosen2(){
        return view ('dosen/indexPerkembanganMahasiswa2');
    }
    function statusperkembanganmhs_dosen3(){
        return view ('dosen/indexPerkembanganMahasiswa3');
    }
    function statusperkembanganmhs_dosen4(){
        return view ('dosen/indexPerkembanganMahasiswa4');
    }
    function verifikasiIRSpermintaan_dosen(){
        return view('dosen/indexVerifikasiIRSMintaDosen');
    }
    function verifikasiIRSdisahkan_dosen(){
        return view('dosen/indexVerifikasIRSDisahkanDosen');
    }
    function verifikasiIRSditolak_dosen(){
        return view('dosen/indexVerifikasiIRSDitolakDosen');
    }
}