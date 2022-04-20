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
          
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/">Pharm-project</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  
                </div>
              </nav>
            
          <div class="content-wrapper mt-5" >
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid" >
                <div class="row justify-content-md-center mb-2">
                  <div class="col-md-6" style=" padding-bottom: 0px; padding-top: 0px;">
                    <h2 class="text-center text-secondary" >Recommendation therapeutique</h2>
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
                      <div class="card-header">
                        <h4 class="card-title">Remplire les champs </h4>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      
                        <div class="card-body">
                          <form>
                          <div class="form-group input-group-lg ">
                          <input type="text" name="nom" class=" typeahead form form-control form-control-sm"  placeholder="Pathologie a traiter " id="maladie_nom" autocomplete="off" >
                         <input type="hidden" name="nomM" id="nomM" required>
                          </div>
                         
                          <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Informations sur le patient
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">

                                  <div class="row mb-4">
                                    <div class="col-md-4">
                                      <input type="text" class="form-control form-control-lg " placeholder="Age" aria-label="age">
                                    </div>
                                    <div class="col-md-4 ">
                                      <input type="text" class="form-control form-control-lg" placeholder="Poids" aria-label="poids">
                                    </div>
                                    <div class="col-md-4">
                                      <select class="form-select form-select-lg" aria-label="Default select example">
                                        <option selected>Tranche d'age</option>
                                        <option value="7">Nourrisson</option>
                                        <option value="3">Enfant</option>
                                        <option value="1">Adolescent</option>
                                        <option value="2">Adulte</option>
                                        <option value="4">Femme en age de procreer</option>
                                        <option value="4">Femme enceinte</option>
                                        <option value="5">Femme qui allaite</option>
                                        <option value="6">Femme ménopausée</option>
                                        
                                        
                                      </select>
                                    </div>
                                  </div>
                                  
                                    <div class="row mb-4">
                                    <div class="col-md-6">
                                    <div class="entry input-group ">
                                  <input class="form-control" name="fields[]" type="text" id="nomA" placeholder="Antecedents" autocomplete="off"/>
                    	              <span class="input-group-btn">
                                      <button class="btn btn-success btn-add" type="button">
                                    <span class="glyphicon glyphicon-plus"></span>
                                   </button>
                                  </span>
                                   </div>
                                  </div>
                                  <div class="col-md-6">
                                  <div class="entry input-group ">
                                  <input class=" typeahead form-control" name="fields[]" type="text" id="nomAl" placeholder="Allergie" autocomplete="off" />
                    	              <span class="input-group-btn">
                                      <button class="btn btn-success btn-add" type="button">
                                    <span class="glyphicon glyphicon-plus"></span>
                                   </button>
                                  </span>
                                   </div>
                                   </div>
                                  </div>
                                       
                                                       
                                    
                                  </div>

                                  <div class="row ml-2 mr-2 mb-2">
                                  <div class="col-md-12">
                                  <div class="form-group">
                                     <label for="medicament" class="form-label mb-2">Traitement associe</label>

                                        <div class="input-group input-group-lg mb-3">
                                       <input type="search" class="typeahead form-control form-control-lg" name="meds" id="medicament" placeholder="Medicaments">
                                       <span class="input-group-btn">
                                      <button class="btn btn-success btn-add" type="button">
                                    <span class="glyphicon glyphicon-plus"></span>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          
                          
                        <!-- /.card-body -->
        
                        <div class="card-footer">
                          <div class="col-md-12 bg-light text-right">
                          <button type="submit" class="btn btn-primary btn-lg ">Lancer recherche</button>
                        </div>
                        </div>  
                        </form>   
                        <br>
            <small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>                 
                    </div>
                  </div>
                </div>


      <script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
  
    $('#maladie_nom').typeahead({
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
        $('#nomM').val(item.id);
  },
        });
</script>
                    
        <script>
            var path = "{{ route('autocomplete') }}";
  
  $('#nomA').typeahead({
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
     // $('#nomM').val(item.id);
},
      });
        
        </script>

<script>
            var path2 = "{{ route('autocompleteA') }}";
  
  $('#nomAl').typeahead({
      displayText: function(item){ return item.allergie;},
      
          source: function (query, process) {
              return $.get(path2, {
                  query: query
              }, function (data) {
                  console.log(data)
                  return process(data);
              });
          },
          afterSelect: function(item) {
              console.log(item.id);
     // $('#nomM').val(item.id);
},
      });
        
        </script>
        <script>
            var path3 = "{{ route('autocompleteM') }}";
  
  $('#medicament').typeahead({
      displayText: function(item){ return item.SP_NOM;},
      
          source: function (query, process) {
              return $.get(path3, {
                  query: query
              }, function (data) {
                  console.log(data)
                  return process(data);
              });
          },
          afterSelect: function(item) {
              console.log(item.id);
     // $('#nomM').val(item.id);
},
      });
        
        </script>
        

           <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        
       



                
            </body>

    
</html>
