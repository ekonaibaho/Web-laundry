@extends('layouts.app')

@section('content')

      <section>
        <div class="container-xl px-4 mt-4">
          <!-- Account page navigation-->
          <nav class="nav nav-borders">
            <a class="nav_link active ms-0 text-decoration-none" href="profile.html">Profile</a>
            <a class="nav_link text-decoration-none" href="editProfile.html">Edit Profile</a>
            <a class="nav_link text-decoration-none" href="password.html">Password</a>
          </nav>
          <hr class="mt-0 mb-4">
          <div class="row">
            <div class="col-xl-4 mb-3">
              <!-- Profile picture card-->
              <div class="card card-wrapper">
                <div class="card-header card-judul">Profile Picture</div>
                <div class="card-body text-center card-avatar">
                  <div class="avatar-upload">
                    <div class="avatar-edit">
                      <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" name="avatar" />
                      <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview container2">
                      <div id="imagePreview" style="background-image: url(img/background.jpg);"></div>
                    </div>
                  </div>
                  <h4 class="card-title mt-2 text-dark">Eko Naibaho</h4>
                  <h6 class="card-subtitle">Admin</h6>
                  <div class="d-grid gap-2 col-6 mx-auto pb-3 pt-4">
                    <button class="btn btn-primary" type="button">Save</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8">
              <!-- Account details card-->
              <div class="card card-wrapper mb-4">
                <div class="card-header card-judul">Account Details</div>
                <div class="card-body card-avatar">
                  <form>
                    <!-- Form Group (username)-->
                    <div class="mb-3">
                      <label class="small mb-1" for="inputUsername">Nama</label>
                      <input class="form-control" id="inputUsername" type="text" placeholder="Enter your Name" value="Nama">
                    </div>
                    <!-- Form Group (email address)-->
                    <div class="mb-3">
                      <label class="small mb-1" for="inputEmailAddress">Email</label>
                      <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="small mb-1" for="noHp">Phone</label>
                      <input class="form-control" id="noHp" type="number" placeholder="Enter your Phone" value="08xxx">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto pt-3 pb-2">
                      <button class="btn btn-primary" type="button">Save</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection