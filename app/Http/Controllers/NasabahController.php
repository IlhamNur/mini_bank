<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use App\Models\Konfigurasi;
use App\Models\Rekening;
use App\Models\Nasabah;
use Illuminate\Http\Request;

class RegristasiNasabahController extends Controller
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
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'nik' => 'required|numeric|min:16|max:16',
            'jenis_kelamin' => 'required',
            'nomor_rekening' => 'required|numeric|min:10|max:10'
        ]);

        $nasabah = new Nasabah;
        $nasabah->name = $request->name;
        $nasabah->address = $request->address;
        $nasabah->nik = $request->nik;
        $nasabah->jenis_kelamin = $request->jenis_kelamin;
        $nasabah->save();

        if ($request->has('nomor_rekening')) {
            foreach ($request['nomor_rekening'] as $nomorRekening) {
                Rekening::create([
                    'id_nasabah' => $nasabah->id
                ]);
            }
        }

        return redirect()->route('dashboard.regristasiNasabah')
        ->with('success','Data nasabah telah ditambahkan.');
    }
}
