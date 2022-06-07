



<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>




  <div class="container">
      <div class="row">
          <div class="col-12 text-center text-primary mt-5">
              <h4>
                  Find The Max Number
              </h4>
          </div>
         <div class="col-4 offset-4 mt-5">

         <form class="col-4" name="max" method="post">
             <div class= "form-group">
               <label for="num1"> Enter First Number </label>
               <input type="num" name="num1" id="Num1" class="form-group"  >
             </div>

             <div class= "form-group">
               <label for="num2"> Enter Second Number </label>
               <input type="num" name="num2" id="Num2" class="form-group" >
             </div>

             <div class= "form-group">
               <label for="num3"> Enter Third Number </label>
               <input type="num" name="num3" id="Num3" class="form-group"  >
             </div>
         
          
        
          <button class="btn btn-outline-primary btn-sm" type="submit" value="Find" name="find"> Calc </button>


          </form>
         <?php
          

               $num1= $_POST['num1'];
               $num2= $_POST['num2'];
               $num3= $_POST['num3'];

               if($num1> $num2 && $num1> $num3){
                   echo $num1 . " " . "is the MAX.";
                   } elseif ($num2> $num3){
                   echo $num2 ." " . "is the MAX.";
                     }else {
                  echo $num3. " " . "is the MAX.";
                     }
                  

             ?>
          


           



         </div>
          






      </div>
  </div>





   



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>