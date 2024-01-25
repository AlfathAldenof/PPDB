<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PPDB - SMAN 2 PASAMAN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    {{-- <link href="{{ asset('Impact') }}/assets/img/favicon.png" rel="icon"> --}}
    <link href="{{ asset('Impact') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Impact') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('Impact') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('Impact') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('Impact') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('Impact') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Impact') }}/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Impact
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    {{-- <section id="topbar" class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a
                        href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section><!-- End Top Bar --> --}}

    <header id="header" class="header d-flex align-items-center">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>PPDB Online<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero">Beranda</a></li>
                    <li><a href="#about">Tentang Kami</a></li>
                    {{-- <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li> --}}
                    {{-- <li><a href="#contact">Contact</a></li> --}}
                    @if (Route::has('login'))
                        @auth
                            <li>
                                <a href="{{ url('/dashboard') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a>
                            </li>

                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container position-relative">
            <div class="row gy-5 mb-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Welcome to <span>PPDB SMAN 2 PASAMAN</span></h2>
                    <p>Penerimaan Peserta Didik Baru Tahun 2023/2024</p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#daftar" class="btn-get-started">Daftar</a>
                        {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('Impact') }}/assets/img/hero-img.svg" class="img-fluid" alt=""
                        data-aos="zoom-out" data-aos-delay="100">
                </div>
            </div>
        </div>

        {{-- <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Total Pendaftar</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Total User</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Magni Dolores</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Nemo Enim</a></h4>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>
        </div> --}}
    </section>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= Daftar Section ======= -->
        @if (Auth::check() == false)
            <section id="daftar" class="daftar">
                <div class="container" data-aos="fade-up">
                    <section class="section">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <center>
                                            <h5 class="card-title text-danger"> Pendaftaran Telah Dibuka!</h5>
                                            <h6 class="text-danger">Kamu Ingin mendaftar? Buat Akun terlebih dahulu!
                                            </h6>
                                            <a class="btn btn-primary mt-3" href="{{ route('register') }}">Buat
                                                Akun</a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        @else
            @if (Auth::check() && auth()->user()->role == 'User')
                @if (auth()->user()->registered == 0)
                    <section id="daftar" class="daftar">
                        <div class="container" data-aos="fade-up">
                            @if (session('message'))
                                <div class="alert alert-success alert-dismissible fade show">
                                    {{ session('message') }}
                                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif
                            <div class="section-header">
                                <h2>Daftar Segera</h2>
                                <p>Daftarkan diri kamu melalui form dibawah ini!</p>
                            </div>

                            <div class="pagetitle">
                                <h1>Form Pendaftaran</h1>
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#daftar">Daftar</a></li>
                                        <li class="breadcrumb-item">Home</li>
                                    </ol>
                                </nav>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Biodata Diri</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nilai-raport">Data
                                        Wali</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#raport">Pas Foto,
                                        Ijazah/SKL</button>
                                </li>
                            </ul>

                            <div class="tab-content">
                                {{-- Form Data Akademik --}}
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    @if ($datadiri->count() == 0)
                                        <section class="section">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Formulir Data Diri</h5>
                                                            <!-- Form Pendaftaran -->
                                                            <form action="{{ route('pendaftar.store') }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row mb-3">
                                                                    <label for="name"
                                                                        class="col-sm-4 col-form-label">Nama
                                                                        Lengkap</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="nama" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="nisn"
                                                                        class="col-sm-4 col-form-label">NISN</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="nisn" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="tanggal_lahir"
                                                                        class="col-sm-4 col-form-label">Tanggal
                                                                        Lahir</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="date" class="form-control"
                                                                            name="tanggal_lahir" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="alamat_lengkap"
                                                                        class="col-sm-4 col-form-label">Alamat
                                                                        Lengkap</label>
                                                                    <div class="col-sm-8">
                                                                        <textarea class="form-control" style="height: 100px" name="alamat_lengkap" required></textarea>
                                                                    </div>
                                                                </div>

                                                                {{-- <div class="row mb-3">
                                                                    <label for="nama_orangtua"
                                                                        class="col-sm-4 col-form-label">Nama
                                                                        Orangtua</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="nama_orangtua" required>
                                                                    </div>
                                                                </div> --}}

                                                                <div class="row mb-3">
                                                                    <label for="asal_sekolah"
                                                                        class="col-sm-4 col-form-label">Asal
                                                                        Sekolah</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="asal_sekolah" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="nilai_raport"
                                                                        class="col-sm-4 col-form-label">Nilai Rapor
                                                                        Semester 1</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="number" class="form-control"
                                                                            name="nilai_raport_s1" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="nilai_raport"
                                                                        class="col-sm-4 col-form-label">Nilai Rapor
                                                                        Semester 2</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="number" class="form-control"
                                                                            name="nilai_raport_s2" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="nilai_raport"
                                                                        class="col-sm-4 col-form-label">Nilai Rapor
                                                                        Semester 3</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="number" class="form-control"
                                                                            name="nilai_raport_s3" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="nilai_raport"
                                                                        class="col-sm-4 col-form-label">Nilai Rapor
                                                                        Semester 4</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="number" class="form-control"
                                                                            name="nilai_raport_s4" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="nilai_raport"
                                                                        class="col-sm-4 col-form-label">Nilai Rapor
                                                                        Semester 5</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="number" class="form-control"
                                                                            name="nilai_raport_s5" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="file_raport"
                                                                        class="col-sm-4 col-form-label">File
                                                                        Rapor</label>
                                                                    <div class="col-sm-8">
                                                                        <input class="form-control" type="file"
                                                                            id="formFile" name="file_raport"
                                                                            required>
                                                                        <div class="form-text">Upload PDF / Lampiran
                                                                            Rapor Kamu</div>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3 p-2">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Submit
                                                                        Pendaftaran</button>
                                                                </div>

                                                            </form><!-- End Form Pendaftaran -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-danger"> Pemberitahuan!</h5>
                                                            <h6 class="text-danger">Mohon lengkapi dan cek data anda
                                                                dengan seksama!</h6>
                                                            <ol>
                                                                <li>Kesalahan dalam penginputan data atau terdapat data
                                                                    yang tidak sesuai dapat berupa penolakan !</li>
                                                                <li>Pemalsuan data dapat berupa blacklist dalam
                                                                    pendaftaran</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    @else
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Formulir Data Diri</h5>
                                                        <!-- Form Pendaftaran -->
                                                        <form action="{{ route('siswa.update', $item->id) }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row mb-3">
                                                                <label for="name"
                                                                    class="col-sm-4 col-form-label">Nama
                                                                    Lengkap</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" value="{{ $item->nama }}" class="form-control"
                                                                        name="nama" required>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="nisn"
                                                                    class="col-sm-4 col-form-label">NISN</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" value="{{ $item->nisn }}" class="form-control"
                                                                        name="nisn" required>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="tanggal_lahir"
                                                                    class="col-sm-4 col-form-label">Tanggal
                                                                    Lahir</label>
                                                                <div class="col-sm-8">
                                                                    <input type="date" class="form-control"
                                                                        name="tanggal_lahir" value="{{ $item->tanggal_lahir }}" required>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="alamat_lengkap"
                                                                    class="col-sm-4 col-form-label">Alamat
                                                                    Lengkap</label>
                                                                <div class="col-sm-8">
                                                                    <textarea class="form-control" style="height: 100px" name="alamat_lengkap" required>{{ $item->alamat_lengkap }}</textarea>
                                                                </div>
                                                            </div>

                                                            {{-- <div class="row mb-3">
                                                                <label for="nama_orangtua"
                                                                    class="col-sm-4 col-form-label">Nama
                                                                    Orangtua</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" value="{{ $item->nama_orangtua }}" class="form-control"
                                                                        name="nama_orangtua" required>
                                                                </div>
                                                            </div> --}}

                                                            <div class="row mb-3">
                                                                <label for="asal_sekolah"
                                                                    class="col-sm-4 col-form-label">Asal
                                                                    Sekolah</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control"
                                                                        name="asal_sekolah" value="{{ $item->asal_sekolah }}" required>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="nilai_raport"
                                                                    class="col-sm-4 col-form-label">Nilai Raport
                                                                    Semester 1</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" class="form-control"
                                                                        name="nilai_raport_s1" value="{{ $item->nilai_raport_s1 }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="nilai_raport"
                                                                    class="col-sm-4 col-form-label">Nilai Raport
                                                                    Semester 2</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" class="form-control"
                                                                        name="nilai_raport_s2" value="{{ $item->nilai_raport_s2 }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="nilai_raport"
                                                                    class="col-sm-4 col-form-label">Nilai Raport
                                                                    Semester 3</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" class="form-control"
                                                                        name="nilai_raport_s3" value="{{ $item->nilai_raport_s3 }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="nilai_raport"
                                                                    class="col-sm-4 col-form-label">Nilai Raport
                                                                    Semester 4</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" class="form-control"
                                                                        name="nilai_raport_s4" value="{{ $item->nilai_raport_s4 }}" required>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="nilai_raport"
                                                                    class="col-sm-4 col-form-label">Nilai Raport
                                                                    Semester 5</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" class="form-control"
                                                                        name="nilai_raport_s5" value="{{ $item->nilai_raport_s5 }}" required>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="file_raport"
                                                                    class="col-sm-4 col-form-label">File
                                                                    Raport</label>
                                                                <div class="col-sm-8">
                                                                    <input class="form-control" type="file"
                                                                        id="formFile" name="file_raport">
                                                                    <div class="form-text">Upload PDF / Lampiran
                                                                        Raport Kamu</div>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3 p-2">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update
                                                                    Data</button>
                                                            </div>

                                                        </form><!-- End Form Pendaftaran -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-danger"> Pemberitahuan!</h5>
                                                        <h6 class="text-danger">Mohon lengkapi dan cek data anda
                                                            dengan seksama!</h6>
                                                        <ol>
                                                            <li>Kesalahan dalam penginputan data atau terdapat data
                                                                yang tidak sesuai dapat berupa penolakan !</li>
                                                            <li>Pemalsuan data dapat berupa blacklist dalam
                                                                pendaftaran</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                        <section id="daftar" class="daftar">
                                            <div class="container" data-aos="fade-up">
                                                <section class="section">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <center>
                                                                        <h5 class="card-title text-success"> Data Diri
                                                                            Telah Diterima</h5>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </section>
                                    @endif
                                </div>
                                {{-- Form Data Wali --}}
                                <div class="tab-pane fade profile-edit" id="nilai-raport">
                                    @if ($wali->count() == 0)
                                        <section class="section">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Formulir Data OrangTua/Wali</h5>
                                                            <!-- Form Pendaftaran -->
                                                            <form action="{{ route('wali.store') }}" method="POST">
                                                                @csrf
                                                                <div class="row mb-3">
                                                                    <label for="nama_wali"
                                                                        class="col-sm-4 col-form-label">Nama
                                                                        OrangTua/Wali</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="nama_wali" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="pekerjaan_wali"
                                                                        class="col-sm-4 col-form-label">Pekerjaan
                                                                        OrangTua/Wali</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="pekerjaan_wali" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="alamat_wali"
                                                                        class="col-sm-4 col-form-label">Alamat
                                                                        Lengkap OrangTua/Wali</label>
                                                                    <div class="col-sm-8">
                                                                        <textarea class="form-control" style="height: 100px" name="alamat_wali" required></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="penghasilan_wali"
                                                                        class="col-sm-4 col-form-label">Penghasilan
                                                                        OrangTua/Wali</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="number" class="form-control"
                                                                            name="penghasilan_wali" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="nohp_wali"
                                                                        class="col-sm-4 col-form-label">Nomor Hp
                                                                        OrangTua/Wali</label>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" class="form-control"
                                                                            name="nohp_wali" required>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3">
                                                                    <label for="status_wali"
                                                                        class="col-sm-4 col-form-label">Status
                                                                        OrangTua/Wali</label>
                                                                    <div class="col-sm-8">
                                                                        <select name="status_wali" class="form-control" required>
                                                                            <option value="Hidup"
                                                                                >Masih Hidup
                                                                            </option>
                                                                            <option value="Meninggal"
                                                                                >Meninggal
                                                                            </option>
                                                                        </select>
                                                                        {{-- <input type="text" class="form-control"
                                                                            name="status_wali" required> --}}
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3 p-2">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Submit
                                                                        Pendaftaran</button>
                                                                </div>

                                                            </form><!-- End Form Pendaftaran -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-danger"> Pemberitahuan!</h5>
                                                            <h6 class="text-danger">Mohon lengkapi dan cek data anda
                                                                dengan seksama!</h6>
                                                            <ol>
                                                                <li>Kesalahan dalam penginputan data atau terdapat data
                                                                    yang tidak sesuai dapat berupa penolakan !</li>
                                                                <li>Pemalsuan data dapat berupa blacklist dalam
                                                                    pendaftaran</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    @else
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Formulir Data OrangTua/Wali</h5>
                                                        <!-- Form Pendaftaran -->
                                                        <form action="{{ route('wali.update', Auth::user()->waliStudent->id) }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="row mb-3">
                                                                <label for="nama_wali"
                                                                    class="col-sm-4 col-form-label">Nama
                                                                    OrangTua/Wali</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control"
                                                                        name="nama_wali" value="{{ Auth::user()->waliStudent->nama_wali }}" required>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="pekerjaan_wali"
                                                                    class="col-sm-4 col-form-label">Pekerjaan
                                                                    OrangTua/Wali</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control"
                                                                        name="pekerjaan_wali" value="{{ Auth::user()->waliStudent->pekerjaan_wali }}" required>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="alamat_wali"
                                                                    class="col-sm-4 col-form-label">Alamat
                                                                    Lengkap OrangTua/Wali</label>
                                                                <div class="col-sm-8">
                                                                    <textarea class="form-control" style="height: 100px" name="alamat_wali" required>{{ Auth::user()->waliStudent->alamat_wali }}</textarea>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="penghasilan_wali"
                                                                    class="col-sm-4 col-form-label">Penghasilan
                                                                    OrangTua/Wali</label>
                                                                <div class="col-sm-8">
                                                                    <input type="number" class="form-control"
                                                                        name="penghasilan_wali" required value="{{ Auth::user()->waliStudent->penghasilan_wali }}">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="nohp_wali"
                                                                    class="col-sm-4 col-form-label">Nomor Hp
                                                                    OrangTua/Wali</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control"
                                                                        name="nohp_wali" required value="{{ Auth::user()->waliStudent->nohp_wali }}">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="status_wali"
                                                                    class="col-sm-4 col-form-label">Status
                                                                    OrangTua/Wali</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control"
                                                                        name="status_wali" required value="{{ Auth::user()->waliStudent->status_wali }}">
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3 p-2">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Update
                                                                    Pendaftaran</button>
                                                            </div>

                                                        </form><!-- End Form Pendaftaran -->
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title text-danger"> Pemberitahuan!</h5>
                                                        <h6 class="text-danger">Mohon lengkapi dan cek data anda
                                                            dengan seksama!</h6>
                                                        <ol>
                                                            <li>Kesalahan dalam penginputan data atau terdapat data
                                                                yang tidak sesuai dapat berupa penolakan !</li>
                                                            <li>Pemalsuan data dapat berupa blacklist dalam
                                                                pendaftaran</li>
                                                        </ol>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                        <section id="daftar" class="daftar">
                                            <div class="container" data-aos="fade-up">
                                                <section class="section">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <center>
                                                                        <h5 class="card-title text-success"> Data Wali
                                                                            Telah Diterima</h5>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </section>
                                    @endif
                                </div>
                                {{-- Form Pas Foto dan Ijazah/SKL --}}
                                <div class="tab-pane fade profile-edit" id="raport">
                                    @if ($ijazah->count() == 0)
                                        <section class="section">
                                            <div class="row">
                                                <div class="col-lg-9">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title">Formulir Pas Foto, Ijazah/SKL</h5>
                                                            <!-- Form Pendaftaran -->
                                                            <form action="{{ route('ijazah.store') }}" method="POST"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row mb-3">
                                                                    <label for="pas_foto"
                                                                        class="col-sm-4 col-form-label">File
                                                                        Pas Foto</label>
                                                                    <div class="col-sm-8">
                                                                        <input class="form-control" type="file"
                                                                            id="formFile" name="pas_foto" required>
                                                                        <div class="form-text">Upload Pas Foto Kamu
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="file_ijazah"
                                                                        class="col-sm-4 col-form-label">File
                                                                        Ijzah/SKL</label>
                                                                    <div class="col-sm-8">
                                                                        <input class="form-control" type="file"
                                                                            id="formFile" name="file_ijazah"
                                                                            required>
                                                                        <div class="form-text">Upload File Ijzah/SKL
                                                                            Kamu</div>
                                                                    </div>
                                                                </div>

                                                                <div class="row mb-3 p-2">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Submit
                                                                        Pendaftaran</button>
                                                                </div>

                                                            </form><!-- End Form Pendaftaran -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title text-danger"> Pemberitahuan!</h5>
                                                            <h6 class="text-danger">Mohon lengkapi dan cek data anda
                                                                dengan seksama!</h6>
                                                            <ol>
                                                                <li>Kesalahan dalam penginputan data atau terdapat data
                                                                    yang tidak sesuai dapat berupa penolakan !</li>
                                                                <li>Pemalsuan data dapat berupa blacklist dalam
                                                                    pendaftaran</li>
                                                            </ol>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    @else
                                        <section id="daftar" class="daftar">
                                            <div class="container" data-aos="fade-up">
                                                <section class="section">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <center>
                                                                        <h5 class="card-title text-danger"> Data Ijazah
                                                                            Telah Diterima</h5>
                                                                    </center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </section>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </section>
                @endif
            @endif
        @endif

        <!-- ======= Clients Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="zoom-out">
                <div class="section-header">
                    <h2>Tentang Kami</h2>
                    {{-- <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat
                        sunt id nobis omnis tiledo stran delop</p> --}}
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <h3>SMA N 2 Pasaman, Kabupaten Pasaman Barat</h3>
                        <img src="{{ asset('Impact') }}/assets/img/gambar2.jpg" class="img-fluid rounded-4 mb-4"
                            alt="">
                        <p>SMA N 2 Pasaman adalah sebuah lembaga sekolah SMA negeri yang berlokasi di Batang Toman, Kab. Pasaman Barat..</p>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="content ps-0 ps-lg-5">
                            <p>SMA negeri ini berdiri sejak 2013. Saat ini SMA N 2 Pasaman masih menggunakan program kurikulum belajar SMA 2013 MIPA. SMA N 2 Pasaman dipimpin oleh seorang kepala sekolah yang bernama Gustirizal dan operator sekolah Trio Putra.</p>
                            <h4>
                                <b>
                                    Akreditasi SMA N 2 Pasaman
                                </b>
                            </h4>
                            <p>
                                SMA N 2 Pasaman memiliki akreditasi grade A dengan nilai (akreditasi tahun 2020) dari BAN-S/M (Badan Akreditasi Nasional) Sekolah/Madrasah.
                            </p>

                            <div class="position-relative mt-4">
                                <img src="{{ asset('Impact') }}/assets/img/gambar3.jpg" class="img-fluid rounded-4"
                                    alt="">
                                {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('Impact') }}/assets/img/clients/client-1.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('Impact') }}/assets/img/clients/client-2.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('Impact') }}/assets/img/clients/client-3.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('Impact') }}/assets/img/clients/client-4.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('Impact') }}/assets/img/clients/client-5.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('Impact') }}/assets/img/clients/client-6.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('Impact') }}/assets/img/clients/client-7.png"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('Impact') }}/assets/img/clients/client-8.png"
                                class="img-fluid" alt=""></div>
                    </div>
                </div> --}}

            </div>
        </section><!-- End Clients Section -->

        {{-- <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <img src="{{ asset('Impact') }}/assets/img/stats-img.svg" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> consequuntur quae diredo para mesta</p>
                        </div><!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> adipisci atque cum quia aut</p>
                        </div><!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> aut commodi quaerat</p>
                        </div><!-- End Stats Item -->

                    </div>

                </div>

            </div>
        </section><!-- End Stats Counter Section --> --}}

        {{-- <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </section><!-- End Call To Action Section --> --}}

        {{-- <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat
                        sunt id nobis omnis tiledo stran delop</p>
                </div>

                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <h3>Nesciunt Mete</h3>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores
                                iure perferendis tempore et consequatur.</p>
                            <a href="#" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <h3>Eosle Commodi</h3>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum
                                hic non ut nesciunt dolorem.</p>
                            <a href="#" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-easel"></i>
                            </div>
                            <h3>Ledo Markt</h3>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                                voluptas adipisci eos earum corrupti.</p>
                            <a href="#" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <h3>Asperiores Commodit</h3>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga
                                sit provident adipisci neque.</p>
                            <a href="#" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-calendar4-week"></i>
                            </div>
                            <h3>Velit Doloremque</h3>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed
                                animi at autem alias eius labore.</p>
                            <a href="#" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-chat-square-text"></i>
                            </div>
                            <h3>Dolori Architecto</h3>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                Corrupti recusandae ducimus enim.</p>
                            <a href="#" class="readmore stretched-link">Read more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Our Services Section --> --}}

        {{-- <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti
                        fignissimos eos quam</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('Impact') }}/Assets/img/testimonials/testimonials-1.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Saul Goodman</h3>
                                            <h4>Ceo &amp; Founder</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('Impact') }}/Assets/img/testimonials/testimonials-2.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Sara Wilsson</h3>
                                            <h4>Designer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                        irure amet legam anim culpa.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('Impact') }}/Assets/img/testimonials/testimonials-3.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Jena Karlis</h3>
                                            <h4>Store Owner</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis
                                        sint minim.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('Impact') }}/Assets/img/testimonials/testimonials-4.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Matt Brandon</h3>
                                            <h4>Freelancer</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem dolore.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('Impact') }}/Assets/img/testimonials/testimonials-5.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>John Larson</h3>
                                            <h4>Entrepreneur</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse veniam culpa fore.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section --> --}}

        {{-- <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Portfolio</h2>
                    <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et
                        autem uia reprehenderit sunt deleniti</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                    <div>
                        <ul class="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-product">Product</li>
                            <li data-filter=".filter-branding">Branding</li>
                            <li data-filter=".filter-books">Books</li>
                        </ul><!-- End Portfolio Filters -->
                    </div>

                    <div class="row gy-4 portfolio-container">

                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/app-1.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/app-1.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/product-1.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/product-1.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/branding-1.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/branding-1.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">Branding 1</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/books-1.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/books-1.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/app-2.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/app-2.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">App 2</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/product-2.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/product-2.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">Product 2</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/branding-2.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/branding-2.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">Branding 2</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/books-2.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/books-2.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">Books 2</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/app-3.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/app-3.jpg" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">App 3</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/product-3.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/product-3.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">Product 3</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/branding-3.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/branding-3.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">Branding 3</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                            <div class="portfolio-wrap">
                                <a href="{{ asset('Impact') }}/Assets/img/portfolio/books-3.jpg"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('Impact') }}/Assets/img/portfolio/books-3.jpg"
                                        class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="portfolio-details.html" title="More Details">Books 3</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Section --> --}}

        {{-- <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Team</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                        quis dolorem dolore earum</p>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="{{ asset('Impact') }}/Assets/img/team/team-1.jpg" class="img-fluid"
                                alt="">
                            <h4>Walter White</h4>
                            <span>Web Development</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="{{ asset('Impact') }}/Assets/img/team/team-2.jpg" class="img-fluid"
                                alt="">
                            <h4>Sarah Jhinson</h4>
                            <span>Marketing</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="{{ asset('Impact') }}/Assets/img/team/team-3.jpg" class="img-fluid"
                                alt="">
                            <h4>William Anderson</h4>
                            <span>Content</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="{{ asset('Impact') }}/Assets/img/team/team-4.jpg" class="img-fluid"
                                alt="">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>
        </section><!-- End Our Team Section --> --}}

        {{-- <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pricing</h2>
                    <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat
                        sunt id nobis omnis tiledo stran delop</p>
                </div>

                <div class="row g-4 py-lg-5" data-aos="zoom-out" data-aos-delay="100">

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Free Plan</h3>
                            <div class="icon">
                                <i class="bi bi-box"></i>
                            </div>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span>
                                </li>
                                <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis
                                        hendrerit</span></li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item featured">
                            <h3>Business Plan</h3>
                            <div class="icon">
                                <i class="bi bi-airplane"></i>
                            </div>

                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4">
                        <div class="pricing-item">
                            <h3>Developer Plan</h3>
                            <div class="icon">
                                <i class="bi bi-send"></i>
                            </div>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bi bi-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bi bi-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bi bi-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bi bi-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>
        </section><!-- End Pricing Section --> --}}

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="content px-xl-5">
                            <h3><strong>Pertanyaan</strong> yang Sering Diajukan ?</h3>
                            <p>
                                PPDB Online SMAN 2 PASAMAN
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up"
                            data-aos-delay="100">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                        <span class="num">1.</span>
                                        Jika ada permasalahan, kemana harus disampaikan?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Pengaduan dapat disampaikan secara bertahap melalui kontak yang tersedia, dapat juga ke lokasi Sekolah tergantung jenis permasalahannya.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                        <span class="num">2.</span>
                                        Apa saja dokumen yang harus disiapkan?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        1. Ijazah/Surat Keterangan Lulus <br>
                                        2. Akta Kelahiran/Surat Keterangan Lahir  <br>
                                        3. Kartu Keluarga (minimal satu tahun)  <br>
                                        4. Buku Rapor (semester 1 s.d. 5)  <br>
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                        <span class="num">3.</span>
                                        Apa Perbedaan PPDB Tahun ini dan Tahun Sebelumnya?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse"
                                    data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Secara umum, dari regulasi tidak banyak perubahan.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        {{-- <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Recent Blog Posts</h2>
                    <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel
                        architecto accusamus fugit aut qui distinctio</p>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('Impact') }}/Assets/img/blog/blog-1.jpg" alt=""
                                    class="img-fluid">
                            </div>

                            <p class="post-category">Politics</p>

                            <h2 class="title">
                                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('Impact') }}/Assets/img/blog/blog-author.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Maria Doe</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jan 1, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('Impact') }}/Assets/img/blog/blog-2.jpg" alt=""
                                    class="img-fluid">
                            </div>

                            <p class="post-category">Sports</p>

                            <h2 class="title">
                                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('Impact') }}/Assets/img/blog/blog-author-2.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Allisa Mayer</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 5, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <article>

                            <div class="post-img">
                                <img src="{{ asset('Impact') }}/Assets/img/blog/blog-3.jpg" alt=""
                                    class="img-fluid">
                            </div>

                            <p class="post-category">Entertainment</p>

                            <h2 class="title">
                                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et
                                    soluta</a>
                            </h2>

                            <div class="d-flex align-items-center">
                                <img src="{{ asset('Impact') }}/Assets/img/blog/blog-author-3.jpg" alt=""
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Mark Dower</p>
                                    <p class="post-date">
                                        <time datetime="2022-01-01">Jun 22, 2022</time>
                                    </p>
                                </div>
                            </div>

                        </article>
                    </div><!-- End post list item -->

                </div><!-- End recent posts list -->

            </div>
        </section><!-- End Recent Blog Posts Section --> --}}

        {{-- <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Contact</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt
                        quis dolorem dolore earum</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Lingkuang Aua, Kec. Pasaman, Kabupaten Pasaman Barat, Sumatera Barat.</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>infosman2pasaman@ppdb.ac.id</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open Hours:</h4>
                                    <p>Mon-Sat: 08AM - 23PM</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section --> --}}

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                        <span>PPDB SMAN 2 PASAMAN</span>
                    </a>
                    <h5>Daftarkan diri mu sekarang!</h5>
                </div>

                {{-- <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div> --}}

                <div class="col-lg-4 col-6 footer-links">
                    <h4>Lokasi</h4>
                    <p>
                        Lingkuang Aua, Kec. Pasaman, Kabupaten Pasaman Barat, Sumatera Barat 26566
                    </p>
                    {{-- <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul> --}}
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak</h4>
                    <p>
                        <strong>Phone:</strong> 0812XXXXXXXX<br>
                        <strong>Email:</strong> info@ppdb.ac.id<br>
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>PPDB SMAN 2 PASAMAN</span></strong>. All Rights Reserved
            </div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Impact') }}/Assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Impact') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ asset('Impact') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('Impact') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('Impact') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('Impact') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ asset('Impact') }}/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Impact') }}/assets/js/main.js"></script>

</body>

</html>
