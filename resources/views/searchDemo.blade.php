<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Autocomplete Search from Database - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body>
     
<div class="container">
    <h1>Laravel 9 Autocomplete Search from Database - ItSolutionStuff.com</h1>   
    <form action="easy" method="POST">
    {{ csrf_field() }}
    <input class="typeahead form-control" name="nomp" id="search" type="text">
    <input class=" form-control" name="idp" id="pathologie_id" type="hidden">
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>
</div>
     
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
  
    $('#search').typeahead({
        displayText: function(item){ return item.pathologie;},
        
            source: function (query, process) {
                return $.get(path, {
                    query: query
                }, function (data) {
                    console.log(data)
                    return process(data);
                });
            },
            afterSelect: function(item) {
                console.log(item.id);
        $('#pathologie_id').val(item.id);
  },
        });
</script>
     
</body>
</html>