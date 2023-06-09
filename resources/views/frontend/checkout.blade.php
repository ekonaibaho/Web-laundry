@extends('layouts.app')

@section('content')

  <section class="checkout pt-4">
    <div class="container py-2">
      <h1 class="text-uppercase text-center">check out</h1>
      <div class="row d-flex justify-content-center my-4">
        <div class="col-md-8">
          <div class="card mb-4 card-checkout">
            <div class="card-body">
              <!-- Single item -->
              <div class="row pt-3">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="{{asset('img/iron.png')}}" class="w-100" alt="iron" />
                    <a href="#">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                  </div>
                  <!-- Image -->
                </div>

                <div class="col-lg-8 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <table class="table table-borderless">
                    <tbody class="text-left text-capitalize">
                      <tr>
                        <th>services :</th>
                        <td>{{ $name }}</td>
                      </tr>
                      <tr>
                        <th>weight :</th>
                        <td>{{ $kg }} kilos</td>
                        <td>X</td>
                        <td>Rp. {{ $price }}</td>
                      </tr>
                      <tr>
                        <th colspan="3">order totals :</th>
                        <td>Rp. {{ $kg*$price }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
  
              <hr class="my-4" />
              <!-- Single item -->
              <!-- <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <button class="btn btn-primary" type="button">Checkout</button>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <form method="POST" action="{{ route('checkoutall') }}">
    @csrf
    <!-- Hidden -->
    <input type="text" name="service" value="{{ $name }}" hidden>
    <input type="text" name="kg" value="{{ $kg }}" hidden>
    <input type="text" name="price" value="{{ $kg*$price }}" hidden>
    <input type="text" name="id" value="{{ $id }}" hidden>
    <!-- Hidden -->
    
    <section class="input-user mb-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card card-checkout">
              <div class="card-body">
                
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="nama" placeholder="Nama" name="nama">
                  </div>
                  <div class="mb-3">
                    <label for="noHp" class="form-label">No Hanphone</label>
                    <input type="number" class="form-control" id="noHp" placeholder="No HandPhone" name="nohp">
                  </div>
                  <!-- <div class="d-grid gap-2 d-md-flex justify-content-center">
                    <button class="btn btn-primary" type="button">Save</button>
                  </div> -->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="card-radio text-center mb-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6 col-sm-6 mb-3">
            <label>
              <input type="radio" name="opsi_antar" selected class="card-input-element" value="maps" />
              <div class="card card-default card-input text-capitalize">
                <div class="img-logo text-center">
                  <img src="img/iron.png" alt="">
                </div>
                <p>Ke Laundry</p>
              </div>
            </label>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-6">
            <label>
              <input type="radio" name="opsi_antar" selected class="card-input-element" value="other" />
              <div class="card card-default card-input text-capitalize">
                <div class="img-logo text-center">
                  <img src="img/iron.png" alt="">
                </div>
                <p>Antar / Jemput</p>
              </div>
            </label>
          </div>
        </div>
      </div>
    </section>

    <section class="map">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="map-box maps box pt-4 text-center">
              <iframe width="50%" height="100%" id="gmap_canvas"
                src="https://maps.google.com/maps?q=batam centre&t=&z=12&ie=UTF8&iwloc=&output=embed" frameborder="0"
                scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="lokasi pt-3" name="product-other">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card card-checkout other box">
              <div class="card-body">
                
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label"><i class="fas fa-map-marked-alt"></i>
                      Lokasi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat"></textarea>
                    <div id="exampleFormControlTextarea1" class="form-text text-uppercase">( khusus pengambilan laundry
                      batam center )</div>
                  </div>
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <div class="d-grid gap-2 d-md-flex justify-content-center my-4">
      <button class="btn btn-primary" type="submit">Checkout</button>
    </div>
  </form>
@endsection