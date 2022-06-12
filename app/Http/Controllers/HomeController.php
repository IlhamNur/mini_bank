<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function ceksaldo()
    {
        return view('ceksaldo');
    }

    public function gantipin()
    {
        return view('gantipin');
    }

    public function services()
    {
        return view('services');
    }

    public function signform()
    {
        return view('signform');
    }

    public function signform2()
    {
        return view('signform2');
    }

    public function transfer()
    {
        return view('transfer');
    }
}
