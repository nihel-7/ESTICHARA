@extends('layouts.admin')
@section('content')
  
  

  
<div class="container">  
  <h1>Liste des utilisateurs</h1>  
  
<table class="table table-striped table-bordered">  
  <tr><th>Id</th><th>Nom</th><th>email</th><th>Role</th><th><a href="{{url('/creeCompte')}}" class="btn btn-success">crée</a></th></tr> 

  @foreach($users as $user)
  <tr>
  	<td>{{$user->id}}</td>
  	<td>{{$user->name}}</td>
  	<td>{{$user->email}}</td>
  	<td>{{$user->role}}
  </td>
  	<td>
  		<a href="/edit/{{$user->id}}" class="btn btn-info">editer</a>
  		<a href="/delete/{{$user->id}}" class="btn btn-danger">supprimer</a>
</svg></a></td>
  </tr>  
   @endforeach
</table>  
  
</div>  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  



@endsection