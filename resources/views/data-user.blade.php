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

                            <table class="table mb-0">
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
                            </table>
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Task-Name">Email</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Email"
                                        id="CreateTask-Task-Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Task-Name">Password</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Password"
                                        id="CreateTask-Task-Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Task-Name">Nama</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Nama"
                                        id="CreateTask-Task-Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Task-Name">Username</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Username"
                                        id="CreateTask-Task-Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Task-Name">Nomor Telephone</label>
                                    <input type="number" class="form-control" placeholder="Masukkan Nomor Telephone"
                                        id="CreateTask-Task-Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Category">Role ID</label>
                                    <select class="form-select">
                                        <option selected> Pilih Role ID </option>
                                        <option>1 (Warga)</option>
                                        <option>2 (Apa)</option>
                                        <option>3 (Apa)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Category">Kecamatan</label>
                                    <select class="form-select">
                                        <option selected> Pilih Kecamatan </option>
                                        <option>Kecamatan 1</option>
                                        <option>Kecamatan 2</option>
                                        <option>Kecamatan 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Category">Kelurahan</label>
                                    <select class="form-select">
                                        <option selected> Pilih Kelurahan </option>
                                        <option>Kelurahan 1</option>
                                        <option>Kelurahan 2</option>
                                        <option>Kelurahan 3</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Task-Name">RT</label>
                                    <input type="number" class="form-control" placeholder="Masukkan RT"
                                        id="CreateTask-Task-Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Task-Name">RW</label>
                                    <input type="number" class="form-control" placeholder="Masukkan RW"
                                        id="CreateTask-Task-Name">
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
        </div>

    @endsection
    @section('scripts')
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <!-- SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Function to show SweetAlert confirmation
        function confirmDelete() {
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: 'Data user akan dihapus!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Data user telah dihapus.',
                        'success'
                    );
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            const deleteButton = document.querySelector('.btn-danger');
            deleteButton.addEventListener('click', function (event) {
                event.preventDefault();
                confirmDelete();
            });
        });
    </script>
@endsection


