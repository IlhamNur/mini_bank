<?php

namespace App\Http\Controllers;


use App\Models\SignUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SignUpController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'nik' => 'required|numeric|min:16|max:16',
            'jenis_kelamin' => 'required',
            'berkas_bukti' => 'required|file|image',
        ]);

        $path = Storage::disk('public')->putFile('berkas_bukti', $request->file('berkas_bukti'));

        $sign_ups = new SignUp;
        $sign_ups->name = $request->name;
        $sign_ups->address = $request->address;
        $sign_ups->password = $request->password;
        $sign_ups->email = $request->email;
        $sign_ups->nik = $request->nik;
        $sign_ups->jenis_kelamin = $request->jenis_kelamin;
        $sign_ups->berkas_bukti = $path;
        $sign_ups->save();

        return redirect()->route('signup')
        ->with('success','Data Anda telah Kami terima. Tunggu konfirmasi yang akan Kami kirimkan lewat Email');
    }
}
