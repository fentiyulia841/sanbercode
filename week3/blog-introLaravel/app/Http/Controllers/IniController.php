<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IniController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function variabel(Request $request)
    {
        $namaDepan = $request->firstname;
        $namaBelakang = $request->lastname;

        return redirect()->route('welcome')->with(['namaDepan' => $namaDepan, 'namaBelakang' => $namaBelakang]);
    }

    public function welcome(Request $request)
    {
        return view('welcome');
    }
}
