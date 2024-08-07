<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirasi;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = Aspirasi::latest()->paginate(10);
        return view('home', compact('aspirasi'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'aspirasi' => 'required|string',
        ]);

        Aspirasi::create($request->all());

        return redirect()->back()->with('success', 'Aspirasi Anda telah terkirim.');
    }
}