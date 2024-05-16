<nav class="navbar navbar-expand-lg fixed-top bg-hover-scroll on-over">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ URL::asset('build/images/images-landing/semapor-logo-text.png') }}" alt=""
                width="165" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon">
                <span style="background-color: #1E58C6"></span>
                <span style="background-color: #1E58C6"></span>
                <span style="background-color: #1E58C6"></span>
            </div>
        </button>

        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <div
                class="navbar-content-inner ms-lg-auto d-flex flex-column flex-lg-row align-lg-center gap-4 gap-lg-10 p-2 p-lg-0">
                <ul class="navbar-nav gap-lg-2 gap-xl-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}"
                            href="{{ route('news') }}">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>

                <div>
                    @if (session('user'))
                        <a href={{ route('dashboard.index') }} class="btn btn-outline-primary">Dashboard</a>
                    @else
                        <a href={{ route('login') }} class="btn btn-outline-primary">Masuk</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
