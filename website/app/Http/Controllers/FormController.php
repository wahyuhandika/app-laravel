<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FormController extends Controller
{

    public function login()
    {
      return view('pages/login');
    }

    public function registrasi()
    {
      return view('pages/registrasi');
    }
    
}
