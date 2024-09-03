<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aspirasi; // Pastikan model Aspirasi sudah ada

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
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255',
            'aspirasi' => 'required|string',
        ]);

        // Simpan aspirasi
        Aspirasi::create($request->all());

        // Tambahkan pesan flash
        return redirect()->route('aspirasi.index')->with('success', 'Aspirasi berhasil ditambahkan');
    }

    // Metode untuk menampilkan daftar aspirasi
    public function kelola()
    {
        // Ambil semua data aspirasi
        $aspirasi = Aspirasi::all();
        return view('aspirasi.kelola', compact('aspirasi'));
    }
}