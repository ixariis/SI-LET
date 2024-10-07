<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Suppor\Facades\Auth;

class AkademikController extends Controller
{
    function dashboard_akademik(){
        return view ('akademik/indexDashboardAkademik');
    }
}
