<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suppor\Facades\Auth;

class DekanController extends Controller
{
    function dashboard_dekan(){
        return view('dekan/indexDashboardDekan');
    }
    function penyetujuanruangkuliah_dekan(){
        return view('dekan/indexPenyetujuanRuangKuliah');
    }
    function penyetujuanjadwalkuliah_dekan(){
        return view('dekan/indexPenyetujuanJadwalKuliah');
    }
}