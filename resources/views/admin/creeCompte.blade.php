@extends('layouts.admin')
@section('content')

  
<div class="card">
<div class="card-body">  
  <h3 class="card-title">Ajouter un nouveau utilisateur</h3>  
  
    

<form action= "{{route('user.save')}}" method="POST"> 

     @csrf 
   
  <div class="form-group">  
    <label>Nom</label>  
    <input type="text" class="form-control" id="Nom" name="nom" placeholder="Nom" required>  
  </div> 
  <div class="form-group">  
    <label>Email</label>  
    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>  
  </div>  
  <div class="form-group">  
    <label >Mot de passe</label>  
    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de pass">
  </div>
    <div class="col-sm-6 mb-3 mb-sm-0">       
        <label>
            <font size="4px" style="padding-left:20px;">Admin
            <input type="radio" checked="checked" name="role" onclick="handleClick(this)" value="0"></font>
            <span class="checkmark"></span>
        </label>               
        <label><font size="4px" style="padding-left:20px;">Pharmacien
            <input type="radio" checked="checked" name="role" onclick="handleClick(this)" value="1"></font>
            <span class="checkmark"></span>
            </label>               
        <label style="padding-left:20px;">Vendeur
            <input type="radio" name="role" onclick="handleClick(this)" value="2">
            <span class="checkmark"></span>
                                </label> </div>

  <button type="submit" class="btn btn-primary" value="enregistrer">Crée</button> 
  <a href="{{route('listUser')}}" class="btn btn-danger">Annuler</a> 
</form>  
  
</div>  
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
@endsection