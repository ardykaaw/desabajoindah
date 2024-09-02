<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Darah;
use App\Dusun;
use App\Http\Requests\PendudukRequest;
use App\Pekerjaan;
use App\Pendidikan;
use App\Penduduk;
use App\StatusHubunganDalamKeluarga;
use App\StatusPerkawinan;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index(Request $request)
    {
        $penduduk = Penduduk::latest()->paginate(10);
        $totalPenduduk = Penduduk::count(); // Perbaikan pada penghitungan total penduduk

        if ($request->cari) {
            if ($request->cari == "Laki-laki") {
                $penduduk = Penduduk::where('jenis_kelamin',1)->latest()->paginate(10);
            } elseif ($request->cari == "Perempuan") {
                $penduduk = Penduduk::where('jenis_kelamin',2)->latest()->paginate(10);
            } else {
                $penduduk = Penduduk::where(function ($penduduk) use ($request) {
                    $penduduk->where('nik', 'like', "%$request->cari%");
                    $penduduk->orWhere('kk', 'like', "%$request->cari%");
                    $penduduk->orWhere('nama', 'like', "%$request->cari%");
                    $penduduk->orWhere('tempat_lahir', 'like', "%$request->cari%");
                    $penduduk->orWhere('tanggal_lahir', 'like', "%$request->cari%");
                    $penduduk->orWhere('nomor_paspor', 'like', "%$request->cari%");
                    $penduduk->orWhere('nomor_kitas_atau_kitap', 'like', "%$request->cari%");
                    $penduduk->orWhere('nik_ayah', 'like', "%$request->cari%");
                    $penduduk->orWhere('nama_ayah', 'like', "%$request->cari%");
                    $penduduk->orWhere('nik_ibu', 'like', "%$request->cari%");
                    $penduduk->orWhere('nama_ibu', 'like', "%$request->cari%");
                    $penduduk->orWhere('alamat', 'like', "%$request->cari%");
                })->latest()->paginate(10);
            }
        }

        $penduduk->appends(request()->input())->links();
        return view('penduduk.index', compact('penduduk','totalPenduduk'));
    }

    public function create()
    {
        return view('penduduk.create', [
            'agama'                         => Agama::all(),
            'darah'                         => Darah::all(),
            'dusun'                         => Dusun::all(),
            'pekerjaan'                     => Pekerjaan::all(),
            'pendidikan'                    => Pendidikan::all(),
            'status_hubungan_dalam_keluarga'=> StatusHubunganDalamKeluarga::all(),
            'status_perkawinan'             => StatusPerkawinan::all(),
        ]);
    }

    public function store(PendudukRequest $request)
    {
        $data = $request->validated();
        Penduduk::create($data);
        return redirect()->route('penduduk.index')->with('success','Penduduk berhasil ditambahkan');
    }

    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit', [
            'agama'                         => Agama::all(),
            'darah'                         => Darah::all(),
            'dusun'                         => Dusun::all(),
            'pekerjaan'                     => Pekerjaan::all(),
            'pendidikan'                    => Pendidikan::all(),
            'status_hubungan_dalam_keluarga'=> StatusHubunganDalamKeluarga::all(),
            'status_perkawinan'             => StatusPerkawinan::all(),
            'penduduk'                      => $penduduk,
        ]);
    }

    public function update(PendudukRequest $request, Penduduk $penduduk)
    {
        $data = $request->validated();
        $penduduk->update($data);
        return redirect()->back()->with('success','Penduduk berhasil diperbarui');
    }

    public function destroy(Penduduk $penduduk)
    {
        $penduduk->delete();
        return redirect()->back()->with('success','Penduduk berhasil dihapus');
    }

    public function cetakPenduduk()
    {
        $penduduks = Penduduk::all();
        return view('penduduk.cetak', compact('penduduks'));
    }
}
