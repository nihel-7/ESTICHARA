@extends('layouts.topbar')
@section('content')
<!DOCTYPE html>
<html>
    <head>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
      </head>
        <body>
          <style type="text/css">
            ul:hover{cursor: pointer}
            </style>
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid">
                  
                  <div class="mx-auto">
                  <h3>Recherche par pathologie</h3></div>
                </div>
              </nav>
          <div class="content-wrapper mt-2" >
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid" >
                <div class="row justify-content-md-center mb-2">
                  <div class="col-md-6" style=" padding-bottom: 0px; padding-top: 0px;">
                    
                  </div>
                  
                </div>
              </div><!-- /.container-fluid -->
            </section>
        
            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row justify-content-md-center">
                  <!-- left column -->
                  <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary w-100">
                     
                      <!-- /.card-header -->
                      <!-- form start -->
                      
                        <div class="card-body">
                  
                  
                          <div class="form-group input-group-lg ">
                          <input type="text" name="nomM" class=" typeahead form form-control form-control-sm"  placeholder="saisir Pathologie . . .  " id="nomP" autocomplete="off" >
                          <input type="hidden" name="codeP" id="id">
                          </div>

                        <!------------------------------------------------------------<>-->
                        
                        

                                  
                          
                          
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                          
</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Lancer recherche
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fiche Pathologie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <P id="description"  > hello </P>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        
      </div>
    </div>
  </div>
</div>





                    </div>
                  </div>
                </div>


   
               
         <script type="text/javascript">
    var path = "{{ url('autocomplete') }}";
  
    $('#nomP').typeahead({
        displayText: function(item){ return item.CCL_NOM;},
        
            source: function (query, process) {
                return $.get(path,{query: query},function (data){
                    return process(data);
                });
            },
            afterSelect: function(item) {
                console.log(item.CCL_CODE_SQ_PK);
        //$('#nomP').val(item.CCL_CODE_SQ_PK);
        $('#description').text(item.Description);
  },
        });
</script>

    </body></html>
    @endsection