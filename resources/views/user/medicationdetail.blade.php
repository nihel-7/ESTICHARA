@extends('layouts.topbar')
@section('content')
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
      </head>
        <body>

            
            
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
                <div class="card text-center ">
                  <div class="card-header ">
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
                <div class="accordion accordion-flush " id="accordionExample">
                  <div class="row">
  <div class="accordion-item col-lg-6">
    <h2 class="accordion-header card" id="flush-headingOne">
      <div class="clearfix mb-0">
      <button class="accordion-button card-header text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style=" background-color: rgba(252, 118, 8, 0.89);">
        Modalité de prise
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse  " aria-labelledby="flush-headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body card-body">
        @if(!$pos)
                  <h5 class="card-title">Aucun</h5>
                  @else
                  <p class="card-text">{{$pos->ATR_TEXTE}}</p>
                  @endif
      </div>
    </div>
  </div></div>
  
              
          <div class="accordion-item col-lg-6">
    <h2 class="accordion-header card" id="flush-headingTwo">
      <button class="accordion-button collapsed card-header text-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo" style=" background-color:#07461a;">
        Recommendation
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse  " aria-labelledby="flush-headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body card-body">
         @if($cat)
                  {{$cat->FGATX9_TEXTE}}
                  @endif
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
  <div class="accordion-item col-lg-6">
    <div class="row">
    <h2 class="accordion-header card" id="flush-headingthree">
      <button class="accordion-button card-header text-white bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapsethree">
        effet secondaire
      </button>
    </h2>
    <div id="flush-collapsethree" class="accordion-collapse collapse  " aria-labelledby="flush-flush-headingthree" data-bs-parent="#accordionExample">
      <div class="accordion-body card-body">
         @if(!$eis)
                  <h5 class="card-title">Aucun</h5>
                  @else
                  @foreach($eis as $ei)
                  <p class="card-text">{{$ei->FEITX1_TEXTE}}</p>
                  @endforeach
                  @endif
      </div>
    </div>
  </div></div>
              
          <div class="accordion-item col-lg-6">
    <h2 class="accordion-header card" id="flush-headingfour">
      <button class="accordion-button collapsed card-header text-white bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
        contre indication
      </button>
    </h2>
    <div id="flush-collapsefour" class="accordion-collapse collapse  " aria-labelledby="flush-headingfour" data-bs-parent="#accordionExample">
      <div class="accordion-body card-body">
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
          <div class="card ">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Education therapeutique</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Text</small></p>
            </div>
          </div>
        </div> 
      </div>
      
      </div></div>


      

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
    
</html>
@endsection
