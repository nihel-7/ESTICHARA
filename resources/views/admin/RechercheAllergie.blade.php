@extends('layouts.admin')
@section('content')

<!DOCTYPE html>
<html>
    <head>
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      
      </head>
        <body>
          <style type="text/css">
            body {
    font-family: 'Lato', sans-serif;
}

h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px;
    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
	
	margin-right: 10px;
}

            ul:hover{cursor: pointer}
            </style>
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
           <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
               <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        ></script>
        
    </body></html>
    @endsection