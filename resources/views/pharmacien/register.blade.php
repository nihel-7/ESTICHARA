<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<title>register pharmacien</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<h2> registraction pharmacien</h2>
			<div class="col-md-5">
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
				<form action="{{route('pharmacien.create')}}" method="Post">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="entre your full name" value="{{old('name')}}">
            <span class="text-danger">@error('name'){{$message}} @enderror</span>
          </div>
          <div class="mb-3">
            <label for="specialite" class="form-label">specialite</label>
            <input type="text" class="form-control" id="specialite" name="specialite" placeholder="entre your full specialite" value="{{old('specialite')}}">
            <span class="text-danger">@error('specialite'){{$message}} @enderror</span>
          </div>
          <div class="mb-3">
            <label for="adress" class="form-label">adress</label>
            <input type="text" class="form-control" id="adress" name="adress" placeholder="entre your adress" value="{{old('adress')}}">
            <span class="text-danger">@error('adress'){{$message}} @enderror</span>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="{{old('phone')}}">
            <span class="text-danger">@error('phone'){{$message}} @enderror</span>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="entre your email">
            <span class="text-danger">@error('email'){{$message}} @enderror</span>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="password" >
            <span class="text-danger">@error('password'){{$message}} @enderror</span>
          </div>
   				<div class="mb-3">
    				<label for="cpassword" class="form-label">confirm Password</label>
    				<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="confirm password" >
            <span class="text-danger">@error('cpassword'){{$message}} @enderror</span>
  				</div>
          <button type="submit" class="btn btn-primary">Submit</button>
          I already registered <a href="{{route('pharmacien.login')}}"> login here </a>
        </form>				
			</div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>