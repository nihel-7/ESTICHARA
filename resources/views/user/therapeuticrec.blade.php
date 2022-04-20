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
          <style type="text/css">
            tr:hover{background-color:#EEE;
              cursor: pointer
            }
            li {
                   display : inline;
                   margin-left:10px;
                   font-size: 17px;
                   line-height: 40px;
                   cursor: pointer;
                }

          </style>
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
                          <div class="form-group input-group-lg mb-3">
                          <input type="text" name="nom" class=" typeahead form form-control "  placeholder="Pathologie a traiter " id="maladie_nom" autocomplete="off" >
                         <input type="hidden" name="nomM" id="nomM" required>
                          </div>
                         </form>
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
                                        <option value="1">nourrisson</option>
                                        <option value="2">enfant</option>
                                        <option value="3">adulte</option>
                                        <option value="4">Femme enceinte</option>
                                        <option value="5">Femme allaite</option>
                                        
                                      </select>
                                    </div>
                                  </div>
                                  <div class="input-group input-group-lg mb-3">
                            
                                    <input type="search" class="form-control" id="antecedant" placeholder="Antecedents">
                                    <div class="col-md-1">
                                    <button class="border-primary" onclick="addAntecedant()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" class="text-primary" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                      </svg></button>
                       </div>
                       <div class="col-md-1">
                    <!-- supprimer-->
                      <button class="border-danger" onclick="deleteAntecedant()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path  class="text-danger" d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" class="text-danger" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></button>
                      </div>
                                    
                                  </div>
                                  <ul id="listAntecedant">
                                    </ul>

                          <div class="input-group input-group-lg mb-3">
                            
                                    <input type="search" class="form-control" id="allergie" placeholder="Allergies">
                                    <div class="col-md-1">
                                    <button class="border-primary" onclick="addAllergie()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" class="text-primary" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                      </svg></button>
                       </div>
                       <div class="col-md-1">
                    <!-- supprimer-->
                      <button class="border-danger" onclick="deleteAllergie()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path  class="text-danger" d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" class="text-danger" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></button>
                      </div> 
                                  </div>
                                   <ul id="listAllergie">
                                    </ul>
                                  <label for="medoc" class="form-label col-form-label-lg">Traitement associe</label>
                                        <div class="input-group input-group-lg mb-3">
                            <input type="search" class="form-control" id="medicament" placeholder="Medicaments">
                            
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
                  <ol id="listMedicament">
                                    </ol>
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
            
            var antecedant = document.getElementById("antecedant"),
                 items = document.querySelectorAll("#listAntecedant li"),
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
                     antecedant.value = this.innerHTML;
                 };
                 
             }
            // check the empty input
            function checkEmpty()
            {
                var isEmpty = false,
                    antecedant = document.getElementById("antecedant").value;
            
                if(antecedant === ""){
                    alert("renseigner l'antecedant");
                    isEmpty = true;
                }
                return isEmpty;
            }
            function refreshArray()
            {
                // clear array
                tab.length = 0;
                items = document.querySelectorAll("#listAntecedant li");
                // fill array
                for(var i = 0; i < items.length; i++){
                 tab.push(items[i].innerHTML);
               }
            }

            function addAntecedant(){
                      if (!checkEmpty()) {
                var listNode = document.getElementById("listAntecedant"),
                    textNode = document.createTextNode(antecedant.value),
                    liNode = document.createElement("LI");
                    
                    liNode.appendChild(textNode);
                    listNode.appendChild(liNode);
                    antecedant.value = "";
                    refreshArray();
                    
                    // add event to the new LI
                    
                    liNode.onclick = function(){
                     index = tab.indexOf(liNode.innerHTML);
                     console.log(liNode.innerHTML + " INDEX = " + index);
                     // set the selected li value into input text
                     antecedant.value = liNode.innerHTML;
                 };
                    
             }}
             
             function editLI(){
                 // edit the selected li using input text
                 items[index].innerHTML = antecedant.value;
                 refreshArray();
              }
              
              function deleteAntecedant(){
                  
                      refreshArray();
                      if(items.length > 0){
                          items[index].parentNode.removeChild(items[index]);
                          antecedant.value = "";
                      }
              }
            
        </script>
        <script>
            
            var medicament = document.getElementById("medicament"),
                 items = document.querySelectorAll("#listMedicament ol"),
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
                    medicament = document.getElementById("medicament").value;
            
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
                var listNode1 = document.getElementById("listMedicament"),
                    textNode1 = document.createTextNode(medicament.value),
                    liNode1 = document.createElement("OL");
                    
                    liNode1.appendChild(textNode1);
                    listNode1.appendChild(liNode1);
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
              }
            
        </script>
        <script>
            
            var allergie = document.getElementById("allergie"),
                 items = document.querySelectorAll("#listAllergie LI"),
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
                     allergie.value = this.innerHTML;
                 };
                 
             }
            // check the empty input
            function checkEmptyMedicament()
            {
                var isEmpty = false,
                    allergie = document.getElementById("allergie").value;
            
                if(allergie === ""){
                    alert("renseigner l'allergie");
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

            function addAllergie(){
                      if (!checkEmptyMedicament()) {
                var listNode2 = document.getElementById("listAllergie"),
                    textNode2 = document.createTextNode(allergie.value),
                    liNode2 = document.createElement("LI");
                    
                    liNode2.appendChild(textNode2);
                    listNode2.appendChild(liNode2);
                    allergie.value = "";
                    refreshArray();
                    
                    // add event to the new LI
                    
                    liNode.onclick = function(){
                     index = tab.indexOf(liNode.innerHTML);
                     console.log(liNode.innerHTML + " INDEX = " + index);
                     // set the selected li value into input text
                     allergie.value = liNode.innerHTML;
                 };
                    
             }}
             
              
              function deleteAllergie(){
                  
                      refreshArray();
                      if(items.length > 0){
                          items[index].parentNode.removeChild(items[index]);
                          allergie.value = "";
                      }
              }
            
        </script>
         

          


           <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        
       



                
            </body>

    
</html>
