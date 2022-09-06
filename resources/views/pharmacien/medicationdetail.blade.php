@extends('layouts.topbar')
@section('content')
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">


</head>
        <body>
<style type="text/css">
  html, body {
  background: #FFFFE0
  font-family: Abel, Arial, Verdana, sans-serif;
}
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
.accordian .card .card-header i{
position: absolute;
  right:60px;
  top:20px;
  height:25px;
  width:25px;
  color:#0000FF;
  border-radius:100%;
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
.row{
    margin-top:40px;
    padding: 0 10px;
}

.clickable{
    cursor: pointer;   
}

.me {
  margin-top: -20px;
  font-size: 15px;
}
.meagain {
    display:inline-block;
    vertical-align: top;
    width: 100%;
    margin-bottom: 0;
} 
</style>

<div class="container">
<div class="tab-content" id="myTabContent">
                      <div class="card-body">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h5 class="card-title">{{$med->SP_NOMLONG}}</h5>
                    <p class="card-text"></p>
                    
                  </div>
                </div>
              </div>
</div>
            
            
<div class="container-fluid">
  <!-- contre indication -->
  <div class="row">
    <div class="col-lg-6">
      <div class="panel panel-danger ">
        <div class="panel-heading  ">
          <h4 class=" meagain">
          Contre Indications
          <div class="btn-group pull-right">  
          <a class="" style="margin-right: 10px;"  href="#collapseOne">
          <i class="glyphicon glyphicon-pencil"></i>
           </a>
           
            <i class=" glyphicon glyphicon-chevron-down  clickable me "></i>
            
          </div>
          </h4>
           </div>
        
          
        
        <div class="panel-body"  style="display:none;">
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

<!-- liste de recommendations -->
    <div class="col-lg-6">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h4 class="">Recommendations
          <span class="btn-group pull-right ">
          <a class="" style="margin-right: 10px;" href="#collapseOne">
          <i class="glyphicon glyphicon-pencil"></i>
           </a>
            <i class="glyphicon glyphicon-chevron-down clickable me"></i>
          </span>
          </h4>
          
        </div>
        <div class="panel-body " style="display:none;">
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
  </div>

  <div class="row">
<!-- modalite de prise -->
    <div class="col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">
        <h4 class=" meagain">
          Modalite de Prise
          <span class="btn-group pull-right ">
          <a class="" style="margin-right: 10px;" href="#collapseOne">
          <i class="glyphicon glyphicon-pencil"></i>
           </a>
            <i class="glyphicon glyphicon-chevron-down clickable me"></i>
          </span>
          </h4>
        </div>
        <div class="panel-body" style="display:none;">
        @if(!$pos)
                  <h5 class="card-title">Aucun</h5>
                  @else
                  <p class="card-text">{{$pos->ATR_TEXTE}}</p>
                  @endif
      </div>
      </div>
    </div>

    <!-- liste des effets secondaires -->
    <div class="col-md-6">
      <div class="panel panel-warning">
        <div class="panel-heading">
          <h4 class="">Effets Secondaires
          <span class="btn-group pull-right ">
          <a class="" style="margin-right: 10px;" href="#collapseOne">
          <i class="glyphicon glyphicon-pencil"></i>
           </a>
            <i class="glyphicon glyphicon-chevron-down clickable me"></i>
          </span>
          </h4>
          
        </div>
        <div class="panel-body " style="display:none;">
        @if(!$eis)
                  <h5 class="card-title">Aucun</h5>
                  @else
                  @foreach($eis as $ei)
                  <p class="card-text">{{$ei->FEITX1_TEXTE}}</p>
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

$(document).on('click', '.me.clickable', function(e){
    var $this = $(this);
  if(!$this.hasClass('panel-collapsed')) {
    $this.parents('.panel').find('.panel-body').slideDown();
    $this.addClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    
  } else {
    $this.parents('.panel').find('.panel-body').slideUp();
    $this.removeClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
    
  }
})



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
