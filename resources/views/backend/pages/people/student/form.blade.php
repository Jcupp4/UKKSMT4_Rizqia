@extends('backend.master')

@section('title')
<title>Student | Aplikasi</title>
@endsection

@section('content')
<!-- start page title -->
<div class="national-data">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-inline-block d-md-flex justify-content-start justify-content-md-between align-items-center">
                    <div class="my-3 my-md-0 ps-2">
                        <div class="nifty-50 d-inline-block me-3">
                            <div class="font-11 fw-semibold">Nifty 50</div>
                            <div class="d-inline-block font-11">16,538.45 <span class="text-danger">-78.00</span> <span class="text-danger">(0.49%)</span></div>
                        </div>
                        <div class="bse-sensex d-inline-block">
                            <div class="font-11 fw-semibold">BSE Sensex</div>
                            <div class="d-inline-block font-11">57,578.76 <span class="text-danger">-273.51</span> <span class="text-danger">(0.52%)</span></div>
                        </div>
                    </div>
                    <div class="">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="explore.html" role="tab" aria-selected="true">Explore</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="investment.html" role="tab" aria-selected="false">Investment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ipo.html" role="tab" aria-selected="false">IPO</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end page-title-box-->
            </div>
            <!--end col-->
        </div>
        <!-- end page title end breadcrumb -->
    </div>
    <!--end container-->
</div>
<!-- end page title -->


<div class="col">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">Add Student</h4>

            <div class="tab-content">
                <div class="tab-pane show active" id="basic-form-preview">
                    <form method="POST" action="{{ route('student.store') }}">
                        @csrf

                        <!-- Hidden Inputs -->
                        <input type="hidden" name="status" value="active">
                        <input type="hidden" name="role" value="user">

                        <!-- Row 1: NIS, NISN, Email -->
                        <div class="row">
                            <div class="mb-3 col-lg-3 col-md-4 col-sm-6">
                                <label for="nis" class="form-label">NIS</label>
                                <input type="text" id="nis" name="nis" class="form-control">
                            </div>

                            <div class="mb-3 col-lg-3 col-md-4 col-sm-6">
                                <label for="nisn" class="form-label">NISN</label>
                                <input type="text" id="nisn" name="nisn" class="form-control">
                            </div>

                            <div class="mb-3 col-lg-6 col-md-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <!-- Row 2: Name, Username, Tempat dan Tanggal Lahir -->
                        <div class="row">
                            <div class="mb-3 col-lg-3 col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>

                            <div class="mb-3 col-lg-3 col-md-6">
                                <label for="Username" class="form-label">Username</label>
                                <input type="text" id="Username" name="username" class="form-control">
                            </div>

                            <div class="mb-3 col-lg-6">
                                <label for="pob" class="form-label">Place and Date of Birth</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="pob" name="pob" class="form-control" placeholder="Place">
                                    <input type="date" id="example-date" name="dob" class="form-control">
                                </div>
                            </div>
                        </div>

                        <!-- Row 3: Password, Jenis Kelamin, Saldo -->
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" required placeholder="Masukkan Password">
                                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required placeholder="Konfirmasi Password">
                                </div>
                            </div>

                            <div class="mb-3 col-md-3">
                                <label class="form-label d-block">Jenis Kelamin</label>
                                <div class="form-check form-check-inline mt-2">
                                    <input type="radio" id="L" name="sex" value="laki-laki" class="form-check-input">
                                    <label for="L" class="form-check-label">Laki - Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="P" name="sex" value="perempuan" class="form-check-input">
                                    <label for="P" class="form-check-label">Perempuan</label>
                                </div>
                            </div>

                            <div class="mb-3 col-md-3">
                                <label for="saldo" class="form-label">Saldo</label>
                                <input type="text" id="saldo" name="saldo" class="form-control">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div> <!-- end tab-pane -->
            </div> <!-- end tab-content -->
        </div> <!-- end card-body -->
    </div> <!-- end card -->
</div> <!-- end col -->

<!-- end col -->

<!-- end card-->
@endsection
