@extends('layouts.app')

@section('content')

<!-- JS for this page -->
<script>
$(document).ready(function (){    
  var price = {{ $price }};

  $(document).on('input propertychange paste change ','#price_box', function(){
        var kg = document.getElementById("price_box").value;
        document.getElementById("kg_pass").value = kg;
        var total = price * kg;
        var res = '<strong> Rp.' + total + '</strong>';
        $('#price_tot').html(res);
  });

  $(document).on('click ','.btn-prc', function(){
        let input = document.getElementById("price_box");
        if (this.id == 'prc-up'){
          input.stepUp();
        }else{
          input.stepDown();
        }
        
        // $this.parentNode.querySelector('input[type=number]').stepDown();
        var kg = document.getElementById("price_box").value;
        document.getElementById("kg_pass").value = kg;
        var total = price * kg;
        var res = '<strong> Rp.' + total + '</strong>';
        $('#price_tot').html(res);
  });

});
</script>


  <section class="checkout pt-4 pb-4">
    <div class="container py-5">
      <h1 class="text-capitalize text-center">cart</h1>
      <div class="row d-flex justify-content-center my-4">
        <div class="col-md-8">
          <div class="card mb-4 card-cart">
            <div class="card-body">
              <div class="img-logo text-center">
                <img src="img/iron.png" alt="">
              </div>
              <hr class="garis">
              <h5 class="text-capitalize fw-normal text-center">make sure your clothes are in kilos</h5>
              <!-- Single item -->
              <div class="row pt-3">
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp" class="w-100"
                      alt="Blue Jeans Jacket" />
                    <a href="#!">
                      <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                    </a>
                  </div>
                  <!-- Image -->
                </div>

                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>{{ $name }}</strong></p>
                  <p>Rp. {{ $price }} / Kg</p>
                  <button type="button" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                    title="Remove item">
                    <i class="fas fa-trash"></i>
                  </button>
                  <!-- <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                    title="Move to the wish list">
                    <i class="fas fa-heart"></i>
                  </button> -->
                  <!-- Data -->
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <div class="d-flex mb-4" style="max-width: 300px">
                    <button class="btn btn-primary px-3 me-2 btn-prc" id="prc-dwn">
                      <i class="fas fa-minus"></i>
                    </button>

                    <div class="form-outline">
                      <input id="price_box" min="0" name="quantity" value="0" type="number" class="form-control" />
                      <!-- <label class="form-label" for="form1">Quantity</label> -->
                    </div>

                    <button class="btn btn-primary px-3 ms-2 btn-prc" id="prc-up">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- Quantity -->

                  <!-- Price -->
                  <p class="text-start text-md-center" id="price_tot">
                  
                    <strong> Rp. 0</strong>
                  </p>
                  <!-- Price -->
                </div>
              </div>
              <!-- Single item -->

              <hr class="my-4" />

              <form method="POST" action="{{ route('checkout', ['id'=>$id])}}">
                @csrf
                <!-- Single item -->
                <input id="kg_pass" min="0" name="kg_pass" value="0" type="number" class="form-control" hidden/>
                <div class="d-grid gap-2 col-6 mx-auto pt-4 mb-3">
                  <button class="btn btn-primary" type="submit">Checkout</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection