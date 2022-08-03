<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport">
	<title>dashboard | user</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<h2> dashboard </h2>
			<div class="col-md-5">
        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        <table class="table table-responsive">
          <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
          </thead>
          <tbody>
            <tr><td>{{Auth::guard('web')->user()->name}}</td>
              <td>{{Auth::guard('web')->user()->email}}</td><td>
              <a href="{{route('user.logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{route('user.logout')}}" method="POST">
                @csrf
              </form>
            </td>
            </tr>
          </tbody>
          
        </table>

        </div>
		</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>