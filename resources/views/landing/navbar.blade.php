<!-- resources/views/components/navbar.blade.php -->

<nav class="navbar navbar-expand-lg fixed-top bg-hover-scroll on-over">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ URL::asset('build/images/images-landing/semapor-logo-text.png') }}" alt="" width="165" />
        </a>

        <!-- Navbar toggler button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon">
                <span style="background-color: #1E58C6"></span>
                <span style="background-color: #1E58C6"></span>
                <span style="background-color: #1E58C6"></span>
            </div>
        </button>

        <!-- Navbar content -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <div class="navbar-content-inner ms-lg-auto d-flex flex-column flex-lg-row align-lg-center gap-4 gap-lg-10 p-2 p-lg-0">
                <ul class="navbar-nav gap-lg-2 gap-xl-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#beranda">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#fitur">Fitur</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#pendiri">Pendiri</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>
                </ul>
                <div>
                    @if (session('user'))
                        <a href="/dashboard" class="btn btn-outline-primary">Dashboard</a>
                    @else
                        <a href="/login" class="btn btn-outline-primary">Login</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
