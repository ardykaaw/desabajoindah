@extends('layouts.app')

@section('title', 'Kelola Aspirasi')

@section('content-header')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-white">Daftar Aspirasi</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card shadow h-100">
            <div class="card-header">
                <h2 class="mb-0">Tabel Aspirasi</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Aspirasi</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aspirasi as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->aspirasi }}</td>
                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
