<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('pages/landingpage');
    }

    public function pendaftaran(){
        return view('pages/pendaftaran');
    }

    public function absensi(){
        return view('pages/absensi');
    }
    
    public function materi(){
        return view('pages/materi');
    }
}
