<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Beranda</title>
    <!-- Favicon-->
    <link href="{{ asset('storage/sultra.png') }}" rel="icon" type="image/png">
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
            transition: background-color 0.3s, color 0.3s;
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

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Dark mode styles */
        .dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        .dark-mode .navbar, .dark-mode .footer {
            background-color: #1f1f1f;
        }

        .dark-mode .nav-link {
            color: #e0e0e0 !important;
        }

        .dark-mode .divider-custom-line, .dark-mode .divider-custom-icon {
            background-color: #e0e0e0;
            color: #e0e0e0;
        }

        .dark-mode .card {
            background: linear-gradient(45deg, #3a3a3a, #2c2c2c);
            color: #e0e0e0;
        }

        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #6a11cb;
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            z-index: 1000;
            display: none; /* hidden by default */
        }

        .scroll-to-top:hover {
            background-color: #2575fc;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-body {
            padding: 1.5rem;
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-primary {
            border-radius: 10px;
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
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#gallery">Gallery</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#location">Location</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#aspirasi">Aspirasi</a></li>
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
                <p class="masthead-subheading font-weight-light mb-0">{{$desa_nama}} Kecamatan Soropia Kabupaten Konawe</p>
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
                <div class="col-md-8">
                    <div class="card p-3">
                        <h3>Keterangan Desa</h3>
                        <p class="text-justify">{{$desa_nama}} terletak di Kecamatan Soropia, Kabupaten Konawe, Sulawesi Tenggara. Desa ini dikenal dengan keindahan alamnya yang mempesona, terutama pesona bawah laut yang menjadi daya tarik wisatawan. Sebagai salah satu desa di pesisir Sulawesi Tenggara, masyarakat Bajo Indah sebagian besar berprofesi sebagai nelayan. Selain itu, desa ini juga mulai mengembangkan sektor pariwisata bahari, dengan menyediakan fasilitas untuk kegiatan snorkeling dan diving. {{$desa_nama}} juga memiliki berbagai kegiatan budaya yang menarik, seperti festival tahunan dan pertunjukan seni lokal. Selain itu, desa ini juga terkenal dengan produk kerajinan tangan yang unik dan berkualitas tinggi.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section-->
    <section class="page-section" id="gallery">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Gallery</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Carousel-->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('img/galeri1.jpeg') }}" class="d-block w-100 carousel-img" alt="Gallery Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/galeri3.jpeg') }}" class="d-block w-100 carousel-img" alt="Gallery Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('img/galeri2.jpeg') }}" class="d-block w-100 carousel-img" alt="Gallery Image 3">
                        </div>
                    </div>
                </div>
                
                <!-- Tambahkan CSS berikut ke dalam file CSS Anda -->
                <style>
                    .carousel-img {
                        height: 700px; /* Atur tinggi yang Anda inginkan untuk semua gambar */
                        object-fit: cover; /* Ini memastikan gambar memenuhi area dengan proporsi yang sesuai */
                    }
                </style>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Location Section-->
    <section class="page-section" id="location">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Location</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7942.769748597126!2d122.6437658!3d-3.9252694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d98eb0da86b56af%3A0x5f28f06e564406f2!2sDesa%20Bajo%20Indah!5e0!3m2!1sen!2sid!4v1690000000000!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Aspirasi Section -->
    <section class="page-section" id="aspirasi">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Aspirasi Masyarakat</h2>
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Form Aspirasi -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Tulis Aspirasi Anda</h5>
                            <form id="aspirasiForm" action="{{ route('aspirasi.submit') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required>
                                </div>
                                <div class="mb-3">
                                    <textarea class="form-control" id="aspirasi" name="aspirasi" rows="3" placeholder="Tulis aspirasi Anda di sini..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Aspirasi</button>
                            </form>
                        </div>
                    </div>
    
                    <!-- Daftar Aspirasi -->
                    <h4 class="mb-4">Aspirasi Terkini</h4>
                    <div class="aspirasi-list">
                        @foreach($aspirasi as $item)
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title">{{ $item->nama }}</h5>
                                        <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                                    </div>
                                    <p class="card-text">{{ $item->aspirasi }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
    
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $aspirasi->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Tambahkan CSS berikut ke dalam file CSS Anda -->
    <style>
        .aspirasi-list {
            max-height: 250px; /* Sesuaikan tinggi untuk menampilkan sekitar 4 aspirasi */
            overflow-y: auto;
        }
    </style>
    

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
    <!-- Scroll to Top Button-->
    <button onclick="scrollToTop()" class="scroll-to-top"><i class="fas fa-arrow-up"></i></button>
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
    <!-- Scroll to Top Script-->
    <script>
        window.onscroll = function() {
            toggleScrollToTopButton();
        };

        function toggleScrollToTopButton() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.querySelector('.scroll-to-top').style.display = "block";
            } else {
                document.querySelector('.scroll-to-top').style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- Dark Mode Toggle Script-->
    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>

</html>
