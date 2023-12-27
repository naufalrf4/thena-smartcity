<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('build/images/logo-dark-sm.png') }}" alt="" height="26">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" height="28">
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

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Dashboard</li>

               <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-home-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                        <span class="badge rounded-pill bg-primary">2</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" data-key="t-ecommerce">Ecommerce</a></li>
                    </ul>
                </li>

                <li class="menu-title" data-key="t-layouts">Layouts</li>
                
                <li>
                    <a href="layouts-horizontal">
                        <i class="bx bx-layout icon nav-icon"></i>
                        <span class="menu-item" data-key="t-horizontal">Horizontal</span>
                    </a>
                </li>

                <li class="menu-title" data-key="t-pages">Pages</li>

                <li>
                    <a href="javascript: void(0);">
                        <i class="bx bx-user-pin icon nav-icon"></i>
                        <span class="menu-item" data-key="t-authentication">Authentication</span>
                        <span class="badge rounded-pill bg-info">8</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" data-key="t-login">Login</a></li>
                        <li><a href="auth-register" data-key="t-register">Register</a></li>
                        <li><a href="auth-recoverpw" data-key="t-recover-password">Recover Password</a></li>
                        <li><a href="auth-lock-screen" data-key="t-lock-screen">Lock Screen</a></li>
                        <li><a href="auth-logout" data-key="t-logout">Logout</a></li>
                        <li><a href="auth-confirm-mail" data-key="t-confirm-mail">Confirm Mail</a></li>
                        <li><a href="auth-email-verification" data-key="t-email-verification">Email Verification</a></li>
                        <li><a href="auth-two-step-verification" data-key="t-two-step-verification">Two Step Verification</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-file icon nav-icon"></i>
                        <span class="menu-item" data-key="t-utility">Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" data-key="t-starter-page">Starter Page</a></li>
                        <li><a href="pages-maintenance" data-key="t-maintenance">Maintenance</a></li>
                        <li><a href="pages-comingsoon" data-key="t-coming-soon">Coming Soon</a></li>
                        <li><a href="pages-404" data-key="t-error-404">Error 404</a></li>
                        <li><a href="pages-500" data-key="t-error-500">Error 500</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-share-alt icon nav-icon"></i>
                        <span class="menu-item" data-key="t-multi-level">Multi Level</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li class="disabled"><a href="#" data-key="t-disabled-item">Disabled Item</a></li>
                        <li><a href="javascript: void(0);" data-key="t-level-1.1">Level 1.1</a></li>
                        <li><a href="javascript: void(0);" class="has-arrow" data-key="t-level-1.2">Level 1.2</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-2.1">Level 2.1</a></li>
                                <li><a href="javascript: void(0);" data-key="t-level-2.2">Level 2.2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->