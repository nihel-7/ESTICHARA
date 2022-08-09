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
                  <a class="navbar-brand" href="/">
                   <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="28" width="28"><path d="M17.5 23.979 21.25 23.979C21.386 23.979 21.5 23.864 21.5 23.729L21.5 13.979C21.5 13.427 21.949 12.979 22.5 12.979L24.33 12.979 14.017 4.046 3.672 12.979 5.5 12.979C6.052 12.979 6.5 13.427 6.5 13.979L6.5 23.729C6.5 23.864 6.615 23.979 6.75 23.979L10.5 23.979 10.5 17.729C10.5 17.04 11.061 16.479 11.75 16.479L16.25 16.479C16.939 16.479 17.5 17.04 17.5 17.729L17.5 23.979ZM21.25 25.479 17 25.479C16.448 25.479 16 25.031 16 24.479L16 18.327C16 18.135 15.844 17.979 15.652 17.979L12.348 17.979C12.156 17.979 12 18.135 12 18.327L12 24.479C12 25.031 11.552 25.479 11 25.479L6.75 25.479C5.784 25.479 5 24.695 5 23.729L5 14.479 3.069 14.479C2.567 14.479 2.079 14.215 1.868 13.759 1.63 13.245 1.757 12.658 2.175 12.29L13.001 2.912C13.248 2.675 13.608 2.527 13.989 2.521 14.392 2.527 14.753 2.675 15.027 2.937L25.821 12.286C25.823 12.288 25.824 12.289 25.825 12.29 26.244 12.658 26.371 13.245 26.133 13.759 25.921 14.215 25.434 14.479 24.931 14.479L23 14.479 23 23.729C23 24.695 22.217 25.479 21.25 25.479Z"></path></svg>Pharm-project</g></svg></a>
                  <div class="mx-auto">
                  <h3>resultat de la recherche</h3></div>
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
                                  <tr style="cursor: pointer;" onClick="window.location.href='/show_info/{{$med->SP_CODE_SQ_PK}}'">
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
