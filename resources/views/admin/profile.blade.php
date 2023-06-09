@extends('layouts.app_admin')

@section('content')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 pb-5 pt-4">
              <h1 class="fw-bold" style="color: #7b6ceb">Profile</h1>
            </div>
          </div>
          <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3">
              <div class="card">
                <div class="card-body">
                  <center>
                    <div class="container foto">
                      <div class="avatar-upload">
                        <div class="avatar-edit">
                          <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                          <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url('{{asset('admin/img/eko.jpg')}}');">
                          </div>
                        </div>
                      </div>
                    </div>
                    <h4 class="card-title mt-2 text-dark">{{Auth::user()->name}}</h4>
                    <h6 class="card-subtitle">Admin</h6>
                  </center>
                </div>
                <div>
                  <hr>
                </div>
                <div class="card-body text-dark">
                  <small class="text-muted">Email </small>
                  <h6>{{Auth::user()->email}}</h6>
                  <small class="text-muted pt-4 db">Status</small>
                  <h6>Admin</h6>  
                  <div class="map-box pt-4">
                    <iframe width="100%" height="100%" id="gmap_canvas"
                      src="https://maps.google.com/maps?q=tiban kampung&t=&z=12&ie=UTF8&iwloc=&output=embed"
                      frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  </div> <small class="text-muted pt-4 db">Social Profile</small>
                  <br />
                  <button class="btn btn-circle btn-secondary"><i class="mdi mdi-facebook"></i></button>
                  <button class="btn btn-circle btn-secondary"><i class="mdi mdi-twitter"></i></button>
                </div>
              </div>
            </div>

            <div class="col-lg-8 col-xlg-9">
              <div class="card">
                <h3 class="text-dark text-center pt-5">Edit Profile</h3>
                @if(isset($msg))
                <h3 class="text-danger text-center pt-5">{{ $msg }}</h3>
                @endif
                <div class="card-body">
                  <form class="form-horizontal form-material mx-2 text-dark" method="POST" action="{{ route('upd_profile', ['id'=>Auth::user()->id])}}" >
                  @csrf
                    <div class="form-group">
                      <label class="col-md-12">Nama</label>
                      <div class="col-md-12">
                        <input type="text" placeholder="Nama" class="form-control text-light" name="name"
                          style="border-radius: 25px; border: 2px solid; padding: 20px; height: 15px;" value="{{Auth::user()->name}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="example-email" class="col-md-12">Email</label>
                      <div class="col-md-12">
                        <input type="email" placeholder="Email" class="form-control text-light" name="email"
                          style="border-radius: 25px; border: 2px solid; padding: 20px; height: 15px;" value="{{Auth::user()->email}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Old Password</label>
                      <div class="col-md-12">
                        <input type="password" placeholder="Password" class="form-control text-light" name="old_pwd"
                          style="border-radius: 25px; border: 2px solid; padding: 20px; height: 15px;">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">New Password</label>
                      <div class="col-md-12">
                        <input type="password" placeholder="Password" class="form-control text-light" name="new_pwd"
                          style="border-radius: 25px; border: 2px solid; padding: 20px; height: 15px;">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-12">Status</label>
                      <div class="col-sm-12">
                        <input type="text" placeholder="Nama" class="form-control text-dark"
                          style="border-radius: 25px; border: 2px solid; padding: 20px; height: 15px;" value="Admin" disabled>
                      </div>
                    </div>
                    <div class="form-group text-center pt-4">
                      <div class="col-sm-12">
                        <button class="btn btn-success text-white" type="submit">Update Profile</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- Column -->
          </div>
        </div>
      </div>
      <!-- main-panel ends -->
      @endsection