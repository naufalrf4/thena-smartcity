@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('css')
    <!-- jsvectormap css -->
    <link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" integrity="sha512-h9FcoyWjHcOcmEVkxOfTLnmZFWIH0iZhZT1H2TbOq55xssQGEJHEaIm+PgoUaZbRvQTNTluNOEfb1ZRy6D3BOw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('page-title')
    Dashboard
@endsection
@section('body')

    <body>
    @endsection
    @section('content')
        <div class="row">
            <div class="col-xl-6">
                @if(session('role')->level_role != 6)
                <div class="card">
                    <div class="card-body pb-0">
                        <div class="d-flex align-items-start">
                            @if(session('role')->level_role != 4)
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-4">Jumlah Pelaporan</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold">Sort By:</span>
                                        <span class="text-muted">Bulan
                                            <!-- <i class="mdi mdi-chevron-down ms-1"></i> -->
                                        </span>
                                    </a>
                                    <!-- <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Today</a>
                                    </div> -->
                                </div>
                            </div>
                            @endif
                            @if(session('role')->level_role == 4)
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-4">Aksi Cepat</h5>
                            </div>
                            @endif
                        </div>

                        <div>
                            @if(session('role')->level_role != 4)
                            <div id="overview"
                                data-item="{{ json_encode($grp1) }}"
                                data-label="Pelaporan"
                                data-colors='["#1f58c7", "#1f58c7", "#1f58c7","#1f58c7", "#1f58c7", "#1f58c7","#1f58c7","#1f58c7","#1f58c7","#1f58c7","#1f58c7", "#1f58c7"]'
                                class="apex-chart"></div>
                            @endif
                            @if(session('role')->level_role == 4)                 
                            <div class="mb-3 container">
                                
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-8 gap-3 justify-content-between">
                                            <a href="{{ route('pelaporan.index') }}" class="col-4 btn btn-link m-0 p-0 flex-grow-1">
                                                <div class="avatar-xl">
                                                    <div class="product-img avatar-title d-flex flex-column img-thumbnail bg-soft-primary border-0 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24">
                                                        <path d="M17.561 5.663c.856.411 1.556 1.149 1.893 2.117.339.967.254 1.98-.157 2.836l1.407.678c.585-1.216.708-2.656.227-4.03-.481-1.375-1.474-2.424-2.689-3.009l-.681 1.408zm1.188-2.465c1.486.715 2.698 1.998 3.286 3.678s.438 3.441-.277 4.927l1.443.696c.893-1.857 1.079-4.055.346-6.153-.734-2.098-2.247-3.698-4.102-4.591l-.696 1.443zm-10.932 12.494l-2.342-6.437-3.24 1.179c-1.766.643-2.673 2.605-2.025 4.382.646 1.777 2.603 2.697 4.368 2.055l3.239-1.179zm-6.321-1.343c-.387-1.065.153-2.244 1.207-2.626l1.951-.711 1.406 3.862-1.952.71c-1.052.383-2.224-.171-2.612-1.235zm11.818-11.592l4.686 12.873c-3.82-.802-6.74-.82-8.896-.407l-.471-1.296c2.06-.431 4.495-.453 7.267-.06l-3.06-8.407c-1.876 2.097-3.723 3.613-5.606 4.624l-.472-1.297c1.892-1.052 4.08-2.881 6.552-6.03zm-2.453 17.276c-.436-.151-.815-.429-1.09-.797l-1.637-2.194-3.956 1.441 2.603 3.34c.294.375.794.518 1.239.356l2.872-1.045c.229-.084.383-.304.381-.549-.002-.246-.156-.463-.389-.543l-.023-.009" fill="#1f58c7"/>
                                                    </svg>
                                                    Pelaporan
        
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="tel:112" class="col-4 btn btn-link m-0 p-0 flex-grow-1">
                                                <div class="avatar-xl">
                                                    <div class="product-img avatar-title d-flex flex-column img-thumbnail bg-soft-primary border-0 text-primary">
                                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 82.943 82.943" style="enable-background:new 0 0 82.943 82.943;" xml:space="preserve" width="48" height="48">
                                                            <path d="M52.535,36.133c-7.782,0-14.113-6.331-14.113-14.113S44.753,7.908,52.535,7.908s14.113,6.331,14.113,14.113
                                                                S60.317,36.133,52.535,36.133z M52.535,11.781c-5.646,0-10.24,4.593-10.24,10.24c0,5.646,4.593,10.24,10.24,10.24
                                                                c5.646,0,10.24-4.594,10.24-10.24C62.775,16.374,58.182,11.781,52.535,11.781z M59.237,20.084h-4.766v-4.766h-3.873v4.766h-4.766
                                                                v3.873h4.766v4.766h3.873v-4.766h4.766V20.084z M78.123,43.199l-1.65-1.61h2.624c1.069,0,1.937-0.867,1.937-1.937
                                                                c0-1.069-0.867-1.937-1.937-1.937h-7.39c-0.003,0-0.006,0.001-0.009,0.001c-0.076,0.001-0.151,0.013-0.226,0.023
                                                                c-0.957,0.118-1.701,0.924-1.701,1.913v7.39c0,1.07,0.867,1.937,1.936,1.937s1.937-0.867,1.937-1.937V44.24l1.759,1.715
                                                                c4.028,4.029,5.664,15.221,0.001,20.884c-2.789,2.789-6.496,4.324-10.44,4.324c-3.635,0-7.066-1.307-9.765-3.694
                                                                c0.122-0.127,0.244-0.255,0.366-0.384c0.809-0.858,1.667-1.715,2.497-2.544l0.425-0.425c0.751-0.751,1.165-1.752,1.165-2.818
                                                                c0-1.066-0.413-2.067-1.165-2.818l-12.94-12.94c-1.554-1.554-4.082-1.553-5.636,0l-3.673,3.674L22.123,35.099l3.673-3.673
                                                                c1.554-1.554,1.554-4.083,0-5.637l-12.94-12.94c-1.554-1.554-4.082-1.554-5.637,0l-2.397,2.397
                                                                c-0.236,0.236-0.484,0.467-0.733,0.701c-0.626,0.586-1.273,1.192-1.852,1.933c-0.94,1.203-1.42,2.6-1.699,3.547
                                                                c-0.607,2.06-0.702,4.342-0.282,6.783c0.799,4.644,3.375,9.338,7.257,13.219l22.437,22.437c4.841,4.841,10.827,7.522,16.099,7.522
                                                                c2.13,0,4.145-0.438,5.919-1.348c0.066-0.034,0.127-0.071,0.191-0.106c3.474,3.291,7.999,5.102,12.804,5.102
                                                                c4.978,0,9.658-1.938,13.178-5.458C85.662,62.057,83.325,48.401,78.123,43.199z M32.689,61.127L10.252,38.69
                                                                c-3.32-3.32-5.514-7.275-6.178-11.137c-0.319-1.852-0.258-3.545,0.181-5.032c0.305-1.035,0.624-1.731,1.035-2.256
                                                                c0.394-0.504,0.906-0.983,1.448-1.491c0.281-0.263,0.559-0.524,0.825-0.789l2.397-2.397c0.021-0.021,0.05-0.031,0.079-0.031
                                                                c0.03,0,0.059,0.01,0.08,0.031l12.94,12.94c0.041,0.041,0.041,0.118,0,0.159l-4.968,4.969c-0.016,0.015-0.032,0.029-0.047,0.043
                                                                c-0.376,0.36-0.591,0.857-0.596,1.378c-0.005,0.521,0.199,1.022,0.567,1.39L34.87,53.323c0.373,0.373,0.884,0.575,1.411,0.566
                                                                c0.528-0.011,1.028-0.238,1.385-0.627c0.004-0.004,0.007-0.009,0.012-0.013l4.971-4.971c0.041-0.041,0.118-0.041,0.159,0
                                                                l12.94,12.94v0c0.037,0.038,0.037,0.121,0,0.159L55.325,61.8c-0.85,0.849-1.73,1.727-2.579,2.628
                                                                c-0.86,0.912-1.644,1.704-2.544,2.166C45.589,68.959,38.222,66.661,32.689,61.127z" fill="#1f58c7"/>
                                                        </svg>
                                                        Emergency
        
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="mailto:semapor@thena.my.id" class="col-3 btn btn-link m-0 p-0 flex-grow-1">
                                                <div class="avatar-xl">
                                                    <div class="product-img avatar-title d-flex flex-column img-thumbnail bg-soft-primary border-0 text-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                                                            <defs>
                                                            </defs>
                                                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #1f58c7; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                                                <path d="M 75.546 78.738 H 14.455 C 6.484 78.738 0 72.254 0 64.283 V 25.716 c 0 -7.97 6.485 -14.455 14.455 -14.455 h 61.091 c 7.97 0 14.454 6.485 14.454 14.455 v 38.567 C 90 72.254 83.516 78.738 75.546 78.738 z M 14.455 15.488 c -5.64 0 -10.228 4.588 -10.228 10.228 v 38.567 c 0 5.64 4.588 10.229 10.228 10.229 h 61.091 c 5.64 0 10.228 -4.589 10.228 -10.229 V 25.716 c 0 -5.64 -4.588 -10.228 -10.228 -10.228 H 14.455 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: fill=#1f58c7; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                                                <path d="M 11.044 25.917 C 21.848 36.445 32.652 46.972 43.456 57.5 c 2.014 1.962 5.105 -1.122 3.088 -3.088 C 35.74 43.885 24.936 33.357 14.132 22.83 C 12.118 20.867 9.027 23.952 11.044 25.917 L 11.044 25.917 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #1f58c7; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                                                <path d="M 46.544 57.5 c 10.804 -10.527 21.608 -21.055 32.412 -31.582 c 2.016 -1.965 -1.073 -5.051 -3.088 -3.088 C 65.064 33.357 54.26 43.885 43.456 54.412 C 41.44 56.377 44.529 59.463 46.544 57.5 L 46.544 57.5 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #1f58c7; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                                                <path d="M 78.837 64.952 c -7.189 -6.818 -14.379 -13.635 -21.568 -20.453 c -2.039 -1.933 -5.132 1.149 -3.088 3.088 c 7.189 6.818 14.379 13.635 21.568 20.453 C 77.788 69.973 80.881 66.89 78.837 64.952 L 78.837 64.952 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #1f58c7; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                                                <path d="M 14.446 68.039 c 7.189 -6.818 14.379 -13.635 21.568 -20.453 c 2.043 -1.938 -1.048 -5.022 -3.088 -3.088 c -7.189 6.818 -14.379 13.635 -21.568 20.453 C 9.315 66.889 12.406 69.974 14.446 68.039 L 14.446 68.039 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: #1f58c7; fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"/>
                                                            </g>
                                                            </svg>
                                                        Email
        
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
                @endif

                @if(session('role')->level_role == 4 || session('role')->level_role == 6)
                <div class="row">
                    
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-soft-primary">
                                                <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                            </div>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            @if(session('role')->level_role == 6)
                                            <h6 class="mb-0 font-size-15">Tugas Pelaporan Belum Selesai</h6>
                                            @elseif(session('role')->level_role == 4)
                                            <h6 class="mb-0 font-size-15">Total Seluruh Pelaporan</h6>
                                            @else
                                            <h6 class="mb-0 font-size-15">Total Pelaporan</h6>
                                            @endif

                                            
                                            
                                        </div>

                                        <!-- <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal text-muted font-size-22"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div>
                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{ $grp2 }}
                                             <!-- <span class="text-success fw-medium font-size-13 align-middle"> <i
                                                    class="mdi mdi-arrow-up"></i> 8.34% </span>  -->
                                        </h4>
                                        <div class="d-flex mt-1 align-items-end overflow-hidden">
                                            <div class="flex-grow-1">
                                                @if(session('role')->level_role == 6)
                                                <p class="text-muted mb-0 text-truncate">Total Pelaporan yang sedang dikerjakan</p>
                                                @elseif(session('role')->level_role == 4)
                                                <p class="text-muted mb-0 text-truncate">Pelaporan di Kota Semarang</p>
                                                @endif
                                            </div>
                                            <!-- <div class="flex-shrink-0">
                                                <div id="mini-1" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-soft-primary">
                                                <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                            </div>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            @if(session('role')->level_role == 6)
                                            <h6 class="mb-0 font-size-15">Tugas Pelaporan Selesai</h6>
                                            @endif

                                            @if(session('role')->level_role == 4)
                                            <h6 class="mb-0 font-size-15">Total Pelaporan Saya</h6>
                                            @endif

                                        </div>

                                        <!-- <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal text-muted font-size-22"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div>
                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{ $grp3 }}
                                             <!-- <span class="text-danger fw-medium font-size-13 align-middle"> <i
                                                    class="mdi mdi-arrow-down"></i> 3.68% </span> -->
                                        </h4>
                                        <div class="d-flex mt-1 align-items-end overflow-hidden">
                                            <div class="flex-grow-1">
                                                @if(session('role')->level_role == 6)
                                                <p class="text-muted mb-0 text-truncate">Total Pelaporan yang sudah selesai</p>
                                                @endif

                                                @if(session('role')->level_role == 4)
                                                <p class="text-muted mb-0 text-truncate">Pelaporan Saya</p>
                                                @endif
                                                
                                            </div>
                                            <!-- <div class="flex-shrink-0">
                                                <div id="mini-2" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            @if(session('role')->level_role != 6)
            <div class="col-xl-6">
                @if(session('role')->level_role != 4)
                <div class="row">
                    
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-soft-primary">
                                                <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                            </div>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            @if(session('role')->level_role != 4)
                                            <h6 class="mb-0 font-size-15">Total Pelaporan</h6>
                                            @endif

                                            @if(session('role')->level_role == 4)
                                            <h6 class="mb-0 font-size-15">Total Seluruh Pelaporan</h6>
                                            @endif
                                            
                                        </div>

                                        <!-- <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal text-muted font-size-22"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div>
                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{ $grp2 }}
                                             <!-- <span class="text-success fw-medium font-size-13 align-middle"> <i
                                                    class="mdi mdi-arrow-up"></i> 8.34% </span>  -->
                                        </h4>
                                        <div class="d-flex mt-1 align-items-end overflow-hidden">
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-0 text-truncate">Total Seluruh Pelaporan di Semarang</p>
                                            </div>
                                            <!-- <div class="flex-shrink-0">
                                                <div id="mini-1" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-soft-primary">
                                                <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                            </div>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            @if(session('role')->level_role == '1' || session('role')->level_role == '3')
                                            <h6 class="mb-0 font-size-15">Total Warga</h6>
                                            @endif

                                            @if(session('role')->level_role == 5)
                                            <h6 class="mb-0 font-size-15">Total Pelaporan untuk Dinas</h6>
                                            @endif

                                            @if(session('role')->level_role == 4)
                                            <h6 class="mb-0 font-size-15">Total Pelaporan Saya</h6>
                                            @endif

                                            @if(session('role')->level_role == 2)
                                            <h6 class="mb-0 font-size-15">Total Pelaporan Belum Ditangani</h6>
                                            @endif

                                        </div>

                                        <!-- <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal text-muted font-size-22"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div>
                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{ $grp3 }}
                                             <!-- <span class="text-danger fw-medium font-size-13 align-middle"> <i
                                                    class="mdi mdi-arrow-down"></i> 3.68% </span> -->
                                        </h4>
                                        <div class="d-flex mt-1 align-items-end overflow-hidden">
                                            <div class="flex-grow-1">
                                                @if(session('role')->level_role == '1' || session('role')->level_role == '3')
                                                <p class="text-muted mb-0 text-truncate">Total Akun Warga</p>
                                                @endif

                                                @if(session('role')->level_role == 5)
                                                <p class="text-muted mb-0 text-truncate">Total Pelaporan untuk Dinas Saya</p>
                                                @endif

                                                @if(session('role')->level_role == 4)
                                                <p class="text-muted mb-0 text-truncate">Total Pelaporan Saya</p>
                                                @endif

                                                @if(session('role')->level_role == 2)
                                                <p class="text-muted mb-0 text-truncate">Total Pelaporan Yang belum ditangani</p>
                                                @endif
                                                
                                            </div>
                                            <!-- <div class="flex-shrink-0">
                                                <div id="mini-2" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if(session('role')->level_role == 4)
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start mb-2">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">Laporan Terdekat</h5>
                                    </div>
                                    <!-- <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Today<i class="mdi mdi-chevron-down ms-1"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                                <!-- <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="popular-product-img p-2">
                                            <img src="{{ URL::asset('build/images/product/img.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <span class="badge badge-soft-primary font-size-10 text-uppercase ls-05"> Popular
                                            Item</span>
                                        <h5 class="mt-2 font-size-16"><a href="" class="text-dark">Home & Office
                                                Chair Blue</a></h5>
                                        <p class="text-muted">But who has any right to find chooses enjoy.</p>

                                        <div class="row g-0 mt-3 pt-1 align-items-end">
                                            <div class="col-4">
                                                <div class="mt-1">
                                                    <h4 class="font-size-16">800</h4>
                                                    <p class="text-muted mb-1">Total Selling</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mt-1">
                                                    <h4 class="font-size-16">250</h4>
                                                    <p class="text-muted mb-1">Total Stock</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mt-1">
                                                    <a href="" class="btn btn-primary btn-sm mb-1">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="mx-n4 px-4" id="nearestlaporan" data-simplebar style="max-height: 300px;  overflow-y: scroll;">


                                    <div class="popular-product-box skeleton skeleton-text rounded my-2 py-4">          
                                    </div>

                                    <div class="popular-product-box skeleton skeleton-text rounded my-2 py-4">
                                    </div>

                                    <!-- <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-soft-success border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-4.png') }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-dark">Home & Office Chair Green</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-dark">$96485.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">634 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-soft-danger border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-5.png') }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-dark">Wood Chair dark Brown</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-dark">$56230.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">964 Sales</p>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endif

                @if(session('role')->level_role != 4)
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-soft-primary">
                                                <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                            </div>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            @if(session('role')->level_role == 1 || session('role')->level_role == 3)
                                            <h6 class="mb-0 font-size-15">Total Dinas</h6>
                                            @endif
                                            @if(session('role')->level_role == 5)
                                            <h6 class="mb-0 font-size-15">Total Pelaporan Belum Ditangani</h6>
                                            @endif

                                            @if(session('role')->level_role == 2)
                                            <h6 class="mb-0 font-size-15">Total Pelaporan Sedang Ditangani</h6>
                                            @endif
                                        </div>

                                        <!-- <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal text-muted font-size-22"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div>
                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{ $grp4 }}
                                            <!-- <span class="text-danger fw-medium font-size-13 align-middle"> <i
                                                    class="mdi mdi-arrow-down"></i> 2.64% </span>  -->
                                        </h4>
                                        <div class="d-flex mt-1 align-items-end overflow-hidden">
                                            <div class="flex-grow-1">
                                                @if(session('role')->level_role == 1 || session('role')->level_role == 3)
                                                <p class="text-muted mb-0 text-truncate">Total Akun Dinas</p>
                                                @endif
                                                @if(session('role')->level_role == 5)
                                                <p class="text-muted mb-0 text-truncate">Total Pelaporan Yang Belum Ditangani</p>
                                                @endif
                                                @if(session('role')->level_role == 2)
                                                <p class="text-muted mb-0 text-truncate">Total Pelaporan Yang Sedang Ditangani</p>
                                                @endif
                                            </div>
                                            <!-- <div class="flex-shrink-0">
                                                <div id="mini-3" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">
                                            <div class="avatar-title rounded bg-soft-primary">
                                                <i class="bx bx-check-shield font-size-24 mb-0 text-primary"></i>
                                            </div>
                                        </div>

                                        <div class="flex-grow-1 ms-3">
                                            @if(session('role')->level_role == 1 || session('role')->level_role == 3)
                                            <h6 class="mb-0 font-size-15">Total Petugas</h6>
                                            @endif
                                            @if(session('role')->level_role == 5)
                                            <h6 class="mb-0 font-size-15">Total Pelaporan Belum Ditangani</h6>
                                            @endif
                                            @if(session('role')->level_role == 2)
                                            <h6 class="mb-0 font-size-15">Total Pelaporan Sudah Ditangani</h6>
                                            @endif
                                        </div>

                                        <!-- <div class="flex-shrink-0">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="bx bx-dots-horizontal text-muted font-size-22"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                    <a class="dropdown-item" href="#">Today</a>
                                                </div>
                                            </div>
                                        </div> -->

                                    </div>

                                    <div>
                                        <h4 class="mt-4 pt-1 mb-0 font-size-22">{{ $grp5 }}
                                            <!-- <span class="text-success fw-medium font-size-13 align-middle"> <i
                                                    class="mdi mdi-arrow-down"></i> 5.79% </span>  -->
                                            </h4>
                                        <div class="d-flex mt-1 align-items-end overflow-hidden">
                                            <div class="flex-grow-1">
                                                @if(session('role')->level_role == 1 || session('role')->level_role == 3)
                                                <p class="text-muted mb-0 text-truncate">Total Akun Petugas</p>
                                                @endif
                                                @if(session('role')->level_role == 5)
                                                <p class="text-muted mb-0 text-truncate">Total Pelaporan Yang Belum Ditangani</p>
                                                @endif
                                                @if(session('role')->level_role == 2)
                                                <p class="text-muted mb-0 text-truncate">Total Pelaporan Yang Sudah Ditangani</p>
                                                @endif
                                            </div>
                                            <!-- <div class="flex-shrink-0">
                                                <div id="mini-4" data-colors='["#1f58c7"]' class="apex-charts"></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @endif

            @if(session('role')->level_role == 6)
            <div class="col-xl-6">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start mb-2">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">Laporan Penugasan</h5>
                                    </div>
                                    
                                    <!-- <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Today<i class="mdi mdi-chevron-down ms-1"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>

                                

                                <!-- <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="popular-product-img p-2">
                                            <img src="{{ URL::asset('build/images/product/img.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <span class="badge badge-soft-primary font-size-10 text-uppercase ls-05"> Popular
                                            Item</span>
                                        <h5 class="mt-2 font-size-16"><a href="" class="text-dark">Home & Office
                                                Chair Blue</a></h5>
                                        <p class="text-muted">But who has any right to find chooses enjoy.</p>

                                        <div class="row g-0 mt-3 pt-1 align-items-end">
                                            <div class="col-4">
                                                <div class="mt-1">
                                                    <h4 class="font-size-16">800</h4>
                                                    <p class="text-muted mb-1">Total Selling</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mt-1">
                                                    <h4 class="font-size-16">250</h4>
                                                    <p class="text-muted mb-1">Total Stock</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mt-1">
                                                    <a href="" class="btn btn-primary btn-sm mb-1">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="mx-n4 px-4" id="nearestlaporan" data-simplebar style="max-height: 400px; overflow-y: scroll;"> 


                                    <div class="popular-product-box skeleton skeleton-text rounded my-2 py-4">          
                                    </div>

                                    <div class="popular-product-box skeleton skeleton-text rounded my-2 py-4">
                                    </div>

                                    <!-- <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-soft-success border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-4.png') }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-dark">Home & Office Chair Green</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-dark">$96485.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">634 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-soft-danger border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-5.png') }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-dark">Wood Chair dark Brown</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-dark">$56230.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">964 Sales</p>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <!-- end row -->

        <!-- Harusnya buat walikota dan dinas dan dispatcher bisa juga  -->
        @if(session('role')->level_role == 1 || session('role')->level_role == 3 || session('role')->level_role == 5)
        <div class="row">
            <div class="col-xxl-8">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="card-title mb-3 text-truncate">Peta Persebaran Laporan</h5>
                                    </div>
                                </div>
                                <div id="map" style="height: 400px;"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- <div class="col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="card-title mb-4 text-truncate">Top Selling Categories</h5>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold">Sort By:</span> <span class="text-muted">Weekly<i
                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="saleing-categories" data-colors='["#1f58c7", "#4976cf","#6a92e1", "#e6ecf9"]'
                            class="apex-charts" dir="ltr"></div>

                        <div class="row mt-3 pt-1">
                            <div class="col-md-6">
                                <div class="px-2 mt-2">
                                    <div class="d-flex align-items-center mt-sm-0 mt-2">
                                        <i class="mdi mdi-circle font-size-10 text-primary"></i>
                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                            <p class="font-size-15 mb-1 text-truncate">Men Fashion</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <span class="fw-bold">34.3%</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mt-2">
                                        <i class="mdi mdi-circle font-size-10 text-success"></i>
                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                            <p class="font-size-15 mb-0 text-truncate">Women Clothing</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <span class="fw-bold">25.7%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="px-2 mt-2">
                                    <div class="d-flex align-items-center mt-sm-0 mt-2">
                                        <i class="mdi mdi-circle font-size-10 text-info"></i>
                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                            <p class="font-size-15 mb-1 text-truncate">Beauty Products</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <span class="fw-bold">18.6%</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mt-2">
                                        <i class="mdi mdi-circle font-size-10 text-secondary"></i>
                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                            <p class="font-size-15 mb-0 text-truncate">Others Products</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <span class="fw-bold">21.4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- end row -->
        @endif

        <!-- <div class="row">
            <div class="col-xxl-8">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start mb-2">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">Popular Products</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Today<i class="mdi mdi-chevron-down ms-1"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <div class="popular-product-img p-2">
                                            <img src="{{ URL::asset('build/images/product/img.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <span class="badge badge-soft-primary font-size-10 text-uppercase ls-05"> Popular
                                            Item</span>
                                        <h5 class="mt-2 font-size-16"><a href="" class="text-dark">Home & Office
                                                Chair Blue</a></h5>
                                        <p class="text-muted">But who has any right to find chooses enjoy.</p>

                                        <div class="row g-0 mt-3 pt-1 align-items-end">
                                            <div class="col-4">
                                                <div class="mt-1">
                                                    <h4 class="font-size-16">800</h4>
                                                    <p class="text-muted mb-1">Total Selling</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mt-1">
                                                    <h4 class="font-size-16">250</h4>
                                                    <p class="text-muted mb-1">Total Stock</p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="mt-1">
                                                    <a href="" class="btn btn-primary btn-sm mb-1">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mx-n4 px-4" data-simplebar style="max-height: 205px;">
                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-soft-primary border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-1.png') }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-dark">Wood Chair dark Brown</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-dark">$62300.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">562 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-soft-success border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-8.png') }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-dark">Home & Office Chair Crime</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$190.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-dark">$25698.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">856 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-soft-danger border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-3.png') }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-dark">Office Chair Blue</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$420.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-dark">$64351.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">524 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-soft-success border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-4.png') }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-dark">Home & Office Chair Green</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-dark">$96485.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">634 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="popular-product-box rounded my-2">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="avatar-md">
                                                    <div
                                                        class="product-img avatar-title img-thumbnail bg-soft-danger border-0">
                                                        <img src="{{ URL::asset('build/images/product/img-5.png') }}" class="img-fluid"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="mb-1 text-truncate"><a href=""
                                                        class="font-size-15 text-dark">Wood Chair dark Brown</a></h5>
                                                <p class="text-muted fw-semibold mb-0 text-truncate">$230.00</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end ms-3">
                                                <h5 class="mb-1"><a href=""
                                                        class="font-size-15 text-dark">$56230.00</a></h5>
                                                <p class="text-muted fw-semibold mb-0">964 Sales</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-start mb-2">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title">Loyal Customers</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal font-size-22"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mx-n4 px-4" data-simplebar style="max-height: 421px;">
                                    <div class="border-bottom loyal-customers-box pt-2">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}"
                                                class="rounded-circle avatar img-thumbnail" alt="">
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="font-size-15 mb-1 text-truncate">Michelle Bernard</h5>
                                                <p class="text-muted text-truncate mb-0">Michelle@gmail.com</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5
                                                    class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                    4.7 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-bottom loyal-customers-box">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}"
                                                class="rounded-circle avatar img-thumbnail" alt="">
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="font-size-15 mb-1 text-truncate">David Grajeda</h5>
                                                <p class="text-muted text-truncate mb-0">David@gmail.com</p>
                                            </div>
                                            <div class="flex-shrink-0">
                                                <h5
                                                    class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                    3.4 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-bottom loyal-customers-box">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}"
                                                class="rounded-circle avatar img-thumbnail" alt="">
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="font-size-15 mb-1 text-truncate">Charles Roman</h5>
                                                <p class="text-muted text-truncate mb-0">Charles@gmail.com</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <h5
                                                    class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                    4.9 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-bottom loyal-customers-box">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/users/avatar-7.jpg') }}"
                                                class="rounded-circle avatar img-thumbnail" alt="">
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="font-size-15 mb-1 text-truncate">David Reynolds</h5>
                                                <p class="text-muted text-truncate mb-0">David@gmail.com</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <h5
                                                    class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                    3.5 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-bottom loyal-customers-box">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/users/avatar-8.jpg') }}"
                                                class="rounded-circle avatar img-thumbnail" alt="">
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="font-size-15 mb-1 text-truncate">Marion Munroe</h5>
                                                <p class="text-muted text-truncate mb-0">Marion@gmail.com</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <h5
                                                    class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                    2.3 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3 loyal-customers-box">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/users/avatar-5.jpg') }}"
                                                class="rounded-circle avatar img-thumbnail" alt="">
                                            <div class="flex-grow-1 ms-3 overflow-hidden">
                                                <h5 class="font-size-15 mb-1 text-truncate">Christina Emerson</h5>
                                                <p class="text-muted text-truncate mb-0">Christina@gmail.com</p>
                                            </div>
                                            <div class="flex-shrink-0 text-end">
                                                <h5
                                                    class="font-size-14 mb-0 text-truncate w-xs bg-light p-2 rounded text-center">
                                                    4.1 <i class="bx bxs-star font-size-14 text-primary ms-1"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="card-title mb-4 text-truncate">Top Selling Categories</h5>
                            </div>
                            <div class="flex-shrink-0 ms-2">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold">Sort By:</span> <span class="text-muted">Weekly<i
                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="saleing-categories" data-colors='["#1f58c7", "#4976cf","#6a92e1", "#e6ecf9"]'
                            class="apex-charts" dir="ltr"></div>

                        <div class="row mt-3 pt-1">
                            <div class="col-md-6">
                                <div class="px-2 mt-2">
                                    <div class="d-flex align-items-center mt-sm-0 mt-2">
                                        <i class="mdi mdi-circle font-size-10 text-primary"></i>
                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                            <p class="font-size-15 mb-1 text-truncate">Men Fashion</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <span class="fw-bold">34.3%</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mt-2">
                                        <i class="mdi mdi-circle font-size-10 text-success"></i>
                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                            <p class="font-size-15 mb-0 text-truncate">Women Clothing</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <span class="fw-bold">25.7%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="px-2 mt-2">
                                    <div class="d-flex align-items-center mt-sm-0 mt-2">
                                        <i class="mdi mdi-circle font-size-10 text-info"></i>
                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                            <p class="font-size-15 mb-1 text-truncate">Beauty Products</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <span class="fw-bold">18.6%</span>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center mt-2">
                                        <i class="mdi mdi-circle font-size-10 text-secondary"></i>
                                        <div class="flex-grow-1 ms-2 overflow-hidden">
                                            <p class="font-size-15 mb-0 text-truncate">Others Products</p>
                                        </div>
                                        <div class="flex-shrink-0 ms-2">
                                            <span class="fw-bold">21.4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- end row -->

        <!-- <div class="row">
            <div class="col-xl-7">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start mb-3">
                            <div class="flex-grow-1">
                                <h5 class="card-title">Sales Revenue</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold">Year:</span> <span class="text-muted">2021<i
                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">2019</a>
                                        <a class="dropdown-item" href="#">2020</a>
                                        <a class="dropdown-item" href="#">2021</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-xxl-7">
                                <div class="py-3">
                                    <div id="world-map-markers" style="height: 300px"></div>
                                </div>
                            </div>

                            <div class="col-xl-5">
                                <div class="table-responsive">
                                    <table class="table table-centered align-middle table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 500px;">Countries</th>
                                                <th>Orders</th>
                                                <th>Earnings</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ URL::asset('build/images/flags/us.jpg') }}" class="rounded"
                                                            alt="user-image" height="18">
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="mb-0 text-truncate">United States</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>46k</td>
                                                <td>$6,524.30</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ URL::asset('build/images/flags/italy.jpg') }}" class="rounded"
                                                            alt="user-image" height="18">
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="mb-0 text-truncate">Italy</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>86k</td>
                                                <td>$6,985.94</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ URL::asset('build/images/flags/spain.jpg') }}" class="rounded"
                                                            alt="user-image" height="18">
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="mb-0 text-truncate">Spain</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>86k</td>
                                                <td>$5,685.47</td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="{{ URL::asset('build/images/flags/french.jpg') }}" class="rounded"
                                                            alt="user-image" height="18">
                                                        <div class="flex-grow-1 ms-3">
                                                            <p class="mb-0 text-truncate">French</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>56k</td>
                                                <td>$5,645.45</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center mb-3">
                            <h5 class="card-title me-2">Invoice List</h5>
                            <div class="ms-auto">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted font-size-12">Sort By: </span> <span class="fw-medium">
                                            Weekly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Yearly</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mx-n4 px-4" data-simplebar style="max-height: 332px;">
                            <div class="table-responsive">
                                <table
                                    class="table table-striped table-centered align-middle table-nowrap mb-0 table-check">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px;">
                                                <div class="form-check font-size-16">
                                                    <input type="checkbox" name="check" class="form-check-input"
                                                        id="checkAll">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th>#Invoice</th>
                                            <th style="width: 190px;">User Name</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">#562354</td>
                                            <td style="width: 190px;">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle avatar-sm"
                                                        src="{{ URL::asset('build/images/users/avatar-1.jpg') }}" alt="">
                                                    <div class="flex-grow-1 ms-3">
                                                        Neal Matthews
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                10 Dec
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">Paid</div>
                                            </td>

                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">#485625</td>
                                            <td style="width: 190px;">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle avatar-sm"
                                                        src="{{ URL::asset('build/images/users/avatar-2.jpg') }}" alt="">
                                                    <div class="flex-grow-1 ms-3">
                                                        Connie Franco
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                10 Dec
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">Paid</div>
                                            </td>

                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">#321458</td>
                                            <td style="width: 190px;">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle avatar-sm"
                                                        src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="">
                                                    <div class="flex-grow-1 ms-3">
                                                        Adella Perez
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                12 Dec
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-danger font-size-12">Unpaid</div>
                                            </td>

                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">#214569</td>
                                            <td style="width: 190px;">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle avatar-sm"
                                                        src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="">
                                                    <div class="flex-grow-1 ms-3">
                                                        Theresa Mayers
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                21 Dec
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">Paid</div>
                                            </td>

                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">#565423</td>
                                            <td style="width: 190px;">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle avatar-sm"
                                                        src="{{ URL::asset('build/images/users/avatar-5.jpg') }}" alt="">
                                                    <div class="flex-grow-1 ms-3">
                                                        Oliver Gonzales
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                25 Dec
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-danger font-size-12">Unpaid</div>
                                            </td>

                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-check font-size-16">
                                                    <input type="checkbox" class="form-check-input">
                                                    <label class="form-check-label"></label>
                                                </div>
                                            </td>
                                            <td class="fw-semibold">#565423</td>
                                            <td style="width: 190px;">
                                                <div class="d-flex align-items-center">
                                                    <img class="rounded-circle avatar-sm"
                                                        src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt="">
                                                    <div class="flex-grow-1 ms-3">
                                                        Willie Verner
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                30 Dec
                                            </td>
                                            <td>
                                                <div class="badge badge-soft-success font-size-12">Paid</div>
                                            </td>

                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button"
                                                        data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>

                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
        <!-- end row -->
    @endsection
    @section('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js" integrity="sha512-BwHfrr4c9kmRkLw6iXFdzcdWV/PGkVgiIyIWLLlTSXzWQzxuSg4DiQUCpauz/EWjgk5TYQqX/kvn9pG1NpYfqg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- apexcharts -->
        <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector map-->
        <script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
        <script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>

        <script src="{{ URL::asset('build/js/pages/dashboard.init.js') }}"></script>
        <!-- App js -->
        <script src="{{ URL::asset('build/js/app.js') }}"></script>
        @if(session('role')->level_role == 1 || session('role')->level_role == 3 || session('role')->level_role == 5)
        <script>
            var map = L.map('map').setView([-6.984134513957315, 110.40942042962124], 13);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            let mapcoor = {!! json_encode($map1) !!};

            mapcoor.forEach(coordinate => {
                let lat = coordinate.lat_coor; // Replace with the correct key for latitude in your $map1 array
                let lng = coordinate.lng_coor; // Replace with the correct key for longitude in your $map1 array
                
                L.marker([lat, lng])
                    .addTo(map)
                    .bindPopup(coordinate.alamat_kejadian)
            });
            

        </script>
        @endif
        <script>
            function getcoor(){
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        const latitude = position.coords.latitude;
                        const longitude = position.coords.longitude;

                        $('#lat_coor').val(latitude)
                        $('#lng_coor').val(longitude)
                        $('#NewPelaporan-Address').attr("placeholder", "Mendapatkan lokasi dari gps...");

                        getNearestPelaporan(latitude, longitude);
                    },
                    function (error) {
                        console.error("Error getting location:", error);
                    }
                );
            }
        </script>
        @if(session('role')->level_role == 4)
        <script>
            function getNearestPelaporan(lat, lng) {

                $.ajax({
                    url: '{{ route("pelaporan.api_nearestpelaporan") }}',
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                        Authorization: 'Bearer {{ session("ses_token") }}',
                        'Content-Type': 'application/json'
                    },
                    data: JSON.stringify({ lat: lat, lng: lng, pid: null }), // Use the "data" property instead of "body"
                    success: function (data) {
                        // Populate the Kelurahan select with the retrieved data

                        $('#nearestlaporan').empty()
                        let pp = ''
                        let fp = ''
                        data.map((dt) => {
                            if(dt.foto){
                                pp = ` <img class="rounded-md col-12" height="400" style="object-fit: cover; border-radius: 10px;"
                                                src="{{ asset('storage/foto_kejadian/' ) }}/${dt.foto}" alt="Foto Kejadian" load="lazy">`
                            }else{
                                pp = 'Tidak ada Foto dilampirkan'
                            }
                            if(dt.foto_profil){
                                fp = `<img class="rounded-circle header-profile-user"
                                                            src="{{ asset('storage/foto_profil/' ) }}/${dt.foto_profil}" alt="Profile Picture">`
                            }else{
                                fp = `<img class="rounded-circle header-profile-user"
                                                            src="{{ URL::asset('build/images/empty-profile.png') }}" alt="Profile Picture">`
                            }
                            $('#nearestlaporan').append(`
                                <div class="accordion my-2" id="accordionExample">
                                    <div class="accordion-item">
                                        <div class="popular-product-box rounded" data-bs-toggle="collapse" data-bs-target="#lap${dt.id}" aria-expanded="false" aria-controls="lap${dt.id}">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-md">
                                                        
                                                        <div
                                                            class="product-img avatar-title img-thumbnail rounded-circle bg-soft-primary border-0">
                                                            ${fp}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3 overflow-hidden">
                                                    <h5 class="mb-1 text-truncate"><a href=""
                                                            class="font-size-15 text-dark">${dt.nama_laporan}</a></h5>
                                                    <p class="text-muted d-none d-md-block fw-semibold mb-0 text-truncate">oleh ${dt.name}</p>
                                                    <span class="text-primary d-block d-md-none" style="cursor: pointer;">
                                                        Klik Untuk Lihat Selengkapnya
                                                    </span>
                                                </div>
                                                <div class="flex-shrink-0 d-none d-md-block text-end ms-3">
                                                    <h5 class="mb-1"><a href=""
                                                            class="font-size-15 text-dark">Jarak ${(dt.distance * 1.60934).toFixed(2)} Km dari saya</a></h5>
                                                    <span class="text-primary" style="cursor: pointer;">
                                                        Klik Untuk Lihat Selengkapnya
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="lap${dt.id}" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                
                                                <h6 class="fw-bold mt-3">Status Penanganan:</h6>
                                                <span class="badge bg-${dt.color} font-size-12">${dt.status}</span>
                                                
                                                <h6 class="fw-bold mt-3">Foto Laporan:</h6>
                                                ${pp}

                                                <div class="d-flex gap-3  mt-3">
                                                    <div>
                                                        <h6 class="fw-bold">Tanggal di Laporkan:</h6>
                                                        ${dt.tgl_dibuat.split(' ')[0]}
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-bold">Estimasi Selesai:</h6>
                                                        ${dt.estimasi_selesai ? dt.estimasi_selesai.split(' ')[0] : '-'}
                                                    </div>
                                                </div>
                                                <h6 class="fw-bold mt-3">Deksripsi Laporan:</h6>
                                                ${dt.deskripsi_laporan}

                                                <div class="d-flex gap-3 d-block d-md-none  mt-3">
                                                    <div>
                                                        <h6 class="fw-bold">Jarak dari saya:</h6>
                                                        ${(dt.distance * 1.60934).toFixed(2)} Km 
                                                    </div>
                                                    <div>
                                                        <h6 class="fw-bold">Oleh:</h6>
                                                        ${dt.name ?? '-'}
                                                    </div>
                                                </div>

  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `)

                        })
                    },
                    error: function (error) {
                        console.error('Error:', error);
                    }
                });
            }

        </script>
        @endif

        @if(session('role')->level_role == 6)
        <script>
            function getNearestPelaporan(lat, lng) {

                $.ajax({
                    url: '{{ route("pelaporan.api_nearestpelaporan") }}',
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                        Authorization: 'Bearer {{ session("ses_token") }}',
                        'Content-Type': 'application/json'
                    },
                    data: JSON.stringify({ lat: lat, lng: lng, pid: "{{ session('user')->id }}" }), // Use the "data" property instead of "body"
                    success: function (data) {
                        // Populate the Kelurahan select with the retrieved data

                        
                        let pp = ''
                        let zero = 0;
                        if (data.length > 0) {
                            $('#nearestlaporan').empty()
                            data.map((dt) => {                        
                                if(dt.foto){
                                    pp = ` <img class="rounded-md col-12" height="400" style="object-fit: cover;border-radius: 10px;"
                                                    src="{{ asset('storage/foto_kejadian/' ) }}/${dt.foto}" alt="Foto Kejadian" load="lazy">`
                                }else{
                                    pp = 'Tidak ada Foto dilampirkan'
                                }
                                $('#nearestlaporan').append(`
                                    <div class="accordion my-2" id="accordionExample">
                                        <div class="accordion-item">
                                            <div class="popular-product-box rounded" data-bs-toggle="collapse" data-bs-target="#lap${dt.id}" aria-expanded="false" aria-controls="lap${dt.id}">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-md">
                                                            
                                                            <div
                                                                class="product-img avatar-title img-thumbnail rounded-circle bg-soft-primary border-0">
                                                                <img class="rounded-circle header-profile-user"
                                                                src="{{ asset('storage/foto_profil/' ) }}/${dt.foto_profil}" alt="Header Avatar">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3 overflow-hidden">
                                                        <h5 class="mb-1 text-truncate"><a href=""
                                                                class="font-size-15 text-dark">${dt.nama_laporan}</a></h5>
                                                        <p class="text-muted d-none d-md-block fw-semibold mb-0 text-truncate">Untuk ${dt.name}</p>
                                                        <span class="text-primary d-block d-md-none" style="cursor: pointer;">
                                                            Klik Untuk Lihat Selengkapnya
                                                        </span>
                                                    </div>
                                                    <div class="flex-shrink-0 d-none d-md-block text-end ms-3">
                                                        <h5 class="mb-1"><a href=""
                                                                class="font-size-15 text-dark">Jarak ${(dt.distance * 1.60934).toFixed(2)} Km dari saya</a></h5>
                                                        <span class="text-primary" style="cursor: pointer;">
                                                            Klik Untuk Lihat Selengkapnya
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="lap${dt.id}" class="accordion-collapse collapse ${(zero == 0) ? 'show' : ''}" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <a href="{{ route('pelaporan.edit', ':lprid') }}">Buka Detail Laporan</a></br>
                                                    <a href="https://www.google.com/maps/search/?api=1&query=${dt.lat_coor},${dt.lng_coor}">Arahkan Peta ke Lokasi</a>
                                                    
                                                    <h6 class="fw-bold mt-3">Status Penanganan:</h6>
                                                    <span class="badge bg-${dt.color} font-size-12">${dt.status}</span>
                                                    
                                                    <h6 class="fw-bold mt-3">Foto Laporan:</h6>
                                                    ${pp}

                                                    <div class="d-flex gap-3  mt-3">
                                                        <div>
                                                            <h6 class="fw-bold">Tanggal di Laporkan:</h6>
                                                            ${dt.tgl_dibuat.split(' ')[0] ?? '-'}
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-bold">Estimasi Selesai:</h6>
                                                            ${dt.estimasi_selesai ? dt.estimasi_selesai.split(' ')[0] : '-'}
                                                        </div>
                                                    </div>
                                                    <h6 class="fw-bold mt-3">Deksripsi Laporan:</h6>
                                                    ${dt.deskripsi_laporan}

                                                    <h6 class="fw-bold mt-3">Lokasi Laporan:</h6>
                                                    <span class="mt-3"><strong>Alamat Detail:</strong></span>
                                                    <p>${dt.alamat_kejadian}</p>
                                                    <span class="mt-1"><strong>Kecamatan:</strong> ${dt.kecamatan}</span></br>
                                                    <span class="mt-1"><strong>Kelurahan:</strong> ${dt.kelurahan}</span></br>
                                                    

                                                    <div class="d-flex gap-3 d-block d-md-none  mt-3">
                                                        <div>
                                                            <h6 class="fw-bold">Jarak dari saya:</h6>
                                                            ${(dt.distance * 1.60934).toFixed(2)} Km 
                                                        </div>
                                                        <div>
                                                            <h6 class="fw-bold">Oleh:</h6>
                                                            ${dt.name ?? '-'}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                `.replace(':lprid', dt.id))

                                if(zero == 0){
                                    zero++
                                }
                            })
                        } else {
                            $('#nearestlaporan').empty()
                            $('#nearestlaporan').html('<p class="text-center">Laporan belum ada.</p>')

                        }

                        
                    },
                    error: function (error) {
                        console.error('Error:', error);
                    }
                });
            }

        </script>
        @endif

        @if(session('role')->level_role == 4 || session('role')->level_role == 6)
        <script>
            getcoor()
        </script>
        @endif
    @endsection
