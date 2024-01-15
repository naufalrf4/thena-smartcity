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

                    @if (session('role')->level_role == 1 || session('role')->level_role == 2 || session('role')->level_role == 4 || session('role')->level_role == 5 || session('role')->level_role == 6)
                            <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="" 
                                action="{{ route('pelaporan.update', $pelaporan->id) }}" 
                                enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')
                    @endif
                        
                        <div class="mb-2">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold bg-primary text-light px-3 py-2 rounded-5">#LPR{{ $pelaporan->id }}</span>
                            </div>
                        </div>

                        <hr>

                        <div class="my-2 d-flex align-items-center justify-content-between">
                            <div class="my-2">
                                <div class="flex flex-col">
                                    <span for="" class="fw-bold">Status Laporan</span><br>
                                    <span class="badge bg-{{$pelaporan->statusPenanganan->color}} font-size-12" id="status-laporan" data-status-laporan="{{ $pelaporan->status_penanganan_id }}">{{ $pelaporan->statusPenanganan->status }}</span>
                                </div>
                            </div>

                            @if (session('role')->level_role == 1)
                                    <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-end" id="btn-area">
                                        <button type="button" 
                                            class="btn btn-primary btn-sm waves-effect text-white waves-light mt-2 me-2" onclick="turnEdit()">
                                            <i class="mdi mdi-pencil-box-multiple-outline me-1"></i> Edit Laporan
                                        </button>
                                    </div>
                            @elseif (session('role')->level_role == 2 || session('role')->level_role == 4 || session('role')->level_role == 5)

                                @if (session('role')->level_role == 4)
                                    @if ($pelaporan->status_penanganan_id == 1)
                                        <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-end" id="btn-area">
                                            <button type="button" 
                                                class="btn btn-primary btn-sm waves-effect text-white waves-light mt-2 me-2" onclick="turnEdit()">
                                                <i class="mdi mdi-pencil-box-multiple-outline me-1"></i> Edit Laporan
                                            </button>
                                        </div>
                                    @endif
                                @else
                                    @if (in_array($pelaporan->status_penanganan_id, [1, 2, 3, 4]))
                                        <div class="col-xl-3 col-lg-4 col-sm-6 d-flex justify-content-end" id="btn-area">
                                            <button type="button" 
                                                class="btn btn-primary btn-sm waves-effect text-white waves-light mt-2 me-2" onclick="turnEdit()">
                                                <i class="mdi mdi-pencil-box-multiple-outline me-1"></i> Edit Laporan
                                            </button>
                                        </div>
                                    @endif
                                @endif
                            @endif
                                    

                        </div>

                        <div class="my-2 mt-4">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold">Sedang ditangani oleh</span><br>
                                <span id="role-penanganan" data-role-penanganan="{{ $pelaporan->role_penanganan_id ?? '' }}">{{ $pelaporan->rolePenanganan->name ?? 'Laporan sedang menunggu dalam antrian penanganan' }}</span>
                            </div>
                        </div>

                        <div class="my-2 mt-4">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold">Tanggal Dilaporkan</span><br>
                                <span id="tgl-dibuat" data-tgl-dibuat="{{ explode(' ', $pelaporan->tgl_dibuat ) [0] ?? '' }}">{{ explode(' ', $pelaporan->tgl_dibuat ) [0] ?? '-' }}</span>
                            </div>
                        </div>

                        <div class="my-2 mt-4">
                            <div class="flex flex-col">
                                <span for="" class="fw-bold">Estimasi Selesai</span><br>
                                <span id="estimasi-selesai" data-estimasi-selesai="{{ explode(' ', $pelaporan->estimasi_selesai ) [0] ?? '' }}">
                                    {{ explode(' ', $pelaporan->estimasi_selesai ) [0] ?? '-' }}
                                </span>
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

                        @if(session('role')->level_role == 1 || session('role')->level_role == 2 || session('role')->level_role == 4 || session('role')->level_role == 5 || session('role')->level_role == 6)
                        </form>
                        @endif



                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                {{-- Petugas --}}
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
                                    @if($pelaporan->assignedPetugas->count() == 0)
                                        <div class="d-flex justify-content-center my-3">Belum ada petugas yang ditugaskan</div>
                                    @else
                                        @foreach($petugas_diassign as $p)
                                        <tr>
                                            <td style="width: 50px;">
                                                @if($p->user->foto_profil != NULL)
                                                <img src="{{ URL::asset('build/images/empty-profile.png') }}"
                                                    class="rounded-circle avatar-sm" alt="">
                                                @else
                                                <img src="{{ asset('storage/foto_profil/'. $p->user->foto_profil) }}"
                                                    class="rounded-circle avatar-sm" alt="">
                                                @endif

                                            </td>
                                            <td>
                                                <h5 class="font-size-14 m-0"><a href="javascript: void(0);"
                                                        class="text-dark">{{ ucwords($p->user->name) }}</a></h5>
                                            </td>
                                            @if (
                                                session('role')->level_role == 1 ||
                                                (
                                                    session('role')->level_role == 5 &&
                                                    (
                                                        (!$log_pelaporan->first() && in_array(session('role')->level_role, [1, 2])) || // Show for level_role 1 or 2 if log_pelaporan is empty
                                                        ($log_pelaporan->first() && (
                                                            $log_pelaporan->last() === null || // Check if last entry is null
                                                            in_array($log_pelaporan->last()->status_log_pelaporan, [1, 2]) // Show if the last entry's status_log_pelaporan is 1 or 2
                                                        ))
                                                    )
                                                )
                                            )
                                           <td class="d-flex justify-content-end">
                                                <form class="delete-form" data-id="{{ $p->id }}" action="{{ route('petugas-diassign.destroy', $p->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-link delete-button">
                                                    <i class="mdi mdi-trash-can me-1 text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            @endif
                                             <!-- <td>
                                                <i
                                                    class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i>
                                                Online
                                            </td> -->
                                        </tr>
                                        @endforeach
                                    @endif

                                    @if (
                                        session('role')->level_role == 1 ||
                                        (session('role')->level_role == 5 && optional($log_pelaporan->last())->status_log_pelaporan != 3)
                                    )
                                    <tr>
                                        <td colspan="4">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 flex justify-content-end">
                                                    <div class="text-sm-end">
                                                        <button type="button"
                                                            class="btn btn-primary btn-sm waves-effect waves-light"
                                                            data-bs-toggle="modal" data-bs-target=".tambahpetugas">
                                                            <!-- <i class="mdi mdi-plus me-1"></i>  -->
                                                            Tambah Petugas</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Log Petugas --}}
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Log Petugas</h5>
                        {{-- @if(session('role')->level_role == 1 || session('role')->level_role == 5 || session('role')->level_role == 6) --}}
                        {{-- @php dd($log_pelaporan->first()) @endphp --}}

                        @if (
                            session('role')->level_role == 1 ||
                            session('role')->level_role == 6 ||
                            (session('role')->level_role == 5 && optional($log_pelaporan->last())->status_log_pelaporan != 3)
                        )
                            <button type="button" class="btn btn-primary btn-sm waves-effect waves-light me-1" data-bs-toggle="modal" data-bs-target=".create-task">
                                Tambah Log
                            </button>
                        @endif
                        {{-- @endif --}}
                    </div>

                    <div class="card-body pt-0 pb-3">
                        @if($log_pelaporan->count() == 0)
                            <div class="d-flex justify-content-center my-3">Belum ada Log yang ditambahkan</div>
                        @else
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
                                        @foreach($log_pelaporan as $l)
                                        <tr class="">
                                            <td >
                                                <!-- <div class="form-check font-size-16">
                                                    <input class="form-check-input" type="checkbox" id="upcomingtaskCheck01">
                                                    <label class="form-check-label" for="upcomingtaskCheck01"></label>
                                                </div> -->
                                                {{$l->created_at}}
                                            </td>
                                            <td>
                                                <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);"
                                                        class="text-dark">{{ ucwords($l->user->name) }}</a></h5>
                                            </td>
                                            <td>
                                                <div class="text-center">
                                                    <span
                                                        class="badge rounded-pill badge-soft-{{ $l->statusLog->color }} font-size-11">{{ $l->statusLog->status }}</span>
                                                </div>
                                            </td>
                                            <td>
                                            <button type="button"
                                                class="btn btn-primary btn-sm waves-effect waves-light mt-2 me-2"
                                                data-bs-toggle="modal" data-bs-target=".logpm" onclick="setlog({{ json_encode($l) }})" data-src="{{ $pelaporan->foto }}">
                                                <!-- <i class="mdi mdi-plus me-1"></i>  -->
                                                Detail</button>
                                            </td>
                                            @if (
                                                session('role')->level_role == 1 ||
                                                (
                                                    session('role')->level_role == 5 &&
                                                    (
                                                        (!$log_pelaporan->first() && in_array(session('role')->level_role, [1, 2])) || // Show for level_role 1 or 2 if log_pelaporan is empty
                                                        ($log_pelaporan->first() && (
                                                            $log_pelaporan->last() === null || // Check if last entry is null
                                                            in_array($log_pelaporan->last()->status_log_pelaporan, [1, 2]) // Show if the last entry's status_log_pelaporan is 1 or 2
                                                        ))
                                                    )
                                                )
                                            )
                                            <td class="">
                                                <form class="delete-form" data-id="{{ $l->id }}" action="{{ route('log-pelaporan.destroy', $l->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-link delete-button">
                                                    <i class="mdi mdi-trash-can me-1 text-danger"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
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
                        @endif
                    </div>
                </div>

                {{-- Chat Petugas --}}
                <div class="card">
                                <div class="p-3 px-lg-4 border-bottom">
                                    <div class="row">
                                        <div class="col-xl-5 col-12">
                                            <div class="d-flex align-items-center">
                                                {{-- <div class="flex-shrink-0 avatar me-3 d-sm-block d-none">
                                                    <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" alt=""
                                                        class="img-fluid d-block rounded-circle">
                                                </div> --}}
                                                <div class="d-flex">

                                                    <h5 class="font-size-16 mb-1 text-truncate">
                                                        <a href="#"
                                                            class="text-dark">Forum Pelaporan 
                                                        </a>
                                                    </h5>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-xl-8 col-5">
                                            <ul class="list-inline user-chat-nav text-end mb-0">
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-search"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">
                                                            <form class="px-2">
                                                                <div>
                                                                    <input type="text" class="form-control border bg-soft-light"
                                                                        placeholder="Search...">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
            
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button class="btn nav-btn dropdown-toggle" type="button"
                                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Profile</a>
                                                            <a class="dropdown-item" href="#">Archive</a>
                                                            <a class="dropdown-item" href="#">Muted</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div> --}}
                                    </div>
                                </div>
            
                                <div class="chat-conversation p-3" data-simplebar>
                                    <ul class="list-unstyled mb-0">
                                        {{-- <li class="chat-day-title">
                                            <span class="title">Hari Ini</span>
                                        </li> --}}

                                        {{-- <li>
                                            <div class="conversation-list">
                                                <div class="d-flex">
                                                    <img src="{{ URL::asset('build/images/users/avatar-6.jpg') }}" class="rounded-circle avatar"
                                                        alt="">
                                                    <div class="flex-1">
                                                        <div class="ctext-wrap">
                                                            <div class="ctext-wrap-content">

                                                                <div class="conversation-name">
                                                                    <span class="time">10:00</span>
                                                                </div>

                                                                <p class="mb-0">Halo satu</p>
            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> --}}
            
                                        @foreach($chats as $chat)
                                            <li class="{{ $chat->sender_id == auth()->user()->id ? 'right' : '' }}">
                                                <div class="conversation-list">

                                                    <p class="fw-bold mb-2">{{ $chat->sender->name }}</p>

                                                    <div class="d-flex">
                                                        
                                                        @if( $chat->sender_id != auth()->user()->id )
                                                            <img src="{{ $chat->sender->foto_profil ? asset('storage/foto_profil/' . $chat->sender->foto_profil ) :  URL::asset('build/images/empty-profile.png') }}" class="rounded-circle avatar" alt="" style="object-fit: cover">
                                                        @endif

                                                        <div class="flex-1">
                                                            <div class="ctext-wrap">
                                                                <div class="ctext-wrap-content p-2">
                                                                    <div class="conversation-name p-0">
                                                                        <span class="time">{{ $chat->created_at->format('H:i') }}</span>
                                                                    </div>
                                                                    <p class="mb-0 text-start">{{ $chat->chat }}</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        @if ( $chat->sender_id == auth()->user()->id )
                                                            <img src="{{ $chat->sender->foto_profil ? asset('storage/foto_profil/' . $chat->sender->foto_profil ) :  URL::asset('build/images/empty-profile.png') }}" class="rounded-circle avatar" alt="" style="object-fit: cover">
                                                        @endif

                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                        
                                    </ul>
                                </div>
                                
                                <form class="" method="POST" action="{{ route('chat.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="p-3 border-top">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative">
                                                    <input type="hidden" name="pelaporan_id" value="{{ $pelaporan->id }}">
                                                    <input type="text" name="chat" class="form-control border bg-soft-light"
                                                        placeholder="Ketik pesan...">
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <button type="submit"
                                                    class="btn btn-primary chat-send w-md waves-effect waves-light"><span
                                                        class="d-none d-sm-inline-block me-2">Kirim</span> <i
                                                        class="mdi mdi-send float-end"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                </div>
                
            </div>
        </div>

        </div>
        <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <div class="modal fade logpm" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Detail Log</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center">
                                <div class="mb-3">
                                    <label class="form-label fw-bold text-dark" for="CreateTask-Team-Member">Foto</label> <br>
                                    <img src="" id="logpm-foto" alt="" srcset="" class="img-fluid rounded-3">
                                </div>
                            </div>

                            <div class="col-md-6 mt-4">

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold text-dark" for="CreateTask-Task-Name">Waktu</label>
                                        <br>
                                        <span id="logpm-waktu" class=""></span>
                                    </div>
                                </div>
                            
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold text-dark" for="CreateTask-Task-Name">Status Log Pelaporan</label>
                                        <br>
                                        <span id="logpm-status" class=""></span>
                                    </div>
                                </div>
                            
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold text-dark">Keterangan log</label> <br>
                                        <p id="logpm-ket" class=""></p>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-bold text-dark" for="CreateTask-Task-Name">Petugas</label>
                                        <br>
                                        <span id="logpm-petugas" class=""></span>
                                    </div>
                                </div>
                            
                            </div>

                            
                        </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
        <!--  Extra Large modal example -->
        @if(session('role')->level_role == 1 || session('role')->level_role == 5 || session('role')->level_role == 6)
        <div class="modal fade create-task" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Tambah Log</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="" 
                                action="{{ route('log-pelaporan.update', $pelaporan->id) }}" 
                                enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Task-Name">Status Log Pelaporan</label>
                                    <select class="form-select" id="status_log" name="status_log">
                                        <option>Pilih Status</option>
                                        @foreach($status_log as $sl)
                                        <option value="{{ $sl->id }}">{{ $sl->status }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="CreateTask-Team-Member">Foto</label>
                                    <input type="file" class="form-control" name="foto" placeholder="Enter Team Member"
                                        id="CreateTask-Team-Member">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Keterangan log</label>
                                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="Masukkan Keterangan Log"></textarea>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
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
                            </div> -->
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i
                                        class="bx bx-x me-1 align-middle"></i> Cancel</button>
                                <button type="submit" class="btn btn-primary"w id="btn-save-event"><i
                                        class="bx bx-check me-1 align-middle"></i> Confirm</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        @endif
        @if(session('role')->level_role == 1 || session('role')->level_role == 5)

        <div class="modal fade tambahpetugas" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myExtraLargeModalLabel">Tambah Petugas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="my-3 d-flex gap-3">
                                <span>Cari Petugas:</span>
                                <select class="form-select form-control" id="petugas" name="petugas_id">
                                    <option value="">Pilih Petugas</option>
                                    @foreach($petugas as $p)
                                        <option value="{{$p->id}}">{{ucwords($p->name)}}</option>
                                    @endforeach
                                </select>

                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light me-1" onclick="addtopetugas()">
                                    Tambah
                                </button>
                            </div>
                            <div class="my-3">
                                Petugas yang ditambahkan:
                            </div>
                            <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="" 
                                action="{{ route('petugas-diassign.update', $pelaporan->id) }}" 
                                enctype="multipart/form-data"
                                method="POST">
                                @csrf
                                @method('PUT')
                            <div class="table-responsive">
                                <table class="table align-middle mb-0" id="petugas_table" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <th>Nama Petugas</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <tr class="">
                                            <td>
                                                <h5 class="text-truncate font-size-14 m-0"><a href="javascript: void(0);"
                                                        class="text-dark"></a></h5>
                                            </td>
                                            <td>
                                            <!-- <a href="{{ route('pelaporan.edit', ':lprid') }}" class="btn btn-danger btn-sm">Hapus</a> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-end">
                                <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i
                                        class="bx bx-x me-1 align-middle"></i> Cancel</button>
                                <button type="submit" class="btn btn-primary" id="btn-save-event"><i
                                        class="bx bx-check me-1 align-middle"></i> Confirm</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        @endif
        
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
            function setlog(data) {

                // Set status
                $('#logpm-status').text(data.status_log.status);
                
                // Set image source
                if(data.foto){
                    $('#logpm-foto').attr('src', `{{asset('storage/log_pelaporan/')}}/${data.foto}`); // Replace 'photoUrl' with the property holding the image URL
                }else{
                    $('#logpm-foto').replaceWith('<span class="text-center">Tidak ada foto</span>')
                }
                
                // Set description
                $('#logpm-ket').text(data.keterangan_log);

                $('#logpm-petugas').text(data.user.name)

                $('#logpm-waktu').text(new Date(data.created_at).toISOString().replace(/T/, ' ').replace(/\..+/, ''))
                // Show the modal
                $('.logpm').modal('show');
            }
        </script>

        @if(session('role')->level_role == 1)
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

                let status_laporan = $('#status-laporan').data('status-laporan');
                let role_penanganan = $('#role-penanganan').data('role-penanganan');
                let estimasi_selesai = $('#estimasi-selesai').data('estimasi-selesai');

                //replace to input
                $('#status-laporan').replaceWith(`<select class="form-select form-control" id="status-laporan" name="status_penanganan_id">@foreach($status_penanganan as $s)<option value="{{$s->id}}" @if($s->id == $pelaporan->status_penanganan_id) selected @endif>{{$s->status}}</option>@endforeach</select>`);
                $('#role-penanganan').replaceWith(`<select class="form-select form-control" id="role-penanganan" name="role_penanganan_id" required><option value="">Pilih Dinas</option>@foreach($dinas as $d)<option value="{{$d->id}}" @if($d->id == $pelaporan->role_penanganan_id) selected @endif>{{$d->name}}</option>@endforeach</select>`);
                $('#estimasi-selesai').replaceWith(`<input type="date" class="form-control" id="estimasi-selesai" name="estimasi_selesai" value="${estimasi_selesai}">`);
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

            function addtopetugas(){
                let pet_select = $('#petugas option:selected').val();
                let pet_text = $('#petugas option:selected').text();

                if (pet_select != '') {
                    let newRow = `
                        <tr id="${pet_select}">
                            <td>${pet_text}<input type="hidden" name="newpetugas[]" value="${pet_select}"></td>
                            <td><button type="button" class="btn btn-danger btn-sm" onclick="deleterow('${pet_select}')">Hapus</button></td>
                        </tr>
                    `;
                    
                    // Remove the petugas from select option
                    $('#petugas option:selected').remove();
                    
                    // Append the new row to the table body
                    $('#petugas_table tbody').append(newRow);
                }
            }

            function deleterow(rowId){
                let deletedRow = $(`#${rowId}`);
                let pet_text = deletedRow.find('td:first-child').text(); // Get the text of the first td
                let pet_value = rowId; // Use the rowId as the value
                
                // Construct the option HTML
                let newOption = `<option value="${pet_value}">${pet_text}</option>`;
                
                // Append the option back to the select element
                $('#petugas').append(newOption);
                
                
                $(`#${rowId}`).remove();
            }
        </script>
        @endif

        @if(session('role')->level_role == 4)
        
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

        @if(session('role')->level_role == 2)
        <script>
            function turnEdit(){
                //get data
                let status_laporan = $('#status-laporan').data('status-laporan');
                let role_penanganan = $('#role-penanganan').data('role-penanganan');

                //replace to input
                $('#status-laporan').replaceWith(`<select class="form-select form-control" id="status-laporan" name="status_penanganan_id">@foreach($status_penanganan as $s)<option value="{{$s->id}}" @if($s->id == $pelaporan->status_penanganan_id) selected @endif>{{$s->status}}</option>@endforeach</select>`);
                $('#role-penanganan').replaceWith(`<select class="form-select form-control" id="role-penanganan" name="role_penanganan_id" required><option value="">Pilih Dinas</option>@foreach($dinas as $d)<option value="{{$d->id}}" @if($d->id == $pelaporan->role_penanganan_id) selected @endif>{{$d->name}}</option>@endforeach</select>`);
                
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

        @if(session('role')->level_role == 5)
        <script>
            function turnEdit(){
                //get data
                let status_laporan = $('#status-laporan').data('status-laporan');
                let role_penanganan = $('#role-penanganan').data('role-penanganan');
                let estimasi_selesai = $('#estimasi-selesai').data('estimasi-selesai');

                //replace to input
                $('#status-laporan').replaceWith(`<select class="form-select form-control" id="status-laporan" name="status_penanganan_id">@foreach($status_penanganan as $s)<option value="{{$s->id}}" @if($s->id == $pelaporan->status_penanganan_id) selected @endif>{{$s->status}}</option>@endforeach</select>`);
                $('#role-penanganan').replaceWith(`<select class="form-select form-control" id="role-penanganan" name="role_penanganan_id" required><option value="{{$pelaporan->rolePenanganan->id}}" selected>{{$pelaporan->rolePenanganan->name}}</option><option value="0">Kembalikan ke Dispatcher</option></select>`);
                $('#estimasi-selesai').replaceWith(`<input type="date" class="form-control" id="estimasi-selesai" name="estimasi_selesai" value="${estimasi_selesai}">`);
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

            function addtopetugas(){
                let pet_select = $('#petugas option:selected').val();
                let pet_text = $('#petugas option:selected').text();

                if (pet_select != '') {
                    let newRow = `
                        <tr id="${pet_select}">
                            <td>${pet_text}<input type="hidden" name="newpetugas[]" value="${pet_select}"></td>
                            <td><button type="button" class="btn btn-danger btn-sm" onclick="deleterow('${pet_select}')">Hapus</button></td>
                        </tr>
                    `;
                    
                    // Remove the petugas from select option
                    $('#petugas option:selected').remove();
                    
                    // Append the new row to the table body
                    $('#petugas_table tbody').append(newRow);
                }
            }

            function deleterow(rowId){
                let deletedRow = $(`#${rowId}`);
                let pet_text = deletedRow.find('td:first-child').text(); // Get the text of the first td
                let pet_value = rowId; // Use the rowId as the value
                
                // Construct the option HTML
                let newOption = `<option value="${pet_value}">${pet_text}</option>`;
                
                // Append the option back to the select element
                $('#petugas').append(newOption);
                
                
                $(`#${rowId}`).remove();
            }
        </script>
        @endif

       
    @endsection
