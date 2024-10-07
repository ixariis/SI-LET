<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suppor\Facades\Auth;

class DosenController extends Controller
{
    function dashboard_dosen (){
        return view ('dosen/indexDashboardDosen');
    }
}