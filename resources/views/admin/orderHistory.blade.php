@extends('layouts.app_admin')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 pb-2 pt-4">
              <h1 class="fw-bold" style="color: black">Order History</h1>
            </div>
          </div>
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card card-order">
                <div class="card-body">
                  <h4 class="card-title text-dark fw-bold">Order Status</h4>
                  <div class="table-responsive table-order">
                    <table class="table">
                      <thead>
                        <tr class="text-table">
                          <th> Order No </th>
                          <th> Customer Name</th>
                          <th> Category </th>
                          <th> No Handphone </th>
                          <th> Address </th>
                          <th> Date </th>
                          <th> Weight </th>
                          <th> Price </th>
                          <th> Payment Status </th>
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
                            <td>{{ $table_rslt->status }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <nav aria-label="..." class="pt-4">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
      @endsection