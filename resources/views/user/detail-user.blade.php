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

                    @if (session('role')->level_role == 1 || session('role')->level_role == 5)
                        <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="" 
                            action="{{ route('user.update', $user->id) }}" 
                            enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            @method('PUT')
                    @endif
                    
                            <div class="my-2 d-flex align-items-center justify-content-between">
                                    
                                    <div class="my-2">
                                        <div class="flex flex-col">
                                            <span for="" class="fw-bold">Foto Profil</span><br>
                                            <img id="data-foto-profil" data-foto-profil="{{ $user->foto_profil }}" src="{{ $user->foto_profil ? asset('storage/foto_profil/' . $user->foto_profil ) : URL::asset('build/images/empty-profile.png') }}" alt="" style="max-width: 300px; max-height: 300px;">
                                        </div>
                                    </div>
                                    
                                    @if (session('role')->level_role == 1 || session('role')->level_role == 5)
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
                                    <span for="" class="fw-bold">Email</span><br>
                                    <span id="data-email" data-email="{{ $user->email }}">{{ $user->email }}</span>
                                </div>
                            </div>

                            <div class="my-2 mt-4">
                                <div class="flex flex-col">
                                    <span for="" class="fw-bold">Nama</span><br>
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
                                    <span for="" class="fw-bold">Nomor Telepon</span><br>
                                    <span id="data-no-telp" data-no-telp="{{ $user->no_telp }}">{{ $user->no_telp }}</span>
                                </div>
                            </div>

                            <div class="my-2 mt-4">
                                <div class="flex flex-col">
                                    <span for="" class="fw-bold">Role</span><br>
                                    <span id="data-role" data-role="{{ $user->getRole->name }}">{{ $user->getRole->name }}</span>
                                </div>
                            </div>

                            <div class="my-2 mt-4">
                                <div class="flex flex-col">
                                    <span for="" class="fw-bold">Kecamatan</span><br>
                                    <span id="kecamatan" data-kecamatan-id="{{ $user->kecamatan_id }}" data-kecamatan-nama="{{ $user->getKecamatan->nama }}">{{ $user->getKecamatan->nama }}</span>
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

                        @if(session('role')->level_role == 1 || session('role')->level_role == 5)
                        </form>
                        @endif

                    </div>
                </div>
            </div>
        </div>

        </div>
        <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


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

        @if(session('role')->level_role == 1 || session('role')->level_role == 5)
        
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
                // let data_password = $('#data-password').data('password');
                let data_no_telp = $('#data-no-telp').data('no-telp');
                let data_role = $('#data-role').data('role');
                let kecamatan_id = $('#kecamatan').data('kecamatan-id');
                let kelurahan_id = $('#kelurahan').data('kelurahan-id');
                let data_rt = $('#data-rt').data('rt');
                let data_rw = $('#data-rw').data('rw');

                //replace to input
                $('#data-foto-profil').replaceWith(`<input type="file" class="form-control"  id="data-foto-profil" name="data_foto_profil">`);

                $('#data-email').replaceWith(`<input type="text" class="form-control" id="data-email" name="data_email" value="${data_email}">`);

                $('#data-nama').replaceWith(`<input type="text" class="form-control" id="data-nama" name="data_nama" value="${data_nama}">`);
                
                $('#data-username').replaceWith(`<input type="text" class="form-control" id="data-username" name="data_username" value="${data_username}">`);

                $('#data-password').replaceWith(`<input type="text" class="form-control" id="data-password" name="data_password" value="">`);

                $('#data-no-telp').replaceWith(`<input type="text" class="form-control" id="data-no-telp" name="data_no_telp" value="${data_no_telp}">`);

                var roleSelect = $('<select required class="form-select form-control" id="data_role" name="data_role"><option value="">Pilih Role</option></select>');
                    @foreach ($roles as $r)
                        var option = $('<option>', {
                            value: '{{ $r->id }}',
                            text: '{{ $r->name }}'
                        });
                        @if ($r->id == $user->role_id)
                            option.attr('selected', 'selected');
                        @endif
                        roleSelect.append(option);
                    @endforeach
                $('#data-role').replaceWith(roleSelect);

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

                var submitBtn = $('<button type="submit" class="btn btn-primary btn-sm waves-effect text-white waves-light mt-2 me-2">Submit</button>');
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
