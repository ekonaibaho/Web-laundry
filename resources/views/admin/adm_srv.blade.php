@extends('layouts.app_admin')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 pb-2 pt-4">
              <a href="/home" class="fw-bold" style="color: black">
                <i class="fas fa-chevron-left me-2"></i>Dashboard
              </a>
            </div>
          </div>
          <div class="row pt-3">
            <div class="col-md-4 grid-margin">
              <div class="card card-box rounded-4">
                <div class="card-body">
                  <h1 class="display-3 font-weight-normal text-capitalize">{{ $name }}</h1>
                  <div class="row">
                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                      <div class="d-flex d-sm-block d-md-flex align-items-center">
                        <h3 class="mb-0 fw-bold text-dark">Rp. {{ $price }}</h3>
                      </div>
                    </div>
                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                      <img src="img/washiron.png" alt="">
                      <!-- <i class="icon-lg fas fa-suitcase text-danger ml-auto"></i> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="main-panel pt-2">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-md-12 pb-2">
                  <h1 class="fw-bold text-capitalize text-dark">last 10 order</h1>
                </div>
              </div>
              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card card-table-last">
                    <div class="card-body">
                      <!-- <h4 class="card-title text-dark fw-bold">Order Status</h4> -->
                      <div class="table-responsive table-order">
                        <table class="table">
                          <thead>
                            <tr class="text-table">
                              <!-- <th>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </th> -->
                              <th> Order No </th>
                              <th> Customer Name</th>
                              <th> Category </th>
                              <th> No Handphone </th>
                              <th> Address </th>
                              <th> Date </th>
                              <th> Weight </th>
                              <th> Price </th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach ($table_rslt as $table_rslt)
                          <tr class=' text-center'>
                            <td>{{ $table_rslt->transaction_id }}</td>
                            <td>{{ $table_rslt->nama }}</td>
                            <td>{{ $table_rslt->service }}</td>
                            <td>{{ $table_rslt->nohp }}</td>
                            <td>{{ $table_rslt->alamat }}</td>
                            <td>{{ $table_rslt->created_at }}</td>
                            <td>{{ $table_rslt->kg }}</td>
                            <td>{{ $table_rslt->price }}</td>
                          </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <!-- main-panel ends -->
@endsection