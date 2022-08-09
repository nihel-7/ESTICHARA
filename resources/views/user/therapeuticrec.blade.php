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
                  <h3>Recommendation therapeutique</h3></div>
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
                  <form method="post" action="recresult" >
                  {{ csrf_field() }}
                          <div class="form-group input-group-lg ">
                          <input type="text" name="nom" class=" typeahead form form-control form-control-sm"  placeholder="Pathologie a traiter " id="nom" autocomplete="off" >
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
                                        <option value="1">Nourrisson</option>
                                        <option value="2">Enfant</option>
                                        <option value="3">Adolescent</option>
                                        <option value="4">Adulte</option>
                                        <option value="5">Femme en age de procreer</option>
                                        <option value="6">Femme enceinte</option>
                                        <option value="7">Femme qui allaite</option>
                                        <option value="8">Femme ménopausée</option>
                                        
                                        
                                      </select>
                                    </div>
                                  </div>
                                  
                                    <div class="row mb-4">
                                    <div class="col-md-6">
                                    <div class="entry input-group ">
                                  <input class="form-control" name="fields[]" type="text" id="nomA" placeholder="Antecedents" autocomplete="off"/>  
                                      <span class="input-group-btn">
                                      <button class="btn btn-primary btn-add mr-3" type="button" onclick="addAntecedents()">
                                    <span class="glyphicon glyphicon-plus"></span>
                                  </span>
                                  <span class="input-group-btn">
                                      <button class="btn btn-danger btn-delete" type="button" onclick="deleteAntecedent()">
                                    <span class="glyphicon glyphicon-minus"></span>
                                  </span>
                                   </div>
                                    <ul id="listAntecedant">
                                    </ul>
                                  </div>
                                  
                                  <div class="col-md-6">
                                  <div class="entry input-group ">
                                  <input class=" typeahead form-control" name="fields[]" type="text" id="nomAl" placeholder="Allergie" autocomplete="off" />
                    	              <span class="input-group-btn">
                                      <button class="btn btn-primary btn-add mr-3" type="button" onclick="addAllergie()">
                                    <span class="glyphicon glyphicon-plus"></span>
                                  </span>
                                  <span class="input-group-btn">
                                      <button class="btn btn-danger btn-delete" type="button" onclick="deleteAllergie()">
                                    <span class="glyphicon glyphicon-minus"></span>
                                  </span>

                                   </div>
                                   <ul id="listAllergie">
                                    </ul>
                                   </div>
                                   
                                  </div>
                                       
                                  <div class="form-group">
                                     <label for="medicament" class="form-label mb-2">Traitements associés</label>

                                        <div class="input-group input-group-lg mb-3">
                                       <input type="search" class="typeahead form-control form-control-lg" name="meds" id="medicamenti" placeholder="Medicaments">
                                       <span class="input-group-btn">
                                      <button class="btn btn-primary btn-add mr-3" type="button" onclick="addMedicament()">
                                      <span class="glyphicon glyphicon-plus"></span>
                                        </span>
                                      <span class="input-group-btn">
                                      <button class="btn btn-danger btn-delete" type="button" onclick="deleteMedicament()">
                                    <span class="glyphicon glyphicon-minus"></span>
                                  </span>
                                    
                                    </div>
                                    <ul id="listMedicament">
                         </ul>
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
                    </div>
                  </div>
                </div>


      <script type="text/javascript">
    var path = "{{ url('autocomplete') }}";
  
    $('#nom').typeahead({
        displayText: function(item){ return item.CCL_NOM;},
        
            source: function (query, process) {
                return $.get(path,{query: query},function (data){
                    return process(data);
                });
            },
            afterSelect: function(item) {
                console.log(item.CCL_CODE_SQ_PK);
        $('#nomM').val(item.CCL_CODE_SQ_PK);
  },
        });
</script>
                    
        <script>
            var path7 = "{{ route('autocomplete') }}";
  
  $('#nomA').typeahead({
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
              console.log(item.CCL_CODE_SQ_PK);
     // $('#nomM').val(item.id);
},
      });
        
        </script>

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
              console.log(item.CDF_NUMERO_PK);
     // $('#nomM').val(item.id);
},
      });
        
        </script>
        <script>
            var path3 = "{{ route('autocompleteM') }}";
  
  $('#medicamenti').typeahead({
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
            
            var nomA = document.getElementById("nomA"),
                 itemsA = document.querySelectorAll("#listAntecedant li"),
                 tabA = [], index;
         
             // get the selected li index using array
             // populate array with li values
             
             for(var i = 0; i < itemsA.length; i++){
                 tabA.push(itemsA[i].innerHTML);
             }
             
             // get li index onclick
             for(var i = 0; i < itemsA.length; i++){
                 
                 itemsA[i].onclick = function(){
                     index = tabA.indexOf(this.innerHTML);
                     console.log(this.innerHTML + " INDEX = " + index);
                     // set the selected li value into input text
                     nomA.value = this.innerHTML;
                 };
                 
             }
            // check the empty input
            function checkEmptyAntecedants()
            {
                var isEmpty = false,
                    nomA = document.getElementById("nomA").value;
            
                if(nomA === ""){
                    alert("renseigner l'Antecedents");
                    isEmpty = true;
                }
                return isEmpty;
            }
            function refreshArrayA()
            {
                // clear array
                tabA.length = 0;
                itemsA = document.querySelectorAll("#listAntecedant li");
                // fill array
                for(var i = 0; i < itemsA.length; i++){
                 tabA.push(itemsA[i].innerHTML);
               }
            }

            function addAntecedents(){
                      if (!checkEmptyAntecedants()) {
                var listNode = document.getElementById("listAntecedant"),
                    textNode = document.createTextNode(nomA.value),
                    liNode = document.createElement("LI");
                    
                    liNode.appendChild(textNode);
                    listNode.appendChild(liNode);
                    nomA.value = "";
                    refreshArrayA();
                    
                    // add event to the new LI
                    
                    liNode.onclick = function(){
                     index = tabA.indexOf(liNode.innerHTML);
                     console.log(liNode.innerHTML + " INDEX = " + index);
                     // set the selected li value into input text
                     nomA.value = liNode.innerHTML;
                 };
                    
             }}
              function deleteAntecedent(){
                  
                      refreshArrayA();
                      if(itemsA.length > 0){
                          itemsA[index].parentNode.removeChild(itemsA[index]);
                          nomA.value = "";
                      }
              }
            
        </script>
        <script>
            
            var nomAl = document.getElementById("nomAl"),
                 items = document.querySelectorAll("#listAllergie li"),
                 tab = [], index;
         
             // get the selected li index using array
             // populate array with li values
             
             for(var i = 0; i < items.length; i++){
                 tab.push(items[i].innerHTML);
             }
             
             // get li index onclick
             for(var i = 0; i < items.length; i++){
                 
                 items[i].onclick = function(){
                     index = tab.indexOf(this.innerHTML);
                     console.log(this.innerHTML + " INDEX = " + index);
                     // set the selected li value into input text
                     nomAl.value = this.innerHTML;
                 };
                 
             }
            // check the empty input
            function checkEmptyAllergie()
            {
                var isEmpty = false,
                    nomAl = document.getElementById("nomAl").value;
            
                if(nomAl === ""){
                    alert("renseigner l'Allergie");
                    isEmpty = true;
                }
                return isEmpty;
            }
            function refreshArrayAl()
            {
                // clear array
                tab.length = 0;
                items = document.querySelectorAll("#listAllergie li");
                // fill array
                for(var i = 0; i < items.length; i++){
                 tab.push(items[i].innerHTML);
               }
            }

            function addAllergie(){
                      if (!checkEmptyAllergie()) {
                var listNode = document.getElementById("listAllergie"),
                    textNode = document.createTextNode(nomAl.value),
                    liNode = document.createElement("LI");
                    
                    liNode.appendChild(textNode);
                    listNode.appendChild(liNode);
                    nomAl.value = "";
                    refreshArrayAl();
                    
                    // add event to the new LI
                    
                    liNode.onclick = function(){
                     index = tab.indexOf(liNode.innerHTML);
                     console.log(liNode.innerHTML + " INDEX = " + index);
                     // set the selected li value into input text
                     nomAl.value = liNode.innerHTML;
                 };
                    
             }}
              function deleteAllergie(){
                  
                      refreshArrayAl();
                          items[index].parentNode.removeChild(items[index]);
                          nomAl.value = "";
                      
              }
            
        </script>
         <script>
            
            var medicament = document.getElementById("medicamenti"),
                 items = document.querySelectorAll("#listMedicament li"),
                 tab = [], index;
         
             // get the selected li index using array
             // populate array with li values
             
             for(var i = 0; i < items.length; i++){
                 tab.push(items[i].innerHTML);
             }
             
             // get li index onclick
             for(var i = 0; i < items.length; i++){
                 
                 items[i].onclick = function(){
                     index = tab.indexOf(this.innerHTML);
                     console.log(this.innerHTML + " INDEX = " + index);
                     // set the selected li value into input text
                     medicament.value = this.innerHTML;
                 };
                 
             }
            // check the empty input
            function checkEmptyMedicament()
            {
                var isEmpty = false,
                    medicament = document.getElementById("medicamenti").value;
            
                if(medicament === ""){
                    alert("renseigner le medicament");
                    isEmpty = true;
                }
                return isEmpty;
            }
            function refreshArray()
            {
                // clear array
                tab.length = 0;
                items = document.querySelectorAll("#listMedicament li");
                // fill array
                for(var i = 0; i < items.length; i++){
                 tab.push(items[i].innerHTML);
               }
            }

            function addMedicament(){
                      if (!checkEmptyMedicament()) {
                var listNode = document.getElementById("listMedicament"),
                    textNode = document.createTextNode(medicament.value),
                    liNode = document.createElement("LI");
                    
                    liNode.appendChild(textNode);
                    listNode.appendChild(liNode);
                    medicament.value = "";
                    refreshArray();
                    
                    // add event to the new LI
                    
                    liNode.onclick = function(){
                     index = tab.indexOf(liNode.innerHTML);
                     console.log(liNode.innerHTML + " INDEX = " + index);
                     // set the selected li value into input text
                     medicament.value = liNode.innerHTML;
                 };
                    
             }}
              function deleteMedicament(){
                  
                      refreshArray();
                      if(items.length > 0){
                          items[index].parentNode.removeChild(items[index]);
                          medicament.value = "";
                      }
              }</script>

           <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
               <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        ></script>
        
       



                
            </body>

    
</html>
