<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;
use Illuminate\Support\Facades\File;

class DesaController extends Controller
{
    public function index()
    {
        $desa = Desa::find(1); // Menyesuaikan dengan ID yang relevan
        return view('desa.index', compact('desa'));
    }

    public function update(Request $request, $id)
    {
        $desa = Desa::find($id);

        if ($request->hasFile('logo')) {
            File::delete(storage_path('app/' . $desa->logo));
            $desa->logo = $request->file('logo')->store('public/logo');
            $desa->save();

            return response()->json([
                'error'     => false,
                'data'      => ['logo'   => $desa->logo]
            ]);
        } else {
            $data = $request->validate([
                'nama_desa'             => ['required', 'max:64', 'string'],
                'nama_kecamatan'        => ['required', 'max:64', 'string'],
                'nama_kabupaten'        => ['required', 'max:64', 'string'],
                'alamat'                => ['required', 'string'],
                'nama_kepala_desa'      => ['required', 'max:64', 'string'],
                'alamat_kepala_desa'    => ['required', 'string']
            ]);

            if (
                $request->nama_desa != $desa->nama_desa || 
                $request->nama_kecamatan != $desa->nama_kecamatan || 
                $request->nama_kabupaten != $desa->nama_kabupaten || 
                $request->alamat != $desa->alamat || 
                $request->nama_kepala_desa != $desa->nama_kepala_desa
            ) {
                $desa->update($data);
                return redirect()->back()->with('success', 'Profil desa berhasil diperbarui');
            } else {
                return redirect()->back()->with('error', 'Tidak ada perubahan yang berhasil disimpan');
            }
        }
    }
}
