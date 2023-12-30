@extends('layouts.master')
@section('title')
    Detail Pelaporan
@endsection
@section('css')
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">
@endsection
@section('page-title')
    Detail Pelaporan
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-body">

                    @if (session('role')->level_role == 2 || session('role')->level_role == 4 || session('role')->level_role == 5 || session('role')->level_role == 6)
                            <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="" 
                                action="{{ route('pelaporan.update', $pelaporan->id) }}" 
                                enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')
                    @endif
                    

                        <div class="my-2 d-flex align-items-center justify-content-between">
                            <div class="my-2">
                                <div class="flex flex-col">
                                    <span for="" class="fw-bold">Status Laporan</span><br>
                                    <span class="badge bg-primary font-size-12">{{ $pelaporan->statusPenanganan->status }}</span>
                                </div>
                            </div>
                            @if (session('role')->level_role == 2 || session('role')->level_role == 4 || session('role')->level_role == 5 || session('role')->level_role == 6)
                            <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-end" id="btn-area">
                                <button type="button" 
                                    class="btn btn-primary btn-sm waves-effect text-white waves-light mt-2 me-2" onclick="turnEdit()">
                                <i class="mdi mdi-pencil-box-multiple-outline me-1"></i> Edit Laporan
                                </button>
                                
                            </div>
                            @endif
                        </div>

                        

                        <div class="my-2 mt-4">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold">Tanggal Dilaporkan</span><br>
                                <span id="tgl-dibuat" data-tgl-dibuat="{{ $pelaporan->tgl_dibuat }}">{{ $pelaporan->tgl_dibuat }}</span>
                            </div>
                        </div>

                        <div class="my-2 mt-4">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold">Estimasi Selesai</span><br>
                                <span id="estimasi-selesai" data-estimasi-selesai="{{ $pelaporan->estimasi_selesai ?? '' }}">{{ $pelaporan->estimasi_selesai ?? '-' }}</span>
                            </div>
                        </div>

                        <div class="my-2 mt-4">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold">Judul Laporan</span><br>
                                <span id="nama-laporan" data-nama-laporan="{{ $pelaporan->nama_laporan }}">{{ $pelaporan->nama_laporan }}</span>
                            </div>
                        </div>

                        <div class="my-2 mt-4">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold">Deskripsi Laporan</span><br>
                                <span id="deskripsi-laporan" data-deskripsi-laporan="{{ $pelaporan->deskripsi_laporan }}">{{ $pelaporan->deskripsi_laporan }}</span>
                            </div>
                        </div>

                        <div class="my-2 mt-4">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold">Alamat Kejadian</span><br>
                                <span id="kecamatan" data-kecamatan-id="{{ $pelaporan->kecamatan_id }}" data-kecamatan-nama="{{ $pelaporan->kecamatan->nama }}">Kec. {{ $pelaporan->kecamatan->nama }}</span><span> - </span><span id="kelurahan" data-kelurahan-id="{{ $pelaporan->kelurahan_id }}" data-kelurahan-nama="{{ $pelaporan->kelurahan->nama }}">Kel. {{ $pelaporan->kelurahan->nama }}</span><br>
                                <span id="alamat-kejadian" data-alamat-kejadian="{{ $pelaporan->alamat_kejadian }}">{{ $pelaporan->alamat_kejadian }}</span>
                            </div>
                        </div>

                        <div class="my-2 mt-4">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold">Lampiran Foto/Video</span><br>
                                @if($pelaporan->foto == null)
                                    <span>Tidak ada lampiran</span>
                                @else
                                <button type="button"
                                    class="btn btn-primary btn-sm waves-effect waves-light mt-2 me-2"
                                    data-bs-toggle="modal" data-bs-target=".lampiran-modal" data-src="{{ $pelaporan->foto }}">
                                    <!-- <i class="mdi mdi-plus me-1"></i>  -->
                                    Tampilkan Foto/Video</button>
                                @endif
                                <div id="lampiran_baru"></div>
                            </div>
                        </div>

                        <hr>

                        <div class="my-2 mt-4">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold">Sedang ditangani oleh</span><br>
                                <span>{{ $pelaporan->rolePenanganan->name ?? 'Laporan sedang menunggu dalam antrian penanganan' }}</span>
                            </div>
                        </div>

                        @if(session('role')->level_role == 2 || session('role')->level_role == 4 || session('role')->level_role == 5 || session('role')->level_role == 6)
                        </form>
                        @endif



                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Petugas</h5>
                        <!-- <button type="button"
                            class="btn btn-primary btn-sm waves-effect waves-light me-1"
                            data-bs-toggle="modal" data-bs-target=".create-task">
                            Tambah Petugas</button> -->
                    </div>
                    <div class="card-body pt-2">
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-1">
                                <tbody>
                                    <tr>
                                        <td style="width: 50px;"><img src="{{ URL::asset('build/images/users/avatar-2.jpg') }}"
                                                class="rounded-circle avatar-sm" alt=""></td>
                                        <td>
                                            <h5 class="font-size-14 m-0"><a href="javascript: void(0);"
                                                    class="text-dark">Daniel Canales</a></h5>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="javascript: void(0);"
                                                    class="badge bg-soft-primary text-primary font-size-11">Frontend</a>
                                            </div>
                                        </td>
                                        <td>
                                            <i
                                                class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i>
                                            Online
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" class="rounded-circle avatar-sm"
                                                alt=""></td>
                                        <td>
                                            <h5 class="font-size-14 m-0"><a href="javascript: void(0);"
                                                    class="text-dark">Jennifer Walker</a></h5>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="javascript: void(0);"
                                                    class="badge bg-soft-primary text-primary font-size-11">UI / UX</a>
                                            </div>
                                        </td>
                                        <td>
                                            <i
                                                class="mdi mdi-circle-medium font-size-18 text-warning align-middle me-1"></i>
                                            Buzy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar-sm">
                                                <span
                                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                    C
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 m-0"><a href="javascript: void(0);"
                                                    class="text-dark">Carl Mackay</a></h5>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="javascript: void(0);"
                                                    class="badge bg-soft-primary text-primary font-size-11">Backend</a>
                                            </div>
                                        </td>
                                        <td>
                                            <i
                                                class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i>
                                            Online
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" class="rounded-circle avatar-sm"
                                                alt=""></td>
                                        <td>
                                            <h5 class="font-size-14 m-0"><a href="javascript: void(0);"
                                                    class="text-dark">Janice Cole</a></h5>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="javascript: void(0);"
                                                    class="badge bg-soft-primary text-primary font-size-11">Frontend</a>
                                            </div>
                                        </td>
                                        <td>
                                            <i
                                                class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i>
                                            Online
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar-sm">
                                                <span
                                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                    T
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 m-0"><a href="javascript: void(0);"
                                                    class="text-dark">Tony Brafford</a></h5>
                                        </td>
                                        <td>
                                            <div>
                                                <a href="javascript: void(0);"
                                                    class="badge bg-soft-primary text-primary font-size-11">Backend</a>
                                            </div>
                                        </td>
                                        <td>
                                            <i
                                                class="mdi mdi-circle-medium font-size-18 text-secondary align-middle me-1"></i>
                                            Offline
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 flex justify-content-end">
                                                    <div class="text-sm-end">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm waves-effect waves-light"
                                                            data-bs-toggle="modal" data-bs-target=".create-task">
                                                            <!-- <i class="mdi mdi-plus me-1"></i>  -->
                                                            Tambah Petugas</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Log Petugas</h5>
                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light me-1" data-bs-toggle="modal" data-bs-target=".create-task">
                            Tambah Log
                        </button>
                    </div>

                    <div class="card-body pt-0 pb-3">
                        <div class="">
                            <div class="row mb-2">
                                <!-- <div class="col-xl-3 col-md-12">
                                    <div class="pb-3 pb-xl-0">
                                        <form class="email-search">
                                            <div class="position-relative">
                                                <input type="text" class="form-control bg-light" placeholder="Search...">
                                                <span class="bx bx-search font-size-18"></span>
                                            </div>
                                        </form>
                                    </div>
                                </div> -->
                  
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0" style="width: 100%;">
                                <tbody>
                                    <tr class="">
                                        <td >
                                            <!-- <div class="form-check font-size-16">
                                                <input class="form-check-input" type="checkbox" id="upcomingtaskCheck01">
                                                <label class="form-check-label" for="upcomingtaskCheck01"></label>
                                            </div> -->
                                            22-12-2023
                                        </td>
                                        <td>
                                            <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);"
                                                    class="text-dark">Petugas Di-assign</a></h5>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <span
                                                    class="badge rounded-pill badge-soft-secondary font-size-11">Waiting</span>
                                            </div>
                                        </td>
                                        <td>
                                        <a href="{{ route('pelaporan.edit', ':lprid') }}" class="btn btn-primary btn-sm">Detail</a>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td colspan="4">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 flex justify-content-end">
                                                    <div class="text-sm-end">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm waves-effect waves-light"
                                                            data-bs-toggle="modal" data-bs-target=".create-task">
                                                            Tambah Log</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        </div>
        <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        
        <!--  Extra Large modal example -->
        <div class="modal fade create-task" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Create Task</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Task-Name">Task Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Task Name"
                                        id="CreateTask-Task-Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Team-Member">Team Member</label>
                                    <input type="text" class="form-control" placeholder="Enter Team Member"
                                        id="CreateTask-Team-Member">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Due Date</label>
                                    <input type="text" class="form-control" placeholder="Select Due Date"
                                        id="CreateTask-due-date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Category">Category</label>
                                    <select class="form-select">
                                        <option selected> Select Category </option>
                                        <option>Waiting</option>
                                        <option>Approved</option>
                                        <option>Completed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Task Description">Task Description</label>
                                    <textarea class="form-control" id="projectdesc" rows="3" placeholder="Enter Task Description..."></textarea>
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

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div class="modal fade lampiran-modal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Lampiran Foto/Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img src="{{ asset('storage/foto_kejadian/'.$pelaporan->foto) ?? '' }}" alt="" id="lampiran-foto" style="width: 100%;">
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <!--  successfully modal  -->
        <div id="success-btn" class="modal fade" tabindex="-1" aria-labelledby="success-btnLabel" aria-hidden="true"
            data-bs-scroll="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="bx bx-check-circle display-1 text-success"></i>
                            <h4 class="mt-3">Task Completed Successfully</h4>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    @endsection
    @section('scripts')
        <!-- apexcharts -->
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- datepicker js -->
        <script src="{{ URL::asset('build/libs/flatpickr/flatpickr.min.js') }}"></script>

        <!--  -->
        <script src="{{ URL::asset('build/js/pages/Detail Pelaporan.init.js') }}"></script>
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
        
        @if(session('role')->level_role == 4)
        <script>
            function turnEdit(){
                //get data
                let nama_laporan = $('#nama-laporan').data('nama-laporan');
                let deskripsi_laporan = $('#deskripsi-laporan').data('deskripsi-laporan');
                let alamat_kejadian = $('#alamat-kejadian').data('alamat-kejadian');
                let kecamatan_id = $('#kecamatan').data('kecamatan-id');
                let kelurahan_id = $('#kelurahan').data('kelurahan-id');

                //replace to input
                $('#nama-laporan').replaceWith(`<input type="text" class="form-control" id="nama-laporan" name="nama_laporan" value="${nama_laporan}">`);
                $('#deskripsi-laporan').replaceWith(`<textarea class="form-control" id="deskripsi-laporan" name="deskripsi_laporan" rows="3">${deskripsi_laporan}</textarea>`);
                $('#alamat-kejadian').replaceWith(`- <span>Alamat Lengkap (cth: Nama Gedung, Nomor dan Nama Jalan, RT dan RW)</span><input type="text" class="form-control" value="${alamat_kejadian}" id="alamat-kejadian" placeholder="Masukan Alamat Lengkap (cth: Nama Gedung, Nomor dan Nama Jalan, RT dan RW)" name="alamat_kejadian" value="${alamat_kejadian}">`);
                $('#kelurahan').replaceWith(`<span>Pilih Kecamatan</span><select class="form-select form-control" id="kelurahan" name="kelurahan_id"><options>Pilih Kelurahan</options></select>`);
                $('#kecamatan').replaceWith(`- <span>Pilih Kelurahan</span><select class="form-select form-control" id="kecamatan" name="kecamatan_id" onclick="changeKelurahan()" ><options>Pilih Kecamatan</options></select><br>`);
                $('#lampiran_baru').replaceWith(`<div id="lampiran_baru" class="mt-3"><span>Ubah Lampiran Foto/Video</span><input type="file" class="form-control" id="lampiran_baru" name="foto"></div>`);

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
        @endif

        @if(session('role')->level_role == 5)
        <script>
            function turnEdit(){
                //get data
                let nama_laporan = $('#nama-laporan').data('nama-laporan');
                let deskripsi_laporan = $('#deskripsi-laporan').data('deskripsi-laporan');
                let alamat_kejadian = $('#alamat-kejadian').data('alamat-kejadian');
                let kecamatan_id = $('#kecamatan').data('kecamatan-id');
                let kelurahan_id = $('#kelurahan').data('kelurahan-id');

                //replace to input
                $('#nama-laporan').replaceWith(`<input type="text" class="form-control" id="nama-laporan" name="nama_laporan" value="${nama_laporan}">`);
                $('#deskripsi-laporan').replaceWith(`<textarea class="form-control" id="deskripsi-laporan" name="deskripsi_laporan" rows="3">${deskripsi_laporan}</textarea>`);
                $('#alamat-kejadian').replaceWith(`- <span>Alamat Lengkap (cth: Nama Gedung, Nomor dan Nama Jalan, RT dan RW)</span><input type="text" class="form-control" value="${alamat_kejadian}" id="alamat-kejadian" placeholder="Masukan Alamat Lengkap (cth: Nama Gedung, Nomor dan Nama Jalan, RT dan RW)" name="alamat_kejadian" value="${alamat_kejadian}">`);
                $('#kelurahan').replaceWith(`<span>Pilih Kecamatan</span><select class="form-select form-control" id="kelurahan" name="kelurahan_id"><options>Pilih Kelurahan</options></select>`);
                $('#kecamatan').replaceWith(`- <span>Pilih Kelurahan</span><select class="form-select form-control" id="kecamatan" name="kecamatan_id" onclick="changeKelurahan()" ><options>Pilih Kecamatan</options></select><br>`);
                $('#lampiran_baru').replaceWith(`<div id="lampiran_baru" class="mt-3"><span>Ubah Lampiran Foto/Video</span><input type="file" class="form-control" id="lampiran_baru" name="foto"></div>`);

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
        @endif

       
    @endsection
