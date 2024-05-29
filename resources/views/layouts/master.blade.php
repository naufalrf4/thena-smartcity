<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Semapor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Semapor merupakan solusi modern untuk memperkuat partisipasi masyarakat dalam membangun Kota Semarang yang lebih baik." />
    <meta content="Thena" name="author" />
    <link rel="shortcut icon" href="{{ URL::asset('build/images/images-landing/ssc-logo-only-biru.svg') }}">

    @include('layouts.head-css')
</head>

@yield('body')

<div id="layout-wrapper">
    @include('layouts.topbar')

    @include('layouts.sidebar')
    @include('layouts.horizontal')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>

        </div>

        @include('layouts.footer')
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
@include('layouts.vendor-scripts')
</body>
</html>
