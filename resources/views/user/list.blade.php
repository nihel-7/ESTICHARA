<!DOCTYPE html>
<html>
    <head>
       
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
      </head>
        <body>
        
        <section class="contact-page">
        <div class="container">  
        <form  method="post"  action="list">
        {{ csrf_field() }}
              <input class="form-control" id="search" name="search" type="text">
    
        </form>
</section>



</body>
          
    
</html>