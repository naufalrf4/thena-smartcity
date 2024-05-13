@extends('layouts.master-without-nav')
@section('title')
    Error 404
@endsection
@section('page-title')
    Error 404
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="min-vh-100" style="background: url(build/images/bg-2.png) top;">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center py-5 mt-5">
                            <div class="position-relative">
                                <h1 class="error-title error-text mb-0">404</h1>
                                <h4 class="error-subtitle text-uppercase mb-0">Upps! Halaman Tidak Ditemukan</h4>
                                <p class="font-size-16 mx-auto text-muted w-50 mt-4">
                                    Halaman yang anda cari tidak ditemukan. Silahkan kembali ke halaman sebelumnya atau ke
                                    halaman utama.
                                </p>
                            </div>
                            <div class="mt-4 text-center">
                                <a class="btn btn-primary" href="/">Kembali ke Halaman Utama</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end authentication section -->
    @endsection
