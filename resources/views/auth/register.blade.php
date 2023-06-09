<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
  <section class="background-radial-gradient overflow-hidden">

<div class="container px-md-5 text-center text-lg-start my-5">
  <div class="row gx-lg-5 align-items-center mb-5">
    <div class="col-lg-7 mb-5 mb-lg-0" style="z-index: 10">

    </div>

    <div class="col-lg-5 mb-5 mb-lg-0 position-relative">

      <div class="card bg-glass pt-4 " style="border-radius: 5%;">
        <img src="" alt="">
        <h3 class="display-5 fw-bold text-uppercase text-center">get started</h5>
        <p class="text-center">Create your account now!</p>
        <div class="card-body px-4 px-md-5">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-outline mb-4">
              <label for="name" class="form-label">{{ __('Name') }}</label>
              <input id="name" type="text" class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <label for="email" class="form-label">{{ __('Email Address') }}</label>
              <input id="email" type="email" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label for="password" class="form-label">{{ __('Password') }}</label>
              <input id="password" type="password" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-outline mb-4">
              <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
              <input id="password-confirm" type="password" class="form-control rounded-pill" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="d-grid col-6 mx-auto">
              <button type="submit" class="btn btn-primary btn-block mb-4 tombol">{{ __('Register') }}</button>
            </div>
            <p class="text-center">Have an account ? <a href="{{ url('login') }}" class="text-decoration-none">Sign In</a></p>

              <!-- <div class="row mb-0">
                  <div class="col-md-6 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Register') }}
                      </button>
                  </div>
              </div> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- Section: Design Block -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script src="https://kit.fontawesome.com/6395dcd07c.js" crossorigin="anonymous"></script>
  </body>
</html>
