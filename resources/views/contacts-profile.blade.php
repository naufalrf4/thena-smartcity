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
            <div class="col-xxl-3">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="user-profile-img">
                            <img src="{{ URL::asset('build/images/pattern-bg.jpg') }}" class="profile-img profile-foreground-img rounded-top"
                                style="height: 120px;" alt="">
                            <div class="overlay-content rounded-top">
                                <div>
                                    <div class="user-nav p-3">
                                        <div class="d-flex justify-content-end">
                                            <div class="dropdown">
                                                <a class="text-muted dropdown-toggle font-size-16" href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                    <i class="bx bx-dots-vertical text-white font-size-20"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target=".create-task">Edit</a>
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end user-profile-img -->


                        <div class="p-4 pt-0">

                            <div class="mt-n5 position-relative text-center border-bottom pb-3">
                                <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt=""
                                    class="avatar-xl rounded-circle img-thumbnail">

                                <div class="mt-3">
                                    <h5 class="mb-1">Martin Gurley</h5>
                                </div>

                            </div>

                            <div class="table-responsive mt-3 border-bottom pb-3">
                                <table
                                    class="table align-middle table-sm table-nowrap table-borderless table-centered mb-0">
                                    <tbody>
                                        <tr>
                                            <th class="fw-bold">
                                                Email</th>
                                            <td class="text-muted">testing@gmail.com</td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <th class="fw-bold">
                                                Name</th>
                                            <td class="text-muted">testing</td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <th class="fw-bold">
                                                Username</th>
                                            <td class="text-muted">test</td>
                                        </tr>
                                        <!-- end tr -->
                                        <tr>
                                            <th class="fw-bold">No Telp</th>
                                            <td class="text-muted">0005485</td>
                                        </tr>
                                        <!-- end tr -->

                                        <tr>
                                            <th class="fw-bold">Role ID</th>
                                            <td class="text-muted">(2) Warga</td>
                                        </tr>
                                        <!-- end tr -->

                                        <tr>
                                            <th class="fw-bold">Kecamatan</th>
                                            <td class="text-muted">Bojong Gede</td>
                                        </tr>

                                        <tr>
                                            <th class="fw-bold">Kelurahan</th>
                                            <td class="text-muted">Bojong Baru</td>
                                        </tr>
                                        <!-- end tr -->
                                    </tbody><!-- end tbody -->
                                </table>
                            </div>



                            <div class="p-3 mt-3">
                                <div class="row text-center">
                                    <div class="col-6 border-end">
                                        <div class="p-1">
                                            <h5 class="mb-1">1,269</h5>
                                            <p class="text-muted mb-0">Products</p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="p-1">
                                            <h5 class="mb-1">5.2k</h5>
                                            <p class="text-muted mb-0">Followers</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-2 text-center border-bottom pb-4">
                                <a href="" class="btn btn-primary waves-effect waves-light btn-sm">Send Message <i
                                        class="bx bx-send ms-1 align-middle"></i></a>
                            </div>

                            <div class="mt-3 pt-1 text-center">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                        <a href="javascript:void()"
                                            class="social-list-item bg-primary text-white border-primary">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

        <!-- Edit Data User  -->
        <div class="modal fade create-task" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
        aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Edit Data User</h5>
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
        <!-- apexcharts -->
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="{{ URL::asset('build/js/pages/profile.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
