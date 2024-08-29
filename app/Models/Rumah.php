<?php

namespace App\Http\Controllers;

use App\Models\Rumah; // Pastikan import sesuai
use App\Models\Dusun;
use Illuminate\Http\Request;

class DusunController extends Controller
{
    public function show($id)
    {
        $dusun = Dusun::with('rumah')->findOrFail($id);
        // Logika lainnya...
    }
}


