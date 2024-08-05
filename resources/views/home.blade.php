<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Beranda</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png" />
    <!-- Font Awesome icons (free version)-->
    <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/css/home.css') }}" rel="stylesheet">
    <style>
        body {
    font-family: 'Montserrat', sans-serif;
}

.navbar {
    background: linear-gradient(45deg, #6a11cb, #2575fc);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.navbar-brand, .nav-link {
    color: #fff !important;
}

.nav-link:hover {
    color: #f0f0f0 !important;
}

.masthead {
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
    /* Tambahkan opacity untuk video background */
    z-index: -1;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
     /* Tambahkan overlay gelap untuk meningkatkan keterbacaan teks */
    z-index: 0;
}

.masthead .content {
    position: relative;
    z-index: 1;
}

.masthead-heading {
    font-size: 3rem;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Tambahkan bayangan teks untuk meningkatkan keterbacaan */
}

.divider-custom {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 1.5rem 0;
}

.divider-custom-line {
    width: 5rem;
    height: 0.25rem;
    background-color: white;
}

.divider-custom-icon {
    font-size: 2rem;
    margin: 0 1rem;
}

.card {
    background: linear-gradient(45deg, #6a11cb, #2575fc);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    color: white;
}

.card h3 {
    text-align: center;
}

.footer {
    background-color: #6a11cb;
    color: white;
    padding: 2rem 0;
}

.footer a {
    color: white;
    text-decoration: none;
}

.footer a:hover {
    text-decoration: underline;
}

marquee {
    background: rgba(255, 255, 255, 0.1);
    padding: 0.5rem;
    border-radius: 5px;
    color: white;
}

@media (min-width: 992px) {
    .masthead {
        height: 100vh;
    }

    .masthead-heading {
        font-size: 4rem;
    }
}

    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">{{$desa_nama}}</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#home">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#footer">Contact</a></li>
                    @guest
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 nav-link-icon bg-primary rounded text-white" href="{{ route('masuk') }}">
                            <i class="fas fa-user"></i>
                            <span class="nav-link-inner--text">Login</span>
                        </a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header id="home" class="masthead">
        <div class="overlay"></div>
        <video autoplay loop muted playsinline id="bgvideo">
            <source src="{{ url('img/bgvideo.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="content">
            <img src="{{ asset('storage/logo2.png') }}" width="150px" class="mb-5" alt="Logo Konawe">
            <h1 class="masthead-heading text-uppercase mb-0">Selamat Datang</h1>
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <marquee>
                <p class="masthead-subheading font-weight-light mb-0">{{$desa_nama}} Kecamatan Soropia Kabupaten Konaewe</p>
            </marquee>
            <div class="d-flex justify-content-center text-white">
                <div id="clock" style="margin-right: 5px;"></div>
                <div id="date"></div>
            </div>
        </div>
    </header>
    
    <!-- About Section-->
    <section class="page-section mb-0" id="about">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase">About</h2>
            <div class="divider-custom divider">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row mt-8 text-white">
                <div class="col-md-4">
                    <div class="card p-3">
                        <h3>Visi</h3>
                        <ul>
                            <li>Menjadikan {{$desa_nama}} sebagai desa cerdas, mandiri dan handal di bidang perikanan, melalui program pemerintah daerah untuk membentuk masyarakat Bajo Indah menuju masyarakat sejahtera pada tahun 2024</li>
                        </ul>
                        <h3>Misi</h3>
                        <ul>
                            <li>Menyediakan sarana dan prasarana perikanan bagi masyarakat, baik perikanan tangkap maupun perikanan budi daya.</li>
                            <li>Peningkatan kualitas aparatur pemerintahan desa.</li>
                            <li>Meningkatkan kualitas sumber daya manusia masyarakat {{$desa_nama}} melalui pelatihan-pelatihan di bidang perikanan.</li>
                            <li>Penguatan kelembagaan kelompok masyarakat.</li>
                            <li>Pengembangan ekonomi masyarakat.</li>
                            <li>Meningkatkan kualitas layanan bidang pemerintahan.</li>
                            <li>Membangun sarana dan prasarana kehidupan sosial masyarakat.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <h3>Keterangan Desa</h3>
                        <p class="text-justify">{{$desa_nama}} terletak di Kecamatan Soropia, Kabupaten Konawe, Sulawesi Tenggara. Desa ini dikenal dengan keindahan alamnya yang mempesona, terutama pesona bawah laut yang menjadi daya tarik wisatawan. Sebagai salah satu desa di pesisir Sulawesi Tenggara, masyarakat Bajo Indah sebagian besar berprofesi sebagai nelayan. Selain itu, desa ini juga mulai mengembangkan sektor pariwisata bahari, dengan menyediakan fasilitas untuk kegiatan snorkeling dan diving.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="{{ URL::to('/') }}/img/balai.png" alt="FOTO KANTOR DESA" class="img-fluid rounded mb-3">
                        <img src="{{ URL::to('/') }}/img/asset1.jpeg" alt="Desa Bajo Indah" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0"></div>
                <div class="col-lg-6">
                    <h4 class="text-uppercase mb-4">Call Center</h4>
                    <p class="lead mb-0">
                        <i class="fa fa-phone mr-1"></i>
                        <a href="https://wa.me/..." class="text-white text-decoration-none" target="_blank">+62-00-000-000</a>
                    </p>
                    <p class="lead mb-0">
                        <i class="fa fa-envelope mr-1"></i>
                        <a href="mailto:abcd@gmail" class="text-white text-decoration-none" target="_blank">contoh@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <!-- Clock and Date Script-->
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
    <!-- Date Script-->
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

        document.addEventListener("DOMContentLoaded", function() {
            var video = document.getElementById('bgvideo');
            video.addEventListener('canplaythrough', function() {
                console.log('Video can play through!');
            }, false);
            video.addEventListener('error', function(e) {
                console.error('Error loading video: ', e);
            }, false);
        });
    </script>
</body>

</html>
