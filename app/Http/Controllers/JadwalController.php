<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Ruang;
use App\Models\Jadwal;
use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::with(['mataKuliah', 'dosen'])->get();
        $schedules = DB::table('jadwals')
                    ->join('mata_kuliahs', 'jadwals.mata_kuliah_id', '=', 'mata_kuliahs.id')
                    ->select('jadwals.*', 'mata_kuliahs.nama_mk')
                    ->get();
        return view('kaprodi.IndexPenyusunanJadwalKuliah2', compact('jadwals'));
    }

    public function create()
    {
        $dosens = Dosen::all();
        $ruangs = Ruang::all();
        $mataKuliahs = MataKuliah::all(); // Mengambil data mata kuliah

        return view('kalendar.create', compact('dosens', 'ruangs', 'mataKuliahs'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'dosen_id'       => 'required|exists:dosens,id',
            'hari'           => 'required|string|max:50',
            'ruangan'        => 'required|string|max:10',
            'kuota_kelas'    => 'required|integer',
            'sks'            => 'required|integer',
            'sifat'          => 'required|string|max:15',
            'kelas'          => 'required|string:1',
            'semester'       => 'required|integer',
            'jam_mulai'      => 'required|date_format:H:i',
            'jam_selesai'    => 'required|date_format:H:i|after:jam_mulai',
            'pengampu_2'     => 'nullable|string|max:50',
            'pengampu_3'     => 'nullable|string|max:50',
            'status'         => 'string|default:Pending',
        ]);

        // Buat jadwal baru
        Jadwal::create($validated);

        // Perbarui status keterangan ruangan menjadi "tidak tersedia"
        $ruang = Ruang::where('noruang', $validated['ruangan'])->first();
        if ($ruang) {
            $ruang->update(['keterangan' => 'Tidak Tersedia']);
        }


        return redirect()->route('kaprodi.penyusunanjadwalkuliah2')->with('success', 'Jadwal berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $mataKuliahs = MataKuliah::all();
        $dosens = Dosen::all();
        $ruangs = Ruang::all();

        return view('kalendar.edit', compact('jadwal', 'mataKuliahs', 'dosens', 'ruangs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'mata_kuliah_id' => 'required',
            'dosen_id' => 'required',
            'ruangan' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'kelas' => 'required',
            'kuota_kelas' => 'required|integer',
            'sks' => 'required|integer',
            'sifat' => 'required',
            'semester' => 'required|integer',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());

        return redirect()->route('kaprodi.penyusunanjadwalkuliah2')->with('success', 'Jadwal berhasil diperbarui!');
    }

    public function destroy($id)
    {

        $jadwal = Jadwal::findOrFail($id);

        // Kembalikan status ruangan menjadi "Tersedia"
        $ruang = Ruang::where('kode', $jadwal->ruangan)->first();
        if ($ruang) {
            $ruang->update(['keterangan' => 'Tersedia']);
        }

        $jadwal->delete();

        return redirect()->route('kaprodi.penyusunanjadwalkuliah2')->with('success', 'Jadwal berhasil dihapus.');
    }





}
