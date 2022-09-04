@extends('layouts.topbar')
@section('content')
<!DOCTYPE html>
<html>
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- for icons plus minus font awesome-->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- CSS only -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">                
      </head>
        <body>
<style type="text/css">
  body{
  margin:0;
  font-family: sans-serif;
}

*{
  box-sizing: border-box;
}

.accordian{
  max-width:700px;
  display: block;
  margin:100px auto;
}

.accordian .card{
  box-shadow: 0px 0px 20px #d4d4d4;
  margin-bottom:20px;
  float: left;
  width: 100%;
}
.accordian .card .card-header h3{
  cursor: pointer;
  color:#ffffff;
  position: relative;
  margin:0;
  padding:5px 10px;

}
.accordian .card .card-header {
  position: relative;
}
.accordian .card .card-header span{
  position: absolute;
  right:20px;
  top:20px;
  height:25px;
  width:25px;
  color:#0000FF;
  background-color: #ffffff;
  border-radius:50%;
  text-align: center;
  line-height:25px;
  font-size:13px;
}

.accordian .card .card-body{
  padding:20px;
}
.accordian .card .card-body{
  display: none;
}
/*open one card by default*/
.accordian .card:nth-child(1) .card-body{
 display: block;
}
.accordian .card .card-body p{
  font-size: 15px;
  line-height: 24px;
  color:#444444;
  margin:0px;
}








</style>
            
            
              <section class="content-header">
                <div class="container-fluid" >
                  <div class="row justify-content-md-center mb-2">
                    <div class="col-md-6" style=" padding-bottom: 19px; padding-top: 19px;">
                      <h1 class="text-center text-secondary" >Information sur le médicament</h1>
                    </div>
                    
                  </div>
                </div><!-- /.container-fluid -->
              </section>
             


       



<!-- jqurey code -->









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
           
            

             

              
              <!--details-->





  <div class="accordian">
      <div class="card">
          <div class="card-header" style=" background-color: rgba(252, 118, 8, 0.89);">
             <h3>Modalité de prise</h3>
             <span class="fa fa-minus"></span>
          </div>
          <div class="card-body active">
                @if(!$pos)
                  <h5 class="card-title">Aucun</h5>
                  @else
                  <p class="card-text">{{$pos->ATR_TEXTE}}</p>
                  @endif
          </div>
      </div>

      <div class="card">
          <div class="card-header" style=" background-color:#07461a;">
             <h3>Recommendation</h3>
             <span class="fa fa-plus"></span>
          </div>
          <div class="card-body">
             
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
      <div class="card">
          <div class="card-header bg-warning">
             <h3>effet secondaire</h3>
             <span class="fa fa-plus"></span>
          </div>
          <div class="card-body">
               @if(!$eis)
                  <h5 class="card-title">Aucun</h5>
                  @else
                  @foreach($eis as $ei)
                  <p class="card-text">{{$ei->FEITX1_TEXTE}}</p>
                  @endforeach
                  @endif
          </div>
      </div>
      <div class="card">
          <div class="card-header bg-danger">
             <h3>contre indication</h3>
             <span class="fa fa-plus"></span>
          </div>
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

             


      

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){
    $(".card-header").click(function(){
       // self clicking close
       if($(this).next(".card-body").hasClass("active")){
         $(this).next(".card-body").removeClass("active").slideUp()
        $(this).children("span").removeClass("fa-minus").addClass("fa-plus")  
       }
     else{
     $(".card .card-body").removeClass("active").slideUp()
     $(".card .card-header span").removeClass("fa-minus").addClass("fa-plus");
       $(this).next(".card-body").addClass("active").slideDown()
        $(this).children("span").removeClass("fa-plus").addClass("fa-minus")
      }
    })
  })

</script>

        </body>
    
</html>
@endsection
