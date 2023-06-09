@extends('layouts.app')

@section('content')

<!-- JS for this page -->
<script>
$(document).ready(function (){    
  $(document).on('input propertychange paste change','#search', function(){
    var id = document.getElementById("search").value;
    //alert($val)
    $.ajax({
      type:'GET',
      url:'/search_trx',
      data: {'id' : id},
      success:function(data) {
      $("#result").html(data);
      }
    });
  });

});
</script>

  <section class="checkout pt-4 pb-4">
    <div class="container py-5">
      
      <div class="col-lg-12">
          <div class="card card-wrapper mb-4">
              <div class="card-header card-judul text-center">Search</div>
              <div class="card-body card-avatar">
                  @if(isset($msg))
                  <div class="card-header card-judul text-center">{{ $msg }}</div>
                  @endif
                  <div class="d-grid gap-2 col-6 mx-auto pt-4 mb-3">
                  <input class="form-control" id="search" type="text" name="search" placeholder="Masukkan ID Pesanan">
                  </div>

                  <div class="d-grid gap-2 col-10 mx-auto pt-3 pb-2">
                  <table class="table">
                    <tr class="table-active text-center">
                      <td>
                        Nama
                      </td>
                      <td>
                        Service
                      </td>
                      <td>
                        Tgl Masuk
                      </td>
                      <td>
                        Status
                      </td>
                    </tr>
                    <tbody id="result"></tbody>
                  </table>
                  </div>


              </div>
          </div>
      </div>


    </div>
  </section>

  @endsection