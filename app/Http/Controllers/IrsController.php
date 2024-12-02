<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class IrsController extends Controller
{
    function lihat_irs(){
        return view ('mahasiswa/indexlihatIRSMahasiswa');
    }
}
