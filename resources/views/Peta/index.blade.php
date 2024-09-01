@extends('layouts.layout')
@section('title', 'Website Resmi Pemerintah Desa '. $desa_nama . ' - Peta')

@section('styles')
<meta name="description" content="Peta {{$desa_nama}}, Kecamatan Soropia, Kabupaten {{ $desa->nama_kabupaten }}">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('header')
<h1 class="text-white text-muted">PETA DESA</h1>
<p class="text-white">Peta {{$desa_nama}}, masyarakat dapat dengan mudah mengetahui informasi mengenai wilayah dan batas-batas desa {{$desa_nama}}.</p>
@endsection

@section('content')
<section class="page-section" id="location">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Location</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Google Maps -->
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7942.769748597126!2d122.6437658!3d-3.9252694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98eb0da86b56af%3A0x5f28f06e564406f2!2sDesa%20Bajo%20Indah!5e0!3m2!1sen!2sid!4v1690000000000!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        
        <!-- Maps for Dusun -->
        {{-- <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <!-- Contoh link ke Dusun 1 -->
                    <a href="{{ route('dusun.show', 1) }}">
                        <img src="{{ asset('img/dusun1.jpeg') }}" class="img-thumbnail" alt="Dusun 1">
                    </a>

                    <div class="card-body">
                        <h5 class="card-title">Dusun 1</h5>
                        <p class="card-text">Peta lokasi Dusun 1.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="{{ asset('img/dusun2.jpeg') }}" class="image-popup">
                        <img class="card-img-top" src="{{ asset('img/dusun2.jpeg') }}" alt="Dusun 2">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Dusun 2</h5>
                        <p class="card-text">Peta lokasi Dusun 2.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card">
                    <a href="{{ asset('img/dusun3.jpeg') }}" class="image-popup">
                        <img class="card-img-top" src="{{ asset('img/dusun3.jpeg') }}" alt="Dusun 3">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Dusun 3</h5>
                        <p class="card-text">Peta lokasi Dusun 3.</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>

@endsection

@push('scripts')
<!-- Tambahkan skrip lain jika diperlukan -->
@endpush
