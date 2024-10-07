<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suppor\Facades\Auth;

class KaprodiController extends Controller
{
    function dashboard_kaprodi(){
        return view('kaprodi/indexDashboardKaprodi');
    }
}