<?php 

if ($_POST) {


    $Name = $_POST['name'];
    $Amount = $_POST['amount'];
    $Years = $_POST ['years'];



    if ($Years <= 3) {
        $interest = $Amount * 0.1 * $Years ; 
    } else {
        $interest = $Amount * 0.15 * $Years; 
    }

    $total = $Amount + $interest;
    $monthly = $total / ($Years *12 ) ;


}

?>

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
  <body style= "text-align: center;">
  
  <h1 style="color : primary;"> Bank Account </h1>

  <form method="post"> 

   <label for="Number"> Enter your Name</label>
   <input type="text" name="name" placeholder="Name" value="<?= $_POST["name"] ?? " " ?>" > <br>
   <label for="Number"> Enter your Loan </label>
   <input type="text" name="amount" placeholder="Amount" value="<?= $_POST["amount"] ?? " " ?>" > <br>
   <label for="Number"> Enter your number of years</label>
   <input type="text" name="years" placeholder="Years Of Loan" value="<?= $_POST["years"] ?? " " ?>" > <br>
   <button type="submit" class="btn btn-outline-primary btn-md"> Calculate </button>
   <br><br>


   <p>Name: <?= $Name ?? " " ?></p>
   <p>Interest Rate= : <?= $interest ?? " " ?></p>
   <p>Loan After Interest= <?= $total ?? " " ?></p>
   <p>Monthly: <?= $monthly ?? " " ?></p>
   



  </form>









  </body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>