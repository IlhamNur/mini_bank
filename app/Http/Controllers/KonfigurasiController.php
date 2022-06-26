<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use Illuminate\Http\Request;

class KonfigurasiController extends Controller
{
    public function show(Konfigurasi $konfigurasi)
    {
        return view('konfigurasi.show',compact('konfigurasi'));
    } 

// Show the form for editing the specified resource.

// @param  \App\konfigurasi  $konfigurasi
// @return \Illuminate\Http\Response

    public function edit(Konfigurasi $konfigurasi)
    {
        return view('dashboard.konfigurasi',compact('konfigurasis'), [
        ]);
    }

    public function update(Request $request, Konfigurasi $konfigurasi)
    {
        $validatedData = $request->validate([
            'value' => 'required',
        ]);

        Konfigurasi::where('id', $konfigurasi->id)->update($validatedData);

        return redirect()->route('dashboard.index')
        ->with('success','Data value telah diubah.');
    }
}
