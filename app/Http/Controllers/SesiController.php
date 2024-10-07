<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\AUTH;

class SesiController extends Controller
{
    function loginpage()
    {
        return view('indexLoginPage');
    }

    function login(Request $request){
        $request->validate([
            'email' =>'required',
            'password' => 'required'
        ],[
            'email.required' => 'email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        $detaillogin =[

            'email' => $request->email,
            'password' => $request->password,

        ];

        if(Auth::attempt($detaillogin)){
            if(Auth::user()->role == 'dekan'){
                return redirect('dashboard-dekan');
            }
            
            else if(Auth::user()->role == 'mahasiswa'){
                return redirect('dashboard-mahasiswa');
            }
            
            else if(Auth::user()->role == 'akademik'){
                return redirect('dashboard-akademik');
            }
            
            else if(Auth::user()->role == 'dosen'){
                return redirect('dashboard-dosen');
            }
            
            else if(Auth::user()->role == 'kaprodi'){
                return redirect('dashboard-kaprodi');
            }
            
        }else{
            return redirect('')->withErrors('Username dan Password') ->withInput();
        }

    }

}