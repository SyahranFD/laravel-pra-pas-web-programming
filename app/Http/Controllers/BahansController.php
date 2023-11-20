<?php

namespace App\Http\Controllers;

use App\Models\bahan;
use Illuminate\Http\Request;

class BahansController extends Controller
{
    public function index()
    {
        return view('bahan.all', [
            'title'=> 'Bahan',
            'bahans'=> bahan::all(),
        ]);
    }

    public function show($bahan)
    {
        return view('bahan.detail', [
            'title'=> 'detail-bahan',
            'bahan' => bahan::find($bahan),
        ]);
    }
}
