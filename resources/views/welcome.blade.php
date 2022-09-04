<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<style type="text/css">
            body{
              background-image:url(/image/medicament.jpg);
            }
            body .btnCenter{

              justify-content: center;
              align-items: center;
              display: flex;
              height: 31vh;
            }
            .btn1{
              background: none;
              width: 250px;
              height: 80px;
              border:2px solid #a6a6a6;
              font-size: 20px;
              font-weight: bold;
              color: #878787;
              margin-left: 8px;
              transition: .4s linear;
              position: relative;
              cursor: pointer;
            }
            .btn1 a{
                text-decoration: none;
                color: #878787;
              }
            .btn1 a:hover{
              color: white;
            }
            .btn1::before{
              content: "";
              position: absolute;
              width: 0px;
              height: 78px;
              top: 0px;
              left: 0px;
              background-color: #a6a6a6;
              z-index: -1;
              transition: .4s linear;
              }
              .btn1:hover::before{
                width: 248px;
              }
          </style>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Pharm-Project
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
            </div>
        </nav>

        <main class="py-4">
        <div class="login-form">
    <form action="{{ route('login') }}" method="post">
    @csrf
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
        </div>
        <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }}</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> {{ __('Remember Me') }}</label>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="float-right">{{ __('Forgot Your Password?') }}</a>
            @endif
        </div>        
    </form>
    <p class="text-center"><a href="#">Create an Account</a></p>
</div>

        </main>
    </div>
</body>
</html>
