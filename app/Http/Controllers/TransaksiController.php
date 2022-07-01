<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Nasabah;
use App\Models\Rekening;
use App\Models\Saldo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{   
    public function debet(Request $request, $id)
    {
        $request->validate([
            'nominal1' => 'required|numeric|min:50000',
        ]);

        $rekening = Rekening::where('id_nasabah', $id)->first();
        $saldo = Saldo::where('id_rekening', $rekening->id)->first();
        $transaksi = new Transaksi;
        $transaksi->tgl_transaksi = Carbon::now()->format('Y-m-d H:i:s');
        $transaksi->jenis_transaksi = 'debet';
        $transaksi->nominal = $request->nominal1;
        $transaksi->id_rekening = $rekening->id;
        $transaksi->save();
        $saldo->saldo += $request->nominal1;
        $saldo->save();

        return redirect()->route('dashboard.transaksi')
        ->with('success','Transaksi debet telah ditambahkan.');
    }

    public function kredit(Request $request, $id)
    {
        $request->validate([
            'nominal2' => 'required|numeric|min:50000',
        ]);

        $rekening = Rekening::where('id_nasabah', $id)->first();
        $saldo = Saldo::where('id_rekening', $rekening->id)->first();
        $transaksi = new Transaksi;
        $transaksi->tgl_transaksi = Carbon::now()->format('Y-m-d H:i:s');
        $transaksi->jenis_transaksi = 'kredit';
        $transaksi->nominal = $request->nominal2;
        $transaksi->id_rekening = $rekening->id;
        $transaksi->save();
        $saldo->saldo -= $request->nominal2;
        $saldo->save();

        return redirect()->route('dashboard.transaksi')
        ->with('success','Transaksi kredit telah ditambahkan.');
    }
}
