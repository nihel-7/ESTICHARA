@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html>
    <head>
        
    
        
       
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

      
      
      </head>
        <body>
          
          <div class="container">
        
          @if(!empty($success))
          <div class="alert alert-success"> {{ $success }}</div>
     @endif
    
    <div class="row ">
      <div class="col-lg-8 mx-auto">
        <div class="card col d-flex justify-content-center bg-light" style="width: 80rem;">
            <div class="card-body bg-light">
       
            <div class = "container">
    <form id="contact-form" role="form" method="post" action="{{route('allergie')}}" >

    {{ csrf_field() }} 

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Allergie *</label>
                            <input id="nomAl"  type="text" name="nomAl" class="form-control" placeholder="..." required="required" data-error="Veuillez saisir la pathologie"  autocomplete="off" >
                            
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">ID</label>
                            <input id="id" type="texte" name="codeA" class="form-control" placeholder="" required="required" data-error="">
                            
                        </div>
                    </div>

                    
                   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Description</label>
                            <textarea id="description" name="description" class="form-control" placeholder="" rows="6" required="required" data-error="Please, leave us a message."></textarea
                                >
                            </div>

                        </div>


                    <div class="col-md-12">
                        
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Sauvegarder" >
                    
                </div>
          
                </div>


        </div>
     </form>
        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>


   
               
<script>
            var path2 = "{{ route('autocompleteA') }}";
  
  $('#nomAl').typeahead({
      displayText: function(item){ return item.CDF_NOM;},
      
          source: function (query, process) {
              return $.get(path2, {
                  query: query
              }, function (data) {
                  console.log(data)
                  return process(data);
              });
          },
          afterSelect: function(item) {
              console.log(item.CDF_CODE_PK);
      $('#id').val(item.CDF_CODE_PK);
      $('#description').val(item.CDF_TEXTE);
},
      });
        
        </script>
           
        
    </body></html>
    @endsection