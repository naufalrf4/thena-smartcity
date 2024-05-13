<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title -->
    <title>@yield('title', 'Semapor')</title>

    <!-- SEO meta tags -->
    <meta name="description"
        content="Semapor merupakan solusi modern untuk memperkuat partisipasi masyarakat dalam membangun Kota Semarang yang lebih baik." />

    <!-- Favicon -->
    <link rel="icon" href="{{ URL::asset('build/images/images-landing/ssc-logo-only-biru.svg') }}"
        type="image/svg+xml" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('build/css/style.css') }}" />
    @yield('styles')
</head>

<body>
    <div class="wrapper d-flex flex-column justify-between">
        @yield('content')
    </div>

    <!-- JS -->
    <script src="{{ URL::asset('build/js/plugins.js') }}"></script>
    <script src="{{ URL::asset('build/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
            });
        </script>
    @elseif(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: "{{ session('error') }}",
            });
        </script>
    @elseif($errors->any())
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Validation Error!',
                html: "@foreach ($errors->all() as $error)<p>{{ $error }}</p>@endforeach",
            });
        </script>
    @endif
</body>

</html>
