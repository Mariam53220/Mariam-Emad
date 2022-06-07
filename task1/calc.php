
<?php
$FirstNumber = $_POST['FirstNumber'];
$SecondNumber = $_POST['SecondNumber'];
$operator = $_POST['operator'];
$CalculatorResult = '';
if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
switch ($operator) {
case "Sum":
$CalculatorResult = $FirstNumber + $SecondNumber;
break;
case "Subtraction":
$CalculatorResult = $FirstNumber - $SecondNumber;
break;
case "Multiplication":
$CalculatorResult = $FirstNumber * $SecondNumber;
break;
case "Division":
$CalculatorResult = $FirstNumber / $SecondNumber;
}
}
?> 


<!doctype html>
<html lang="en">
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  
   


   

<div id="page-wrap">

<div class="col-6 offset-3">
<h1>Enter Your Numbers</h1>
<form method="post">
<p>
<input type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber; ?>" /> <b>First Number</b>
</p>
<p>
<input type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" /> <b>Second Number</b>
</p>
<p>
<input readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>"> <b>CalculatorResult</b>
</p>
<input type="submit" name="operator" value="Sum" />
<input type="submit" name="operator" value="Subtraction" />
<input type="submit" name="operator" value="Multiplication" />
<input type="submit" name="operator" value="Division" />
</form>
</div>
</div> 



   

    </body> 
 </html>

    



    




      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>