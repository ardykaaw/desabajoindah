@extends('layouts.layout')
@section('title', 'Website Resmi Pemerintah Desa '. $desa_nama . ' - Peta')

@section('styles')
<meta name="description" content="Peta {{$desa_nama}}, Kecamatan Soropia, Kabupaten {{ $desa->nama_kabupaten }}">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- Tambahkan Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
<style>
    #map { height: 450px; }
    .tematik-image {
        width: 100%;
        margin-top: 20px;
    }
</style>
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
        <!-- Leaflet Map -->
        <div id="map"></div>
        
        <!-- Gambar Tematik -->
        <img src="{{ asset('img/tematik.png') }}" alt="Gambar Tematik" class="tematik-image">
        
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
<!-- Tambahkan Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Koordinat Desa Bajo Indah
        var desaLat = -3.9202694;
        var desaLng = 122.6407658;

        // Geser peta sedikit ke kanan dan ke bawah dengan menambahkan offset ke longitude dan latitude
        var offsetLng = 0.005; // Sesuaikan nilai ini untuk menggeser lebih jauh ke kanan
        var offsetLat = -0.002; // Sesuaikan nilai ini untuk menggeser lebih jauh ke bawah
        var mapCenterLng = desaLng + offsetLng;
        var mapCenterLat = desaLat + offsetLat;

        var map = L.map('map', {
            zoomControl: false,
            attributionControl: false
        }).setView([mapCenterLat, mapCenterLng], 16); // Set view dengan koordinat yang sudah digeser

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Koordinat marker Desa Bajo Indah (disesuaikan untuk berada di atas pemukiman)
        var markerLat = -3.924; // Geser lebih jauh ke bawah
        var markerLng = 122.646; // Geser lebih jauh ke kanan

        // Tambahkan marker di lokasi Desa Bajo Indah
        var marker = L.marker([markerLat, markerLng]).addTo(map)
            .bindPopup('Desa Bajo Indah')
            .openPopup();

        // Fungsi untuk melakukan zoom ke lokasi setelah beberapa detik
        function zoomToLocation() {
            map.setView([mapCenterLat, mapCenterLng], 16, {
                animate: true,
                duration: 2
            });
        }

        // Set timeout untuk memulai zoom setelah beberapa detik (misalnya 5 detik)
        setTimeout(function() {
            zoomToLocation();
        }, 5000); // 5 detik
    });
</script>
@endpush