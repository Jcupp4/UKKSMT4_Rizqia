@extends('backend.master')

@section('title')
<title>Product | Aplikasi</title>
@endsection

@section('content')
@if (session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            timer: 3000,
            showConfirmButton: false
        });
    });
</script>
@endif
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
<!--end national-data-->
<!-- end row-->

<!-- Page Content-->
<div class="page-content-tab">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">All Positions</h4>
                            </div>
                            <!--end col-->
                            <div class="col-auto">
                                <ul class="nav nav-tabs tab-nagative-m" role="tablist">
                                <li class="nav-item">
                                    <a role="button" href="{{ route('order.order.manage') }}" class="btn btn-secondary btn-sm ">Pending Transaction</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Open" role="tab" aria-selected="true">Open</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Close" role="tab" aria-selected="false">Close</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <div class="tab-content" id="Amount_history">
                            <div class="tab-pane fade show active" id="Open" role="tabpanel" aria-labelledby="Open-tab">
                                <div class="table-responsive dash-social">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Product</th>
                                                <th>Student</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>


                                        <tbody>

                                            @forelse ($orders->where('status', 1) as $order)
                                            <tr>
                                                <td>{{ $order->product?->name ?? 'n/a' }}</td>
                                                <td>{{ $order->student->user->name ?? 'N/A' }}</td>
                                                <td><span class="badge bg-success-subtle text-success py-1 px-2">Diterima</span></td>
                                                <td>{{ $order->created_at->format('d M Y H:i') }}</td>
                                                <td>
                                                    <form action="{{ route('order.done', $order->id) }}" method="POST" style="display:inline">
                                                        @csrf
                                                        <button class="btn btn-primary btn-sm" type="submit">Selesai (Done)</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5">Tidak ada order yang sedang dikerjakan.</td>
                                            </tr>
                                            @endforelse
                                            <!--end tr-->
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
                                    </ul>
                                    <!--end pagination-->
                                </nav>
                                <!--end nav-->
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane fade" id="Close" role="tabpanel" aria-labelledby="Close-tab">
                                <div class="table-responsive dash-social">
                                    <table class="table table-bordered mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Net Qty.</th>
                                                <th>Avg. Price</th>
                                                <th>CMP Price</th>
                                                <th>%P&L</th>
                                                <th>P&L</th>
                                                <th>Action</th>
                                            </tr>
                                            <!--end tr-->
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Microsoft Corporation</td>
                                                <td class="text-warning">Closed</td>
                                                <td>00</td>
                                                <td>00</td>
                                                <td>6.10</td>
                                                <td>-</td>
                                                <td class="text-success">606.55</td>
                                                <td>
                                                    <a class="btn btn-sm btn-success" href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#BuyStocks"><i class="ti ti-letter-b text-white email-action-icons-item"></i></a>
                                                    <a class="btn btn-sm btn-danger" href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#SellStocks"><i class="ti ti-letter-s text-white email-action-icons-item"></i></a>
                                                </td>
                                            </tr>
                                            <!--end tr-->

                                            <tr>
                                                <td>Amazon</td>
                                                <td class="text-warning">Closed</td>
                                                <td>00</td>
                                                <td>00</td>
                                                <td>6.10</td>
                                                <td>-</td>
                                                <td class="text-success">606.55</td>
                                                <td>
                                                    <a class="btn btn-sm btn-success" href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#BuyStocks"><i class="ti ti-letter-b text-white email-action-icons-item"></i></a>
                                                    <a class="btn btn-sm btn-danger" href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#SellStocks"><i class="ti ti-letter-s text-white email-action-icons-item"></i></a>
                                                </td>
                                            </tr>
                                            <!--end tr-->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end tab-pane-->
                        </div>
                        <!--end tab-content-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <!--end col-->
        </div>
    </div>


</div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const orderForms = document.querySelectorAll(".order-form");

        orderForms.forEach(form => {
            const button = form.querySelector(".order-btn");
            let isSubmitting = false;

            form.addEventListener("submit", function(e) {
                e.preventDefault();

                // Cegah submit ganda
                if (isSubmitting) return;
                isSubmitting = true;

                // Nonaktifkan tombol agar tidak bisa diklik lagi
                if (button) {
                    button.disabled = true;
                    button.innerText = "Memproses...";
                }

                Swal.fire({
                    icon: 'success'
                    , title: 'Success'
                    , text: 'Makanan/Minuman berhasil dipesan, silakan cek history pembelian.'
                    , confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit form setelah notifikasi
                    } else {
                        // Reset jika batal
                        isSubmitting = false;
                        if (button) {
                            button.disabled = false;
                            button.innerText = "Pesan";
                        }
                    }
                });
            });
        });
    });

</script>
