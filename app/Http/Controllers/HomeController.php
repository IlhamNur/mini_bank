<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('index', [
            'title' => 'Home'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About Us'
        ]);
    }

    public function ceksaldo()
    {
        return view('ceksaldo', [
            'title' => 'Cek Saldo'
        ]);
    }

    public function gantipin()
    {
        return view('gantipin', [
            'title' => 'Ganti Pin'
        ]);
    }

    public function services()
    {
        return view('services', [
            'title' => 'Services'
        ]);
    }

    public function transfer()
    {
        return view('transfer', [
            'title' => 'Transfer'
        ]);
    }
}
