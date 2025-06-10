@extends('layouts.app_dasboard')
@section('content')
            <div class="page-content-tab">

                <div class="container-fluid">
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="row">  
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row d-flex justify-content-center mb-2">
                                                <div class="col">
                                                    <p class="text-dark mb-0 fw-semibold">Fund Available</p>
                                                    <h3 class="my-1 font-20 fw-bold">$2400.00</h3>
                                                </div><!--end col-->
                                                <div class="col-auto align-self-center">
                                                    <img src="{{ asset('assets_dashboard/images/ipo/money.png') }}" class="thumb-lg" alt="..." >
                                                </div><!--end col-->
                                            </div><!--end row-->
                                            <button type="button" class="btn btn-sm btn-de-primary">Add Funds</button>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <h4 class="card-title">New IPO </h4>                      
                                                </div><!--end col-->
                                                <div class="col-auto"> 
                                                    <span class="stocks-list-badge bg-soft-primary ms-1">3</span>                                       
                                                </div><!--end col-->
                                            </div>  <!--end row-->                                  
                                        </div><!--end card-header-->
                                        <div class="card-body">
                                            <div id="IPO_Carousel" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item ">
                                                        <div class="text-center">
                                                            <img src="{{ asset('assets_dashboard/images/ipo/ipo-3.png') }}" class="thumb-lg" alt="..." >
                                                            <h3 class="my-1 font-20 fw-bold">Life's Good</h3>
                                                            <p class="mb-0 fw-semibold">Sep 14, 2021 to Sep 18, 2021</p>
                                                            <p class="mb-2">Allotment : <span class="text-muted">Sep 22, 2021</span></p>
                                                            <a href="#" class="btn btn-sm btn-de-primary">Apply</a>
                                                        </div>                                                  
                                                    </div><!--end carousel-item-->
                                                    <div class="carousel-item active">
                                                        <div class="text-center">
                                                            <img src="{{ asset('assets_dashboard/images/ipo/ipo-1.png') }}" class="thumb-lg" alt="..." >
                                                            <h3 class="my-1 font-20 fw-bold">Starbucks</h3>
                                                            <p class="mb-0 fw-semibold">Sep 02, 2021 to Sep 05, 2021</p>
                                                            <p class="mb-2">Allotment : <span class="text-muted">Sep 08, 2021</span></p>
                                                            <a href="#" class="btn btn-sm btn-de-primary">Apply</a>
                                                        </div>                                                      
                                                    </div><!--end carousel-item-->
                                                    <div class="carousel-item">
                                                        <div class="text-center">
                                                            <img src="{{ asset('assets_dashboard/images/ipo/ipo-2.png') }}" class="thumb-lg" alt="..." >
                                                            <h3 class="my-1 font-20 fw-bold">McDonald's</h3>
                                                            <p class="mb-0 fw-semibold">Sep 06, 2021 to Sep 10, 2021</p>
                                                            <p class="mb-2">Allotment : <span class="text-muted">Sep 14, 2021</span></p>
                                                            <a href="#" class="btn btn-sm btn-de-primary">Apply</a>
                                                        </div>                                                 
                                                    </div><!--end carousel-item-->                                                    
                                                </div>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div><!--end col--> 
                                <div class="col-lg-9">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <div class="nifty-50 d-inline-block me-3">
                                                        <div class="font-11 fw-semibold">Nifty 50</div>
                                                        <div class="d-inline-block font-15 fw-bold">16,538.45 <span class="text-danger font-11 fw-semibold">-78.00</span> <span class="text-danger font-11 fw-semibold">(0.49%)</span></div>
                                                    </div>                     
                                                </div><!--end col-->
                                                <div class="col-auto"> 
                                                    <div class="toolbar">
                                                        <button class="btn btn-sm btn-outline-light" id="one_month">1M</button>
                                                        <button class="btn btn-sm btn-outline-light" id="six_months">6M</button>
                                                        <button class="btn btn-sm btn-outline-light active" id="one_year">1Y</button>
                                                        <button class="btn btn-sm btn-outline-light" id="ytd">YTD</button>
                                                        <button class="btn btn-sm btn-outline-light" id="all">ALL</button>
                                                    </div>                                              
                                                </div><!--end col-->
                                            </div>  <!--end row-->                                  
                                        </div><!--end card-header-->
                                        <div class="card-body"> 
                                            <div class="chart-demo">                                                
                                                <div id="apex_area2" class="apex-charts"></div>
                                            </div>     
                                        </div><!--end card-body-->                                        
                                    </div><!--end card-->
                                </div><!--end col-->                                      
                                                               
                            </div><!--end row-->   
                            <div class="row">                                        
                                <div class="col-lg-6">    
                                    <div class="card"> 
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <h4 class="card-title">Top Gainers</h4>                    
                                                </div><!--end col-->
                                            </div>  <!--end row-->                                  
                                        </div><!--end card-header-->
                                        <div class="card-body">  
                                            <div class="table-responsive dash-social">
                                                <table id="Top_Gainer" class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Company Name</th>
                                                            <th class="text-end">Stock Price</th>
                                                            <th class="text-end">Change</th>                                                    
                                                            <th class="text-end">% Change</th>
                                                            <th class="text-end">Volume</th>
                                                        </tr><!--end tr-->
                                                    </thead>
                
                                                    <tbody>
                                                        <tr>
                                                            <td>Apple Inc <span class="text-muted font-10">NASDAQ</span></td>
                                                            <td class="text-end">$147.95 <i class="ti ti-trending-up text-success"></i></td>
                                                            <td class="text-success text-end">$1.60</td>
                                                            <td class="text-success text-end">1.5%</td>
                                                            <td class="text-end">52,56,333</td>
                                                        </tr><!--end tr--> 
                                                        <tr>
                                                            <td>Tesla Inc <span class="text-muted font-10">NASDAQ</span></td>
                                                            <td class="text-end">$680.95 <i class="ti ti-trending-up text-success"></i></td>
                                                            <td class="text-success text-end">$6.60</td>
                                                            <td class="text-success text-end">1.01%</td>
                                                            <td class="text-end">56,254</td>
                                                        </tr><!--end tr--> 
                                                        <tr>
                                                            <td>Amazon.com, Inc. <span class="text-muted font-10">NASDAQ</span></td>
                                                            <td class="text-end">$3199.95 <i class="ti ti-trending-up text-success"></i></td>
                                                            <td class="text-success text-end">$12.60</td>
                                                            <td class="text-success text-end">0.35%</td>
                                                            <td class="text-end">72,654</td>
                                                        </tr><!--end tr--> 
                                                        <tr>
                                                            <td>Microsoft Corporation <span class="text-muted font-10">NASDAQ</span></td>
                                                            <td class="text-end">$304.95 <i class="ti ti-trending-up text-success"></i></td>
                                                            <td class="text-success text-end">$7.60</td>
                                                            <td class="text-success text-end">2.56%</td>
                                                            <td class="text-end">12,321</td>
                                                        </tr><!--end tr--> 
                                                        <tr>
                                                            <td>Dell Technologies Inc <span class="text-muted font-10">NYSE</span></td>
                                                            <td class="text-end">$98.95 <i class="ti ti-trending-up text-success"></i></td>
                                                            <td class="text-success text-end">$2.28</td>
                                                            <td class="text-success text-end">2.35%</td>
                                                            <td class="text-end">10,652</td>
                                                        </tr><!--end tr-->                                                                                                    
                                                    </tbody>
                                                </table>                    
                                            </div>  
                                            <nav aria-label="..." class="float-end">
                                                <ul class="pagination pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul><!--end pagination-->
                                            </nav><!--end nav-->                        
                                        </div> <!--end card-body-->     
                                    </div><!--end card-->                            
                                </div><!--end col-->

                                <div class="col-lg-6">    
                                    <div class="card"> 
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <h4 class="card-title">Top Losers</h4>                    
                                                </div><!--end col-->
                                            </div>  <!--end row-->                                  
                                        </div><!--end card-header-->
                                        <div class="card-body">  
                                            <div class="table-responsive dash-social">
                                                <table id="Top_Losers" class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Company Name</th>
                                                            <th class="text-end">Stock Price</th>
                                                            <th class="text-end">Change</th>                                                    
                                                            <th class="text-end">% Change</th>
                                                            <th class="text-end">Volume</th>
                                                        </tr><!--end tr-->
                                                    </thead>
                
                                                    <tbody>
                                                        <tr>
                                                            <td>Apple Inc <span class="text-muted font-10">NASDAQ</span></td>
                                                            <td class="text-end">$147.95 <i class="ti ti-trending-down text-danger"></i></td>
                                                            <td class="text-danger text-end">$1.60</td>
                                                            <td class="text-danger text-end">1.5%</td>
                                                            <td class="text-end">52,56,333</td>
                                                        </tr><!--end tr--> 
                                                        <tr>
                                                            <td>Tesla Inc <span class="text-muted font-10">NASDAQ</span></td>
                                                            <td class="text-end">$680.95 <i class="ti ti-trending-down text-danger"></i></td>
                                                            <td class="text-danger text-end">$6.60</td>
                                                            <td class="text-danger text-end">1.01%</td>
                                                            <td class="text-end">56,254</td>
                                                        </tr><!--end tr--> 
                                                        <tr>
                                                            <td>Amazon.com, Inc. <span class="text-muted font-10">NASDAQ</span></td>
                                                            <td class="text-end">$3199.95 <i class="ti ti-trending-down text-danger"></i></td>
                                                            <td class="text-danger text-end">$12.60</td>
                                                            <td class="text-danger text-end">0.35%</td>
                                                            <td class="text-end">72,654</td>
                                                        </tr><!--end tr--> 
                                                        <tr>
                                                            <td>Microsoft Corporation <span class="text-muted font-10">NASDAQ</span></td>
                                                            <td class="text-end">$304.95 <i class="ti ti-trending-down text-danger"></i></td>
                                                            <td class="text-danger text-end">$7.60</td>
                                                            <td class="text-danger text-end">2.56%</td>
                                                            <td class="text-end">12,321</td>
                                                        </tr><!--end tr--> 
                                                        <tr>
                                                            <td>Dell Technologies Inc <span class="text-muted font-10">NYSE</span></td>
                                                            <td class="text-end">$98.95 <i class="ti ti-trending-down text-danger"></i></td>
                                                            <td class="text-danger text-end">$2.28</td>
                                                            <td class="text-danger text-end">2.35%</td>
                                                            <td class="text-end">10,652</td>
                                                        </tr><!--end tr-->                                                                                                    
                                                    </tbody>
                                                </table>                     
                                            </div>  
                                            <nav aria-label="..." class="float-end">
                                                <ul class="pagination pagination-sm mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#">Next</a>
                                                    </li>
                                                </ul><!--end pagination-->
                                            </nav><!--end nav-->                        
                                        </div> <!--end card-body-->     
                                    </div><!--end card-->                            
                                </div><!--end col-->
                            </div><!--end row--> 
                        </div><!--end col-->
                        <div class="col-lg-3">
                            <div class="position-sticky" style="top: 120px">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stock-search">
                                            <form action="#" method="get">
                                                <input type="search" name="search" class="form-control top-search mb-0" placeholder="Search Stock">
                                                <div class="search-icon">
                                                    <i class="ti ti-search"></i>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!--end card-body-->
                                </div><!--end card-->
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">                      
                                                <h4 class="card-title">My Watchlist <span class="stocks-list-badge bg-soft-primary ms-1">15</span></h4>                      
                                            </div><!--end col-->
                                            <div class="col-auto"> 
                                                <div class="watchlist">
                                                    <select id="Watchlist" class="form-select">
                                                        <option value="value-1" class="px-5">My Watchlist</option>
                                                        <option value="value-2">F & O</option>
                                                        <option value="value-3">Delivery</option>
                                                        <option value="value-3">Crypto</option>
                                                        <option value="value-3">Commodity</option>
                                                        <option value="value-3">Add New +</option>
                                                    </select>  
                                                </div>                                                 
                                            </div><!--end col-->
                                        </div>  <!--end row-->                                  
                                    </div><!--end card-header-->
                                    <div class="card-body p-0">
                                        <div class="watchlist-body" data-simplebar>
                    
                    
                                            <div class="accordion" id="watchlist_2">
                                                <div class="accordion-item border-top-0">
                                                  <div class="accordion-header" id="headingOne">
                                                    <a class="accordion-button d-block py-2 px-3 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="align-self-center">
                                                                <h6 class="m-0 text-uppercase font-11">Apple Inc</h6>
                                                                <p class="text-uppercase font-10 mb-0">nasdaq</p>
                                                            </div>
                                                            <div>
                                                                <h6 class="m-0 text-uppercase font-11">$147.95 <i class="ti ti-trending-down text-danger"></i></h6>
                                                                <div class="d-inline-block font-10"><span class="text-danger">-110.60</span> <span class="text-danger">(30.52%)</span></div>
                                                            </div>
                                                        </div><!-- end /div -->
                                                    </a>
                                                  </div>
                                                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#watchlist_2">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item align-self-center mx-0 bg-success">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#BuyStocks"><i class="ti ti-letter-b text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0 bg-danger">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#SellStocks"><i class="ti ti-letter-s text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="details.html"><i class="ti ti-chart-candle email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->                                                        
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="javascript: void(0);"><i class="ti ti-trash email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                </ul><!--end /ul-->
                                                            </div> <!--end action-icons--> 
                                                            <div>
                                                                <p class="mb-0 text-muted">Avg. Traded Price : <span class="fw-semibold text-dark">$148.00</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">                                                        
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-success">Bid Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">140.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">139.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">136.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">133.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-danger">Ask Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">146.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">148.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">150.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">153.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end accordion-body-->
                                                  </div>
                                                </div>
                                                <div class="accordion-item">
                                                  <div class="accordion-header" id="headingTwo">
                                                    <a class="accordion-button  d-block py-2 px-3 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="align-self-center">
                                                                <h6 class="m-0 text-uppercase font-11">Tesla Inc</h6>
                                                                <p class="text-uppercase font-10 mb-0">nasdaq</p>
                                                            </div>
                                                            <div>
                                                                <h6 class="m-0 text-uppercase font-11">$680.35 <i class="ti ti-trending-up text-success"></i></h6>
                                                                <div class="d-inline-block font-10"><span class="text-success">50.10</span> <span class="text-success">(5.52%)</span></div>
                                                            </div>
                                                        </div><!-- end /div -->
                                                    </a>
                                                  </div>
                                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#watchlist_2">
                                                    <div class="accordion-body">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="action-icons">
                                                                <ul class="list-inline">
                                                                    <li class="list-inline-item align-self-center mx-0 bg-success">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#BuyStocks"><i class="ti ti-letter-b text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0 bg-danger">
                                                                        <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#SellStocks"><i class="ti ti-letter-s text-white email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="javascript: void(0);"><i class="ti ti-chart-candle email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->                                                        
                                                                    <li class="list-inline-item align-self-center mx-0">
                                                                        <a href="javascript: void(0);"><i class="ti ti-trash email-action-icons-item"></i></a>
                                                                    </li><!--end /li-->
                                                                </ul><!--end /ul-->
                                                            </div> <!--end action-icons--> 
                                                            <div>
                                                                <p class="mb-0 text-muted">Avg. Traded Price : <span class="fw-semibold text-dark">$682.00</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="row">                                                        
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-success">Bid Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">680.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">679.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">676.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">673.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-success px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                            <div class="col">
                                                                <div class="row align-items-center">
                                                                    <div class="col">                      
                                                                        <h6 class="text-danger">Ask Price</h6>                      
                                                                    </div><!--end col-->
                                                                    <div class="col-auto"> 
                                                                        <p class="mb-0">Quantity</p>                                         
                                                                    </div><!--end col-->
                                                                </div>  <!--end row-->
                                                                <ul class="list-unstyled mb-0">
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">686.50</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1523</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">688.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1823</span>
                                                                    </li>    
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">690.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">1101</span>
                                                                    </li> 
                                                                    <li class="d-flex justify-content-between align-items-start">
                                                                        <div class="me-auto">
                                                                            <p class="mb-0 ">693.00</p>
                                                                        </div>
                                                                        <span class="bg-soft-danger px-1 rounded">182</span>
                                                                    </li>                                                                
                                                                </ul>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                    </div><!--end accordion-body-->
                                                  </div>
                                                </div>
                                            </div>
                                        </div><!--end watchlist-body-->                                      
                                    </div><!--end card-body-->
                                </div><!--end card-->
                            </div><!--end sticky-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                        </div><!--end col-->
                    </div><!--end row-->
                    

                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
    
                    <div class="offcanvas-body">  
                        <button type="button" class="btn-close text-reset p-0 m-0 align-self-center float-end" data-bs-dismiss="offcanvas" aria-label="Close"></button>  
                        <div class="media">
                            <div class="ipo_logo d-inline-block" style="height: 70px; width: 90px; line-height: 68px;">
                                <img src="{{ asset('assets_dashboard/images/ipo/ipo-1.png') }}" alt="" class="" height="36">
                            </div>
                            <div class="media-body align-self-center ms-2">
                                <h5 class="fw-semibold mt-0 font-16 mb-1">Registered Clients</h5>
                                <p class="text-success mb-0 font-12">Application Successful</p>
                            </div>
                        </div><!--end media--> 
                        <hr class="hr-dashed">
                        <ul class="list-group mb-3">
            
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Applic. No
                              <span class="font-12 fw-semibold">236568546</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Amount to be Blocked
                              <span class="font-12 fw-semibold">$250.00</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Bid
                              <span class="font-12 fw-semibold">01</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Market Lot
                              <span class="font-12 fw-semibold">40 Shares</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Price
                              <span class="font-12 fw-semibold">$25.00</span>
                            </li>
                        </ul>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              IPO Open Date
                              <span class="font-12 fw-semibold">14/09/2021</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Allotment Date
                              <span class="font-12 fw-semibold">18/09/2021</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Refunds
                              <span class="font-12 fw-semibold">19/09/2021</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              Credit Demat Ac.
                              <span class="font-12 fw-semibold">20/09/2021</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                              IPO Listing Date
                              <span class="font-12 fw-semibold">21/09/2021</span>
                            </li>
                        </ul>
                        <p class="p-2 bg-soft-info rounded font-15 fw-semibold">Upcoming IPOs 2021</p>
                        <table class="table">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">Name</th>
                              <th scope="col" class="text-end">Size</th>
                              <th scope="col" class="text-end">Date</th>
                            </tr>
                          </thead>
                          <tbody>            
                            <tr>
                              <td><a href="https://mannatthemes.com/bullkit/ipo.html" class="text-dark">Apple <span class="text-muted font-10">NASDAQ</span></a></td>
                              <td class="text-end">2542cr.</td>
                              <td class="text-end">12 Nov.2021</td>
                            </tr>
                            <tr>
                              <td><a href="https://mannatthemes.com/bullkit/ipo.html">Panasonic</a></td>
                              <td class="text-end">1302cr.</td>
                              <td class="text-end">18 Nov.2021</td>
                            </tr>
                          </tbody>
                        </table>
                    </div><!--end offcanvas-body-->
    
                </div>
                <!--end Rightbar/offcanvas-->
                 <!--end Rightbar-->
                 
                <!--Start Footer-->
                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Metrica <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer>
                <!-- end Footer -->                
                <!--end footer-->
            </div>
            </div>
@endsection