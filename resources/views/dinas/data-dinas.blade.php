@extends('layouts.master')
@section('title')
    Data Dinas
@endsection
@section('css')
    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">
@endsection
@section('page-title')
    Data Dinas
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h4 class="mb-0" id="total_dinas">
                                    {{ $total_dinas }}
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

        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">Tabel Data Dinas</h4>
                    </div><!-- end card header -->
                    <div class="card-body">
                        
                        <div class="table-responsive">

                            <button type="button"
                                class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2"
                                data-bs-toggle="modal" data-bs-target=".create-task" onclick="tambahDinas()">
                                <i class="mdi mdi-plus"></i> Tambah Dinas </button>

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
            <div class="modal-dialog modal-md modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Form Tambah Data Dinas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="" method="POST" action="{{ route('dinas.store') }}" enctype="multipart/form-data" id="dinasForm">
                        @csrf
                        
                            <input type="hidden" name="edit_id" id="edit_id" value="">

                            <input type="hidden" name="_method" id="methodField" value="POST">

                            <div class="row">   
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="CreateTask-Task-Name">Nama Instansi</label>
                                        <input type="text" class="form-control" placeholder="Cth. Dinas Pendidikan"
                                            id="CreateTask-Task-Name" name="name">
                                    </div>
                                </div>                           
                            </div>

                            <div class="row mt-2">
                                <div class="col-12 text-end">
                                    <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i
                                            class="bx bx-x me-1 align-middle"></i> Cancel</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success-btn"
                                        id="btn-save-event"><i class="bx bx-check me-1 align-middle"></i> Confirm</button>
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
                        name: 'Dinas ID',
                        formatter: (function (cell) {
                        return gridjs.html('#DID' + cell);
                        })
                    },
                    "Nama Dinas",
                    {
                        name: "Action",
                        sort: {
                        enabled: false
                    },
                        formatter: (function (cell) {
                        return gridjs.html(`
                        <div class="d-flex">
                            <button type="button" class="btn btn-primary btn-sm" onclick="editDinas('${cell}', '${cell}')">Edit</button>
                            
                            <form class="" action="{{ route('dinas.destroy', ':roleid') }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="ms-2 btn btn-danger delete-button btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </div>
                        
                        `.replaceAll(':roleid', cell));
                        })
                    }
                    ],
                pagination: {
                    limit: 6
                },
                sort: true,
                search: true,
                server: {
                    url: `{{ route('dinas.api_getdinas') }}`,
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
                        return data.roles.map(role => [
                            role.id,
                            role.name,
                            role.id
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

<script>
    function editDinas(id, name) {
        // Set the form action to the update route
            $.ajax({
            url: '{{ url("dinas") }}/' + id + '/edit',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                // Set the form action to the update route
                $('.modal form').attr('action', '{{ url("dinas") }}/' + id);

                // Set the hidden field value for the ID
                $('#edit_id').val(data.id);

                // Populate the input field with the existing name
                $('#CreateTask-Task-Name').val(data.name);

                // Change the modal title to "Form Edit Dinas"
                $('#myExtraLargeModalLabel').text('Form Edit Data Dinas');

                // Show the modal
                $('.create-task').modal('show');
            }
        });
    }

    function tambahDinas() {
        // Set the form action to the store route
        $('.modal form').attr('action', '{{ route("dinas.store") }}');

        // Set the hidden field value for the ID to an empty string
        $('#edit_id').val('');

        // Clear the input field
        $('#CreateTask-Task-Name').val('');

        // Change the modal title to "Form Data Dinas"
        $('.modal-title').text('Form Tambah Data Dinas');

        // Show the modal
        $('.create-task').modal('show');
    }
</script>

<script>
    $(document).ready(function () {
        // Handle button click
        $('#btn-save-event').on('click', function () {
            // Check if edit_id value is present
            var editId = $('#edit_id').val();

            // Set the form action and method based on edit_id
            if (editId) {
                $('#dinasForm').attr('action', '{{ url("dinas") }}/' + editId);
                $('#dinasForm').attr('method', 'POST');
                $('#methodField').val('PUT');
            } else {
                $('#dinasForm').attr('action', '{{ route("dinas.store") }}');
                $('#dinasForm').attr('method', 'POST');
                $('#methodField').val('POST');
            }

            // Submit the form
            $('#dinasForm').submit();
        });
    });
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


