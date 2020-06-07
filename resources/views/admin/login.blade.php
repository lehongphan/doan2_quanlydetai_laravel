<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themepixels.me/shamcey/app/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 May 2020 05:56:58 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Vendor css -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">

    <!-- Shamcey CSS -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ asset('css/shamcey.css') }}">
  </head>

  <body class="bg-gray-900">

    <div class="signpanel-wrapper">
      <div class="signbox">
        <div class="signbox-header">
          <h2>{{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</h2>
          <p class="mg-b-0">Admin Thiệt nè</p>
        </div><!-- signbox-header -->
        <div class="signbox-body">
        @isset($url)
                    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
              @csrf
          <div class="form-group">
            <label class="form-control-label">Email:</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            <!--<input type="id" type="email" name="email" placeholder="Enter your email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}">-->
          </div><!-- form-group -->
          <div class="form-group">
            <label class="form-control-label">Password:</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            <!--<input type="password" name="password" placeholder="Enter your password" class="form-control">-->
          </div><!-- form-group -->
          <div class="form-group">
            <a href="#">Forgot password?</a>
          </div><!-- form-group -->
           <button class="btn btn-success btn-block">Sign In</button>
        
          <div class="tx-center bg-white b d pd-10 mg-t-40">Not yet a member? <a href="page-signup.html">Create an account</a></div>
</form></div><!-- signbox-body -->
      </div><!-- signbox -->
    </div><!-- signpanel-wrapper -->

    <script src="{{ asset('lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/bootstrap.js') }}"></script>

    <script src="{{ asset('js/shamcey.js') }}"></script>
  </body>

<!-- Mirrored from themepixels.me/shamcey/app/page-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 May 2020 05:56:58 GMT -->
</html>
