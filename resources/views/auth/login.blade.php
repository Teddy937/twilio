@extends('layouts.auth')

@section('content')
<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">

    <!-- CONTENT
    ================================================== -->
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 offset-xl-2 offset-md-1 order-md-2 mb-5 mb-md-0">

          <!-- Image -->
          <div class="text-center">
            <img src="img/illustrations/happiness.svg" alt="..." class="img-fluid">
          </div>

        </div>
        <div class="col-12 col-md-5 col-xl-4 order-md-1 my-5">
          
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Sign in
          </h1>
          
          <!-- Subheading -->
          <p class="text-muted text-center mb-5">
            Free access to our dashboard.
          </p>
          
          @if (session('status'))
              <div class="alert alert-danger">
                  <a href="#" data-dismiss="alert" class="close">&times;</a>
                  <p>{{ session('status') }}</p>
              </div>
          @endif
          <!-- Form -->
          <form action="{{ route('login.store') }}" method="POST">
            @csrf

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>Email Address</label>

              <!-- Input -->
              <input type="email" class="form-control" name="email" placeholder="name@address.com" required>

            </div>

            <!-- Password -->
            <div class="form-group">

              <div class="row">
                <div class="col">
                      
                  <!-- Label -->
                  <label>Password</label>

                </div>
                <div class="col-auto">
                  
                  <!-- Help text -->
                  <a href="password-reset-illustration.html" class="form-text small text-muted">
                    Forgot password?
                  </a>

                </div>
              </div> <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input type="password" name="password" class="form-control form-control-appended" placeholder="Enter your password" required>

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
              Sign in
            </button>

            <!-- Link -->
            {{-- <div class="text-center">
              <small class="text-muted text-center">
                Don't have an account yet? <a href="sign-up-illustration.html">Sign up</a>.
              </small>
            </div> --}}
            
          </form>

        </div>
      </div> <!-- / .row -->
    </div> <!-- / .container -->

@endsection