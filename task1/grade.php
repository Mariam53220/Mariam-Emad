
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
              <div class="col-12 my-5">
              <div class="h1 text-center text-dark">
                   Calculate Your Grades
                </div> 
              </div>
              <div class="col-6 offset-3">
                  <form method="post">
                    <div class="form-group">
                        <label for="Number"> Enter your grade of Physics</label>
                        <input type="number" name="p" id="physics" class="form-control" placeholder="" aria-describedby="helpId">
                        
                    </div>

                    <div class="form-group">
                        <label for="Number"> Enter your grade of Chemistry</label>
                        <input type="number" name="ch" id="chemistry" class="form-control" placeholder="" aria-describedby="helpId">
                        
                    </div>

                    <div class="form-group">
                        <label for="Number"> Enter your grade of Biology</label>
                        <input type="number" name="b" id="biology" class="form-control" placeholder="" aria-describedby="helpId">
                        
                    </div>

                    <div class="form-group">
                        <label for="Number"> Enter your grade of Maths</label>
                        <input type="number" name="m" id="maths" class="form-control" placeholder="" aria-describedby="helpId">
                        
                    </div>

                    <div class="form-group">
                        <label for="Number"> Enter your grade of Computer</label>
                        <input type="number" name="c" id="computer" class="form-control" placeholder="" aria-describedby="helpId">
                        
                    </div>

                    <button class="btn btn-outline-primary btn-sm"> Show my Grades</button>
                  </form>

                  <?php 

                  

                  $p = $_POST['p'];
                  $ch = $_POST['ch'];
                  $b = $_POST['b'];
                  $m = $_POST['m'];
                  $c = $_POST['c'];

                  $total = $p + $ch + $b + $m + $c;
                  $average = $total / 5.0 ;
                  $precentage = ($total / 500.00 )* 100;

                  if ($average >= 90) {
                      $grade = 'A';
                  }elseif ($average >= 80 && $average < 90) {
                    $grade = 'B';
                  }elseif ($average >= 70 && $average < 80) {
                    $grade = 'C';}
                    elseif ($average >= 60 && $average <70 ){
                        $grade = 'D';
                    }elseif ($average >= 40 && $average <60 ){
                        $grade = 'E';
                    }else {
                        $grade = 'F';
                    }

                    echo "Total marks = " . $total . " ";
                    echo "Average of marks = " . $average . " ";
                    echo "Precentage number = " . $precentage . "%" . " ";
                    echo "The Grade is: " . $grade . " ";
                
                  

                  
                  
                  
                  ?>
              </div>
  </body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>