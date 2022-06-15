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
                    SuperMarket Helper
                </h4>
            </div>

            <div class="col-4 offset-4  mt-5">
                <form method="POST">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="name" id="Name" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="products">Number Of Products</label>
                        <input type="number" name="products" id="Products" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                        <label for="City">City</label>
                        <select name="city" id="City" class="form-control">
                            <option value="cairo">Cairo</option>
                            <option value="alex">Alex</option>
                            <option value="Giza">Giza</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <button class=" btn btn-outline-primary form-control"> Submit </button>
                </form>

                <table>

                <thead>
                    <th>Name</th>
                    <th>price</th>
                    <th>quantity</th>
                </thead>

                <tbody>

                <?php 
                if (isset($_POST["varieties"])){
                    for ($i =1; $i <= $_POST["varieties"]; $i++) { ?>

                        <tr>
                            <td><input type="text">product name</td>
                            <td><input type="number">price</td>
                            <td><input type="number">quantity</td>
                        </tr>
                    <?php  }
                         } ?> 

                </tbody></table>
                <!-- <?php 
                // if (isset($_POST["receipt"])){ ?>
                <table >

                </table>


                }
                
                
                
                ?> -->

                <?php 

                if ($_POST) {
                    $name = $_POST["name"];
                    $name = $_POST["city"];
                    $name = $_POST["varieties"];



                    switch ($_POST['city']) {
                        case 'cairo':
                            $delivery = 0;
                            break;
                        case 'alex':
                            $delivery = 50;
                            break;

                        case 'giza':
                                $delivery = 30;
                                break;
                        default:
                            $delivery = 100;
                            break;
                    }

                    if ($_POST["price"] < 1000 ) {
                        $discount = 0;
                    } elseif ($_POST["price"] < 3000) {
                        $discount = 0.1;
                    }elseif ($_POST["price"] < 4500) {
                        $discount = 0.15;
                    }else {
                        $discount= 0.2;
                    }


                }
                

                ?>




    </div>
  </div>












  </body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>