<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> @yield('title') | Semapor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Semapor merupakan solusi modern untuk memperkuat partisipasi masyarakat dalam membangun Kota Semarang yang lebih baik." />
    <meta content="Thena" name="author" />
    <link rel="shortcut icon" href="{{ URL::asset('build/images/images-landing/ssc-logo-only-biru.svg') }}">

    @include('layouts.head-css')
</head>

<body>
    @yield('content')
    @include('layouts.vendor-scripts')
</body>
</html>
