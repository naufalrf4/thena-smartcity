@extends('layouts.master')
@section('title')
    Pelaporan > {{ $status }}
@endsection
@section('css')
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ asset('build/libs/flatpickr/flatpickr.min.css') }}">

    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ asset('build/libs/gridjs/theme/mermaid.min.css') }}">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" integrity="sha512-h9FcoyWjHcOcmEVkxOfTLnmZFWIH0iZhZT1H2TbOq55xssQGEJHEaIm+PgoUaZbRvQTNTluNOEfb1ZRy6D3BOw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
@endsection
@section('page-title')
    Pelaporan > {{ $status }}
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="total_laporan">
                                    <div class="col-4 skeleton skeleton-text py-3"></div>
                                    <!-- <span class="fw-medium text-success font-size-18"> -->
                                    <!-- <i class="bx bx-up-arrow-alt font-size-16 align-middle"></i> 16%</span> -->
                                </h4>
                                <p class="text-muted text-truncate mb-0 mt-2">Total Laporan</p>
                            </div>
                            <div class="avatar-md">
                                <div class="avatar-title rounded bg-soft-primary">
                                    <i class="bx bx-check-shield h2 mb-0 text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="laporan_selesai">
                                    <div class="col-4 skeleton skeleton-text py-3"></div>
                                    <!-- <span class="fw-medium text-success font-size-18"> -->
                                    <!-- <i class="bx bx-up-arrow-alt font-size-16 align-middle"></i> 24%</span> -->
                                </h4>
                                <p class="text-muted text-truncate mb-0 mt-2">Laporan Selesai</p>
                            </div>
                            <div class="avatar-md">
                                <div class="avatar-title rounded bg-soft-primary">
                                    <i class="bx bx-user h2 mb-0 text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="sedang_ditangani">
                                    <div class="col-4 skeleton skeleton-text py-3"></div>
                                     <!-- <span class="fw-medium text-danger font-size-18"> -->
                                    <!-- <i class="bx bx-down-arrow-alt font-size-16 align-middle"></i> 07%</span> -->
                                </h4>
                                <p class="text-muted text-truncate mb-0 mt-2">Laporan Sedang Ditangani</p>
                            </div>
                            <div class="avatar-md">
                                <div class="avatar-title rounded bg-soft-primary">
                                    <i class="bx bx-like h2 mb-0 text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="belum_ditangani">
                                    <div class="col-4 skeleton skeleton-text py-3"></div>
                                     <!-- <span class="fw-medium text-success font-size-18"> -->
                                    <!-- <i class="bx bx-up-arrow-alt font-size-16 align-middle"></i> 16%</span> -->
                                </h4>
                                <p class="text-muted text-truncate mb-0 mt-2">Laporan Belum Ditangani</p>
                            </div>
                            <div class="avatar-md">
                                <div class="avatar-title rounded bg-soft-primary">
                                    <i class="bx bx-user-plus h2 mb-0 text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="position-relative">
                            <div class="modal-button mt-2">
                                <button type="button"
                                    class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"
                                    data-bs-toggle="modal" data-bs-target=".new-customer" onclick="getcoor()">
                                    <!-- <i class="mdi mdi-plus me-1"></i> -->
                                    Tambah Laporan</button>
                            </div>
                        </div>
                        <div id="table-ecommerce-customers"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <!--  successfully modal  -->
        <div id="success-btn" class="modal fade" tabindex="-1" aria-labelledby="success-btnLabel" aria-hidden="true"
            data-bs-scroll="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="bx bx-check-circle display-1 text-success"></i>
                            <h4 class="mt-3">Laporan baru berhasil dibuat</h4>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!--  Extra Large modal example -->
        <div class="modal fade new-customer" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Tambah Laporan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="" method="POST" action="{{ route('pelaporan.store') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Username">Judul Laporan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Judul Laporan" name="judul_laporan"
                                        id="NewPelaporan-Username">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Email">Deskripsi Laporan</label>
                                    <textarea class="form-control" id="NewPelaporan-Email" rows="3" name="deskripsi_laporan"
                                        placeholder="Masukkan Deskripsi Laporan"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Kejadian</label>
                                    <input type="date" class="form-control" placeholder="Select Date" name="tanggal_kejadian"
                                        id="customers-date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Email">Tambahkan Foto</label>
                                    <input type="file" class="form-control" placeholder="Tambahkan Foto" name="foto_kejadian"
                                        id="NewPelaporan-Phone">
                                </div>
                            </div>
                            <!-- <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Lokasi Peta</label>
                                    <div id="map"></div>
                                </div>
                            </div> -->
                            <input type="hidden" name="lat_coor" id="lat_coor">
                            <input type="hidden" name="lng_coor" id="lng_coor">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-sm-3">Kecamatan<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <select required class="form-select form-control" id="kecamatan_id" name="kecamatan_id">
                                            <option value="">Pilih Kecamatan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="col-sm-3">Kelurahan<span class="text-danger">*</span></label>
                                    <div class="col-sm-9">
                                        <select required class="form-select form-control" id="kelurahan_id" name="kelurahan_id" disabled>
                                            <option value="">Pilih Kelurahan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Address">Alamat Lengkap Kejadian (cth: Nama Gedung, Nomor dan Nama Jalan, RT dan RW)</label>
                                    <input type="text" class="form-control" name="alamat_kejadian" placeholder="Masukan Alamat Lengkap (cth: Nama Gedung, Nomor dan Nama Jalan, RT dan RW)"
                                        id="NewPelaporan-Address">
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Target Laporan Selesai</label>
                                    <input type="date" class="form-control" placeholder="Select Date" name="estimasi_selesai"
                                        id="customers-date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Phone">Dinas Bertanggung Jawab</label>
                                    <input type="text" class="form-control" placeholder="Enter Phone"
                                        id="NewPelaporan-Phone">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Wallet">Wallet</label>
                                    <input type="text" class="form-control" placeholder="0" id="NewPelaporan-Wallet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" placeholder="Select Date"
                                        id="customers-date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Address">Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Address"
                                        id="NewPelaporan-Address">
                                </div>
                            </div> -->
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i
                                        class="bx bx-x me-1"></i> Cancel</button>
                                <!-- <button type="submit" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#success-btn" id="btn-save-event"><i class="bx bx-check me-1"></i>
                                    Confirm</button> -->
                                <button type="submit" class="btn btn-success" id="btn-save-event"><i class="bx bx-check me-1"></i>
                                    Confirm</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    @endsection
    @section('scripts')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <!-- datepicker js -->
        <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>

        <!-- gridjs js -->
        <script src="{{ URL::asset('build/libs/gridjs/gridjs.umd.js') }}"></script>

        <!-- <script src="{{ URL::asset('build/js/pages/ecommerce-customers.init.js') }}"></script> -->

        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js" integrity="sha512-BwHfrr4c9kmRkLw6iXFdzcdWV/PGkVgiIyIWLLlTSXzWQzxuSg4DiQUCpauz/EWjgk5TYQqX/kvn9pG1NpYfqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
        <script>
            function getcoor(){
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;

                        $('#lat_coor').val(latitude)
                        $('#lng_coor').val(longitude)
                        $('#NewPelaporan-Address').attr("placeholder", "Mendapatkan lokasi dari gps...");

                        getLocationName(latitude, longitude);
                    },
                    function (error) {
                        console.error("Error getting location:", error);
                    }
                );
            }
            
            function getLocationName(latitude, longitude) {
                const apiKey = "c780bbdac1d64f1cab2832c6f971a5da";
                const apiUrl = `https://api.opencagedata.com/geocode/v1/json?key=${apiKey}&q=${latitude}+${longitude}&pretty=1`;

                console.log('asd')
                fetch(apiUrl)
                .then((response) => response.json())
                .then((data) => {
                    console.log(data)
                    if (data.results.length > 0) {
                        const locationName = data.results[0].formatted;
                        $('#NewPelaporan-Address').val(`${locationName}`);
                    } else {
                        $('#NewPelaporan-Address').attr("placeholder", "Masukan Alamat Lengkap (cth: Nama Gedung, Nomor dan Nama Jalan, RT dan RW)");
                    }
                   

                })
                .catch((error) => {
                    console.error("Error:", error);
                    $('#NewPelaporan-Address').attr("placeholder", "Masukan Alamat Lengkap (cth: Nama Gedung, Nomor dan Nama Jalan, RT dan RW)");
                });
            }
        </script>

        <script>
            new gridjs.Grid({
                columns:
                    [
                    {
                        name: '#',
                        sort: {
                        enabled: false
                    },
                        formatter: (function (cell) {
                        return gridjs.html('<div class="form-check font-size-16"><input class="form-check-input" type="checkbox" id="orderidcheck01"><label class="form-check-label" for="orderidcheck01"></label></div>');
                        })
                    },

                    {
                        name: 'Tanggal / Tempat Kejadian',
                        formatter: (function (cell) {
                        return gridjs.html('<span class="font-size-12">#LPR' + cell[0] +'</span><br>' + cell[1] + '<br> <a href="#" class="text-body"> Kec. ' + cell[2] + "</a>" + '<br> <a href="#" class="text-body"> Kel. ' + cell[3] + "</a>");
                        })
                    },
                    {
                        name: "Status Pengerjaan",
                        formatter: (function (cell) {
                        return gridjs.html('<span class="badge bg-'+ cell[1] +' font-size-12">' + cell[0] +'</span>');
                        })
                    }, 
                    // "Estimasi Selesai", 
                    "Masalah", 
                    // {
                    //     name: 'Pelapor',
                    //     formatter: (function (cell) {
                    //     return gridjs.html('<p class="mb-1">'+ cell[0] +'</p><p class="mb-0">'+ cell[1] +'</p>');
                    //     })
                    // },
                    "Deskripsi Masalah", 
                    {
                        name: "Action",
                        sort: {
                        enabled: false
                    },
                        formatter: (function (cell) {
                        return gridjs.html(`<a href="{{ route('pelaporan.edit', ':lprid') }}" class="btn btn-primary btn-sm">Detail</a>`.replace(':lprid', cell));
                        })
                    }
                    ],
                pagination: {
                    limit: 6
                },
                sort: true,
                search: true,
                server: {
                    url: `{{ route('pelaporan.api_getpelaporan', '') }}?status={{ strtolower(str_replace(' ', '-', $status) ?? '') }}`,
                    method: 'POST',
                    headers: {
                        Authorization: `Bearer {{ session('ses_token') }}`,
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        @if(session('role')->id != 4)
                        'rid': `{{ session('role')->id }}`,
                        @endif
                        'uid': `{{ session('user')->id }}`
                    }),
                    then: data => {
                        $('#total_laporan').html(data.semua_laporan)
                        $('#laporan_selesai').html(data.selesai)
                        $('#sedang_ditangani').html(data.sedang_ditangani)
                        $('#belum_ditangani').html(data.belum_ditangani)

                        return data.pelaporan.map(laporan => [
                            "",
                            [laporan.id, laporan.tgl_dibuat, laporan.kecamatan.nama, laporan.kelurahan.nama],
                            [laporan.status_penanganan.status, laporan.status_penanganan.color],
                            // laporan.estimasi_selesai !== null ? laporan.estimasi_selesai : '-',
                            laporan.nama_laporan,
                            laporan.deskripsi_laporan,
                            laporan.id,
                            // [laporan.submitter.name, ""],
                            // "Petugas",
                        ])
                    }
                } 
                }).render(document.getElementById("table-ecommerce-customers"));
        </script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
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
    @endsection
