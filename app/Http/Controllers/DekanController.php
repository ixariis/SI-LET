<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DekanController extends Controller
{
    function dashboard_dekan(){
        $user = Auth::user();
        $dekan = Dekan::where('email',$user->email)->first();
        return view('dekan/indexDashboardDekan')->with('data',$dekan);
    }
    // function penyetujuanruangkuliah_dekan(){
    //     return view('dekan/indexPenyetujuanRuangKuliah');
    // }
    function penyetujuanjadwalkuliah_dekan(){
        return view('dekan/indexPenyetujuanJadwalKuliah');
    }

    public function showRuanganApproval()
    {
        // Mengambil semua ruangan dengan status 'Pending'
        $ruangans = Ruang::where('status', 'Pending')->get();
        // dd($ruangans);
        
        return view('dekan.indexPenyetujuanRuangKuliah', compact('ruangans'));
    }

    public function updateRuanganStatus(Request $request, $id)
    {
        // Menemukan ruangan berdasarkan ID
        $ruangan = Ruang::findOrFail($id);
        
        // Memperbarui status menjadi 'Disetujui'
        $ruangan->status = 'Disetujui';
        $ruangan->save();

        return redirect()->route('dekan.penyetujuanruangkuliah')->with('success', 'Ruangan telah disetujui!');
    }

    public function updateRuanganStatusReject(Request $request, $id)
    {
        // Menemukan ruangan berdasarkan ID
        $ruangan = Ruang::findOrFail($id);

        // Memperbarui status menjadi 'Ditolak'
        $ruangan->status = 'Ditolak';
        $ruangan->save();

        return redirect()->route('dekan.penyetujuanruangkuliah')->with('error', 'Ruangan telah ditolak!');
    }
}