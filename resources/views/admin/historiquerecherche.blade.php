@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        
    
        
       
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

      
      
      </head>
        <body>

        @if(!empty($success))
          <div class="alert alert-success"> {{ $success }}</div>
     @endif

<div class="card" style="width: 70rem;">
  
  <div class="card-body">
    <h5 class="card-title">Fiche Pathologie</h5>
    <form method="post" action="{{route('patho')}}">
    {{ csrf_field() }} 
  <div class="form-group">
    <label for="exampleFormControlInput1">Nom Pathologie</label>
    <input type="search" class="form-control mb-3" id="nomP" name="nomM" placeholder="..." autocomplete="off" required >
    <input id="id" type="hidden" name="codeP" class="form-control" placeholder="" required="required" data-error="">  
</div>
  
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control mb-3" id="description" name="description" rows="6"></textarea>
  </div>
  <div class="col-md-12">
                        
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Sauvegarder" >
                    
                </div>
</form>
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
        $('#id').val(item.CCL_CODE_SQ_PK);
        $('#description').val(item.Description);
  },
        });
</script>

</body></html>
@endsection