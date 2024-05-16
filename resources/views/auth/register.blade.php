@extends('layouts.master-without-nav')
@section('title')
    Register
@endsection
@section('page-title')
    Register
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="authentication-bg min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-lg-6 col-xl-5">

                            <div class="mb-4 pb-2">
                                <a href={{ route('home') }} class="d-block auth-logo">
                                    <img src="{{ URL::asset('build/images/images-landing/semapor-logo-text.png') }}"
                                        alt="" height="30" class="auth-logo-dark me-start">
                                    <img src="{{ URL::asset('build/images/images-landing/semapor-logo-text.png') }}"
                                        alt="" height="30" class="auth-logo-light me-start">
                                </a>
                            </div>

                            <div class="card">
                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5>Daftar Akun</h5>
                                        <p class="text-muted">Daftar akun untuk melanjutkan ke Dashboard.</p>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form method="POST" action="{{ route('register') }}" class="auth-input"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="CreateTask-Task-Name">Email<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukkan Email" required id="CreateTask-Task-Name"
                                                            name="email">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="CreateTask-Task-Name">Nama<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukkan Nama" required id="CreateTask-Task-Name"
                                                            name="name">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="CreateTask-Task-Name">Password<span
                                                                class="text-danger">*</span></label>
                                                        <input type="password" class="form-control"
                                                            placeholder="Masukkan Password" minlength="8" required
                                                            id="CreateTask-Task-Name" name="password">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="CreateTask-Task-Name">Konfirmasi
                                                            Password<span class="text-danger">*</span></label>
                                                        <input type="password" class="form-control"
                                                            placeholder="Masukkan Ulang Password" minlength="8" required
                                                            id="CreateTask-Task-Name" name="password_confirmation">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="CreateTask-Task-Name">Username<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukkan Username" required
                                                            id="CreateTask-Task-Name" name="username">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="CreateTask-Task-Name">Nomor
                                                            Telephone<span class="text-danger">*</span></label>
                                                        <input type="number" class="form-control"
                                                            placeholder="Masukkan Nomor Telephone" required
                                                            id="CreateTask-Task-Name" name="no_telp">
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="CreateTask-Category">Kecamatan<span
                                                                class="text-danger">*</span></label>
                                                        <select required class="form-select form-control" id="kecamatan_id"
                                                            name="kecamatan_id" required>
                                                            <option value="">Pilih Kecamatan</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="CreateTask-Category">Kelurahan<span
                                                                class="text-danger">*</span></label>
                                                        <select required class="form-select form-control"
                                                            id="kelurahan_id" name="kelurahan_id" disabled required>
                                                            <option value="">Pilih Kelurahan</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="CreateTask-Task-Name">RT<span
                                                                class="text-danger">*</span></label>
                                                        <input type="number" class="form-control"
                                                            placeholder="Masukkan RT" required id="CreateTask-Task-Name"
                                                            name="rt">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="CreateTask-Task-Name">RW<span
                                                                class="text-danger">*</span></label>
                                                        <input type="number" class="form-control"
                                                            placeholder="Masukkan RW" required id="CreateTask-Task-Name"
                                                            name="rw">
                                                    </div>
                                                </div>

                                                <!-- <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="NewPelaporan-Email">Tambahkan Foto</label>
                                                            <input type="file" class="form-control" placeholder="Tambahkan Foto" name="foto_profil" id="NewPelaporan-Phone">
                                                        </div>
                                                    </div>
                                                     -->

                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-primary w-100" type="submit">Daftar</button>
                                            </div>


                                            {{-- <div class="mt-4 text-center">
                                                <div class="signin-other-title">
                                                    <h5 class="font-size-14 mb-3 mt-2 title"> Sign in with </h5>
                                                </div>

                                                <ul class="list-inline mt-2">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void()"
                                                            class="social-list-item bg-primary text-white border-primary">
                                                            <i class="bx bxl-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void()"
                                                            class="social-list-item bg-info text-white border-info">
                                                            <i class="bx bxl-linkedin"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void()"
                                                            class="social-list-item bg-danger text-white border-danger">
                                                            <i class="bx bxl-google"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div> --}}

                                            <div class="mt-4 text-center">
                                                <p class="mb-0">Sudah memilik akun? <a href="{{ route('login') }}"
                                                        class="fw-medium text-primary"> Login</a></p>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center p-4">
                                <p>
                                    Seluruh Hak Cipta © 2024 | <span class="text-primary fw-bold"> Semapor </span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- end container -->
        </div>
        <!-- end authentication section -->
    @endsection

    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            var selectKecamatan = $('#kecamatan_id');
            var selectedKotaId = 3374; // kota id semarang

            selectKecamatan.empty().prop('disabled', true);
            selectKecamatan.append($('<option value="">Pilih Kecamatan</option>'));

            if (selectedKotaId) {
                $.ajax({
                    url: `https://www.emsifa.com/api-wilayah-indonesia/api/districts/${selectedKotaId}.json`,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        // Populate the Kecamatan select with the retrieved data
                        $.each(data, function(index, item) {
                            selectKecamatan.append($('<option>', {
                                value: item.id,
                                text: item.name
                            }));
                        });

                        // Enable the Kecamatan select
                        selectKecamatan.prop('disabled', false);
                    }
                });
            }

            var selectKelurahan = $('#kelurahan_id');
            selectKecamatan.on('change', function() {
                var selectedKecamatanId = $(this).val();

                // Clear the Kelurahan select and disable it
                selectKelurahan.empty().prop('disabled', true);
                selectKelurahan.append($('<option value="">Pilih Kelurahan</option>'));

                if (selectedKecamatanId) {
                    // Send an AJAX request to fetch Kelurahan data based on the selected Kecamatan
                    $.ajax({
                        url: `https://www.emsifa.com/api-wilayah-indonesia/api/villages/${selectedKecamatanId}.json`,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            // Populate the Kelurahan select with the retrieved data
                            $.each(data, function(index, item) {
                                selectKelurahan.append($('<option>', {
                                    value: item.id,
                                    text: item.name
                                }));
                            });

                            // Enable the Kelurahan select
                            selectKelurahan.prop('disabled', false);
                        }
                    });
                }
            });
        </script>
        @if (session('success'))
            <script>
                // SweetAlert2 pop-up for success
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: "{{ session('success') }}",
                });
            </script>
        @elseif(session('error'))
            <script>
                // SweetAlert2 pop-up for error
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: "{{ session('error') }}",
                });
            </script>
        @elseif($errors->any())
            <script>
                // SweetAlert2 pop-up for validation errors
                Swal.fire({
                    icon: 'error',
                    title: 'Validation Error!',
                    html: "@foreach ($errors->all() as $error)<p>{{ $error }}</p>@endforeach",
                });
            </script>
        @endif
    @endsection
