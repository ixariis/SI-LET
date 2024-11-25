<?php

namespace App\Http\Controllers;

use App\Models\Dekan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DekanController extends Controller
{
    function dashboard_dekan(){
        $user = Auth::user();
        $dekan = Dekan::where('email',$user->email)->first();
        return view('dekan/indexDashboardDekan')->with('data',$dekan);
    }
    function penyetujuanruangkuliah_dekan(){
        return view('dekan/indexPenyetujuanRuangKuliah');
    }
    function penyetujuanjadwalkuliah_dekan(){
        return view('dekan/indexPenyetujuanJadwalKuliah');
    }
}