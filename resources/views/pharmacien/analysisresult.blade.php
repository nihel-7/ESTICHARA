@extends('layouts.app')
@section('content')
            
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
                  <h5 class="card-title">Aucun</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
          </div>
              
          <div class="col-xl-3 col-md-6 ml-5">
              <div class="card  mb-3" style="max-width: 18rem;">
                <h5 class="card-header text-white " style=" background-color: rgba(252, 118, 8, 0.89);">Problemes moderes</h5>
                <div class="card-body">
                  <h5 class="card-title">Surdosage</h5>
                  <p class="card-text"></p>
                </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6 ml-5 mr-5">
            <div class="card  mb-3" style="max-width: 18rem;">
              <h5 class="card-header text-white bg-warning ">Problemes mineurs</h5>
              <div class="card-body">
                <h5 class="card-title">Aucun</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
        </div>
        </div>
      </div>
      <div class="container-fluid mt-5 ">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Medicaments</th>
            <th scope="col">Details</th>
            <th scope="col">Problemes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td colspan="2">Biocalyptol</td>
            <td>Aucun probleme</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Doliprane 500mg</td>
            <td>Details</td>
            <td>surdosage pour enfant de moins 20kg </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Aspegic</td>
            <td>Aucun probleme</td>
          </tr>
         
        </tbody>
      </table>
    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection