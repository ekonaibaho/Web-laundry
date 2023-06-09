@extends('layouts.app_admin')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 pb-2 pt-4">
              <h1 class="fw-bold" style="color: black">Dashboard</h1>
            </div>
            <div class="col-md-12 pb-5 pt-4">
              <h1 class="fw-bold" style="color: black">Selamat Datang Di King's Laundry</h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 grid-margin">
              <a href="/adm_services/1" class="text-decoration-none">
                <div class="card card-box rounded-4">
                  <div class="card-body">
                    <h1 class="display-3 font-weight-normal text-capitalize">wash & iron</h1>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h1 class="mb-0 display-3 fw-bold" id="serv_cnt_1">0</h1>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <img src="img/washiron.png" alt="">
                        <!-- <i class="icon-lg fas fa-suitcase text-danger ml-auto"></i> -->
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-3 grid-margin">
              <a href="/adm_services/3" class="text-decoration-none">
                <div class="card card-box rounded-4">
                  <div class="card-body">
                    <h1 class="display-3 font-weight-normal text-capitalize">iron</h1>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h1 class="mb-0 display-3 fw-bold" id="serv_cnt_3">0</h1>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <img src="img/iron.png" alt="">
                        <!-- <i class="icon-lg fas fa-users text-success ml-auto"></i> -->
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-3 grid-margin">
              <a href="/adm_services/2" class="text-decoration-none">
                <div class="card card-box rounded-4">
                  <div class="card-body">
                    <h1 class="display-3 font-weight-normal text-capitalize">wash</h1>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h1 class="mb-0 display-3 fw-bold" id="serv_cnt_2">0</h1>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <img src="img/laundry.png" alt="">
                        <!-- <i class="icon-lg fas fa-shopping-cart text-dark ml-auto"></i> -->
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-md-3 grid-margin">
              <a href="/adm_services/4" class="text-decoration-none">
                <div class="card card-box rounded-4">
                  <div class="card-body">
                    <h1 class="display-3 font-weight-normal text-capitalize">Dry</h1>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h1 class="mb-0 display-3 fw-bold" id="serv_cnt_4">0</h1>
                        </div>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <img src="img/folding.png" alt="">
                        <!-- <i class="icon-lg fas fa-shopping-cart text-dark ml-auto"></i> -->
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-md-12 pb-2">
                  <h1 class="fw-bold text-capitalize text-dark">last 5 order</h1>
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
                          <tbody id="last_order_tbl">
                            
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
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@endsection