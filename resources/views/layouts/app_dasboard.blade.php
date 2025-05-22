<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Metrica - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>
        @include('include.styledash')
<body id="body" data-layout="horizontal">

    <!-- Top Bar Start -->
    <div class="topbar">
        <div class="brand">
            <a href="#" class="logo">
                <span>
                    <img src="{{ asset('assets_dashboard/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{ asset('assets_dashboard/images/logo.png') }}" alt="logo-light" class="logo-lg logo-light">
                    <img src="{{ asset('assets_dashboard/images/logo-dark.png') }}" alt="logo-dark" class="logo-lg logo-dark">
                </span>
            </a>
        </div>

        @include('layouts.assets.nav')
    </div>
    <!-- Top Bar End -->

    <!-- Market Data Section -->
    <div class="national-data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box d-inline-block d-md-flex justify-content-between align-items-center">
                        <div class="my-3 my-md-0 ps-2">
                            <div class="nifty-50 d-inline-block me-3">
                                <div class="font-11 fw-semibold">Nifty 50</div>
                                <div class="font-11">16,538.45 <span class="text-danger">-78.00</span> <span class="text-danger">(0.49%)</span></div>
                            </div>
                            <div class="bse-sensex d-inline-block">
                                <div class="font-11 fw-semibold">BSE Sensex</div>
                                <div class="font-11">57,578.76 <span class="text-danger">-273.51</span> <span class="text-danger">(0.52%)</span></div>
                            </div>
                        </div>
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link" href="explore.html">Explore</a></li>
                                <li class="nav-item"><a class="nav-link" href="investment.html">Investment</a></li>
                                <li class="nav-item"><a class="nav-link" href="ipo.html">IPO</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        @yield('content')
    </div>

    <!-- Buy Stocks Modal -->
    {{-- @include('modals.buy-stocks') --}}

    <!-- Sell Stocks Modal -->
    {{-- @include('modals.sell-stocks') --}}

    <!-- Scripts -->
        @include('include.scriptdash')

    <script>
        new Selectr('#Watchlist', {
            searchable: false,
        });

        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        const popoverList = popoverTriggerList.map(el => new bootstrap.Popover(el));
    </script>
</body>

</html>
