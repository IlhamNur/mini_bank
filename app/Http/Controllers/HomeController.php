<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use App\Models\Konfigurasi;
use App\Models\Rekening;
use App\Models\Nasabah;
use App\Models\Transaksi;
use App\Models\Saldo;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {   
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        return view('index', compact('names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'Home'
        ]);
    }

    public function about()
    {   
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        return view('about', compact('names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'About Us'
        ]);
    }

    public function ceksaldo()
    {   
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        return view('ceksaldo', compact('names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'Cek Saldo'
        ]);
    }

    public function gantipin()
    {   
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        return view('gantipin', compact('names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'Ganti Pin'
        ]);
    }

    public function services()
    {   
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        return view('services', compact('names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'Services'
        ]);
    }

    public function transfer()
    {
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        return view('transfer', compact('names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'Transfer'
        ]);
    }

    public function signup()
    {   
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        $sign_ups = SignUp::get();
        return view('signupform', compact('sign_ups', 'names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'Sign Up'
        ]);
    }

    public function dashboard()
    {
        $konfigurasis = Konfigurasi::get();
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        return view('dashboard.index', compact('names', 'alamats', 'telps', 'was', 'logos', 'emails', 'konfigurasis'), [
            'title' => 'Dashboard'
        ]);
    }

    public function registrasiNasabah()
    {
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        $sign_ups = SignUp::get();
        $nasabahs = Nasabah::get();
        $rekenings = Rekening::get();
        $saldos = Saldo::get();
        $users = User::get();
        return view('dashboard.registrasi', compact('saldos', 'sign_ups', 'nasabahs', 'rekenings', 'users', 'names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'Registrasi'
        ]);
    }

    public function transaksi()
    {
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        $nasabahs = Nasabah::get();
        $transaksis = Transaksi::get();
        $rekenings = Rekening::first();
        $saldos = Saldo::get();
        return view('dashboard.transaksi', compact('saldos', 'transaksis', 'rekenings', 'nasabahs', 'names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'Transaksi'
        ]);
    }

    public function mutasi($id)
    {
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        $sign_ups = SignUp::get();
        $rekenings = Rekening::where('id_nasabah', $id)->first();
        $transaksis = Transaksi::where('id_rekening', $rekenings->id)->get();
        $nasabah = Nasabah::find($id)->first();
        $users = User::get();
        return view('dashboard.mutasi', compact('transaksis', 'sign_ups', 'nasabah', 'rekenings', 'users', 'names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'Mutasi Transaksi'
        ]);
    }

    public function userhome($name)
    {
        $names = Konfigurasi::where('id', 1)->get();
        $alamats = Konfigurasi::where('id', 2)->get();
        $telps = Konfigurasi::where('id', 3)->get();
        $was = Konfigurasi::where('id', 4)->get();
        $logos = Konfigurasi::where('id', 5)->get();
        $emails = Konfigurasi::where('id', 6)->get();
        $sign_ups = SignUp::get();
        $users = User::where('name', $name)->first();
        $nasabahs = Nasabah::where('nama', $users->name)->first();
        $rekenings = Rekening::where('id_nasabah', $nasabahs->id)->first();
        $saldos = Saldo::where('id_rekening', $rekenings->id)->first();
        $transaksis = Transaksi::where('id_rekening', $rekenings->id)->get();
        return view('userhome', compact('saldos', 'transaksis', 'sign_ups', 'nasabahs', 'rekenings', 'users', 'names', 'alamats', 'telps', 'was', 'logos', 'emails'), [
            'title' => 'Nasabah'
        ]);
    }
}
