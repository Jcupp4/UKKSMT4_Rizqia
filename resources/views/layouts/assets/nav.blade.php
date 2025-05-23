            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-end mb-0">                           

                    <li class="notification-list">
                        <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                            <i class="ti ti-grid-dots"></i>
                        </a>
                    </li> 

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
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
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
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
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
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
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
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
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
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
                                        </div><!--end media-body-->
                                    </div><!--end media-->
                                </a><!--end-item-->
                            </div>
                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                                View all <i class="fi-arrow-right"></i>
                            </a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets_dashboard/images/users/user-4.jpg') }}" alt="profile-user" class="rounded-circle me-0 me-md-2 thumb-xs" />
                                <div class="user-name">
                                    <small class="d-none d-lg-block font-11">Admin</small>
                                    <span class="d-none d-lg-block fw-semibold font-12">Maria Gibson <i
                                            class="mdi mdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="profile.html"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="login.html"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a>
                        </div>
                    </li><!--end topbar-profile-->
                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link" id="mobileToggle"  onclick="toggleMenu()" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a><!-- End mobile menu toggle-->
                    </li> <!--end menu item--> 
                </ul><!--end topbar-nav-->

                <div class="navbar-custom-menu">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="nav-item  parent-menu-item">
                                <a class="nav-link" href="index.html" id="navbarDashboards">
                                    <span><i class="ti ti-smart-home menu-icon"></i>Dashboards</span>
                                </a>                        
                            </li><!--end nav-item-->

                            {{-- <li class="nav-item  parent-menu-item">
                                <a class="nav-link" href="market.html" id="navbarMarket">
                                    <span><i class="ti ti-chart-arrows-vertical menu-icon"></i>Market</span>
                                </a>                        
                            </li><!--end nav-item--> --}}

                            <li class="nav-item  parent-menu-item">
                                <a class="nav-link" href="portfolio.html" id="navbarMarket">
                                    <span><i class="ti ti-briefcase menu-icon"></i>Portfolio</span>
                                </a>                        
                            </li><!--end nav-item-->

                            {{-- <li class="nav-item  parent-menu-item">
                                <a class="nav-link" href="position.html" id="navbarMarket">
                                    <span><i class="ti ti-scale menu-icon"></i>Position</span>
                                </a>                        
                            </li><!--end nav-item--> --}}

                            <li class="nav-item  parent-menu-item">
                                <a class="nav-link" href="orders.html" id="navbarMarket">
                                    <span class="position-relative"><i class="ti ti-shopping-cart menu-icon"></i>Orders <small class="order-badge pending"></small></span>                            
                                </a>                        
                            </li><!--end nav-item-->

                            <li class="nav-item  parent-menu-item">
                                <a class="nav-link" href="funds.html" id="navbarMarket">
                                    <span><i class="ti ti-cash menu-icon"></i>Funds</span>
                                </a>                        
                            </li><!--end nav-item-->                                        
                        </ul><!-- End navigation menu -->
                    </div> <!-- end navigation -->
                </div>
                <!-- Navbar -->
            </nav>