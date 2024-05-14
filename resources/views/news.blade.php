@extends('layouts.landing')

@section('title', 'Berita')


@section('content')
    @include('landing.navbar')
    <main class="flex-grow-1">
      @include('landing.news')
      <section class="pt-20 pb-10 pt-lg-30 pb-lg-15">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 gx-6 gy-10 gy-lg-16">
                @foreach ($articles as $index => $article)
                    <x-news-card :article="$article" :index="$index" />
                @endforeach
            </div>
        </div>
    </section>
    </main>
    @include('landing.footer')
    @include('components.chatbot')
@endsection
