<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dashui.codescandy.com/dashuipro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Feb 2025 10:27:44 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Codescandy" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M8S4MT3EYG');
    </script>

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashuipro/assets/images/favicon/favicon.ico') }}" />

    <!-- Color modes -->
    <script src="{{ asset('dashuipro/assets/js/vendors/color-modes.js') }}"></script>

    <!-- Libs CSS -->
    <link href="{{ asset('dashuipro/assets/libs/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashuipro/assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('dashuipro/assets/libs/simplebar/dist/simplebar.min.css') }}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('dashuipro/assets/css/theme.min.css') }}">

    <title>Push Kontak by Manz</title>
</head>

<body>
    <main id="main-wrapper" class="main-wrapper">
        <div class="header">
            <!-- navbar -->
            <div class="navbar-custom navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                    <a class="navbar-brand d-block d-md-none" href="index.html">
                        <img src="{{ asset('dashuipro/assets/images/brand/logo/logo-2.svg') }}" alt="Image" />
                    </a>

                    <a id="nav-toggle" href="#!" class="ms-auto ms-md-0 me-0 me-lg-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                            class="bi bi-text-indent-left text-muted" viewBox="0 0 16 16">
                            <path
                                d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </a>

                    <div class="d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form action="#">
                            <div class="input-group">
                                <input class="form-control rounded-3 bg-transparent ps-9" type="search" value=""
                                    id="searchInput" placeholder="Search" />
                                <span class="">
                                    <button class="btn position-absolute start-0" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search text-dark">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul
                        class="navbar-nav navbar-right-wrap ms-lg-auto d-flex nav-top-wrap align-items-center ms-4 ms-lg-0">
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-ghost btn-icon rounded-circle" type="button"
                                    aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                                    <i class="bi theme-icon-active"></i>
                                    <span class="visually-hidden bs-theme-text">Toggle theme</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="light" aria-pressed="false">
                                            <i class="bi theme-icon bi-sun-fill"></i>
                                            <span class="ms-2">Light</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center"
                                            data-bs-theme-value="dark" aria-pressed="false">
                                            <i class="bi theme-icon bi-moon-stars-fill"></i>
                                            <span class="ms-2">Dark</span>
                                        </button>
                                    </li>
                                    <li>
                                        <button type="button" class="dropdown-item d-flex align-items-center active"
                                            data-bs-theme-value="auto" aria-pressed="true">
                                            <i class="bi theme-icon bi-circle-half"></i>
                                            <span class="ms-2">Auto</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown stopevent ms-2">
                            <a class="btn btn-ghost btn-icon rounded-circle" href="#!" role="button"
                                id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="icon-xs" data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                aria-labelledby="dropdownNotification">
                                <div>
                                    <div
                                        class="border-bottom px-3 pt-2 pb-3 d-flex justify-content-between align-items-center">
                                        <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                                        <a href="#!" class="text-muted">
                                            <span>
                                                <i class="me-1 icon-xs" data-feather="settings"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div data-simplebar style="height: 250px">
                                        <!-- List group -->
                                        <ul class="list-group list-group-flush notification-list-scroll">
                                            <!-- List group item -->
                                            <li class="list-group-item bg-light">
                                                <a href="#!" class="text-muted">
                                                    <h5 class="mb-1">Rishi Chopra</h5>
                                                    <p class="mb-0">Mauris blandit erat id nunc blandit, ac eleifend
                                                        dolor pretium.</p>
                                                </a>
                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">
                                                <a href="#!" class="text-muted">
                                                    <h5 class="mb-1">Neha Kannned</h5>
                                                    <p class="mb-0">Proin at elit vel est condimentum elementum id in
                                                        ante. Maecenas et sapien metus.</p>
                                                </a>
                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">
                                                <a href="#!" class="text-muted">
                                                    <h5 class="mb-1">Nirmala Chauhan</h5>
                                                    <p class="mb-0">Morbi maximus urna lobortis elit sollicitudin
                                                        sollicitudieget elit vel pretium.</p>
                                                </a>
                                            </li>
                                            <!-- List group item -->
                                            <li class="list-group-item">
                                                <a href="#!" class="text-muted">
                                                    <h5 class="mb-1">Sina Ray</h5>
                                                    <p class="mb-0">Sed aliquam augue sit amet mauris volutpat
                                                        hendrerit sed nunc eu diam.</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="border-top px-3 py-2 text-center">
                                        <a href="#!" class="text-inherit">View all Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#!" role="button" id="dropdownUser"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar"
                                        src="{{ asset('dashuipro/assets/images/avatar/avatar-11.jpg') }}"
                                        class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="px-4 pb-0 pt-2">
                                    <div class="lh-1">
                                        <h5 class="mb-1">John E. Grainger</h5>
                                        <a href="#!" class="text-inherit fs-6">View my profile</a>
                                    </div>
                                    <div class="dropdown-divider mt-3 mb-2"></div>
                                </div>

                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="user"></i>
                                            Edit Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#!">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="activity"></i>
                                            Activity Log
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item d-flex align-items-center" href="#!">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="settings"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="index.html">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- navbar vertical -->
        <div class="app-menu"><!-- Sidebar -->

            <div class="navbar-vertical navbar nav-dashboard">
                <div class="h-100" data-simplebar>
                    <!-- Brand logo -->
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('dashuipro/assets/images/brand/logo/logo-2.svg') }}"
                            alt="dash ui - bootstrap 5 admin dashboard template" />
                    </a>
                    <!-- Navbar nav -->
                    <ul class="navbar-nav flex-column" id="sideNavbar">
                        <!-- Nav item -->
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="{{ route('dashboard') }}">
                                <i data-feather="message-square" class="nav-icon me-2 icon-xxs"></i>
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="{{ route('tambahPerangkat') }}">
                                <i data-feather="message-square" class="nav-icon me-2 icon-xxs"></i>
                                Tambah Perangkat
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link has-arrow " href="#">
                                <i data-feather="message-square" class="nav-icon me-2 icon-xxs"></i>
                                Kirim Pesan
                            </a>
                        </li>

                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navKanban" aria-expanded="false" aria-controls="navKanban">
                                <i data-feather="layout" class="nav-icon me-2 icon-xxs"></i>
                                Kanban
                            </a>

                            <div id="navKanban" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="pages/task-kanban-grid.html">Grid</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link has-arrow " href="pages/task-kanban-list.html">List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                                data-bs-target="#navDocs" aria-expanded="false" aria-controls="navDocs">
                                <i data-feather="package" class="nav-icon me-2 icon-xxs"></i>
                                Docs
                            </a>
                            <div id="navDocs" class="collapse " data-bs-parent="#sideNavbar">
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a href="docs/index.html" class="nav-link ">Introduction</a>
                                    </li>
                                    <li class="nav-item"><a href="docs/environment-setup.html"
                                            class="nav-link ">Environment setup</a></li>
                                    <li class="nav-item"><a href="docs/working-with-gulp.html"
                                            class="nav-link ">Working with Gulp</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="card bg-light shadow-none text-center mx-4 my-8">
                        <div class="card-body py-6">
                            <img src="{{ asset('dashuipro/assets/images/background/giftbox.png') }}"
                                alt="Manz - Jasa Push Kontak" />
                            <div class="mt-4">
                                <h5>Info Penting</h5>
                                <p class="fs-6 mb-4">Upgrade your plan from a Free trial, to select Business Plan.
                                    Start Now</p>
                                <a href="#" class="btn btn-secondary btn-sm">Upgrade Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page content -->
        <div id="app-content">
            <!-- Container fluid -->

            @yield('content')

        </div>
    </main>

    <!-- Scripts -->

    <!-- Libs JS -->

    <script src="{{ asset('dashuipro/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashuipro/assets/libs/feather-icons/dist/feather.min.js') }}"></script>
    <script src="{{ asset('dashuipro/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('dashuipro/assets/js/theme.min.js') }}"></script>

    <script src="{{ asset('dashuipro/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dashuipro/assets/js/vendors/chart.js') }}"></script>
</body>

<!-- Mirrored from dashui.codescandy.com/dashuipro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Feb 2025 10:28:51 GMT -->

</html>
