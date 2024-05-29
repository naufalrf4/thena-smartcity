<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="navbar-brand-box">
        <a href="{{ route('dashboard.index') }}" class="logo logo-dark">
            <span class="logo-sm">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="15.000000pt" height="15.000000pt" viewBox="0 0 75.000000 85.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)" fill="#1F58C7" stroke="none">
                    <path d="M200 725 l-175 -103 -3 -89 -3 -88 236 -135 235 -134 -57 -33 c-50 -28 -60 -31 -78 -19 -41 27 -322 186 -329 186 -3 0 -6 -24 -6 -52 l0 -53 180 -103 179 -103 178 104 178 105 0 87 0 87 -225 130 c-124 71 -228 133 -232 137 -4 3 17 19 46 35 l54 29 177 -102 c97 -55 179 -101 181 -101 2 0 4 24 4 54 l0 54 -177 102 c-98 57 -180 104 -183 105 -3 1 -84 -44 -180 -100z m212 -267 l229 -133 -3 -33 c-2 -23 -11 -38 -28 -48 -24 -15 -32 -11 -235 107 -116 67 -220 128 -232 135 -42 26 -23 103 26 104 8 0 117 -60 243 -132z"/>
                    </g>
                </svg>
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/images-landing/semapor-logo-text.png') }}" alt="" height="50">
            </span>
        </a>

        
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">


        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Dashboard</li>

                <li>
                    <a href="{{ route('dashboard.index') }}">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li class="menu-title" data-key="">Pelaporan</li>

                <li>
                    <a href="{{ route('pelaporan.index') }}">
                        <i class="bx bx-file icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Semua Laporan</span>
                        
                    </a>
                </li>

                <li>
                    <a href="{{ route('pelaporan.belum_ditangani') }}">
                        <i class="bx bx-screenshot icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Belum Ditangani</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pelaporan.sedang_ditangani') }}">
                        <i class="bx bx-file-find icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Sedang Ditangani</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pelaporan.selesai') }}">
                        <i class="bx bx-list-check icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Selesai</span>
                    </a>
                </li>

                @if (session('role')->level_role == 5)
                    <li>
                        <a href="{{ route('pelaporan.perlu_direview') }}" data-key="">
                            <i class="bx bx-calendar-check icon nav-icon"></i>
                            <span class="menu-item" data-key="t-dashboard">Perlu Direview</span>
                        </a>
                    </li>
                @endif

                @if(session('role')->level_role == 1 || session('role')->level_role == 5 || session('role')->level_role == 3 )
                    <li class="menu-title" data-key="">Data Pengguna</li>
                @endif

                @if(session('role')->level_role == 1 || session('role')->level_role == 5 )
                <li>
                    <a href="{{ route('user.index') }}">
                        <i class="bx bx-table icon nav-icon"></i>
                        <span class="menu-item" data-key="">Data User</span>
                    </a>
                </li>
                @endif

                @if(session('role')->level_role == 1 || session('role')->level_role == 3 )
                <li>
                    <a href="{{ route('dinas.index') }}">
                        <i class="bx bx-table icon nav-icon"></i>
                        <span class="menu-item" data-key="">Data Dinas</span>
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- Left Sidebar End -->