@extends('backend.master')

@section('title')
<title>Product | Aplikasi</title>
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
            <h4 class="header-title">Add Product</h4>

            <div class="tab-content">
                <div class="tab-pane show active" id="basic-form-preview">
                    <form method="POST" action="{{ route('product_management.product.store') }}">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-lg-4 col-md-4 col-sm-6">
                                <label for="name" class="form-label">Nama Product</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div class="mb-3 col-lg-4 col-md-4 col-sm-6">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" id="price" name="price" class="form-control">
                            </div>
                            <div class="mb-3 col-lg-4 col-md-4 col-sm-6">
                                <label for="ruangan_id" class="form-label">Pilih Ruangan</label>
                                <select name="ruangan_id" id="ruangan_id" class="form-control select-room">
                                    <option value="">-- Silakan Pilih Ruangan --</option>
                                    @foreach($rooms as $room)
                                        <option value="{{ $room->id }}">{{ $room->name ?? 'Nama Tidak Ditemukan' }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div> <!-- end preview -->
            </div> <!-- end tab-content -->
        </div> <!-- end card-body -->
    </div> <!-- end card -->
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('.select-room').select2({
            placeholder: "Cari dan pilih ruangan",
            allowClear: true,
            width: '100%'
        });
    });
</script>

<style>
    .select2-container--default .select2-selection--single {
        height: 38px;
        padding: 6px 12px;
        border-radius: 4px;
        border: 1px solid #ced4da;
    }
</style>

<!-- end card-->
@endsection
