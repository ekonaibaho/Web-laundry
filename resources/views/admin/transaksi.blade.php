@extends('layouts.app_admin')

@section('content')
<!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 pb-3 pt-4">
                            <h1 class="fw-bold text-capitalize" style="color: black">Transaksi Selesai </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin">
                            <div class="card card-box rounded-4">
                                <div class="card-body">
                                    <h1 class="display-3 font-weight-normal text-capitalize">pemasukan hari ini</h1>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h1 class="mb-0 display-3 fw-bold"></h1>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <h3 class="text-dark">Rp. {{ $sum_tdy_sls }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 grid-margin">
                            <div class="card card-box rounded-4">
                                <div class="card-body">
                                    <h1 class="display-3 font-weight-normal text-capitalize">pemasukan bulanan</h1>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h1 class="mb-0 display-3 fw-bold"></h1>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <h3 class="text-dark">Rp. {{ $sum_mth_sls }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 pb-3 pt-4">
                            <h1 class="fw-bold text-capitalize" style="color: black">Transaksi Belum Selesai </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin">
                            <div class="card card-box rounded-4">
                                <div class="card-body">
                                    <h1 class="display-3 font-weight-normal text-capitalize">pemasukan hari ini</h1>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h1 class="mb-0 display-3 fw-bold"></h1>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <h3 class="text-dark">Rp. {{ $sum_tdy_tdsls }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 grid-margin">
                            <div class="card card-box rounded-4">
                                <div class="card-body">
                                    <h1 class="display-3 font-weight-normal text-capitalize">pemasukan bulanan</h1>
                                    <div class="row">
                                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                                <h1 class="mb-0 display-3 fw-bold"></h1>
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-12 col-xl-4 text-center text-xl-right">
                                            <h3 class="text-dark">Rp. {{ $sum_mth_tdsls }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
@endsection