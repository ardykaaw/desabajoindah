@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Dusun: {{ $dusun->nama }}</h1>
    
    <div class="card mb-3">
        <div class="card-body">
            <h4 class="card-title">Informasi Rumah di Dusun {{ $dusun->nama }}</h4>
            <p>Total Rumah: {{ $total_rumah }}</p>
            <p>Rumah dengan Jamban: {{ $rumah_dengan_jamban }}</p>
            <p>Rumah dengan Air Gunung: {{ $rumah_dengan_air_gunung }}</p>
        </div>
    </div>

    <a href="{{ route('dusun.index') }}" class="btn btn-primary">Kembali ke Daftar Dusun</a>
</div>
@endsection
