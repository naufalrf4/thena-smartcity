@extends('layouts.landing')

@section('title', 'Kontak')

@section('content')
    @include('landing.navbar')
    <main class="flex-grow-1 mt-25">
        <section class="py-10 py-lg-15 bg-striped" data-aos="fade-up-sm" data-aos-delay="50">
            <div class="container">
                <div class="text-center">
                    <h3 class=" mb-2">Hubungi Kami</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-center fs-sm">
                            <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Kontak</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <section class="py-15 pt-lg-30">
            <div class="container">
                <div class="row justify-center">
                    <div class="col-lg-10">
                        <div class="row row-cols-1 row-cols-md-2 gy-20 gx-lg-20">
                            <div class="col" data-aos="fade-up-sm" data-aos-delay="50">
                                <div class="text-center">
                                    <div
                                        class="icon w-18 h-18 rounded-3 p-4 d-inline-flex align-center justify-center bg-primary text-white mb-8">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            viewBox="0 0 24 24">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path d="M18 6v.01M18 13l-3.5-5a4 4 0 1 1 7 0L18 13" />
                                            <path d="M10.5 4.75 9 4 3 7v13l6-3 6 3 6-3v-2M9 4v13m6-2v5" />
                                        </svg>
                                    </div>
                                    <h3 class="fw-medium mb-0">Jl. Kumbang No. 14 Babakan, Kota Bogor, 16128
                                    </h3>
                                </div>
                            </div>
                            <div class="col" data-aos="fade-up-sm" data-aos-delay="100">
                                <div class="text-center">
                                    <div
                                        class="icon w-18 h-18 rounded-3 p-4 d-inline-flex align-center justify-center bg-primary text-white mb-8">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            viewBox="0 0 24 24">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path
                                                d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2m10 3a2 2 0 0 1 2 2m-2-6a6 6 0 0 1 6 6" />
                                        </svg>
                                    </div>
                                    <h3 class="fw-medium mb-0">
                                        +62 822 9882 4102
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ratio ratio-16x9 rounded-4 overflow-hidden mt-18" data-aos="fade-up-sm" data-aos-delay="150">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4628677988158!2d106.80353987491709!3d-6.5892451644128345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5d2e602b501%3A0x25a12f0f97fac4ee!2sSekolah%20Vokasi%20Institut%20Pertanian%20Bogor!5e0!3m2!1sid!2sid!4v1716938872887!5m2!1sid!2sid"
                        style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                </div>

                <div class="row justify-center mt-18" data-aos="fade-up-sm" data-aos-delay="50">
                    <div class="col-lg-8 col-xl-6">
                        <form class="vstack gap-8" id="contact-form" method="post" action="assets/php/contact_email.php">
                            <div class="">
                                <label for="name" class="form-label fs-lg fw-medium mb-4"> Nama Anda* </label>
                                <div class="input-group with-icon">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            viewBox="0 0 24 24">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="7" r="4" />
                                            <path d="M6 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2" />
                                        </svg>
                                    </span>
                                    <input type="text" id="name" name="name" class="form-control rounded-2"
                                        placeholder="Siapa nama Anda?" required />
                                </div>
                            </div>
                            <div class="">
                                <label for="email" class="form-label fs-lg fw-medium mb-4">
                                    Alamat Email*
                                </label>
                                <div class="input-group with-icon">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                            <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="1.2">
                                                <path
                                                    d="M2.25 5.25a1.5 1.5 0 0 1 1.5-1.5h10.5a1.5 1.5 0 0 1 1.5 1.5v7.5a1.5 1.5 0 0 1-1.5 1.5H3.75a1.5 1.5 0 0 1-1.5-1.5v-7.5Z" />
                                                <path d="M2.25 5.25 9 9.75l6.75-4.5" />
                                            </g>
                                        </svg>
                                    </span>
                                    <input type="email" id="email" name="email" class="form-control rounded-2"
                                        placeholder="Masukkan alamat email Anda" required />
                                </div>
                            </div>
                            <div class="">
                                <label for="phone" class="form-label fs-lg fw-medium mb-4">
                                    Nomor Telepon
                                </label>
                                <div class="input-group with-icon">
                                    <span class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            viewBox="0 0 24 24">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path
                                                d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2m10 3a2 2 0 0 1 2 2m-2-6a6 6 0 0 1 6 6" />
                                        </svg>
                                    </span>
                                    <input type="tel" id="phone" name="phone" class="form-control rounded-2"
                                        placeholder="Nomor Telepon" />
                                </div>
                            </div>
                            <div class="">
                                <label for="message" class="form-label fs-lg fw-medium mb-4">
                                    Pesan Anda*
                                </label>
                                <textarea id="message" name="message" class="form-control rounded-2" placeholder="Tulis pesan Anda di sini"
                                    rows="4" required></textarea></textarea>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-md btn-primary">Kirim Pesan</button>
                            </div>
                            <div class="status alert mb-0 d-none"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('landing.footer')
    @include('components.chatbot')
@endsection
