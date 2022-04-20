<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      </head>
        <body>
          <style type="text/css">
            tr:hover{background-color:#EEE;cursor: pointer}
            li {
                   
                   display : inline;
                   margin-left:10px;
                   font-size: 17px;
                   line-height: 40px;
                   width: 180px;
                   height: 40px;
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
                          <div class="input-group input-group-lg mb-3">
                            <input type="search" class="form-control" id="nom" placeholder="Medicaments">
                            <input type="search" class="form-control" id="posologie" placeholder="Dosage..ex: 1x/j">
                               <div class="col-md-1">
                                <!-- ajouter-->
                      <button class="border-primary" onclick="addHtmlTableRow()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" class="text-primary" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                      </svg></button>
                    </div>
                    <div class="col-md-1">
                             <!--editer-->
                             <button onclick="editHtmlTbleSelectedRow()" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" >
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg></button>
                  </div>
                  <div class="col-md-1">
                    <!-- supprimer-->
                      <button class="border-danger" onclick="removeSelectedRow()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path  class="text-danger" d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" class="text-danger" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg></button>
                      </div>
                      <div class="container mt-1">              
                      <table id="table1" class="table table-bordered " >
                      <thead class="text-center" >
                         <tr>
                            <th><h6>Nom du médicament</h6></th>
                            <th><h6>posologie</h6></th>
                         </tr>
                  </thead>
                 </table>
                </div>
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
                                        <option selected>Type</option>
                                        <option value="1">nourrisson</option>
                                        <option value="2">enfant</option>
                                        <option value="3">adulte</option>
                                        <option value="4">Femme enceinte</option>
                                        <option value="5">Femme allaite</option>
                                        
                                      </select>
                                    </div>
                                  </div>
                                  <div class="input-group input-group-lg mb-3">
                                      <div class="col">
                                      <input type="search" class="form-control" id="antecedant" placeholder="Antecedents">
                                    </div>
                                    
                                       <div class="col">
                                      <input type="search" class="form-control" id="allergie" placeholder="Allergies">  
                                    </div>
                                                       
                                    
                                  </div>
                                  <label for="medoc" class="form-label col-form-label-lg">Interactions medicamenteuse</label>
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


          



                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                  <script>
            
            var rIndex,
                table = document.getElementById("table1");
            
            // check the empty input
            function checkEmptyInput()
            {
                var isEmpty = false,
                    nom = document.getElementById("nom").value,
                    posologie = document.getElementById("posologie").value;
            
                if(nom === ""){
                    alert("renseigner le nom du médicament");
                    isEmpty = true;
                }
                else if(posologie === ""){
                    alert("posologie not null");
                    isEmpty = true;
                }
                return isEmpty;
            }
            
            // add Row
            function addHtmlTableRow()
            {
                // get the table by id
                // create a new row and cells
                // get value from input text
                // set the values into row cell's
                if(!checkEmptyInput()){
                var newRow = table.insertRow(table.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    nom = document.getElementById("nom").value,
                    posologie = document.getElementById("posologie").value;
            
                cell1.innerHTML = nom;
                cell2.innerHTML = posologie;
                // call the function to set the event to the new row
                selectedRowToInput();
                 document.getElementById("nom").value = "";
                document.getElementById("posologie").value = "";
            }
            }
            
            // display selected row data into input text
            function selectedRowToInput()
            {
                
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                      // get the seected row index
                      rIndex = this.rowIndex;
                      document.getElementById("nom").value = this.cells[0].innerHTML;
                      document.getElementById("posologie").value = this.cells[1].innerHTML;
                    };
                }
            }
            selectedRowToInput();
            
            function editHtmlTbleSelectedRow()
            {
                var nom = document.getElementById("nom").value,
                    posologie = document.getElementById("posologie").value;
               if(!checkEmptyInput()){
                table.rows[rIndex].cells[0].innerHTML = nom;
                table.rows[rIndex].cells[1].innerHTML = posologie;
              }
               document.getElementById("nom").value = "";
                document.getElementById("posologie").value = "";
            }
            
            function removeSelectedRow()
            {
                table.deleteRow(rIndex);
                // clear input text
                document.getElementById("nom").value = "";
                document.getElementById("posologie").value = "";
            }
        </script>
       <script>
            
            var medicament = document.getElementById("medicament"),
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
                    medicament = document.getElementById("medicament").value;
            
                if(medicament === ""){
                    alert("renseigner l'medicament");
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
                    liNode1 = document.createElement("LI");
                    
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
        
        </body>
    
</html>
