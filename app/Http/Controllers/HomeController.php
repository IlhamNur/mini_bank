<?php

namespace App\Http\Controllers;

use App\Models\SignUp;
use App\Models\Konfigurasi;
use App\Models\Rekening;
use App\Models\Nasabah;
use App\Models\Transaksi;
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
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    }

    public function konfigurasi()
    {   
        $konfigurasis = Konfigurasi::get();
        return view('dashboard.konfigurasi', compact('konfigurasis'), [
            'title' => 'Konfigurasi'
        ]);
    }

    public function regristasiNasabah()
    {
        $sign_ups = SignUp::get();
        $nasabahs = Nasabah::get();
        $rekenings = Rekening::get();
        $users = User::get();
        return view('dashboard.regristasiNasabah', compact('sign_ups', 'nasabahs', 'rekenings', 'users'), [
            'title' => 'Regristrasi Nasabah'
        ]);
    }

    public function transaksi()
    {
        $transakis = Transaksi::get();
        $rekenings = Rekening::get();
        return view('dashboard.transaksi', compact('transaksis', 'rekenings'), [
            'title' => 'Transaksi'
        ]);
    }
}
