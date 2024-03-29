@extends('layouts.admin')
@section('content')


<!DOCTYPE html>
<html>
    <head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
      </head>
        <body>
          <style type="text/css">
            ul:hover{cursor: pointer}
            </style>
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid">
                  
                  <div class="mx-auto">
                  <h3>Recommandation therapeutique</h3></div>
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
                          <input type="hidden" name="user" id="" value="{{ Auth::user()->name }}" required>
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
                                      <input type="text" name="age" class="form-control form-control-lg " placeholder="Age" aria-label="age">
                                    </div>
                                    <div class="col-md-4 ">
                                      <input type="text" class="form-control form-control-lg" placeholder="Poids" aria-label="poids">
                                    </div>
                                    <div class="col-md-4">
                                      <select name="etat" class="form-select form-select-lg" aria-label="Default select example">
                                        <option selected>Tranche d'age</option>
                                        <option value="nouveau-né">nouveau-né</option>
                                        <option value="nourrisson">Nourrisson</option>
                                        <option value="enfant">Enfant</option>
                                        <option value="adolescent">Adolescent</option>
                                        <option value="adulte">Adulte</option>
                                        <option value="femme em age de procreer">Femme en age de procreer</option>
                                        <option value="femme enceinte">Femme enceinte</option>
                                        <option value="femme qui allaite">Femme qui allaite</option>
                                        <option value="femme menopausee">Femme ménopausée</option>
                                        
                                        
                                      </select>
                                    </div>
                                  </div>
                                  
                                    <div class="row mb-4">
                                    <div class="col-md-6">
                                    <div class="entry input-group ">
                                  <input class="form-control" name="antecedents" type="text" id="nomA" placeholder="Antecedents" autocomplete="off"/>  
                                      <!--<span class="input-group-btn">
                                      <button class="btn btn-primary btn-add mr-3" type="button" onclick="addAntecedents()">
                                    <span class="glyphicon glyphicon-plus"></span>
                                  </span>
                                  <span class="input-group-btn">
                                      <button class="btn btn-danger btn-delete" type="button" onclick="deleteAntecedent()">
                                    <span class="glyphicon glyphicon-minus"></span>
                                  </span>-->
                                   </div>
                                    <ul id="listAntecedant">
                                    </ul>
                                  </div>
                                  
                                  <div class="col-md-6">
                                  <div class="entry input-group ">
                                  <input class=" typeahead form-control" name="allergie" type="text" id="nomAl" placeholder="Allergie" autocomplete="off" />
                                    <!--<span class="input-group-btn">
                                      <button class="btn btn-primary btn-add mr-3" type="button" onclick="addAllergie()">
                                    <span class="glyphicon glyphicon-plus"></span>
                                  </span>
                                  <span class="input-group-btn">
                                      <button class="btn btn-danger btn-delete" type="button" onclick="deleteAllergie()">
                                    <span class="glyphicon glyphicon-minus"></span>
                                  </span>-->

                                   </div>
                                   <ul id="listAllergie">
                                    </ul>
                                   </div>
                                   
                                  </div>
                                       
                                  <div class="form-group">
                                     <label for="medicament" class="form-label mb-2">Traitements associés</label>

                                        <div class="input-group input-group-lg mb-3">
                                       <input type="search" name="medicament" class="typeahead form-control form-control-lg" name="meds" id="medicamenti" placeholder="Medicaments">
                                       <!--<span class="input-group-btn">
                                      <button class="btn btn-primary btn-add mr-3" type="button" onclick="addMedicament()">
                                      <span class="glyphicon glyphicon-plus"></span>
                                        </span>
                                      <span class="input-group-btn">
                                      <button class="btn btn-danger btn-delete" type="button" onclick="deleteMedicament()">
                                    <span class="glyphicon glyphicon-minus"></span>
                                  </span>-->
                                    
                                    </div>
                                    <ul name="list" id="listMedicament">
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
              console.log(item.CDF_CODE_PK);
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
              console.log(item.SP_CODE_SQ_PK);
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

           
        
    </body></html>






@endsection