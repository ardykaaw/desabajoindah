<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirasi;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasis = Aspirasi::latest()->paginate(10);
        return view('aspirasi.index', compact('aspirasis'));
    }

    public function create()
    {
        return view('aspirasi.create'); // Pastikan view ini ada
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'aspirasi' => 'required|string',
        ]);

        Aspirasi::create($validatedData);

        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil ditambahkan.');
    }
}