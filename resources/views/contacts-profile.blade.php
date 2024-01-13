@extends('layouts.master')
@section('title')
    Profile
@endsection
@section('page-title')
    Profile
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="user-profile-img">
                            <img class="profile-img profile-foreground-img rounded-top"
                                style="height: 120px;" alt="">
                            <div class="overlay-content rounded-top">
                                <div>
                                    <div class="user-nav p-3">
                                        <div class="d-flex justify-content-end">
                                            {{-- <div class="dropdown">
                                                <a class="text-muted dropdown-toggle font-size-16" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="bx bx-dots-vertical text-white font-size-20"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".create-task">
                                                        <i class="mdi mdi-trash-can me-1 text-danger"></i>
                                                        Hapus Akun
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end user-profile-img -->

                        <div class="p-4 pb-0 pt-0">
                            <div class="mt-n5 position-relative text-center pb-3">
                                {{-- <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt=""
                                    class="avatar-xl rounded-circle img-thumbnail"> --}}

                                    <img src="{{ asset('storage/foto_profil/' . $user->foto_profil ) }}" alt="" class="avatar-xl rounded-circle img-thumbnail">

                                <div class="mt-3">
                                    <h5 class="mb-1">{{ $user->name }}</h5>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-7">
                                <div class="card">
                                    <div class="card-body">
                                        @if(isset($user))
                                            <form class="form-bookmark needs-validation" id="bookmark-formnovalidate="" 
                                                action="{{ route('profile.update', $user->id) }}"
                                                enctype="multipart/form-data"
                                                method="POST">
                                                @csrf
                                                @method('PUT')

                                            <div class="my-2 d-flex align-items-center justify-content-between">

                                                <div class="my-2">
                                                    <div class="flex flex-col">
                                                        <img id="data-foto-profil" data-foto-profil="{{ $user->foto_profil }}" src="" alt="">
                                                    </div>
                                                </div>

                                                <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-end" id="btn-area">
                                                    <button type="button" class="btn btn-primary btn-sm waves-effect text-white waves-light mt-2 me-2" onclick="turnEdit()"> 
                                                        <i class="mdi mdi-pencil-box-multiple-outline me-1"></i> Edit Data
                                                    </button>
                                                </div>

                                            </div>

                                            <div class="my-2 mt-4">
                                                <div class="flex flex-col">
                                                    <span for="" class="fw-bold">Email</span><br>
                                                    <span id="data-email" data-email="{{ $user->email }}">{{ $user->email }}</span>
                                                </div>
                                            </div>

                                            <div class="my-2 mt-4">
                                                <div class="flex flex-col">
                                                    <span for="" class="fw-bold">Name</span><br>
                                                    <span id="data-nama" data-nama="{{ $user->name }}">{{ $user->name }}</span>
                                                </div>
                                            </div>

                                            <div class="my-2 mt-4">
                                                <div class="flex flex-col">
                                                    <span for="" class="fw-bold">Username</span><br>
                                                    <span id="data-username" data-username="{{ $user->username }}">{{ $user->username }}</span>
                                                </div>
                                            </div>

                                            <div class="my-2 mt-4">
                                                <div class="flex flex-col">
                                                    <span for="" class="fw-bold">Password</span><br>
                                                    <span id="data-password"></span>
                                                </div>
                                            </div>
                    
                                            <div class="my-2 mt-4">
                                                <div class="flex flex-col">
                                                    <span for="" class="fw-bold">No Telp</span><br>
                                                    <span id="data-no-telp" data-no-telp="{{ $user->no_telp }}">{{ $user->no_telp }}</span>
                                                </div>
                                            </div>

                                            <div class="my-2 mt-4">
                                                <div class="flex flex-col">
                                                    <span for="" class="fw-bold">Kecamatan</span><br>
                                                    <span id="kecamatan" data-kecamatan-id="{{ $user->kecamatan_id }}"  data-kecamatan-nama="{{ $user->getKecamatan->nama }}">{{ $user->getKecamatan->nama }}</span>
                                                </div>
                                            </div>
                    
                                            <div class="my-2 mt-4">
                                                <div class="flex flex-col">
                                                    <span for="" class="fw-bold">Kelurahan</span><br>
                                                    <span id="kelurahan" data-kelurahan-id="{{ $user->kelurahan_id }}"  data-kelurahan-nama="{{ $user->getKelurahan->nama }}">{{ $user->getKelurahan->nama }}</span>
                                                </div>
                                            </div>
                    
                                            <div class="my-2 mt-4">
                                                <div class="flex flex-col">
                                                    <span for="" class="fw-bold">RT</span><br>
                                                    <span id="data-rt" data-rt="{{ $user->rt }}">{{ $user->rt }}</span>
                                                </div>
                                            </div>
                    
                                            <div class="my-2 mt-4">
                                                <div class="flex flex-col">
                                                    <span for="" class="fw-bold">RW</span><br>
                                                    <span id="data-rw" data-rw="{{ $user->rw }}">{{ $user->rw }}</span>
                                                </div>
                                            </div>
        
                                            </form>
                                        @else
                                            <p>Data tidak ditemukan.</p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="card-title mb-0 text-primary">Data Laporan Harian</h5>
                                        <!-- <button type="button"
                                            class="btn btn-primary btn-sm waves-effect waves-light me-1"
                                            data-bs-toggle="modal" data-bs-target=".create-task">
                                            Tambah Petugas</button> -->
                                    </div>
                                    <div class="card-body pt-2">
                                        <div>
                                            <h5 class="">Grafik Laporan Harian</h5>
                                        
                                                <div id="grafik_laporan_harian" data-label="Pelaporan" data-colors='["#1f58c7", "#1f58c7", "#1f58c7","#1f58c7", "#1f58c7", "#1f58c7","#1f58c7","#1f58c7","#1f58c7","#1f58c7","#1f58c7", "#1f58c7"]' class="apex-chart"></div>
                                        </div>
                                        
                                        <div style="margin-top: -50px">
                                            <h5 class="">Tabel Laporan Harian</h5>
                                            <div class="table-responsive">
                                                <table class="table table-bordered border-primary mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">Hari</th>
                                                            <th scope="col">Total Laporan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Minggu</td>
                                                            <td>{{ json_encode($grp1[0]) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Senin</td>
                                                            <td>{{ json_encode($grp1[1]) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Selasa</td>
                                                            <td>{{ json_encode($grp1[2]) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Rabu</td>
                                                            <td>{{ json_encode($grp1[3]) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Kamis</td>
                                                            <td>{{ json_encode($grp1[4]) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>Jumat</td>
                                                            <td>{{ json_encode($grp1[5]) }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">7</th>
                                                            <td>Sabtu</td>
                                                            <td>{{ json_encode($grp1[6]) }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                                        

                                        {{-- <div class="d-flex justify-content-center my-3">Belum ada laporan yang dibuat.</div> --}}
                                    
                                        <div class="row mt-3">
                                            <div class="col-xl-12 col-md-12 flex justify-content-end">
                                                <div class="text-sm-end">
                                                    <a href="{{ route('pelaporan.index') }}" class="btn btn-primary btn-sm waves-effect waves-light">
                                                    Tambah Laporan</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- end row -->

        <!-- Hapus Data User  -->
        <div class="modal fade create-task" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Hapus Akun</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <p>Yakin ingin hapus akun?</p>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i
                                        class="bx bx-x me-1 align-middle"></i> Cancel</button>
                                <button type="submit" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#success-btn" id="btn-save-event"><i
                                        class="bx bx-check me-1 align-middle"></i> Confirm</button>
                            </div>
                        </div>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

    @endsection
@section('scripts')
        <!-- apexcharts -->
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script src="{{ URL::asset('build/js/pages/profile.init.js') }}"></script>
        
        <!-- apexcharts -->
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector map-->
        <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
        <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>

        <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>

        <script>
            let kelurahan_id = $('#kelurahan').data('kelurahan-id');

            function changeKelurahan(){
                var selectKecamatan = $('#kecamatan');
                var selectKelurahan = $('#kelurahan');

                var selectedKecamatanId = $('#kecamatan').val();

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
                                var option = $('<option>', {
                                    value: item.id,
                                    text: item.name
                                });

                                if (kelurahan_id == item.id) {
                                    option.attr('selected', 'selected');
                                }
                                
                                selectKelurahan.append(option);
                            });

                            // Enable the Kelurahan select
                            selectKelurahan.prop('disabled', false);
                        }
                    });
                }
            }
    </script>

    <script>
            function turnEdit(){
                //get data
                let data_foto_profil = $('#data-foto-profil').data('foto-profil');
                let data_email = $('#data-email').data('email');
                let data_nama = $('#data-nama').data('nama');
                let data_username = $('#data-username').data('username');
                let data_no_telp = $('#data-no-telp').data('no-telp');
                let kecamatan_id = $('#kecamatan').data('kecamatan-id');
                let kelurahan_id = $('#kelurahan').data('kelurahan-id');
                let data_rt = $('#data-rt').data('rt');
                let data_rw = $('#data-rw').data('rw');

                //replace to input
                $('#data-foto-profil').replaceWith(`<span class="fw-bold">Foto Profil</span><br><input type="file" class="form-control"  id="data-foto-profil" name="data_foto_profil">`);

                $('#data-email').replaceWith(`<input type="text" class="form-control" id="data-email" name="data_email" value="${data_email}">`);

                $('#data-nama').replaceWith(`<input type="text" class="form-control" id="data-nama" name="data_nama" value="${data_nama}">`);
                
                $('#data-username').replaceWith(`<input type="text" class="form-control" id="data-username" name="data_username" value="${data_username}">`);

                $('#data-password').replaceWith(`<input type="text" class="form-control" id="data-password" name="data_password" value="" placeholder="Masukkan password baru">`);

                $('#data-no-telp').replaceWith(`<input type="text" class="form-control" id="data-no-telp" name="data_no_telp" value="${data_no_telp}">`);

                $('#kecamatan').replaceWith(`<span>Pilih Kecamatan</span><select class="form-select form-control" id="kecamatan" name="kecamatan_id" onclick="changeKelurahan()"><options>Pilih Kecamatan</options></select>`);

                $('#kelurahan').replaceWith(`- <span>Pilih Kelurahan</span><select class="form-select form-control" id="kelurahan" name="kelurahan_id" ><options>Pilih Kelurahan</options></select><br>`);

                $('#data-rt').replaceWith(`<input type="text" class="form-control" id="data-rt" name="data_rt" value="${data_rt}">`);

                $('#data-rw').replaceWith(`<input type="text" class="form-control" id="data-rw" name="data_rw" value="${data_rw}">`);

                var selectKecamatan = $('#kecamatan');
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
                                var option = $('<option>', {
                                    value: item.id,
                                    text: item.name
                                });

                                if (kecamatan_id == item.id) {
                                    option.attr('selected', 'selected');
                                }

                                selectKecamatan.append(option);
                            });

                            changeKelurahan()
                            // Enable the Kecamatan select
                            selectKecamatan.prop('disabled', false);
                    }
                    });
                }

                $('#btn-area').empty();

                var submitBtn = $('<button type="submit" class="btn btn-success btn-sm waves-effect text-white waves-light mt-2 me-2">Submit</button>');
                var cancelBtn = $('<button type="button" class="btn btn-secondary btn-sm waves-effect text-white waves-light mt-2 me-2" onclick="cancelEdit()">Cancel</button>');

                // Append the buttons to the button area or form
                $('#btn-area').append(submitBtn, cancelBtn);

            }

            function cancelEdit() {
                // Reload the page
                location.reload();
            }
    </script>

    <script>
        // Basic Column Chart
        var barchartColors = getChartColorsArray("grafik_laporan_harian");
        var options = {
        chart: {
            height: 350,
            type: 'bar',
            toolbar: {
            show: false,
            }
        },
        plotOptions: {
            bar: {
            horizontal: false,
            columnWidth: '75%',
            endingShape: 'rounded'
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                endingShape: 'rounded',
                borderRadius: 5, // Menambahkan radius untuk melengkungkan pojok kanan atas dan pojok kiri atas
            },
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            colors: ['transparent']
        },
        series: [{
            name: 'Total Laporan',
            data: {{ json_encode($grp1) }}
        }],
        colors: barchartColors,
        xaxis: {
            categories: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
            labels: {
                rotate: -45,
                style: {
                    fontSize: '30px' // Ubah ukuran teks sesuai keinginan Anda
                }
            }
        },
        yaxis: {
            title: {
                text: 'Laporan'
            },
        },
        grid: {
            borderColor: '#f1f1f1',
        },
        fill: {
            opacity: 1

        },
        }

        var chart = new ApexCharts(
        document.querySelector("#grafik_laporan_harian"),
        options
        );

        chart.render();
    </script>

@if(session('success'))
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
