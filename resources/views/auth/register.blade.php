<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{asset('backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/lib/select2/css/select2.min.css')}}" rel="stylesheet">


    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/starlight.css')}}">
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse mg-b-40">Register</div>
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Enter your name" style="@error('name') border-style: solid;border-color: red @enderror" value="{{old('name')}}">
                @error('name')
                    <div style="color:red">{{$message}}</div>
                @enderror
            </div><!-- form-group -->
            <div class="form-group">
              <input type="text" class="form-control" name="username" placeholder="Enter your username" style="@error('username') border-style: solid;border-color: red @enderror" value="{{old('username')}}">
              @error('username')
                  <div style="color:red">{{$message}}</div>
              @enderror
            </div><!-- form-group -->
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Enter your email" style="@error('email') border-style: solid;border-color: red @enderror" value="{{old('email')}}">
                @error('email')
                    <div style="color:red">{{$message}}</div>
                @enderror
            </div><!-- form-group -->
            <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" style="@error('password') border-style: solid;border-color: red @enderror" placeholder="Enter your password">
                @error('password')
                    <div style="color:red">{{$message}}</div>
                @enderror
            </div><!-- form-group -->
            <div class="form-group">
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Password Confirmation">
            </div><!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        </form>

        <div class="mg-t-40 tx-center">Already have an account? <a href="{{route('login')}}" class="tx-info">Sign In</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{asset('backend/lib/jquery/jquery.js')}}"></script>
    <script src="{{asset('backend/lib/popper.js/popper.js')}}"></script>
    <script src="{{asset('backend/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('backend/lib/select2/js/select2.min.js')}}"></script>
    <script>
      $(function(){
        'use strict';

        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });
      });
    </script>

  </body>
</html>
