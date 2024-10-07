<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suppor\Facades\Auth;

class MahasiswaController extends Controller
{
    function dashboard_mahasiswa(){
        
        return view('mahasiswa/indexDashboardMahasiswa');
    }
}