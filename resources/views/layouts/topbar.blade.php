<header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="15.000000pt" height="15.000000pt"
                            viewBox="0 0 75.000000 85.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)" fill="#1F58C7"
                                stroke="none">
                                <path
                                    d="M200 725 l-175 -103 -3 -89 -3 -88 236 -135 235 -134 -57 -33 c-50 -28 -60 -31 -78 -19 -41 27 -322 186 -329 186 -3 0 -6 -24 -6 -52 l0 -53 180 -103 179 -103 178 104 178 105 0 87 0 87 -225 130 c-124 71 -228 133 -232 137 -4 3 17 19 46 35 l54 29 177 -102 c97 -55 179 -101 181 -101 2 0 4 24 4 54 l0 54 -177 102 c-98 57 -180 104 -183 105 -3 1 -84 -44 -180 -100z m212 -267 l229 -133 -3 -33 c-2 -23 -11 -38 -28 -48 -24 -15 -32 -11 -235 107 -116 67 -220 128 -232 135 -42 26 -23 103 26 104 8 0 117 -60 243 -132z" />
                            </g>
                        </svg>
                    </span>
                    <span class="logo-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" width="15.000000pt" height="15.000000pt"
                            viewBox="0 0 75.000000 85.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,85.000000) scale(0.100000,-0.100000)" fill="#1F58C7"
                                stroke="none">
                                <path
                                    d="M200 725 l-175 -103 -3 -89 -3 -88 236 -135 235 -134 -57 -33 c-50 -28 -60 -31 -78 -19 -41 27 -322 186 -329 186 -3 0 -6 -24 -6 -52 l0 -53 180 -103 179 -103 178 104 178 105 0 87 0 87 -225 130 c-124 71 -228 133 -232 137 -4 3 17 19 46 35 l54 29 177 -102 c97 -55 179 -101 181 -101 2 0 4 24 4 54 l0 54 -177 102 c-98 57 -180 104 -183 105 -3 1 -84 -44 -180 -100z m212 -267 l229 -133 -3 -33 c-2 -23 -11 -38 -28 -48 -24 -15 -32 -11 -235 107 -116 67 -220 128 -232 135 -42 26 -23 103 26 104 8 0 117 -60 243 -132z" />
                            </g>
                        </svg>
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" height="30">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ URL::asset('build/images/logo-light-sm.png') }}" alt="" height="26">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                <i class="bx bx-menu align-middle"></i>
            </button>

            <!-- start page title -->
            <div class="page-title-box align-self-center d-none d-md-block">
                <h4 class="page-title mb-0">@yield('page-title')</h4>
            </div>
            <!-- end page title -->

        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="rounded-circle header-profile-user" style="object-fit: cover;"
                        src="{{ session('user')->foto_profil ? asset('storage/foto_profil/' . session('user')->foto_profil) : URL::asset('build/images/empty-profile.png') }}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">
                        {{ session('user')->name ?? '-' }}
                        ({{ session('role')->name ?? '-' }})
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 border-bottom">
                        <h6 class="mb-0">{{ session('user')->name ?? '-' }}</h6>
                        <p class="mb-0 font-size-11 text-muted">{{ session('user')->email ?? '-' }}</p>
                    </div>
                    <a class="dropdown-item" href="{{ route('profile.index') }}"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span
                            class="align-middle">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
