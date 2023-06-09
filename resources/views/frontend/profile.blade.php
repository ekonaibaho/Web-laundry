@extends('layouts.app')

@section('content')

      <section class="profile">
        <div class="container-xl px-4 mt-4">
          <!-- Account page navigation-->
          <nav class="nav nav-borders">
            <a class="nav_link active ms-0 text-decoration-none" href="profile.html">Profile</a>
            <a class="nav_link text-decoration-none" href="editProfile.html">Edit Profile</a>
            <a class="nav_link text-decoration-none" href="password.html">Password</a>
          </nav>
          <hr class="mt-0 mb-4">

          <div class="row pb-4">
            <div class="col-lg-4 mb-3">
              <!-- Profile picture card-->
              <div class="card card-wrapper">
                <div class="card-header card-judul">Profile Picture</div>
                <div class="card-body text-center card-avatar">
                  <div class="avatar-upload">
                    <div class="avatar-preview container2">
                      <div id="imagePreview" style="background-image: url(img/background.jpg);"></div>
                    </div>
                  </div>
                  <div class="card_title">
                    <h4 class="card-title text-dark">Eko Naibaho</h4>
                    <h6 class="card-subtitle pb-3">Admin</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4 card-wrapper">
                <div class="card-header card-judul">Account Details</div>
                <div class="card-body card-avatar">
                  <div class="row pt-3">
                    <div class="col-sm-3">
                      <p class="mb-0">Nama</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Eko Naibaho</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">ekonaibaho@gmail.com</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Alamat</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Tiban</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Mobile</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">(+62) 8123456789</p>
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection