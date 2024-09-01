@extends('layouts.layout')
@section('title', 'Website Resmi Pemerintah Desa '. $desa_nama .' - Beranda')

@section('styles')
<meta name="description" content="Website Resmi Pemerintah {{$desa_nama}}, Kecamatan Soropia, Kabupaten {{ $desa->nama_kabupaten }}. Melayani pembuatan surat keterangan secara online">

<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<style>
    .ikon {
        font-family: fontAwesome;
    }

    .progress-label>span {
        color: white;
    }

    .progress-percentage>span {
        color: white;
    }

    .judul {
        color: white;
    }

    .animate-up:hover {
        top: -5px;
    }
    
    /* .masthead {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover;
            color: white;
            text-align: center;
        }

        #bgvideo {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            z-index: 0;
        }

        .masthead .content {
            position: relative;
            z-index: 1;
        }

        .masthead-heading {
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: fadeInDown 2s ease-in-out;
        }

        .masthead-subheading {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 2s ease-in-out;
        }

        .masthead img {
            filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.5));
        } */

    
</style>
@endsection

@section('header')
<header id="home" class="masthead">
    {{-- <div class="overlay"></div>
    <video autoplay loop muted playsinline id="bgvideo">
        <source src="{{ url('img/bgvideo.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video> --}}
    <div class="content">
        <img src="{{ asset('storage/logo2.png') }}" width="150px" class="mb-5" alt="Logo Konawe">
        <h1 class="masthead-heading text-uppercase mb-0">Selamat Datang</h1>
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <marquee>
            <p class="masthead-subheading font-weight-light mb-0 text-white">{{$desa_nama}} Kecamatan Soropia Kabupaten Konawe</p>
        </marquee>
        <div class="d-flex justify-content-center text-white">
            <div id="clock" style="margin-right: 5px;"></div>
            <div id="date"></div>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="row mt-8">
    <div class="col-md-4">
        <div class="card p-3 text-white" style="background-color: rebeccapurple;">
            <h1 class="text-white">Visi</h1>
            <ul>
                <li>Mewujudkan Desa Tasik Serai Barat sebagai salah satu desa sejahtera di kabupaten Bengkalis</li>
            </ul>
            <h1 class="text-white">Misi</h1>
            <ul>
                <li>Meningkatkan tata pemerintahan yang demokratis, transparan, akuntabel, efisien dan efektif</li>
                <li>Meningkatkan sumber daya manusia</li>
                <li>Meningkatkan perekonomian pedesaan</li>
                <li>Meningkatkan pembangunan infrastruktur pedesaan yang terarah dan berkualitas</li>
                <li>Meningkatkan peran kelembagaan dan masyarakat desa dalam mendorong pembangunan desa</li>
            </ul>
        </div>
    </div>
    <div class="col-md-4 text-white">
        <div class="card p-3" style="background-color: rebeccapurple;">
            <h1 class="text-white">Keterangan Desa</h1>
            <p class="text-justify">Desa Tasik Serai Barat adalah Desa yang berada di wilayah kecamatan Mandau kabupaten Bengkalis, kemudian menjadi kecamatan pinggir kabupaten Bengkalis. Desa Tasik Serai Barat berdiri pada tahun 1930 sebelum merdeka sudah terbentuk kepenghuluan</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card p-3" style="background-color: rebeccapurple;">
            <img src="{{ URL::to('/') }}/img/desa1.jpeg" alt="Tasik Serai Barat" class="img-fluid rounded mb-3">
            <img src="{{ URL::to('/') }}/img/desa2.jpeg" alt="Tasik Serai Barat" class="img-fluid rounded">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md">
        <div id="owl-one" class="owl-carousel owl-theme" style="z-index: 0">
            @foreach($gallery as $key => $item)
            <a class="text-center" href="{{ asset(Storage::url($item->gallery)) }}" data-caption="{{ $item->caption }}" data-fancybox>
                <img src="{{ asset(Storage::url($item->gallery)) }}" alt="Slide Show {{ $key }}" style="max-height: 500px; object-fit: contain;">
                <p class="text-center text-white">{{ $item->caption }}</p>
            </a>
            @endforeach
        </div>
    </div>
</div>
@if ($surat->count() > 0)
<section class="mb-5">
    <div class="row">
        <div class="col-md">
            <div class="header-body text-center mt-5 mb-3">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 border-bottom">
                        <h2 class="text-white">LAYANAN SURAT</h2>
                        <p class="text-white">Dengan menggunakan layanan surat website {{$desa_nama}}, masyarakat dapat dengan mudah membuat beberapa surat keterangan berikut ini secara online.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 justify-content-center">
        @foreach ($surat as $item)
        <div class="col-lg-4 col-md-6 surats">
            <div class="single-service bg-white rounded shadow p-3 animate-up">
                <a href="{{ route('buat-surat', ['id' => $item->id,'slug' => Str::slug($item->nama)]) }}">
                    <i class="fas {{ $item->icon }} ikon fa-5x mb-3"></i>
                    <h4>{{ $item->nama }}</h4>
                </a>
                <p>{{ $item->deskripsi }}</p>
            </div>
        </div>
        @endforeach
        @if (App\Surat::count() > 3)
        <a href="{{ route('layanan-surat') }}" class="btn btn-primary">Lebih Banyak Surat</a>
        @endif
    </div>
</section>
@endif
<!-- Perbaikan komentar Blade: -->
{{-- <div class="card shadow h-100 mb-5" style="margin-top:100px">
    <div class="card-header">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-lg-between text-center text-lg-left">
            <div class="mb-1">
                <h2 class="mb-0">Grafik Pelaksanaan APBDes</h2>
            </div>
            <div class="mb-1">
                Tahun : <input type="number" name="tahun-apbdes" id="tahun-apbdes" class="form-control-sm" value="{{ date('Y') }}" style="width:80px">
                <img id="loading-tahun" src="{{ asset(Storage::url('loading.gif')) }}" alt="Loading" height="20px" style="display: none">
            </div>
        </div>
    </div>
    <div class="card-body bg-default text-white">
        @include('anggaran-realisasi.grafik-apbdes')
    </div>
</div> --}}
@if ($berita->count() > 0)
<section class="mb-5 mt-7">
    <div class="row">
        <div class="col-md">
            <div class="header-body text-center mt-5 mb-3">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 border-bottom">
                        <h2 class="text-white">BERITA</h2>
                        <p class="text-white">Berita {{$desa_nama}}, masyarakat dapat dengan mudah mengetahui informasi seputar berita {{$desa_nama}}.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($berita as $item)
        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card animate-up shadow">
                <a href="{{ route('berita.show', ['berita' => $item, 'slug' => Str::slug($item->judul)]) }}">
                    <div class="card-img" style="background-image: url('{{ $item->gambar ? url(Storage::url($item->gambar)) : url(Storage::url('noimage.jpg')) }}'); background-size: cover; height: 200px;"></div>
                </a>
                <div class="card-body text-center">
                    <a href="{{ route('berita.show', ['berita' => $item, 'slug' => Str::slug($item->judul)]) }}">
                        <h3>{{ $item->judul }}</h3>
                        <div class="mt-3 d-flex justify-content-between text-sm text-muted">
                            <i class="fas fa-clock"> {{ $item->created_at->diffForHumans() }}</i>
                            <i class="fas fa-eye"> {{ $item->dilihat }} Kali Dibaca</i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if (App\Berita::count() > 3)
    <div class="text-center">
        <a href="{{ route('berita') }}" class="btn btn-primary">Lebih Banyak Berita</a>
    </div>
    @endif
</section>
@endif
@if ($pemerintahan_desa->count() > 0)
<section class="mb-5">
    <div class="row">
        <div class="col-md">
            <div class="header-body text-center mt-5 mb-3">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 border-bottom">
                        <h2 class="text-white">Pemerintahan Desa</h2>
                        <p class="text-white">Pemerintahan {{$desa_nama}}, masyarakat dapat dengan mudah mengetahui informasi seputar pemerintahan {{$desa_nama}}.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($pemerintahan_desa as $item)
        <div class="col-lg-4 col-md-6 mb-3">
            <div class="card animate-up shadow">
                <a href="{{ route('pemerintahan-desa.show', ['pemerintahan_desa' => $item, 'slug' => Str::slug($item->judul)]) }}">
                    <div class="card-img" style="background-image: url('{{ $item->gambar ? url(Storage::url($item->gambar)) : url(Storage::url('noimage.jpg')) }}'); background-size: cover; height: 200px;"></div>
                </a>
                <div class="card-body text-center">
                    <a href="{{ route('pemerintahan-desa.show', ['pemerintahan_desa' => $item, 'slug' => Str::slug($item->judul)]) }}">
                        <h3>{{ $item->judul }}</h3>
                        <div class="mt-3 d-flex justify-content-between text-sm text-muted">
                            <i class="fas fa-clock"> {{ $item->created_at->diffForHumans() }}</i>
                            <i class="fas fa-eye"> {{ $item->dilihat }} Kali Dibaca</i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @if (App\PemerintahanDesa::count() > 3)
    <div class="text-center">
        <a href="{{ route('pemerintahan-desa') }}" class="btn btn-primary">Lebih Banyak Informasi Pemerintahan Desa</a>
    </div>
    @endif
</section>
@endif
@if (count($galleries) > 0)
<section class="mb-5">
    <div class="row">
        <div class="col-md">
            <div class="header-body text-center mt-5 mb-3">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 border-bottom">
                        <h2 class="text-white">GALLERY</h2>
                        <p class="text-white">Gallery {{$desa_nama}}, masyarakat dapat dengan mudah mengetahui gallery {{$desa_nama}}.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($galleries as $key => $item)
        @if ($key < 3) 
            @if ($item['jenis']==1)
                <div class="col-lg-4 col-md-6 mb-3 img-scale-up">
                    <a href="{{ url(Storage::url($item['gambar'])) }}" data-fancybox data-caption="{{ $item['caption'] }}">
                        <img class="mw-100" src="{{ url(Storage::url($item['gambar'])) }}" alt="">
                    </a>
                </div>
            @else
                <div class="col-lg-4 col-md-6 mb-3 img-scale-up">
                    <a href="https://www.youtube.com/watch?v={{ $item['id'] }}" data-fancybox data-caption="{{ $item['caption'] }}">
                        <i class="fas fa-play fa-2x" style="position: absolute; top:43%; left:46%;"></i>
                        <img class="mw-100" src="{{ $item['gambar'] }}" alt="">
                    </a>
                </div>
            @endif
        @endif
        @endforeach
    </div>
    @if (count($galleries) > 6)
    <div class="text-center">
        <a href="{{ route('gallery') }}" class="btn btn-primary">Lebih Banyak Gallery</a>
    </div>
    @endif
</section>
@endif
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31599.41679812257!2d113.7189174164237!3d-8.108905637778197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6953778add047%3A0x71944989e3c29684!2sArjasa%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1596496940461!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
@endsection

@push('scripts')
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/apbdes.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#owl-one').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    });
</script>
<script type="text/javascript">
    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            // a_p = "AM";
        } else {
            // a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
        document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
</script>
<!-- Menampilkan Hari, Bulan dan Tahun -->
<script type='text/javascript'>
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
        thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;
    document.getElementById('date').innerHTML = thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
</script>
@endpush
