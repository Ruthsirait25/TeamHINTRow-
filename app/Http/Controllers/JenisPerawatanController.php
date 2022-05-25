<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JenisPerawatanController extends Controller
{
    public function index()
    {
        return view('jenisperawatan.perawatan');
    }

    public function bleaching()
    {
        return view('jenisperawatan.Bleaching');
    }

    public function orthodontuc()
    {
        return view('jenisperawatan.orthodontic');
    }

    public function penambalan()
    {
        return view('jenisperawatan.penambalan');
    }

    public function pencabutan()
    {
        return view('jenisperawatan.pencabutan');
    }

    public function scaling()
    {
        return view('jenisperawatan.scaling');
    }

}
