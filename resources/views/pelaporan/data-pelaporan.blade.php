@extends('layouts.master')
@section('title')
    Pelaporan
@endsection
@section('css')
    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/flatpickr/flatpickr.min.css') }}">

    <!-- gridjs css -->
    <link rel="stylesheet" href="{{ URL::asset('build/libs/gridjs/theme/mermaid.min.css') }}">
@endsection
@section('page-title')
    Pelaporan
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
                                <h4 class="mb-0">9,454 <span class="fw-medium text-success font-size-18">
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
                                <h4 class="mb-0">563 <span class="fw-medium text-success font-size-18">
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
                                <h4 class="mb-0">454 <span class="fw-medium text-danger font-size-18">
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
                                <h4 class="mb-0">1,526k <span class="fw-medium text-success font-size-18">
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
                                    class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"
                                    data-bs-toggle="modal" data-bs-target=".new-customer"><i class="mdi mdi-plus me-1"></i>
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
                            <h4 class="mt-3">New Customer Created Successfully</h4>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Username">Judul Laporan</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Judul Laporan"
                                        id="NewPelaporan-Username">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Email">Deskripsi Laporan</label>
                                    <textarea class="form-control" id="NewPelaporan-Email" rows="3"
                                        placeholder="Masukkan Deskripsi Laporan"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Email">Tambahkan Foto</label>
                                    <input type="file" class="form-control" placeholder="Tambahkan Foto"
                                        id="NewPelaporan-Phone">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Phone">Phone</label>
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
                                    <input type="text" class="form-control" placeholder="Select Date"
                                        id="customers-date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="NewPelaporan-Address">Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Address"
                                        id="NewPelaporan-Address">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i
                                        class="bx bx-x me-1"></i> Cancel</button>
                                <button type="submit" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#success-btn" id="btn-save-event"><i class="bx bx-check me-1"></i>
                                    Confirm</button>
                            </div>
                        </div>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    @endsection
    @section('scripts')
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

                    {
                        name: 'Pelapor',
                        formatter: (function (cell) {
                        return gridjs.html('<img src="build/images/users/'+ cell[0]+'" alt="" class="avatar-sm rounded-circle me-2" /><a href="#" class="text-body">' + cell[1] + "</a>");
                        })
                    },
                    {
                        name: 'Tanggal / Tempat Kejadian',
                        formatter: (function (cell) {
                        return gridjs.html('<p class="mb-1">'+ cell[0] +'</p><p class="mb-0">'+ cell[1] +'</p>');
                        })
                    },
                    
                    , "Masalah",

                    {
                        name: "Status Pengerjaan",
                        formatter: (function (cell) {
                        return gridjs.html('<span class="badge bg-success font-size-12"><i class="mdi mdi-star me-1"></i>' + cell +'</span>');
                        })
                    },
                    
                    "Petugas Penanganan", "Estimasi Selesai",
                    {
                        name: "Action",
                        sort: {
                        enabled: false
                    },
                        formatter: (function (cell) {
                        return gridjs.html('<div class="dropdown"><a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal font-size-18"></i></a><ul class="dropdown-menu dropdown-menu-end"><li><a href="#" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success me-1"></i> Edit</a></li><li><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Delete</a></li></ul></div>');
                        })
                    }
                    ],
                pagination: {
                    limit: 6
                },
                sort: true,
                search: true,
                data: [
                    ["", ["avatar-1.jpg","Stephen Rash"],  ["22-10-2023", "Kec. Pancoran Mas"], "2470 Grove Street Bethpage, NY 11714",         "Done", "$5,412", "07 Oct, 2021" ],
                    ["", ["avatar-2.jpg","Juan Mays"],     ["22-10-2023", "Kec. Beji"], "3755 Harron Drive Salisbury, MD 21875",        "Done", "$5,632", "06 Oct, 2021"],
                    ["", ["avatar-3.jpg","Scott Henry"],   ["22-11-2023", "Kec. Bogor Utara"], "3632 Snyder Avenue Bessemer City, NC 28016",   "Done", "$7,523", "06 Oct, 2021"],
                    ["", ["avatar-4.jpg","Cody Menendez"], ["23-12-2023", "Kec. Bogor TImur"], "4401 Findley Avenue Minot, ND 58701",          "Done", "$6,325", "05 Oct, 2021"],
                    ["", ["avatar-5.jpg","Jason Merino"],  ["11-05-2023", "Kec. Singapura"], "3159 Holly Street Cleveland, GA 30528",        "Done", "$4,523", "04 Oct, 2021" ],
                    ["", ["avatar-6.jpg","Kyle Aquino"],   ["11-08-2023", "Kec. Depok Timur"], "4861 Delaware Avenue San Francisco, CA 94143", "Done", "$5,412", "03 Oct, 2021"],
                    ["", ["avatar-7.jpg","David Gaul"],    ["21-09-2023", "Kec. Lenteng Agung"], "1207 Cottrill Lane Stlouis, MO 63101",         "Done", "$5,412", "02 Oct, 2021"],
                    ["", ["avatar-8.jpg","John McCray"],   ["15-07-2023", "JohnMcCray@armyspy.com"], "3309 Horizon Circle Tacoma, WA 98423",         "3.2", "$5,287", "02 Oct, 2021"],
                    ["", ["avatar-1.jpg","John Fane"],  ["325-250-1106", "Kec. Pancoran Mas"], "2470 Grove Street Bethpage, NY 11714",         "Done", "$5,412", "07 Oct, 2021" ],
                    ["", ["avatar-2.jpg","Stacie Parker"],     ["22-10-2023", "Kec. Beji"], "3755 Harron Drive Salisbury, MD 21875",        "Done", "$5,632", "06 Oct, 2021"],
                    ["", ["avatar-3.jpg","Betty Wilson"],   ["22-11-2023", "Kec. Bogor Utara"], "3632 Snyder Avenue Bessemer City, NC 28016",   "Done", "$7,523", "06 Oct, 2021"],
                    ["", ["avatar-4.jpg","Roman Crabtree"], ["23-12-2023", "Kec. Bogor TImur"], "4401 Findley Avenue Minot, ND 58701",          "Done", "$6,325", "05 Oct, 2021"],
                    ["", ["avatar-5.jpg","Marisela Butler"],  ["11-05-2023", "Kec. Singapura"], "3159 Holly Street Cleveland, GA 30528",        "Done", "$4,523", "04 Oct, 2021" ],
                    ["", ["avatar-6.jpg","Roger Slayton"],   ["11-08-2023", "Kec. Depok Timur"], "4861 Delaware Avenue San Francisco, CA 94143", "Done", "$5,412", "03 Oct, 2021"],
                    ["", ["avatar-7.jpg","Barbara Torres"],    ["21-09-2023", "Kec. Lenteng Agung"], "1207 Cottrill Lane Stlouis, MO 63101",         "Done", "$5,412", "02 Oct, 2021"],
                    ["", ["avatar-8.jpg","Daniel Rigney"],   ["15-07-2023", "JohnMcCray@armyspy.com"], "3309 Horizon Circle Tacoma, WA 98423",         "Done", "$5,287", "02 Oct, 2021"],

                ]
                }).render(document.getElementById("table-ecommerce-customers"));
        </script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
    @endsection
