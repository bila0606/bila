<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('halaman.halaman');
    }
    public function halaman()
    {
        return view('halaman.createh');
    }
}
