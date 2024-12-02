<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;

use Illuminate\Container\Attributes\Auth as AttributesAuth;

class SesiController extends Controller
{
    // Fungsi untuk menampilkan halaman login
    function loginpage()
    {
        // Jika sudah login, arahkan ke dashboard sesuai role
        if (Auth::check()) {
            return redirect()->route('login'); // Ganti 'home' dengan route yang sesuai
        }
        return view('indexLoginPage');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
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
            return redirect('loginpage')->withErrors('Username dan Password') ->withInput();
        }

    }

    function logout(){
        Session::flush();
        Auth::logout();

        // Redirect ke halaman login setelah logout
        return redirect()->route('loginpage');
    }
}