<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
      
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
            
          <div class="content-wrapper mt-2" >
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid" >
                <div class="row justify-content-md-center mb-2">
                  <div class="col-md-6" style="  padding-bottom: 19px; padding-top: 19px;">
                    <h1 class="text-center text-secondary" >Analyse de prescription</h1>
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
                        <h3 class="card-title">Remplire les champs </h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      
                        <div class="card-body">
                          
                        <div >
           <table id="medication-table" class="table " >
               <thead class="thead">
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
                     <input type="search" class="typeahead form-control" id="medicament" placeholder="" autocomplete="off">
                     </td>
                     <td >
                     <input type="text" class="typeahead form-control" id="unite" placeholder="" autocomplete="off">
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
                     <td >
                     <input type="search" class="typeahead form-control" id="unite" placeholder="" autocomplete="off">
                     </td>
                   </tr>
              </tbody>
           </table>
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
                                    <div class="col">
                                      <input type="text" class="form-control input-lg" placeholder="Age" aria-label="age">
                                    </div>
                                    <div class="col ">
                                      <input type="text" class="form-control" placeholder="Poids" aria-label="poids">
                                    </div>
                                    <div class="col">
                                      <select class="form-select" aria-label="Default select example">
                                        <option selected>Tranche d'age</option>
                                        <option value="1">Nourrisson</option>
                                        <option value="2">Enfant</option>
                                        <option value="3">Adolescent</option>
                                        <option value="3">Adulte</option>
                                        <option value="4">Femme en age de procreer</option>
                                        <option value="5">Femme enceinte</option>
                                        <option value="6">Femme qui allaite</option>
                                        <option value="7">Femme ménopausée</option>
                                        
                                        
                                      </select>
                                    </div>
                                  </div>
                                  <div class="input-group input-group-lg mb-3">
                                      <div class="col">
                                      <input type="search" class="typeahead form-control" id="antecedent" placeholder="Antecedents">
                                      
                                    </div>
                                    
                                       <div class="col">
                                      <input type="search" class="typeahead form-control" id="allergie" placeholder="Allergies">  
                                    </div>
                                                       
                                    
                                  </div>
                                  <label for="medoc" class="form-label col-form-label-lg">Interactions medicamenteuse</label>
                                  <div class="input-group input-group-lg mb-3">
                            <input type="search" class="typeahead form-control" id="medicamenti" placeholder="Medicaments">
                               <div class="col-md-1">
                                <!-- ajouter-->
                      <button class="border-primary" onclick="addMedicament()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" class="text-primary" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                      </svg></button>
                    </div>
                    <div class="col-md-1">
                    <!-- supprimer-->
                      <button class="border-danger" onclick="deleteMedicament()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path  class="text-danger" d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" class="text-danger" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></button>
                      </div>
                      <div class="container mt-1">              
                        <ul id="listMedicament">
                        </ul>
                            </div>
                          
                          
                        <!-- /.card-body -->
        
                       
                      
                    </div>
                     <div class="card-footer">
                          <div class="col-md-12 bg-light text-right">
                          <button type="submit" class="btn btn-primary btn-lg ">Lancer Analyse</button>
                        </div>
                        </div>
                  </div>
                </div>


          



                    
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
        
        <script>
            var path4 = "{{ route('autocompleteM') }}";
  
  $('#medicamenti').typeahead({
      displayText: function(item){ return item.SP_NOM;},
      
          source: function (query, process) {
              return $.get(path4, {
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
            var path = "{{ route('autocomplete') }}";
  
  $('#antecedent').typeahead({
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
  
  $('#allergie').typeahead({
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
        
        
        </body>
    
</html>
