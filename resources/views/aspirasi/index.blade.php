@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Daftar Aspirasi</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('aspirasi.create') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-success mb-3">
                            <i class="fas fa-plus-circle"></i> Tambah Aspirasi
                        </button>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Aspirasi</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aspirasis as $index => $aspirasi)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><strong>{{ $aspirasi->nama }}</strong></td>
                                        <td>{{ $aspirasi->aspirasi }}</td>
                                        <td>{{ $aspirasi->created_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $aspirasis->links() }}
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
