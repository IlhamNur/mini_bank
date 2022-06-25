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
            'hp' => 'required|numeric',
            'mother' => 'required|string|max:255',
            'berkas_bukti' => 'required|file|image',
        ]);

        $path = Storage::disk('public')->putFile('berkas_bukti', $request->file('berkas_bukti'));

        $sign_ups = new SignUp;
        $sign_ups->name = $request->name;
        $sign_ups->address = $request->address;
        $sign_ups->password = $request->password;
        $sign_ups->email = $request->email;
        $sign_ups->hp = $request->hp;
        $sign_ups->mother = $request->mother;
        $sign_ups->berkas_bukti = $path;
        $sign_ups->save();

        return redirect()->route('signup')
        ->with('success','Data Anda telah Kami terima. Tunggu konfirmasi yang akan Kami kirimkan lewat Email');
    }
}
