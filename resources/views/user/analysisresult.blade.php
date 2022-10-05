@extends('layouts.topbar')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      </head>
      </head>
        <body>
         
            

            
              <section class="content-header">
                <div class="container-fluid" >
                  <div class="row justify-content-md-center mb-2">
                    <div class="col-md-6" style=" padding-bottom: 19px; padding-top: 19px;">
                      <h1 class="text-center text-secondary" >Resultats d'analyse</h1>
                    </div>
                    
                  </div>
                </div><!-- /.container-fluid -->
              </section>
              <div class="container-fluid mt-5">
              <div class="row justify-content-md-center">
              <div class="col-xl-3 col-md-6 ml-5">
              <div class="card  mb-3" style="max-width: 18rem;">
                <h5 class="card-header text-white bg-danger ">Problemes majeurs</h5>
                <div class="card-body">
                @if($medpath == null && $medetat == null)
                <h5 class="card-title">Aucun </h5>
                @endif
                  @if($medpath)
                  <h5 class="card-title">Medicament contre-indiqué pour les patients soufrants d' {{$medpath['ante']}} </h5>
                @endif
                @if($medetat) 
                <h5 class="card-title">Medicament contre-indiqué en cas de {{$medetat['etat']}} </h5> 
                @endif  
                </div>
              </div>
          </div>
              
          <div class="col-xl-3 col-md-6 ml-5">
              <div class="card  mb-3" style="max-width: 18rem;">
                <h5 class="card-header text-white " style=" background-color: rgba(252, 118, 8, 0.89);">problèmes modérés</h5>
                <div class="card-body">
                @if($medinter == null && $medal == null)
                <h5 class="card-title">Aucun </h5>
                @endif
                @if($medinter)
                  <h5 class="card-title">Interaction  médicamenteuse</h5>
                  @endif
                  @if($medal)
                  <h5 class="card-title">Le patient peut faire une réaction allergique a ce  médicament</h5>
                  @endif
                  <p class="card-text"></p>
                </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6 ml-5 mr-5">
            <div class="card  mb-3" style="max-width: 18rem;">
              <h5 class="card-header text-white bg-warning ">Problemes mineurs</h5>
              <div class="card-body">
                <h5 class="card-title">Aucun</h5>
                <p class="card-text"></p>
              </div>
            </div>
        </div>
        </div>
      </div>
      <div>
        <center><h3>Tableau des alertes</h3></center>
      </div>
      <div class="container-fluid mt-5 ">

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Medicaments</th>
            <th scope="col">Problemes</th>
            <th scope="col">Details</th>
          </tr>
        </thead>
        <tbody>
          @if($medpath)
          
          <tr>
            <th scope="row">1</th>
            <td >{{$medpath['med']}}</td>
            <td colspan="2">{{$medpath['comment']}} {{$medpath['ante']}}</td>
            <td></td>
          </tr>
         
          @endif

          @if($medal)
          
          <tr>
            <th scope="row">1</th>
            <td >{{$medal['med']}}</td>
            <td colspan="2">{{$medal['comment']}} {{$medal['allergie']}}</td>
            <td></td>
          </tr>
          
          @endif
         
          @if($medetat)
          
          <tr>
            <th scope="row">1</th>
            <td >{{$medetat['med']}}</td>
            <td colspan="2">{{$medetat['comment']}} {{$medetat['etat']}}</td>
            <td></td>
          </tr>
          
          @endif
         
          @if($medinter)
          
          <tr>
            <th scope="row">2</th>
            <td>{{$medinter['nomM']}}</td>
            <td>{{$medinter['comment']}} {{$medinter['nomi']}} </td>
            <td>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalCenter">
                Details
             </button>
             <!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Fiche Interaction</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{$medinter['fiche_interaction']}}
      </div>
      
    </div>
  </div>
</div>

            </td>
          </tr>
          
          @endif

        </tbody>
      </table>
    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
    
</html>
@endsection