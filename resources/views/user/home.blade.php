<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      </head>
        <body>
          <style type="text/css">
            body{
              background-image:url(/image/medicament.jpg);
            }
            body .btnCenter{

              justify-content: center;
              align-items: center;
              display: flex;
              height: 30vh;
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Pharm-project</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                      <button class="btn btn-outline-primary" type="submit">sign out</button>
                    
                  </div>
                </div>
              </nav>
      <div class="btnCenter">
      <button class="btn1"><a href="/prescriptionanalysis">analyse de prescription</a></button>
      <button class="btn1"><a href="/therapeuticrec">recherche par pathologie</a></button>
      </div>
    
    
</html>
