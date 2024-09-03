@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Tambah Aspirasi</h2>
                </div>
                <div class="card-body">
                    <!-- Alert untuk pesan sukses -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('aspirasi.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="aspirasi">Aspirasi</label>
                            <textarea class="form-control" id="aspirasi" name="aspirasi" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mb-3">
                            <i class="fas fa-plus-circle"></i> Tambah Aspirasi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
