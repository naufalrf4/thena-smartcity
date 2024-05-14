@extends('layouts.landing')

@section('title', 'Beranda')

@section('content')
    @include('landing.navbar')
    <main class="flex-grow-1">
        @include('landing.hero')
        @include('landing.about')
        @include('landing.feature')
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

                <div class="review-rolling-carousel-container">
                    <div class="swiper review-rolling-carousel">
                        <div class="swiper-wrapper rolling-carousel-wrapper">
                            @foreach ($testimonies as $testimony)
                                <div class="swiper-slide h-auto">
                                    @include('landing.testimonial', [
                                        'name' => $testimony['name'],
                                        'role' => $testimony['role'],
                                        'avatar' => $testimony['avatar'],
                                        'testimonial' => $testimony['testimonial'],
                                    ])
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('landing.footer')
    @include('components.chatbot')
@endsection
