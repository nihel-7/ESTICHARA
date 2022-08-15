<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      </head>
        <body>

            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid">
                <a class="navbar-brand" href="/">
                   <svg viewBox="0 0 28 28" class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 py1f6qlh" fill="currentColor" height="28" width="28"><path d="M17.5 23.979 21.25 23.979C21.386 23.979 21.5 23.864 21.5 23.729L21.5 13.979C21.5 13.427 21.949 12.979 22.5 12.979L24.33 12.979 14.017 4.046 3.672 12.979 5.5 12.979C6.052 12.979 6.5 13.427 6.5 13.979L6.5 23.729C6.5 23.864 6.615 23.979 6.75 23.979L10.5 23.979 10.5 17.729C10.5 17.04 11.061 16.479 11.75 16.479L16.25 16.479C16.939 16.479 17.5 17.04 17.5 17.729L17.5 23.979ZM21.25 25.479 17 25.479C16.448 25.479 16 25.031 16 24.479L16 18.327C16 18.135 15.844 17.979 15.652 17.979L12.348 17.979C12.156 17.979 12 18.135 12 18.327L12 24.479C12 25.031 11.552 25.479 11 25.479L6.75 25.479C5.784 25.479 5 24.695 5 23.729L5 14.479 3.069 14.479C2.567 14.479 2.079 14.215 1.868 13.759 1.63 13.245 1.757 12.658 2.175 12.29L13.001 2.912C13.248 2.675 13.608 2.527 13.989 2.521 14.392 2.527 14.753 2.675 15.027 2.937L25.821 12.286C25.823 12.288 25.824 12.289 25.825 12.29 26.244 12.658 26.371 13.245 26.133 13.759 25.921 14.215 25.434 14.479 24.931 14.479L23 14.479 23 23.729C23 24.695 22.217 25.479 21.25 25.479Z"></path></svg>Pharm-project</g></svg></a>
                </div>
              </nav>


            
              <section class="content-header">
                <div class="container-fluid" >
                  <div class="row justify-content-md-center mb-2">
                    <div class="col-md-6" style=" padding-bottom: 19px; padding-top: 19px;">
                      <h1 class="text-center text-secondary" >Information sur le médicament</h1>
                    </div>
                    
                  </div>
                </div><!-- /.container-fluid -->
              </section>
              <!--info general-->
              <div class="container fluid">
                <div class="card text-center">
                  <div class="card-header">
                    <ul class="nav nav-tab card-header-pills" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">General</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Posologie</a>
                      </li>
                      
                    </ul>
                  </div>
                  
                    <div class="tab-content" id="myTabContent">
                      <div class="card-body">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h5 class="card-title">{{$med->SP_NOMLONG}}</h5>
                    <p class="card-text"></p>
                    
                  </div>
                </div>
              </div>
                <div class="tab-content" id="myTabContent">
                  <div class="card-body"></div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h5 class="card-title">details posologie</h5>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
           
            </div>

              </div>

              
              <!--details-->

              <div class="container-fluid mt-5">
              <div class="row justify-content-md-center">
              <div class="col-xl-3 col-md-6 ">
              <div class="card  mb-3 ml-3" style="max-width: 18rem;">
                <h5 class="card-header text-white " style=" background-color: rgba(252, 118, 8, 0.89);">Modalité de prise</h5>
                <div class="card-body">
                  <h5 class="card-title">Aucun</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
          </div>
              
          <div class="col-xl-3 col-md-6 ">
              <div class="card  mb-3 " style="max-width: 18rem;">
                <h5 class="card-header text-white " style=" background-color:#07461a;">Recommendation</h5>
                <div class="card-body">
                  @if(!$recs)
                  <h5 class="card-title">Aucun</h5>
                  @else
                  @foreach($recs as $rec)
                  <p class="card-text">{{$rec->FCPMTX_TEXTE}}</p>
                  @endforeach
                  @endif
                </div>
              </div>
          </div>
          <div class="col-xl-3 col-md-6 ">
            <div class="card  mb-3" style="max-width: 18rem;">
              <h5 class="card-header text-white bg-warning ">effect secondaire</h5>
              <div class="card-body">
                <h5 class="card-title">Aucun</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 ">
            <div class="card  mb-3" style="max-width: 18rem;">
              <h5 class="card-header text-white bg-danger "> contre indication</h5>
              <div class="card-body">
                @if(!$cis)
                <h5 class="card-title">Aucun</h5>
                @else
                @foreach($cis2 as $ci2)
                <p class="card-text">2{{$ci2->FCPTTX1_TXTCI}} </p>
                @endforeach
                @foreach($cis as $ci)
                <p class="card-text">{{$ci->FCPMTX_TEXTE}} </p>
                @endforeach 
                 
                @endif
              </div>
            </div>
        </div>
        </div>
      </div>

      <div class="container-fluid mt-5">
        <div class="row justify-content-md-center mb-2">
          <div class="col-md-12">
          <div class="card mb-3">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Education therapeutique</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Text</small></p>
            </div>
          </div>
        </div> 
      </div>
      </div>
      

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
    
</html>
