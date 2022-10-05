@extends('layouts.topbar')
@section('content')
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
      
      </head>
        <body>
           <style type="text/css">
            ul:hover{cursor: pointer}
            </style>
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid">
                 
                  <div class="mx-auto">
                  <h3>Resultat de la recherche</h3></div>
              </nav>
          
            
          <div class="content-wrapper mt-2" >
                  
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row justify-content-md-center">
                  <!-- left column -->
                  <div class="col-md-10">
                    <!-- general form elements -->
                    <div class="card card-primary w-100">
                      <!-- /.card-header -->
                      <!-- form start -->
                      
                        <div class="card-body">
                         <form> 
                        <div class="table-responsive ">
           <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th  type="hidden">Id</th>
                                        <th>Nom</th>
                                        <th>Details</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($listmed  as $med)
                                  <tr style="cursor: pointer;" onClick="window.location.href='/medicationdetail/{{$med->SP_CODE_SQ_PK}}/{{$catfp}}'">
                                    <td>{{$med->SP_CODE_SQ_PK}}</td>
                                    <td >{{$med->SP_NOM}}</td> 
                                    <td >{{$med->SP_NOMLONG}}</td> 
                                
                                  </tr>
                                  @endforeach   
                   
                                </tbody>
                            </table>
           </div>
    </form>
                                  
                                    </div>
                                    </div>
                                </div>
                        
                            </div>
                    </div>
                    
                  </div>
                </div>
            
        </body>
        
    
</html>
@endsection
