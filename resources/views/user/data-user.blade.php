@extends('layouts.master')
@section('title')
    Data User
@endsection
@section('css')
    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">
@endsection
@section('page-title')
    Data User
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="total_dispatcher">9,454 <span class="fw-medium text-success font-size-18">
                                    <!-- <i class="bx bx-up-arrow-alt font-size-16 align-middle"></i> 16%</span> -->
                                </h4>
                                <p class="text-muted text-truncate mb-0 mt-2">Total Dispatcher</p>
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

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="total_walikota">563 <span class="fw-medium text-success font-size-18">
                                    <!-- <i class="bx bx-up-arrow-alt font-size-16 align-middle"></i> 24%</span> -->
                                </h4>
                                <p class="text-muted text-truncate mb-0 mt-2">Total Walikota</p>
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

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="total_warga">454 <span class="fw-medium text-danger font-size-18">
                                    <!-- <i class="bx bx-down-arrow-alt font-size-16 align-middle"></i> 07%</span> -->
                                </h4>
                                <p class="text-muted text-truncate mb-0 mt-2">Total Warga</p>
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

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="total_dinas">1,526k <span class="fw-medium text-success font-size-18">
                                    <!-- <i class="bx bx-up-arrow-alt font-size-16 align-middle"></i> 16%</span> -->
                                </h4>
                                <p class="text-muted text-truncate mb-0 mt-2">Total Dinas</p>
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

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="total_petugas_dinas">1,526k <span class="fw-medium text-success font-size-18">
                                    <!-- <i class="bx bx-up-arrow-alt font-size-16 align-middle"></i> 16%</span> -->
                                </h4>
                                <p class="text-muted text-truncate mb-0 mt-2">Total Petugas Dinas</p>
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

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="total_user">1,526k <span class="fw-medium text-success font-size-18">
                                    <!-- <i class="bx bx-up-arrow-alt font-size-16 align-middle"></i> 16%</span> -->
                                </h4>
                                <p class="text-muted text-truncate mb-0 mt-2">Total User</p>
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
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Tabel Data User</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        
                        <div class="table-responsive">

                            <button type="button"
                                class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"
                                data-bs-toggle="modal" data-bs-target=".create-task">
                                <i class="mdi mdi-plus"></i> Tambah </button>

                            {{-- <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>No Telp</th>
                                        <th>Role ID</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>test1@gmail.com</td>
                                        <td>test1</td>
                                        <td>testing</td>
                                        <td>test</td>
                                        <td>123123</td>
                                        <td>2</td>
                                        <td>Bojong Gede</td>
                                        <td>Bojong Baru</td>
                                        <td>10</td>
                                        <td>12</td>
                                        <td>
                                            <a href=""
                                            class="btn btn-warning waves-effect waves-light mb-2"
                                            data-bs-toggle="modal" data-bs-target=".create-task">Update</a>
                                            <a href="#"
                                            class="btn btn-danger waves-effect waves-light mb-2">Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> --}}

                            <div id="table-ecommerce-customers"></div>
                        </div>

                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <!--  Modal Tambah & Edit Data User  -->
        <div class="modal fade create-task" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Form Data User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="" method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Task-Name">Email</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Email"
                                            id="CreateTask-Task-Name" name="email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Task-Name">Password</label>
                                        <input type="password" class="form-control" placeholder="Masukkan Password"
                                            id="CreateTask-Task-Name" name="password">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Task-Name">Nama</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Nama"
                                            id="CreateTask-Task-Name" name="name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Task-Name">Username</label>
                                        <input type="text" class="form-control" placeholder="Masukkan Username"
                                            id="CreateTask-Task-Name" name="username">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Task-Name">Nomor Telephone</label>
                                        <input type="number" class="form-control" placeholder="Masukkan Nomor Telephone"
                                            id="CreateTask-Task-Name" name="no_telp">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Category">Role</label>
                                        <div class="col-sm-9">
                                            <select required class="form-select form-control" id="role_id" name="role_id">
                                                <option value="">Pilih Role</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Category">Kecamatan</label>
                                        <div class="col-sm-9">
                                            <select required class="form-select form-control" id="kecamatan_id" name="kecamatan_id">
                                                <option value="">Pilih Kecamatan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Category">Kelurahan</label>
                                        <div class="col-sm-9">
                                            <select required class="form-select form-control" id="kelurahan_id" name="kelurahan_id" disabled>
                                                <option value="">Pilih Kelurahan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Task-Name">RT</label>
                                        <input type="number" class="form-control" placeholder="Masukkan RT"
                                            id="CreateTask-Task-Name" name="rt">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Task-Name">RW</label>
                                        <input type="number" class="form-control" placeholder="Masukkan RW"
                                            id="CreateTask-Task-Name" name="rw">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="NewPelaporan-Email">Tambahkan Foto</label>
                                        <input type="file" class="form-control" placeholder="Tambahkan Foto" name="foto_profil" id="NewPelaporan-Phone">
                                    </div>
                                </div>
                                

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
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

    @endsection
    @section('scripts')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- datepicker js -->
    <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- gridjs js -->
    <script src="{{ URL::asset('build/libs/gridjs/gridjs.umd.js') }}"></script>
    <!-- <script src="{{ URL::asset('build/js/pages/ecommerce-customers.init.js') }}"></script> -->

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
                    "Name",
                    "Username",
                    "No Telp", 
                    "Email",
                    "Role",
                    "Kecamatan",
                    "Kelurahan",
                    "RT",
                    "RW",
                    {
                        name: "Foto Profil",
                        formatter: (function (cell) {
                            var assetUrl = @json(asset('storage/foto_profil'));
                            return gridjs.html(`<img src="${assetUrl}/${cell}" alt="${cell}" style="max-width:  50px; max-height: 50px;">`);
                        })
                    },
                    {
                        name: "Action",
                        sort: {
                        enabled: false
                    },
                        formatter: (function (cell) {
                        return gridjs.html(`<a href="{{ route('user.edit', ':lprid') }}" class="btn btn-primary btn-sm">Detail</a>`.replace(':lprid', cell));
                        })
                    }
                    ],
                pagination: {
                    limit: 6
                },
                sort: true,
                search: true,
                server: {
                    url: `{{ route('user.api_getuser') }}`,
                    headers: {
                        Authorization: `Bearer {{ session('ses_token') }}`,
                        'Content-Type': 'application/json'
                    },
                    then: data => {
                        // $('#total_dispatcher').html(data.total_dispatcher)
                        // $('#total_walikota').html(data.walikota)
                        // $('#total_warga').html(data.warga)
                        // $('#total_dinas').html(data.dinas)
                        // $('#total_petugas_dinas').html(data.petugas_dinas)
                        // $('#total_user').html(data.user)

                        return data.users.map(user => [
                            "",
                            user.name,
                            user.username,
                            user.no_telp,
                            user.email,
                            user.get_role.name,
                            user.get_kecamatan.nama,
                            user.get_kelurahan.nama,
                            user.rt,
                            user.rw,
                            user.foto_profil
                        ]);
                    }
                }}).render(document.getElementById("table-ecommerce-customers"));
        </script>

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


