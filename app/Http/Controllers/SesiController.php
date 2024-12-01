<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class SesiController extends Controller
{
    // Fungsi untuk menampilkan halaman login
    function loginpage()
    {
        // Jika sudah login, arahkan ke dashboard sesuai role
        if (Auth::check()) {
            $user = Auth::user();
            // Redireksi sesuai dengan role pengguna
            if ($user->role == 'dekan') {
                return redirect()->route('dekan.dashboard');
            } elseif ($user->role == 'mahasiswa') {
                return redirect()->route('mahasiswa.dashboard');
            } elseif ($user->role == 'akademik') {
                return redirect()->route('akademik.dashboard');
            } elseif ($user->role == 'dosen') {
                return redirect()->route('dosen.dashboard');
            } elseif ($user->role == 'kaprodi') {
                return redirect()->route('kaprodi.dashboard');
            }
        }
        // Jika belum login, tampilkan halaman login
        return view('indexLoginPage');
    }

    // Fungsi untuk menangani proses login
    function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        // Data login
        $detaillogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // Cek login dengan kredensial yang diberikan
        if (Auth::attempt($detaillogin)) {
            // Jika login berhasil, arahkan pengguna sesuai dengan role
            $user = Auth::user();
            Log::info('Login successful', ['email' => $request->email]);

            // Redireksi sesuai role
            if ($user->role == 'dekan') {
                return redirect()->route('dekan.dashboard');
            } elseif ($user->role == 'mahasiswa') {
                return redirect()->route('mahasiswa.dashboard');
            } elseif ($user->role == 'akademik') {
                return redirect()->route('akademik.dashboard');
            } elseif ($user->role == 'dosen') {
                return redirect()->route('dosen.dashboard');
            } elseif ($user->role == 'kaprodi') {
                return redirect()->route('kaprodi.dashboard');
            }
        } else {
            // Jika login gagal, tampilkan pesan error dan kembali ke halaman login
            Log::warning('Login failed', ['email' => $request->email]);
            return redirect()->route('loginpage')->withErrors('Username dan Password salah')->withInput();
        }
    }

    // Fungsi untuk logout
    function logout()
    {
        // Menghapus session dan logout pengguna
        Session::flush();
        Auth::logout();

        // Redirect ke halaman login setelah logout
        return redirect()->route('loginpage');
    }
}