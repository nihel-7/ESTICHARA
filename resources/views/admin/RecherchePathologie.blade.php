@extends('layouts.admin')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        
    
        
       
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>

      <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{asset('vendors/simplebar/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendors/simplebar.css')}}">
    <!-- Main styles for this application-->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{asset('css/examples.css')}}" rel="stylesheet"> 
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="{{asset('vendors/@coreui/chartjs/css/coreui-chartjs.css')}}" rel="stylesheet">
      
      </head>
        <body>

        @if(!empty($success))
          <div class="alert alert-success"> {{ $success }}</div>
     @endif

<div class="card" style="width: 70rem;">
  
  <div class="card-body">
    <h5 class="card-title">Fiche Pathologie</h5>
    <form id="patho" method="post" action="{{route('patho')}}">
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
  <div class="btn-group pull-right" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-danger " id="annuler">Annuler modification</button>
  <button type="submit" class="btn btn-success">Sauvegarder</button>
</div>
</form>

<P id="pdesc" style=" display: none;" > hello </P>
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
        $('#pdesc').val(item.Description);
  },
        });
</script>

<script>

var annuler = document.getElementById('annuler');
annuler.addEventListener('click', myfunction);
    function myfunction() {
  var p = document.getElementById("pdesc");
  document.forms['patho']['description'].value = p.value ;
    }
  
    </script>

</body></html>
@endsection