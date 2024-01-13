<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>Semapor</title>

    <!-- SEO meta tags -->
    <meta name="description" content="Author: Marvel Theme, AI content writing and copywriting html5 and Bootstrap 5 landing page template" />

    <!-- Favicon -->

    <link rel="icon" href="{{ URL::asset('build/images/images-landing/ssc-logo-only-biru.svg') }}" type="image/svg+xml" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('build/css/style.css') }}" />
</head>

<body>
    <div class="wrapper d-flex flex-column justify-between">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top bg-hover-scroll on-over">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="/index-lite">
                    <img src="{{ URL::asset('build/images/images-landing/semapor-logo-text.png') }}" alt="" width="165" />

                </a>

                <!-- Navbar toggler button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="navbar-toggler-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>

                <!-- Navbar content -->
                <div class="collapse navbar-collapse" id="navbarContent">
                    <div class="navbar-content-inner ms-lg-auto d-flex flex-column flex-lg-row align-lg-center gap-4 gap-lg-10 p-2 p-lg-0">
                        <ul class="navbar-nav gap-lg-2 gap-xl-5">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#beranda">
                                    Beranda
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#tentang">
                                    Tentang
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#fitur">
                                    Fitur
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#pendiri">
                                    Pendiri
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#testimoni">
                                    Testimoni
                                </a>
                            </li>
                        </ul>
                        <div class="">
                            @if(session('user'))
                                <a href="/dashboard" class="btn btn-outline-primary">Dashboard</a>
                            @else
                                <a href="/login" class="btn btn-outline-primary">Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>


        <main class="flex-grow-1">
            <!-- Hero -->
            <section class="hero-section style-1 overflow-hidden pt-30 pb-15 pb-lg-20 pt-xl-36" id="beranda">
                <div class="container">
                    <div class="row justify-center">
                        <div class="col-lg-9">
                            <div class="text-center">
                                <div class="position-relative z-1">
                                    <!-- <p class="text-primary" data-aos="fade-up-sm">
                                        Semapor
                                    </p> -->
                                    <h1 class="text-dark mb-8" data-aos="fade-up-sm" data-aos-delay="150">
                                        Lapor Permasalahanmu Terkait<br />

                                        <span
								class="fw-bold text-gradient-1 typed-animation"
								data-strings='[
                                "Kemacetan Lalu Lintas",
                                "Pelecehan Seksual",
                                "Limbah dan Pencemaran Lingkungan",
                                "Kriminalitas",
                                "Kurangnya Ruang Hijau",
                                "Jalanan Rusak",
                                "Dan Lain-lain"
                                ]'
								>Jalanan Rusak</span>

                                    </h1>
                                    <a href="/" class="btn btn-lg btn-gradient-1" data-aos="fade-up-sm" data-aos-delay="200">Lapor Sekarang</a>
                                </div>
                                <div data-aos="fade-up-sm" data-aos-delay="300">
                                    <div class="image-with-shape">
                                        <img src="{{ URL::asset('build/images/images-landing/shapes/blurry-shape-1.svg') }}" alt="" class="shape animate-scale" />
                                        
                                        <div class="mt-12 rounded-5 border border-primary shadow-lg overflow-hidden position-relative z-1">
                                            <img class="img-fluid d-inline-block" src="{{ URL::asset('build/images/images-landing/ss-hero-image.png') }}" alt="" />
                                        </div>

                                    </div>
                                </div>
                                <!-- <ul class="d-flex flex-wrap gap-4 gap-md-8 gap-lg-10 align-center justify-center mt-8 mb-0">
                                    <li>Respon Cepat Tanggap</li>
                                    <li>Desain Minimalis</li>
                                    <li>Kemudahan Penggunaan</li>
                                </ul> -->
                                <!-- <div class="d-flex gap-8 align-center justify-center mt-12 review-badges">
                                    <img class="img-fluid" src="assets/images/review-logos/trustpilot_reviews_2.svg" alt="" />
                                    <img class="img-fluid" src="assets/images/review-logos/capterra_reviews_2.svg" alt="" />
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tentang -->
            <section class="py-15 @extraClassList" id="tentang">
                <div class="container">
                    <div class="row g-6 gx-lg-14 gx-xl-20 align-center">
                        <div class="col-lg-7" data-aos="fade-up-sm" data-aos-delay="150">
                            <div class="content">
                                <!-- <p class="text-primary">Features 1</p> -->
                                <h1 class="mb-0 fw-bold" data-aos="fade-up-sm" data-aos-delay="50">
                                    <span class="text-gradient-1">Semapor</span>
                                </h1> 

                                <p class="mb-6" style="text-align: justify;">
                                    
                                    Aplikasi <span class="text-gradient-1 fw-bold">Semapor (Semarang Lapor)</span> merupakan solusi modern untuk memperkuat partisipasi masyarakat dalam membangun Kota Semarang yang lebih baik. Dengan fokus pada <span class="text-gradient-1 fw-bold"> pelaporan dan pemantauan permasalahan di Kota Semarang,</span> aplikasi ini dirancang untuk memberikan kemudahan akses melalui platform berbasis website.
                                    <!-- <br><br>
                                    Pengguna dapat dengan mudah <span class="text-gradient-1 fw-bold"> melaporkan berbagai permasalahan </span> yang mereka temui sehari-hari, seperti kerusakan infrastruktur, masalah kebersihan, dan keamanan di Kota Semarang. Formulir pelaporan yang sederhana dan intuitif memastikan bahwa warga dapat menyampaikan informasi dengan <span class="text-gradient-1 fw-bold">cepat dan efisien.</span> -->
                                </p>

                                <!-- <ul class="list-unstyled list-check mb-8">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" class="icon">
                                            <g>
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m3.75 9 3.75 3.75 7.5-7.5" />
                                            </g>
                                        </svg>
                                        <span>Pelaporan Permasalahan</span>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" class="icon">
                                            <g>
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m3.75 9 3.75 3.75 7.5-7.5" />
                                            </g>
                                        </svg>
                                        <span>Pemetaan Interaktif</span>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" class="icon">
                                            <g>
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m3.75 9 3.75 3.75 7.5-7.5" />
                                            </g>
                                        </svg>
                                        <span>Status Pelaporan</span>
                                    </li>
                                </ul> -->
                                <!-- <a href="login.html" class="arrow-link arrow-link-primary text-primary gap-3">
                                    <span>Get Started Free</span>
                                    <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 12.6667L12.6667 4M12.6667 4V12.32M12.6667 4H4.34667" stroke="currentColor" stroke-width="1.21" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a> -->
                            </div>
                        </div>
                        <div class="col-lg-5" data-aos="fade-up-sm" data-aos-delay="250">
                            <div class="feature-img text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="250.000000pt" height="250.000000pt" viewBox="0 0 75.000000 85.000000" preserveAspectRatio="xMidYMid meet">
                                    <g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)" fill="#1F58C7" stroke="none">
                                    <path d="M200 725 l-175 -103 -3 -89 -3 -88 236 -135 235 -134 -57 -33 c-50 -28 -60 -31 -78 -19 -41 27 -322 186 -329 186 -3 0 -6 -24 -6 -52 l0 -53 180 -103 179 -103 178 104 178 105 0 87 0 87 -225 130 c-124 71 -228 133 -232 137 -4 3 17 19 46 35 l54 29 177 -102 c97 -55 179 -101 181 -101 2 0 4 24 4 54 l0 54 -177 102 c-98 57 -180 104 -183 105 -3 1 -84 -44 -180 -100z m212 -267 l229 -133 -3 -33 c-2 -23 -11 -38 -28 -48 -24 -15 -32 -11 -235 107 -116 67 -220 128 -232 135 -42 26 -23 103 26 104 8 0 117 -60 243 -132z"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features -->
            <!-- <section id="fitur">
                <div class="container">
                    <div class="text-center mb-18">
                        <h1 class="mb-0 fw-bold text-gradient-1" data-aos="fade-up-sm" data-aos-delay="50">
                            Fitur
                        </h1>
                    </div>

                    <div class="row g-6 g-xl-14">
                        <div class="col-lg-4" data-aos="fade-up-sm" data-aos-delay="200">
                            <div class="d-flex flex-column gap-6 flex-lg-row">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M30.167 10c-1.833 4.855-3.167 8.188-4 10m0 0c-3.132 6.813-6.188 10-10 10-4 0-8-4-8-10s4-10 8-10c3.778 0 6.892 3.31 10 10Zm0 0c.853 1.837 2.187 5.17 4 10" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h4 class="mb-4 ">Pelaporan Permasalahan</h4>
                                    <p>
                                        Pengguna dapat dengan mudah melaporkan permasalahan seperti kerusakan infrastruktur, kebersihan, keamanan, atau masalah-masalah lain yang perlu perhatian pemerintah kota.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up-sm" data-aos-delay="250">
                            <div class="d-flex flex-column gap-6 flex-lg-row">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M3.333 20 20 32.37 36.666 20" />
                                            <path d="M11.667 15 20 21.667 28.334 15m-10.001-5L20 11.333 21.666 10 20 8.666 18.333 10Z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h4 class="mb-4 ">Pemetaan Interaktif</h4>
                                    <p>
                                        Aplikasi menyediakan pemetaan interaktif yang memungkinkan pengguna melihat lokasi permasalahan yang dilaporkan, memberikan gambaran visual yang jelas kepada pemerintah dan masyarakat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4" data-aos="fade-up-sm" data-aos-delay="300">
                            <div class="d-flex flex-column gap-6 flex-lg-row">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M10 29.334 6.667 27.5v-4.166m0-6.668V12.5L10 10.666m6.667-3.833L20 5l3.334 1.833M30 10.666l3.333 1.834v4.166m0 6.668V27.5L30 29.367m-6.666 3.799L20 35l-3.333-1.834M20 20l3.333-1.834M30 14.333l3.333-1.833M20 20v4.167m0 6.667V35m0-15-3.333-1.867M10 14.333 6.667 12.5" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content">
                                    <h4 class="mb-4 ">Status Pelaporan</h4>
                                    <p>
                                        Pengguna dapat melacak status pelaporan mereka, mulai dari pengajuan hingga penyelesaian. Informasi ini memberikan transparansi kepada masyarakat tentang progres penanganan permasalahan.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- Features Section -->
            <section class="py-15 @extraClassList" id="fitur">
                <div class="container">
                    <h1 class="mb-0 fw-bold text-center" data-aos="fade-up-sm" data-aos-delay="50">
                        Fitur Utama <br> <span class="text-gradient-1">Semapor</span>
                    </h1>
                    <div class="row g-6 gx-lg-14 gx-xl-20 align-center">
                        <div class="col-lg-6" data-aos="fade-up-sm" data-aos-delay="150">
                            <div class="content">
                                <h4 class="text-gradient-1">Fitur 1</h4>
                                <h1 class="">
                                    Pelaporan Permasalahan
                                </h1>
                                <p class="" style="text-align: justify;">
                                    Laporkan permasalahan seperti kerusakan infrastruktur, kebersihan, keamanan, atau masalah-masalah lain yang perlu perhatian pemerintah kota.
                                </p>
                                <!-- <ul class="list-unstyled list-check mb-8">
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" class="icon">
                                            <g>
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m3.75 9 3.75 3.75 7.5-7.5" />
                                            </g>
                                        </svg>
                                        <span>Formulir pelaporan yang mudah diakses dan diisi.</span>
                                    </li>
                                    <li>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18" class="icon">
                                            <g>
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m3.75 9 3.75 3.75 7.5-7.5" />
                                            </g>
                                        </svg>
                                        <span
								>Gambar atau video sebagai bukti tambahan.</span>
                                    </li>
                                </ul> -->
                                <!-- <a href="login.html" class="arrow-link arrow-link-primary text-primary gap-3">
                                    <span>Get Started Free</span>
                                    <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 12.6667L12.6667 4M12.6667 4V12.32M12.6667 4H4.34667" stroke="currentColor" stroke-width="1.21" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a> -->
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up-sm" data-aos-delay="250">
                            <div class="feature-img">
                                <img src="{{ URL::asset('build/images/images-landing/illustrations/feature-illustration-1-blue.svg') }}" alt="" class="img-fluid" />
                                
                            </div>
                        </div>
                    </div>
                    <div class="row g-6 gx-lg-14 gx-xl-20 align-center flex-row-reverse">
                        <div class="col-lg-6 col-xl-6" data-aos="fade-up-sm" data-aos-delay="150">
                            <div class="content">
                                <h4 class="text-gradient-1">Fitur 2</h4>
                                <h1 class="">
                                    Pemetaan Interaktif
                                </h1>
                                <p class="" style="text-align: justify;">
                                    Menyediakan pemetaan interaktif yang memungkinkan pengguna melihat lokasi permasalahan yang dilaporkan, memberikan gambaran visual yang jelas kepada pemerintah dan masyarakat.
                                </p>
                                
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up-sm" data-aos-delay="250">
                            <div class="feature-img">
                                <img src="{{ URL::asset('build/images/images-landing/illustrations/feature-illustration-2-blue.svg') }}" alt="" class="img-fluid" />
                                
                            </div>
                        </div>
                    </div>
                    <div class="row g-6 gx-lg-14 gx-xl-20 align-center">
                        <div class="col-lg-6" data-aos="fade-up-sm" data-aos-delay="150">
                            <div class="content">
                                <h4 class="text-gradient-1">Fitur 3</h4>
                                <h1 class="">
                                    Status Pelaporan
                                    <!-- <span class="text-primary">GenAI</span>. -->
                                </h1>
                                <p class="" style="text-align: justify;">
                                    Pengguna dapat melacak status pelaporan mereka, mulai dari pengajuan hingga penyelesaian. Informasi ini memberikan transparansi kepada masyarakat tentang progres penanganan permasalahan.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up-sm" data-aos-delay="250">
                            <div class="feature-img">
                                <img src="{{ URL::asset('build/images/images-landing/illustrations/feature-illustration-3-blue.svg') }}" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Use cases -->
            <!-- <section class="bg-striped bg-striped-sm bg-striped-bottom bg-lite-blue py-20 py-lg-30">
                <div class="container">
                    <div class="row justify-center mb-18">
                        <div class="col-lg-9">
                            <div class="text-center">
                                <p class="text-primary" data-aos="fade-up-sm" data-aos-delay="50">
                                    GenAI Use Cases
                                </p>
                                <h1 class=" mb-0" data-aos="fade-up-sm" data-aos-delay="100">
                                    Write Better Content Faster, The Future Of AI Writing Tools is Here
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-center row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 gx-8 gy-14">
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="150">
                            <div class="d-flex flex-column justify-between gap-6 h-full">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 40 40">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M13.333 35h13.334A8.333 8.333 0 0 0 35 26.667v-5a5 5 0 0 0-5-5h-1.667v-3.334A8.333 8.333 0 0 0 20 5h-6.667A8.333 8.333 0 0 0 5 13.333v13.334A8.333 8.333 0 0 0 13.333 35Z" />
                                            <path d="M11.667 14.167a2.5 2.5 0 0 1 2.5-2.5h5a2.5 2.5 0 1 1 0 5h-5a2.5 2.5 0 0 1-2.5-2.5Zm0 11.666a2.5 2.5 0 0 1 2.5-2.5h11.666a2.5 2.5 0 1 1 0 5H14.167a2.5 2.5 0 0 1-2.5-2.5Z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content flex-grow-1">
                                    <h5 class=" mb-4">Writing Blog Content</h5>
                                    <p class="mb-0">
                                        Writing blog content with GenAI, make sure you have a clear understanding of who your
                                        audience is.
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="use-cases-details.html" class="arrow-link arrow-link-primary gap-3 fs-sm">
                                        <span>Try Blog Content</span>
                                        <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 12.6667L12.6667 4M12.6667 4V12.32M12.6667 4H4.34667" stroke="currentColor" stroke-width="1.21" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="200">
                            <div class="d-flex flex-column justify-between gap-6 h-full">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M8 18.667a5.333 5.333 0 0 1 5.333-5.334h37.334A5.334 5.334 0 0 1 56 18.667v26.666a5.333 5.333 0 0 1-5.333 5.334H13.333A5.333 5.333 0 0 1 8 45.333V18.667Z" />
                                            <path d="M18.667 40V29.333a5.334 5.334 0 0 1 10.666 0V40m-10.666-5.333h10.666m16-10.667v16h-4a4 4 0 1 1 4-4" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content flex-grow-1">
                                    <h5 class=" mb-4">Digital Ad Copy</h5>
                                    <p class="mb-0">
                                        A Magical Tool to Optimize you content for the first know who you're targeting. Identify
                                        your target.
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="use-cases-details.html" class="arrow-link arrow-link-primary gap-3 fs-sm">
                                        <span>Try Digital Ad</span>
                                        <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 12.6667L12.6667 4M12.6667 4V12.32M12.6667 4H4.34667" stroke="currentColor" stroke-width="1.21" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="250">
                            <div class="d-flex flex-column justify-between gap-6 h-full">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M10.667 13.333a2.667 2.667 0 0 1 2.666-2.666h37.334a2.667 2.667 0 0 1 2.666 2.666v37.334a2.667 2.667 0 0 1-2.666 2.666H13.333a2.667 2.667 0 0 1-2.666-2.666V13.333Zm0 8h42.666m-32-10.666v10.666" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content flex-grow-1">
                                    <h5 class=" mb-4">Website Copy</h5>
                                    <p class="mb-0">
                                        Optimize you content for the first know who you're targeting. Identify your target audience.
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="use-cases-details.html" class="arrow-link arrow-link-primary gap-3 fs-sm">
                                        <span>Try Website Copy</span>
                                        <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 12.6667L12.6667 4M12.6667 4V12.32M12.6667 4H4.34667" stroke="currentColor" stroke-width="1.21" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="300">
                            <div class="d-flex flex-column justify-between gap-6 h-full">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M24 32a8 8 0 1 0 16.001 0A8 8 0 0 0 24 32Z" />
                                            <path d="M10.667 32a21.334 21.334 0 1 0 42.667 0 21.334 21.334 0 0 0-42.667 0ZM32 5.333v5.334m0 42.666v5.334M53.333 32h5.334M5.333 32h5.334" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content flex-grow-1">
                                    <h5 class=" mb-4">Social Media Content</h5>
                                    <p class="mb-0">
                                        First know who you're targeting. Identify your target audience and understand their needs.
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="use-cases-details.html" class="arrow-link arrow-link-primary gap-3 fs-sm">
                                        <span>Try Social Media Content</span>
                                        <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 12.6667L12.6667 4M12.6667 4V12.32M12.6667 4H4.34667" stroke="currentColor" stroke-width="1.21" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="150">
                            <div class="d-flex flex-column justify-between gap-6 h-full">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M34.667 13.333H56M34.667 24H48M34.667 40H56M34.667 50.667H48M8 13.333a2.667 2.667 0 0 1 2.667-2.666h10.666A2.667 2.667 0 0 1 24 13.333V24a2.667 2.667 0 0 1-2.667 2.667H10.667A2.667 2.667 0 0 1 8 24V13.333ZM8 40a2.667 2.667 0 0 1 2.667-2.667h10.666A2.667 2.667 0 0 1 24 40v10.667a2.667 2.667 0 0 1-2.667 2.666H10.667A2.667 2.667 0 0 1 8 50.667V40Z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content flex-grow-1">
                                    <h5 class=" mb-4">Landing Page Copy</h5>
                                    <p class="mb-0">
                                        First know who you're targeting. Identify your target audience and understand their needs.
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="use-cases-details.html" class="arrow-link arrow-link-primary gap-3 fs-sm">
                                        <span>Try Landing Page Copy</span>
                                        <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 12.6667L12.6667 4M12.6667 4V12.32M12.6667 4H4.34667" stroke="currentColor" stroke-width="1.21" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="200">
                            <div class="d-flex flex-column justify-between gap-6 h-full">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M8 13.333a2.667 2.667 0 0 1 2.667-2.666h42.666A2.667 2.667 0 0 1 56 13.333V40a2.667 2.667 0 0 1-2.667 2.667H10.667A2.667 2.667 0 0 1 8 40V13.333Zm10.667 40h26.666M24 42.667v10.666m16-10.666v10.666M24 32v-3.2m8 3.2v-5.6m8 5.6V21.6" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content flex-grow-1">
                                    <h5 class=" mb-4">Marketing Copy</h5>
                                    <p class="mb-0">
                                        A Magical Tool to Optimize you content for the first know who you're targeting. Identify
                                        your target.
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="use-cases-details.html" class="arrow-link arrow-link-primary gap-3 fs-sm">
                                        <span>Try Marketing Copy</span>
                                        <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 12.6667L12.6667 4M12.6667 4V12.32M12.6667 4H4.34667" stroke="currentColor" stroke-width="1.21" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="250">
                            <div class="d-flex flex-column justify-between gap-6 h-full">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M10.667 21.333a10.667 10.667 0 0 1 10.666-10.666h21.334a10.667 10.667 0 0 1 10.666 10.666v21.334a10.667 10.667 0 0 1-10.666 10.666H21.333a10.667 10.667 0 0 1-10.666-10.666V21.333Z" />
                                            <path d="M24 21.333a8 8 0 0 0 16 0" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content flex-grow-1">
                                    <h5 class=" mb-4">eCommerce Copy</h5>
                                    <p class="mb-0">
                                        Writing blog content with GenAI, make sure you have a clear understanding of who your
                                        audience is.
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="use-cases-details.html" class="arrow-link arrow-link-primary gap-3 fs-sm">
                                        <span>Try eCommerce Copy</span>
                                        <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 12.6667L12.6667 4M12.6667 4V12.32M12.6667 4H4.34667" stroke="currentColor" stroke-width="1.21" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-sm" data-aos-delay="300">
                            <div class="d-flex flex-column justify-between gap-6 h-full">
                                <div class="icon w-14 h-14 flex-shrink-0 d-flex align-center justify-center rounded-3 p-2 border bg-primary bg-opacity-10 text-primary border-primary border-opacity-25">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 64 64">
                                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M32 10.667 10.667 21.333 32 32l21.333-10.667L32 10.667ZM10.667 32 32 42.667 53.333 32M10.667 42.667 32 53.333l21.333-10.666" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="content flex-grow-1">
                                    <h5 class=" mb-4">Product Description</h5>
                                    <p class="mb-0">
                                        Optimize you content for the first know who you're targeting. Identify your target audience.
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="use-cases-details.html" class="arrow-link arrow-link-primary gap-3 fs-sm">
                                        <span>Try Product Description</span>
                                        <svg class="icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 12.6667L12.6667 4M12.6667 4V12.32M12.6667 4H4.34667" stroke="currentColor" stroke-width="1.21" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- Founder -->
            <section class="pb-15 pb-lg-15" id="pendiri">
                <div class="container">
                    <div class="row justify-center mb-10">
                        <div class="col-lg-10">
                            <div class="text-center">
                                <h1 class="fw-bold text-center" data-aos="fade-up-sm" data-aos-delay="50">
                                    <span class="text-gradient-1">Semapor</span> Didirikan Oleh
                                </h1>
                                
                                <!-- <p class="mb-0" data-aos="fade-up-sm" data-aos-delay="150">
                                    Get started with a 5-day trial, Cancel anytime.
                                </p> -->
                                
                            </div>
                        </div>
                    </div>
                    <div class="row g-6 pricing-table">
                        <div class="col-md-6 col-lg-4" data-aos="fade-up-sm" data-aos-delay="50">
                            <div class="pricing-card p-6 px-lg-10 py-lg-8 rounded-4 bg-whitedark" style="height: 450px;">
                                <h5 class="text-center text-gradient-1 fw-bold mb-3">
                                    Ekky Mulia Lasardi
                                </h5>
                                <!-- <h1 class="display-2 fw-semibold  mb-0 mt-4">$00</h1> -->
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <img src="{{ URL::asset('build/images/images-landing/founder-ekky.jpg') }}" style="height: 250px; width: 250px; object-fit: cover;" class="rounded-3" alt="">
                                </div>
                                <p class="text-center lead fw-normal mt-4 mb-0">
                                    Full Stack Developer
                                </p>
                                <span class="pricing-btn btn btn-sm w-full fw-normal rounded-5 mt-2">IPB University</span>
                                <!-- <ul class="pricing-list d-flex flex-column gap-5 fs-lg mt-9 mb-0">
                                    <li>Single seats</li>
                                    <li>10,000 words per month</li>
                                    <li>30+ AI writing tools</li>
                                    <li>60+ Copywriting tools</li>
                                    <li>10+ languages</li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up-sm" data-aos-delay="50">
                            <div class="pricing-card p-6 px-lg-10 py-lg-8 rounded-4 bg-whitedark" style="height: 450px;">
                                <h5 class="text-center text-gradient-1 fw-bold mb-3">
                                    Mochammad Fadiil Thoriq
                                </h5>
                                <!-- <h1 class="display-2 fw-semibold  mb-0 mt-4">$00</h1> -->
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <img src="{{ URL::asset('build/images/images-landing/founder-thoriq.jpeg') }}" style="height: 250px; width: 250px; object-fit: cover;" class="rounded-3" alt="">
                                </div>
                                <p class="text-center lead fw-normal mt-4 mb-0">
                                    Full Stack Developer
                                </p>
                                <span class="pricing-btn btn btn-sm w-full fw-normal rounded-5 mt-2">IPB University</span>
                                <!-- <ul class="pricing-list d-flex flex-column gap-5 fs-lg mt-9 mb-0">
                                    <li>Single seats</li>
                                    <li>10,000 words per month</li>
                                    <li>30+ AI writing tools</li>
                                    <li>60+ Copywriting tools</li>
                                    <li>10+ languages</li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4" data-aos="fade-up-sm" data-aos-delay="50">
                            <div class="pricing-card p-6 px-lg-10 py-lg-8 rounded-4 bg-whitedark" style="height: 450px;">
                                <h5 class="text-center text-gradient-1 fw-bold mb-3">
                                    Naufal Rizqullah Firdaus
                                </h5>
                                <!-- <h1 class="display-2 fw-semibold  mb-0 mt-4">$00</h1> -->
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <img src="{{ URL::asset('build/images/images-landing/founder-naufal.jpg') }}" style="height: 250px; width: 250px; object-fit: cover;" class="rounded-3" alt="">
                                </div>
                                <p class="text-center lead fw-normal mt-4 mb-0">
                                    Full Stack Developer
                                </p>
                                <span class="pricing-btn btn btn-sm w-full fw-normal rounded-5 mt-2">IPB University</span>
                                <!-- <ul class="pricing-list d-flex flex-column gap-5 fs-lg mt-9 mb-0">
                                    <li>Single seats</li>
                                    <li>10,000 words per month</li>
                                    <li>30+ AI writing tools</li>
                                    <li>60+ Copywriting tools</li>
                                    <li>10+ languages</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reviews -->
            <section class="overflow-hidden py-15 py-lg-15" id="testimoni">
                <div class="container">
                    <div class="row justify-center mb-18">
                        <div class="col-lg-9">
                            <div class="text-center">
                                <h1 class="" data-aos="fade-up-sm" data-aos-delay="50">
                                    Apa Kata Mereka Tentang
                                    <span class="text-gradient-1">Semapor?</span>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="review-rolling-carousel-container">
                    <div class="swiper review-rolling-carousel">
                        <div class="swiper-wrapper rolling-carousel-wrapper">
                            <div class="swiper-slide h-auto">
                                <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                                    <div class="d-flex items-center gap-4 mb-6">
                                        <div class="w-12 h-12 rounded-circle overflow-hidden">
                                            <img src="{{ URL::asset('build/images/images-landing/review/1.png') }}" alt="" class="w-full h-full object-cover" />
                                            
                                        </div>
                                        <div class="">
                                            <h6 class=" mb-1">Ekky Mulia Lasardi</h6>
                                            <p class="mb-0 fs-sm">Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="stars d-flex items-center gap-1 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                        </div>
                                        <p class="review-text mb-0" style="text-align: justify;">
                                            Aplikasi Semapor sungguh memudahkan saya dalam melaporkan permasalahan di sekitar Kota Semarang. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                                    <div class="d-flex items-center gap-4 mb-6">
                                        <div class="w-12 h-12 rounded-circle overflow-hidden">
                                            <img src="{{ URL::asset('build/images/images-landing/review/2.png') }}" alt="" class="w-full h-full object-cover" />
                                        </div>
                                        <div class="">
                                            <h6 class=" mb-1">Mochammad Fadiil Thoriq</h6>
                                            <p class="mb-0 fs-sm">Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="stars d-flex items-center gap-1 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                        </div>
                                        <p class="review-text mb-0" style="text-align: justify;" style="text-align: justify;">
                                            Saya sangat terkesan dengan pemetaan interaktif dalam website ini. Melihat lokasi permasalahan secara visual memberikan pemahaman yang lebih baik tentang kondisi kota.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                                    <div class="d-flex items-center gap-4 mb-6">
                                        <div class="w-12 h-12 rounded-circle overflow-hidden">
                                            <img src="{{ URL::asset('build/images/images-landing/review/3.png') }}" alt="" class="w-full h-full object-cover" />
                                        </div>
                                        <div class="">
                                            <h6 class=" mb-1">Naufal Rizqullah Firdaus</h6>
                                            <p class="mb-0 fs-sm">Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="stars d-flex items-center gap-1 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                        </div>
                                        <p class="review-text mb-0" style="text-align: justify;" style="text-align: justify;">
                                            Aplikasi memberikan transparansi yang luar biasa terkait penanganan permasalahan. Dengan fitur status pelaporan real-time, saya selalu dapat melacak kemajuan dan mengetahui kapan permasalahan yang saya laporkan telah diatasi. Sangat membanggakan melihat respons cepat dari pemerintah Kota Semarang.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                                    <div class="d-flex items-center gap-4 mb-6">
                                        <div class="w-12 h-12 rounded-circle overflow-hidden">
                                            <img src="{{ URL::asset('build/images/images-landing/review/4.png') }}" alt="" class="w-full h-full object-cover" />
                                        </div>
                                        <div class="">
                                            <h6 class=" mb-1">Reza Pratama</h6>
                                            <p class="mb-0 fs-sm">Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="stars d-flex items-center gap-1 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                        </div>
                                        <p class="review-text mb-0" style="text-align: justify;">
                                            Semapor bukan hanya website pelaporan, tetapi juga alat untuk memberdayakan masyarakat. Dengan kemampuan kami untuk berkontribusi dalam pemantauan dan pemecahan permasalahan, saya merasa menjadi bagian dari upaya kolektif untuk memperbaiki kualitas hidup di Kota Semarang ini.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                                    <div class="d-flex items-center gap-4 mb-6">
                                        <div class="w-12 h-12 rounded-circle overflow-hidden">
                                            <img src="{{ URL::asset('build/images/images-landing/review/5.png') }}" alt="" class="w-full h-full object-cover" />
                                        </div>
                                        <div class="">
                                            <h6 class=" mb-1">Muhammad Al Amin</h6>
                                            <p class="mb-0 fs-sm">Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="stars d-flex items-center gap-1 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                        </div>
                                        <p class="review-text mb-0" style="text-align: justify;">
                                            Aplikasi ini membawa inovasi yang diperlukan dalam partisipasi masyarakat. Proses pelaporan yang cepat dan tanggap, dikombinasikan dengan fitur pemetaan dan transparansi, membuat Semapor menjadi langkah positif menuju kota yang lebih pintar dan responsif.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide h-auto">
                                <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                                    <div class="d-flex items-center gap-4 mb-6">
                                        <div class="w-12 h-12 rounded-circle overflow-hidden">
                                            <img src="{{ URL::asset('build/images/images-landing/review/1.png') }}" alt="" class="w-full h-full object-cover" />
                                            
                                        </div>
                                        <div class="">
                                            <h6 class=" mb-1">Ekky Mulia Lasardi</h6>
                                            <p class="mb-0 fs-sm">Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="stars d-flex items-center gap-1 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                        </div>
                                        <p class="review-text mb-0" style="text-align: justify;">
                                            Aplikasi Semapor sungguh memudahkan saya dalam melaporkan permasalahan di sekitar Kota Semarang. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                                    <div class="d-flex items-center gap-4 mb-6">
                                        <div class="w-12 h-12 rounded-circle overflow-hidden">
                                            <img src="{{ URL::asset('build/images/images-landing/review/2.png') }}" alt="" class="w-full h-full object-cover" />
                                        </div>
                                        <div class="">
                                            <h6 class=" mb-1">Mochammad Fadiil Thoriq</h6>
                                            <p class="mb-0 fs-sm">Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="stars d-flex items-center gap-1 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                        </div>
                                        <p class="review-text mb-0" style="text-align: justify;" style="text-align: justify;">
                                            Saya sangat terkesan dengan pemetaan interaktif dalam website ini. Melihat lokasi permasalahan secara visual memberikan pemahaman yang lebih baik tentang kondisi kota.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                                    <div class="d-flex items-center gap-4 mb-6">
                                        <div class="w-12 h-12 rounded-circle overflow-hidden">
                                            <img src="{{ URL::asset('build/images/images-landing/review/3.png') }}" alt="" class="w-full h-full object-cover" />
                                        </div>
                                        <div class="">
                                            <h6 class=" mb-1">Naufal Rizqullah Firdaus</h6>
                                            <p class="mb-0 fs-sm">Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="stars d-flex items-center gap-1 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                        </div>
                                        <p class="review-text mb-0" style="text-align: justify;" style="text-align: justify;">
                                            Aplikasi memberikan transparansi yang luar biasa terkait penanganan permasalahan. Dengan fitur status pelaporan real-time, saya selalu dapat melacak kemajuan dan mengetahui kapan permasalahan yang saya laporkan telah diatasi. Sangat membanggakan melihat respons cepat dari pemerintah Kota Semarang.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                                    <div class="d-flex items-center gap-4 mb-6">
                                        <div class="w-12 h-12 rounded-circle overflow-hidden">
                                            <img src="{{ URL::asset('build/images/images-landing/review/4.png') }}" alt="" class="w-full h-full object-cover" />
                                        </div>
                                        <div class="">
                                            <h6 class=" mb-1">Reza Pratama</h6>
                                            <p class="mb-0 fs-sm">Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="stars d-flex items-center gap-1 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                        </div>
                                        <p class="review-text mb-0" style="text-align: justify;">
                                            Semapor bukan hanya website pelaporan, tetapi juga alat untuk memberdayakan masyarakat. Dengan kemampuan kami untuk berkontribusi dalam pemantauan dan pemecahan permasalahan, saya merasa menjadi bagian dari upaya kolektif untuk memperbaiki kualitas hidup di Kota Semarang ini.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide h-auto">
                                <div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
                                    <div class="d-flex items-center gap-4 mb-6">
                                        <div class="w-12 h-12 rounded-circle overflow-hidden">
                                            <img src="{{ URL::asset('build/images/images-landing/review/5.png') }}" alt="" class="w-full h-full object-cover" />
                                        </div>
                                        <div class="">
                                            <h6 class=" mb-1">Muhammad Al Amin</h6>
                                            <p class="mb-0 fs-sm">Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="stars d-flex items-center gap-1 mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 15 14" class="w-4 h-4 text-primary">
                                                <path d="m4.824 4.225-4.253.617-.075.015A.667.667 0 0 0 .202 5.98l3.082 3-.727 4.236-.009.073a.667.667 0 0 0 .976.63l3.804-2 3.796 2 .066.03a.666.666 0 0 0 .902-.733l-.728-4.237 3.083-3 .052-.056a.667.667 0 0 0-.422-1.08l-4.253-.618L7.922.372a.667.667 0 0 0-1.196 0L4.824 4.225Z" />
                                            </svg>
                                        </div>
                                        <p class="review-text mb-0" style="text-align: justify;">
                                            Aplikasi ini membawa inovasi yang diperlukan dalam partisipasi masyarakat. Proses pelaporan yang cepat dan tanggap, dikombinasikan dengan fitur pemetaan dan transparansi, membuat Semapor menjadi langkah positif menuju kota yang lebih pintar dan responsif.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            

            <!-- FAQ -->
            <!-- <section class="py-10 py-lg-15">
                <div class="container">
                    <div class="row justify-center mb-18">
                        <div class="col-lg-10">
                            <div class="text-center">
                                <h1 class="mb-0 " data-aos="fade-up-sm" data-aos-delay="50">
                                    Questions About our GenAI? <br class="d-none d-md-block" />
						We have Answers!
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-center">
                        <div class="col-lg-8" data-aos="fade-up-sm" data-aos-delay="100">
                            <div class="accordion accordion-flush d-flex flex-column gap-6" id="faqAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseOne" aria-expanded="false" aria-controls="faq-collapseOne">
                                            <span class="icon"></span>
                                            What Is GenAI Content Writing Tool?
                                        </button>
                                    </h2>
                                    <div id="faq-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Once you know your audience, choose a topic that will resonate with them. Look for
                                            trending topics in your industry or address common questions or challenges your audience
                                            may be facing. Keep in mind that your topic should be both interesting and relevant to
                                            your audience
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseTwo" aria-expanded="false" aria-controls="faq-collapseTwo">
                                            <span class="icon"></span>
                                            Is it helpful for Digital Marketer or Content Writer?
                                        </button>
                                    </h2>
                                    <div id="faq-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Once you know your audience, choose a topic that will resonate with them. Look for
                                            trending topics in your industry or address common questions or challenges your audience
                                            may be facing. Keep in mind that your topic should be both interesting and relevant to
                                            your audience
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseThree" aria-expanded="false" aria-controls="faq-collapseThree">
                                            <span class="icon"></span>
                                            Is there a limit on how much content I can generate?
                                        </button>
                                    </h2>
                                    <div id="faq-collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Once you know your audience, choose a topic that will resonate with them. Look for
                                            trending topics in your industry or address common questions or challenges your audience
                                            may be facing. Keep in mind that your topic should be both interesting and relevant to
                                            your audience
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseFour" aria-expanded="false" aria-controls="faq-collapseFour">
                                            <span class="icon"></span>
                                            What Languages does it supports?
                                        </button>
                                    </h2>
                                    <div id="faq-collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Once you know your audience, choose a topic that will resonate with them. Look for
                                            trending topics in your industry or address common questions or challenges your audience
                                            may be facing. Keep in mind that your topic should be both interesting and relevant to
                                            your audience
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapseFive" aria-expanded="false" aria-controls="faq-collapseFive">
                                            <span class="icon"></span>
                                            What is SEO Writing AI and how do I use it?
                                        </button>
                                    </h2>
                                    <div id="faq-collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            Once you know your audience, choose a topic that will resonate with them. Look for
                                            trending topics in your industry or address common questions or challenges your audience
                                            may be facing. Keep in mind that your topic should be both interesting and relevant to
                                            your audience
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- CTA -->
            <!-- <section class="cta-section py-10 py-lg-15" data-aos="fade-up-sm" data-aos-offset="150">
                <div class="container">
                    <div class="rounded-5 border position-relative z-1 gradient-bg">
                        <div class="animate-scale position-absolute w-full h-full z-n1">
                            <img src="assets/images/shapes/blurry-shape-4.svg" alt="" class="bg-shape img-fluid" />
                        </div>
                        <div class="row justify-center">
                            <div class="col-lg-10">
                                <div class="text-center pt-6 px-6 pt-md-10 px-md-10 pt-lg-18 px-lg-18">
                                    <h2 class="mb-6 ">
                                        Using
                                        <span class="text-primary">GenAI</span>
                                        you can save hours each week creating long-form content.
                                    </h2>
                                    <a href="login.html" class="btn btn-primary">Get Started Free</a>
                                    <div class="cta-image-container mt-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 34 90" class="text-primary arrow-shape">
                                            <path fill="currentColor" d="M3.724 2.303c8.095 4.54 13.968 13.648 16.408 22.434 2.336 8.415 2.426 20.276-5.705 25.79-2.961 2.01-7.092 2.24-8.781-1.444-1.571-3.422.29-7.096 3.683-8.452 9.162-3.663 16.334 8.02 18.234 15.324a30.563 30.563 0 0 1 .279 14.195c-.952 4.334-2.866 9.283-6.298 12.254-.494.427-1.3-.29-.971-.84 1.77-2.928 3.677-5.571 4.79-8.851 1.155-3.405 1.62-7.048 1.44-10.626-.358-7.103-3.568-15.745-10.125-19.354-3.476-1.912-10.316-1.353-10.055 3.973.107 2.158 1.647 4.035 3.933 3.81 2.086-.209 4.001-1.766 5.333-3.279 5.427-6.16 4.857-15.89 2.67-23.215a39.21 39.21 0 0 0-5.682-11.577c-2.69-3.76-6.017-6.61-9.592-9.472-.35-.277.039-.896.44-.67Z" />
                                            <path fill="currentColor" d="M1.562.977c9.931 2.79 17.058 11.508 19.312 21.4 1.085 4.762 1.187 9.7.548 14.54-.653 4.937-1.854 10.549-4.949 14.589-2.156 2.82-7.305 5.961-10.266 2.388-2.608-3.142-2.18-9.094.45-12.093 2.945-3.356 8.048-2.969 11.491-.718 4.112 2.688 6.675 7.596 8.265 12.12 3.48 9.905 2.395 21.33-3.11 30.327-.527.858-1.947.203-1.423-.676 3.935-6.565 5.559-14.253 4.688-21.84-.443-3.864-1.552-7.677-3.306-11.147-2.011-3.973-5.078-8.396-9.854-8.994-5.273-.66-7.99 4.089-7.3 8.82.403 2.76 1.938 4.99 5.042 4.079 2.519-.74 4.35-3.051 5.51-5.296 3.708-7.194 4.563-16.802 3.066-24.658C17.848 13.969 11.217 4.92 1.373 1.995.736 1.812.917.797 1.563.977Z" />
                                            <path fill="currentColor" d="M21.218 73.052c.375 2.062.446 4.204.634 6.29.088.987.18 1.975.266 2.964.04.457-.025 2.873.383 3.085.21.11 2.177-1.456 2.452-1.64l2.452-1.641c1.595-1.065 3.329-2.678 5.205-3.148.671-.169 1.174.542.746 1.106-.792 1.05-1.99 1.644-3.08 2.36-1.23.812-2.464 1.62-3.695 2.432-1.142.748-3.43 3.037-4.974 2.3-1.476-.7-.955-3.793-1.042-5.105-.198-2.945-.602-5.957-.531-8.906a.595.595 0 0 1 1.184-.097Z" />
                                            <path fill="currentColor" d="M21.773 73.169c-.032 2.254-.679 4.55-.972 6.789-.338 2.597-.601 5.224-.564 7.844-.465-.225-.933-.454-1.398-.68a76.772 76.772 0 0 0 6.002-4.227c1.876-1.465 3.568-3.521 5.632-4.678.6-.336 1.581.26 1.137.983-1.181 1.924-3.415 3.456-5.165 4.844a64.808 64.808 0 0 1-6.607 4.574c-.694.421-1.465-.14-1.385-.91.27-2.565.462-5.128.849-7.683.348-2.297.616-4.895 1.59-7.019.19-.398.887-.308.88.163Z" />
                                            <path fill="currentColor" d="M22.85 71.546c-.873 5.764-1.778 11.525-2.588 17.298-.462-.304-.922-.605-1.384-.91 2.439-1.254 4.864-2.527 7.207-3.954 2.158-1.317 4.212-3.127 6.536-4.109.733-.31 1.331.688.841 1.25-1.713 1.972-4.396 3.318-6.619 4.634-2.326 1.378-4.712 2.663-7.172 3.78-.633.287-1.294-.395-1.174-1.015 1.098-5.725 2.104-11.464 3.137-17.2.137-.79 1.337-.563 1.215.226Z" />
                                        </svg>
                                        <div class="cta-img rounded-top-4">
                                            <img src="assets/images/screens/screen-6.jpg" alt="" class="img-fluid w-full h-full object-cover" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

        </main>

        <!-- Footer -->
        <footer class="footer bg-striped pt-10 pt-lg-15">
            <div class="container">
                <div class="row g-10">
                    <div class="col-lg-9 col-xl-8 order-lg-2">
                        <div class="row g-6">
                            <!-- <div class="col-md-4 col-lg-4">
                                <div class="footer-widget text-center text-md-start">
                                    <h6 class=" mb-2">Gen AI</h6>
                                    <ul class="link-list list-unstyled mb-0">
                                        <li>
                                            <a href="about.html">About</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Blog</a>
                                        </li>
                                        <li>
                                            <a href="login.html">Sign in</a>
                                        </li>
                                        <li>
                                            <a href="register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="col-md-4 col-lg-7">
                                <div class="footer-widget text-center text-md-start">
                                    <h6 class=" mb-2">Tautan Cepat</h6>
                                    <ul class="link-list list-unstyled mb-0">
                                        <li>
                                            <a href="#beranda">Beranda</a>
                                        </li>
                                        <li>
                                            <a href="#tentang">Tentang</a>
                                        </li>
                                        <li>
                                            <a href="#fitur">Fitur</a>
                                        </li>
                                        <li>
                                            <a href="#pendiri">Pendiri</a>
                                        </li>
                                        <li>
                                            <a href="#testimoni">Testimoni</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-5">
                                <div class="footer-widget text-center text-md-start">
                                    <h6 class=" mb-4">Berita & Pembaruan</h6>
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="email" class="form-control" placeholder="Masukkan Email" />
                                            <button class="btn btn-outline-primary px-4" type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="24" height="24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m4.031 8.917 15.477-4.334a.5.5 0 0 1 .616.617l-4.333 15.476a.5.5 0 0 1-.94.067l-3.248-7.382a.5.5 0 0 0-.256-.257L3.965 9.856a.5.5 0 0 1 .066-.94v0Z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                    <ul class="list-unstyled d-flex flex-wrap align-center justify-center justify-md-start gap-3 social-list mb-0 mt-5">
                                        
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 6v6A3.75 3.75 0 0 1 12 15.75H6A3.75 3.75 0 0 1 2.25 12V6A3.75 3.75 0 0 1 6 2.25h6A3.75 3.75 0 0 1 15.75 6Z" />
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.25 15.75V9c0-1.641.375-3 3-3m-4.5 3.75h4.5" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 2.258s-1.514.894-2.355 1.147A3.36 3.36 0 0 0 9 5.655v.75a7.995 7.995 0 0 1-6.75-3.397s-3 6.75 3.75 9.75a8.73 8.73 0 0 1-5.25 1.5c6.75 3.75 15 0 15-8.625a3.34 3.34 0 0 0-.06-.623c.765-.754 1.56-2.752 1.56-2.752Z" />
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6v0Z" />
                                                    <path stroke="currentColor" stroke-width="1.5" d="M2.25 12V6A3.75 3.75 0 0 1 6 2.25h6A3.75 3.75 0 0 1 15.75 6v6A3.75 3.75 0 0 1 12 15.75H6A3.75 3.75 0 0 1 2.25 12Z" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-1 me-auto">
                        <div class="footer-widget text-center text-lg-start">
                            <a href="">
                                <img src="{{ URL::asset('build/images/images-landing/smarport-logo-text.png') }}" alt="" width="165" />
                                
                            </a>
                            <p class="fs-sm mb-0 mt-4">
                                Platform pelaporan dan pemantauan permasalahan yang terjadi di Kota Semarang.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text-center py-6 mt-8">
                    <p class="fs-sm mb-0">&copy; Copyright 2024 | <span class="text-primary"> Semapor</span></p>
                </div>
            </div>
        </footer>

    </div>

    <!-- JS -->
    
    <script src="{{ URL::asset('build/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('build/js/main.js') }}"></script>

</body>

</html>