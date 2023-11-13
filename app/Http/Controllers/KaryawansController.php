<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawansController extends Controller
{
    public function index()
    {
        return view('karyawan.all', [
            'title'=> 'Karyawan',
            'karyawans'=> Karyawan::all(),
        ]);
    }

    public function show($karyawan)
    {
        return view('karyawan.detail', [
            'title'=> 'detail-karyawan',
            'karyawan' => karyawan::find($karyawan),
        ]);
    }
}
