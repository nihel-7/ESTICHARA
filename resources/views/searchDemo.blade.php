<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Autocomplete Search from Database - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
     
<div class="container">
    <h1>Laravel 9 Autocomplete Search from Database - ItSolutionStuff.com</h1>   
    <form action="easy" method="POST">
    {{ csrf_field() }}
    <input class="typeahead form-control" name="nomp" id="search" type="text">
    <input class=" form-control" name="idp" id="pathologie_id" type="text">
    <button type="submit" class="btn btn-primary">Submit</button>
   </form>

   <form>
       <div class="table-responsive">
           <table id="medication-table" class="table " >
               <thead class="thead-light">
                   <tr>
                       <th scope="col">Medicament</th>
                       <th scope="col">Unite de prise</th>
                       <th scope="col">Matin</th>
                       <th scope="col">Midi</th>
                       <th scope="col">Soir</th>
                       <th scope="col">Av-coucher</th>
                       <th scope="col">Forme</th>
                   </tr>
               </thead>
               <tbody>
                   <tr id="row_1">
                   <td >
                     <input type="search" class="typeahead form-control" id="nomM" placeholder="" autocomplete="off">
                     </td>
                     <td >
                     <input type="search" class="typeahead form-control" id="unite" placeholder="" autocomplete="off">
                     </td>
                     <td >
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     </td>
                     <td >
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     </td>
                     <td >
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     </td>
                     <td >
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     </td>
                    </tr>
              </tbody>
           </table>
      </div>
  </form>

  <div class="container">
	<div class="row">
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Nice Multiple Form Fields</label>
            <div class="controls"> 
                <form role="form" autocomplete="off">
                    <div class="entry input-group col-xs-3">
                        <input class="form-control" name="fields[]" type="text" placeholder="Type something" />
                    	<span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
                </form>
            <br>
            <small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>
            </div>
        </div>
	</div>
</div>
</div>
   <script>
       $(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('<span class="glyphicon glyphicon-minus"></span>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});
   </script>  
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
  
    $('#search').typeahead({
        displayText: function(item){ return item.CCL_NOM;},
        
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