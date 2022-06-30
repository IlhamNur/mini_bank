<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use App\Models\Konfigurasi;
use App\Models\Rekening;
use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{

    public function create()
    {
        $sign_ups = SignUp::get();
        $nasabahs = Nasabah::get();
        $rekenings = Rekening::get();
        $users = User::get();
        return view('dashboard.regristasiNasabah', compact('sign_ups', 'nasabahs', 'rekenings', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'nik' => 'required|numeric|min:15',
            'jenis_kelamin' => 'required',
            'nomor_rekening' => 'required|min:12'
        ]);

        $nasabah = new Nasabah;
        $rekening = new Rekening;
        $nasabah->nama = $request->nama;
        $nasabah->alamat = $request->alamat;
        $nasabah->nik = $request->nik;
        $nasabah->jenis_kelamin = $request->jenis_kelamin;
        $nasabah->save();

        $rekening->nomor_rekening = $request->nomor_rekening;
        $rekening->id_nasabah = $nasabah->id;
        $rekening->save();

        return redirect()->route('dashboard.registrasi')
        ->with('success','Data nasabah telah ditambahkan.');
    }
}
