@extends('layouts.mainlayout')
@section('content')

<div class="container-fluid">

                <!-- Page Heading -->
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                         <font class="m-0 font-weight-bold text-primary">Liste des medicaments</font>
                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nom</th>
                                        
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                      <th>Id</th>
                                      <th>Nom</th>
                                      
                                    </tr>
                                </tfoot>
                                <tbody>
                                  @foreach ($listmed  as $med)
                                  <tr style="cursor: pointer;" onClick="">
                                               
                                    <td>{{$med->SP_CODE_SQ_PK}}</td>
                                <td>{{$med->SP_NOM}}</td> 
                                
                                  </tr>
                                  @endforeach   
                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
            
           



           