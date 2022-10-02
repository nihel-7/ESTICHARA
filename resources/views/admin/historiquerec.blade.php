@extends('layouts.admin')
@section('content')


             <div class="" style=" padding-bottom: 19px; padding-top: 30px;">
                      <h1 class="text-center text-secondary" >Historique des recommandations therapeutiques</h1>
                    </div>

<div class="content-wrapper mt-2" >

            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <div class="row justify-content-md-center">
                  <!-- left column -->
                  <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary w-100">
                    
                      <!-- form start -->
                      
                        <div class="card-body">
                         <form> 
                        <div class="table-responsive ">
           <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        
                                        <th>Utilisateur</th>
                                        <th>Pathologie</th>
                                        <th>Patient</th>
                                        <th>Allergie</th>
                                        <th>Antecedent</th>
                                        <th>Date</th>
                                
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($listrec  as $rec)
                                  
                                    <td>{{$rec->utilisateur}}</td>
                                    <td >{{$rec->pathologie}}</td>
                                    <td >{{$rec->resultat}}</td> 
                                    <td >{{$rec->allergie}}</td> 
                                    <td >{{$rec->antecedent}}</td> 
                                    <td >{{$rec->created_at}}</td>
                                     
                                
                                  </tr>
                                  @endforeach   
                   
                                </tbody>
                            </table>
           </div>
    </form>
                                  
                                    </div>
                                    </div>
                                </div>
                        
                            </div>
                    </div>
                    
                  </div>
                </div>




</div>



@endsection