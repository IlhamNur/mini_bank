<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Rekening;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function create()
    {
        $transaksis = Transaksi::get();
        $rekenings = Rekening::get();
        $users = User::get();
        return view('dashboard.transaksi', compact('transaksis', 'rekenings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tgl_transaksi' => 'required|stringdate_format:Y-m-d',
            'jenis_transaksi' => 'required',
            'nominal' => 'required|numeric|min:16|max:16',
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
