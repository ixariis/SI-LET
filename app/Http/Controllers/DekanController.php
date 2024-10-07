<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suppor\Facades\Auth;

class DekanController extends Controller
{
    function dashboard_dekan(){
        return view('dekan/indexDashboardDekan');
    }
}