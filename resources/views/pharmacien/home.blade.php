@extends('layouts.app')
@section('content')
<body>
          <style type="text/css">
            body{
              background-image:url(/image/medicament.jpg);
            }
            body .btnCenter{

              justify-content: center;
              align-items: center;
              display: flex;
              height: 31vh;
            }
            .btn1{
              background: none;
              width: 250px;
              height: 80px;
              border:2px solid #a6a6a6;
              font-size: 20px;
              font-weight: bold;
              color: #878787;
              margin-left: 8px;
              transition: .4s linear;
              position: relative;
              cursor: pointer;
            }
            .btn1 a{
                text-decoration: none;
                color: #878787;
              }
            .btn1 a:hover{
              color: white;
            }
            .btn1::before{
              content: "";
              position: absolute;
              width: 0px;
              height: 78px;
              top: 0px;
              left: 0px;
              background-color: #a6a6a6;
              z-index: -1;
              transition: .4s linear;
              }
              .btn1:hover::before{
                width: 248px;
              }
          </style>
           
      <div class="btnCenter">
      <button class="btn1"><a href="/pharmacien/prescriptionanalysis">analyse de prescription</a></button>
      <button class="btn1"><a href="/pharmacien/therapeuticrec">Recommendation therapeutique</a></button>
      <button class="btn1"><a href="/pharmacien/rechercheMed">Medicament</a></button>
      </div>
  </body>
  
   @endsection
