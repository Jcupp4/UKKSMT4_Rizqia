<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mannatthemes.com/bullkit/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 May 2025 02:09:11 GMT -->
<head>
    <meta charset="utf-8" />
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets_dashboard/images/favicon.ico') }}">



    <link href="{{ asset('assets_dashboard/plugins/selectr/selectr.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets_dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets_dashboard/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Tambahkan ini di bagian bawah sebelum </body> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body id="body" data-layout="horizontal" class="">

    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="brand">
            <a href="index.html" class="logo">
                <span>
                    <img src="{{ asset('assets_dashboard/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ asset('assets_dashboard/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                    <img src="{{ asset('assets_dashboard/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <!-- Navbar -->
        <nav class="navbar-custom">
            <ul class="list-unstyled topbar-nav float-end mb-0">

                <li class="notification-list">
                    <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                        <i class="ti ti-grid-dots"></i>
                    </a>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="ti ti-bell"></i>
                        <span class="alert-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-lg pt-0">

                        <h6 class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                            Notifications <span class="badge bg-soft-primary badge-pill">2</span>
                        </h6>
                        <div class="notification-menu" data-simplebar>
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">2 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-chart-arcs"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">10 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-device-computer-camera"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">Meeting with designers</h6>
                                        <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">40 min ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-diamond"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">UX 3 Task complete.</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">1 hr ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-drone"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">Your order is placed</h6>
                                        <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                            <!-- item-->
                            <a href="#" class="dropdown-item py-3">
                                <small class="float-end text-muted ps-2">2 hrs ago</small>
                                <div class="media">
                                    <div class="avatar-md bg-soft-primary">
                                        <i class="ti ti-users"></i>
                                    </div>
                                    <div class="media-body align-self-center ms-2 text-truncate">
                                        <h6 class="my-0 fw-normal text-dark">Payment Successfull</h6>
                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                    </div>
                                    <!--end media-body-->
                                </div>
                                <!--end media-->
                            </a>
                            <!--end-item-->
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('assets_dashboard/images/users/user-4.jpg') }}" alt="profile-user" class="rounded-circle me-0 me-md-2 thumb-xs" />
                            <div class="user-name">
                                <span class="d-none d-lg-block fw-semibold font-12">
                                    @php
                                    $employee = null;
                                    $people = null;

                                    if (auth()->check() && auth()->user()->userReference && auth()->user()->userReference->reference) {
                                    $employee = auth()->user()->userReference->reference;
                                    $employee->load('people');
                                    $people = $employee->people;
                                    }
                                    @endphp

                                    @if ($employee && $people)
                                    <h5 class="my-0">{{ $people->name }}</h5>
                                    <h6 class="my-0 fw-normal">Founder</h6>
                                    @endif<i class="mdi mdi-chevron-down"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="profile.html"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                        <div class="dropdown-divider mb-0"></div>
                        <a class="dropdown-item" href="/logout"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                    </div>
                </li>
                <!--end topbar-profile-->

                <li class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link" id="mobileToggle" onclick="toggleMenu()" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a><!-- End mobile menu toggle-->
                </li>
                <!--end menu item-->
            </ul>
            <!--end topbar-nav-->
            @if(auth()->user()->userReference->reference_type != "App\Models\Student")
            <div class="navbar-custom-menu">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="nav-item  parent-menu-item">
                            <a class="nav-link" href="/dashboard" id="navbarDashboards">
                                <span><i class="ti ti-smart-home menu-icon"></i>Dashboards</span>
                            </a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item  parent-menu-item">
                            <a class="nav-link" href="/dashboard/student" id="navbarMarket">
                                <span><i class="ti ti-chart-arrows-vertical menu-icon"></i>Student</span>
                            </a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item  parent-menu-item">
                            <a class="nav-link" href="/dashboard/employee" id="navbarMarket">
                                <span><i class="ti ti-briefcase menu-icon"></i>Employee</span>
                            </a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item  parent-menu-item">
                            <a class="nav-link" href="{{ route('room_management.room.index') }}" id="navbarMarket">
                                <span><i class="ti ti-scale menu-icon"></i>Room</span>
                            </a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item  parent-menu-item">
                            <a class="nav-link" href="{{ route('product_management.product.index') }}" id="navbarMarket">
                                <span class="position-relative"><i class="ti ti-shopping-cart menu-icon"></i>Product <small class="order-badge pending"></small></span>
                            </a>
                        </li>

                        <li class="nav-item  parent-menu-item">
                            <a class="nav-link" href="{{ route('order.order.manage') }}" id="navbarMarket">
                                <span class="position-relative"><i class="ti ti-shopping-cart menu-icon"></i>Orderan <small class="order-badge pending"></small></span>
                            </a>
                        </li>

                        <li class="nav-item  parent-menu-item">
                            <a class="nav-link" href="{{ route('order.order.history.employee') }}" id="navbarMarket">
                                <span class="position-relative"><i class="ti ti-shopping-cart menu-icon"></i>History Penjualan <small class="order-badge pending"></small></span>
                            </a>
                        </li>
                        <!--end nav-item-->
                        <!--end nav-item-->
                    </ul><!-- End navigation menu -->
                </div>
                <!-- end navigation -->
            </div>
            @else
            <div class="navbar-custom-menu">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li class="nav-item  parent-menu-item">
                            <a class="nav-link" href="/dashboard" id="navbarDashboards">
                                <span><i class="ti ti-smart-home menu-icon"></i>Dashboards</span>
                            </a>
                        </li>
                        <!--end nav-item-->

                        <!--end nav-item-->

                        <li class="nav-item  parent-menu-item">
                            <a class="nav-link" href="{{ route('order.index') }}" id="navbarMarket">
                                <span class="position-relative"><i class="ti ti-shopping-cart menu-icon"></i>Order <small class="order-badge pending"></small></span>
                            </a>
                        </li>
                        <li class="nav-item  parent-menu-item">
                            <a class="nav-link" href="{{ route('order.history') }}" id="navbarMarket">
                                <span class="position-relative"><i class="ti ti-shopping-cart menu-icon"></i>History Pembelian <small class="order-badge pending"></small></span>
                            </a>
                        </li>
                        <!--end nav-item-->
                        <!--end nav-item-->
                    </ul><!-- End navigation menu -->
                </div>
                <!-- end navigation -->
            </div>
            @endif
            <!-- Navbar -->
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->
    <!--end national-data-->

    <div class="page-wrapper">
        <!-- Page Content-->
        @yield('content')
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->
    <div class="modal fade" id="BuyStocks" tabindex="-1" aria-labelledby="BuyStocksLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h6 class="modal-title m-0 mb-n1" id="BuyStocksLabel">Apple Inc</h6>
                        <span class="font-10 d-block mb-1">nasdaq</span>
                        <span class="border border-success px-1 rounded text-success">B</span>
                    </div>
                    <div>
                        <h6 class="m-0 text-uppercase font-16 fw-bold">$147.95 <i class="ti ti-trending-down text-danger"></i></h6>
                        <div class="d-inline-block font-10"><span class="text-danger">-110.60</span> <span class="text-danger">(30.52%)</span></div>
                        <div class="text-success">Live <span><i class="las la-dot-circle"></i></span></div>
                    </div>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>

                <div class="modal-body">
                    <div class="form-check d-inline-block me-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Holding
                        </label>
                    </div>
                    <div class="form-check mb-2 d-inline-block">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Trade
                        </label>
                    </div>
                    <form class="row gy-2 gx-3 align-items-end">
                        <div class="col-auto">
                            <label class="form-label" for="Quantity">Quantity</label>
                            <input type="text" class="form-control form-control-sm" id="Quantity">
                        </div>
                        <div class="col-auto">
                            <label class="form-label" for="Price">Price</label>
                            <input type="text" class="form-control form-control-sm" id="Price">
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="buy_limit">
                                <label class="form-check-label" for="buy_limit">
                                    Limit
                                </label>
                            </div>
                        </div>
                    </form>
                    <div class="mt-3">
                        <a class="" data-bs-toggle="collapse" href="#SL_Option" aria-expanded="false" aria-controls="collapseExample">
                            Stop Loss <i class="ti ti-arrow-down-circle"></i>
                        </a>
                        <div class="collapse" id="SL_Option">
                            <form class="row gy-2 gx-3 align-items-center mt-1">
                                <div class="col-auto">
                                    <label class="form-label" for="Trigger_Price">Trigger Price</label>
                                    <input type="text" class="form-control form-control-sm" id="Trigger_Price">
                                </div>
                                <div class="col-auto align-self-end">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="buy_SL">
                                        <label class="form-check-label" for="buy_SL">
                                            Stop Loss
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end collapse-->
                    </div>
                    <!--end /div-->
                    <button class="btn btn-success w-100 my-3">BUY</button>
                    <div class="row">
                        <div class="col">
                            <small class="text-muted d-block">Require Fund</small>
                            <small>$00.00</small>
                        </div>
                        <!--end col-->
                        <div class="col-auto">
                            <small class="text-muted d-block">Available Fund</small>
                            <small>$8545.00</small>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end modal-body-->

            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->

    <div class="modal fade" id="SellStocks" tabindex="-1" aria-labelledby="SellStocksLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h6 class="modal-title m-0 mb-n1" id="SellStocksLabel">Apple Inc</h6>
                        <span class="font-10 d-block mb-1">nasdaq</span>
                        <span class="border border-danger px-1 rounded text-danger">S</span>
                    </div>
                    <div>
                        <h6 class="m-0 text-uppercase font-16 fw-bold">$147.95 <i class="ti ti-trending-down text-danger"></i></h6>
                        <div class="d-inline-block font-10"><span class="text-danger">-110.60</span> <span class="text-danger">(30.52%)</span></div>
                        <div class="text-success">Live <span><i class="las la-dot-circle"></i></span></div>
                    </div>
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                </div>

                <div class="modal-body">
                    <div class="form-check d-inline-block me-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="sell_Limit">
                        <label class="form-check-label" for="sell_Limit">
                            Holding
                        </label>
                    </div>
                    <div class="form-check mb-2 d-inline-block">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="sell_SL" checked>
                        <label class="form-check-label" for="sell_SL">
                            Trade
                        </label>
                    </div>
                    <form class="row gy-2 gx-3 align-items-end">
                        <div class="col-auto">
                            <label class="form-label" for="Quantity">Quantity</label>
                            <input type="text" class="form-control form-control-sm" id="Quantity">
                        </div>
                        <div class="col-auto">
                            <label class="form-label" for="Price">Price</label>
                            <input type="text" class="form-control form-control-sm" id="Price">
                        </div>
                        <div class="col-auto">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                <label class="form-check-label" for="autoSizingCheck">
                                    Limit
                                </label>
                            </div>
                        </div>
                    </form>
                    <div class="mt-3">
                        <a class="" data-bs-toggle="collapse" href="#SL_Option" aria-expanded="false" aria-controls="collapseExample">
                            Stop Loss <i class="ti ti-arrow-down-circle"></i>
                        </a>
                        <div class="collapse" id="SL_Option">
                            <form class="row gy-2 gx-3 align-items-center mt-1">
                                <div class="col-auto">
                                    <label class="form-label" for="Trigger_Price">Trigger Price</label>
                                    <input type="text" class="form-control form-control-sm" id="Trigger_Price">
                                </div>
                                <div class="col-auto align-self-end">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="buy_SL">
                                        <label class="form-check-label" for="buy_SL">
                                            Stop Loss
                                        </label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end collapse-->
                    </div>
                    <!--end /div-->
                    <button class="btn btn-danger w-100 my-3">SELL</button>
                    <div class="row">
                        <div class="col">
                            <small class="text-muted d-block">Require Fund</small>
                            <small>$00.00</small>
                        </div>
                        <!--end col-->
                        <div class="col-auto">
                            <small class="text-muted d-block">Available Fund</small>
                            <small>$8545.00</small>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end modal-body-->

            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->
    </div>
    <!--end /div-->
    <!-- Javascript  -->

    <script src="{{ asset('assets_dashboard/plugins/selectr/selectr.min.js') }}"></script>
    <script src="{{ asset('assets_dashboard/plugins/apex-chart/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets_dashboard/pages/index.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets_dashboard/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        new Selectr('#Watchlist', {
            searchable: false
        , });

        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        });

    </script>
</body>
<!--end body-->

<!-- Mirrored from mannatthemes.com/bullkit/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 May 2025 02:09:20 GMT -->
</html>
