@extends('layouts.app')

@section('content')
      <!-- jumbotron -->
      <div class="jumbotron p-5 pb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <div class="row">
            <div class="col-md-12 panel-jumbotron">
              <h1 class="display-5 fw-bold text-uppercase">we offer the <a class="text-warning text-decoration-none text-uppercase">best laundry</a> services</h1>
              <p class="col-md-8 fs-4 mt-5 fw-bold">With us your clothes will turn out to be new without stains</p>
            </div>
          </div>
        </div>
      </div>

      <!-- about -->
      <div class="container pt-5 mb-5">
        <div class="row">
          <div class="col-md-6">
            <img src="img/remove.png" alt="">
          </div>
          <div class="col-md-6">
            <h1 class="fw-bold">About Us</h1>
            <h5 class="pt-4">King's Laundry is an online and retail laundry service provider. Be it steam ironing, stain removal, laundry and dry-cleaning</h5>
          </div>
        </div>
      </div>

      <!-- Services -->
      <!-- Services -->
      <section class="service fw-normal pb-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-10">
              <div class="card panel-index">
                <div class="card-body text-center fw-normal">
                  <h3 class="lead">Here's everything you need for cleaner, fresher clothes</h3>
                  <h5 class="card-title fw-bold display-5 text-uppercase pb-2">our services</h5>
                  <div class="row g-4 pt-1">
                    <div class="col-md-3">
                      <div class="service-item p-4">
                        <a href="{{ route('cart', ['id'=>1]) }}" class="img">
                          <div class="icon my-1 text-danger text-center">
                            <img src="img/washiron.png" alt="" class="img-card">
                          </div>
                        </a>
                      </div>
                      <p class="py-2 text-center">Wash & Iron</p>
                    </div>
                    <div class="col-md-3">
                      <div class="service-item p-4">
                        <a href="{{ route('cart', ['id'=>2]) }}">
                          <div class="icon my-1 text-danger h2 text-center">
                            <img src="img/laundryy.png" alt="" class="img-card">
                          </div>
                        </a>
                      </div>
                      <p class="py-2 text-center">Wash Only</p>
                    </div>
                    <div class="col-md-3">
                      <div class="service-item p-4">
                        <a href="{{ route('cart', ['id'=>3]) }}">
                          <div class="icon my-1 text-danger h2 text-center">
                            <img src="img/iron.png" alt="" class="img-card">
                          </div>
                        </a>
                      </div>
                      <p class="py-2 text-center">Iron Only</p>
                    </div>
                    <div class="col-md-3">
                      <div class="service-item p-4">
                        <a href="{{ route('cart', ['id'=>4]) }}">
                        <div class="icon my-1 text-danger h2 text-center">
                            <img src="img/folding.png" alt="" class="img-card">
                          </div>
                        </a>
                      </div>
                      <p class="py-2 text-center">Dry Cleaning</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @endsection