<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetaController extends Controller
{
    public function index()
    {
        $desa_nama = 'Bajo Indah'; // Ubah dengan nilai yang sesuai
        $desa = (object) [
            'nama_kabupaten' => 'Nama Kabupaten', // Ubah dengan nilai yang sesuai
        ];
        
        return view('peta.index', compact('desa_nama', 'desa'));
    }
    
}
