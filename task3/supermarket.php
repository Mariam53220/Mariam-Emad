<!doctype html>
<html lang="en">

<head>
    <title>Super market</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="text-align: center;">
    <form method="post">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center text-primary mt-5">
                    <h1 style="color:primary;">Supermarket Helper</h1>
                </div>
                <form action="" method="POST">
                    <div class="col-4 offset-4  mt-5">
                        <div class="form-group">
                            <input type="text" name="name" id="Name" class=" form-control" value="<?= $_POST["name"] ?? "" ?>" placeholder="Name" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <input type="number" name="varaieties" id="varaieties" class=" form-control" value="<?= $_POST["varaieties"] ?? "" ?>" placeholder="Number Of Varieties" aria-describedby="helpId">
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <select name="city" id="City" class="form-control ">
                                <option <?= (isset($_POST["city"]) && $_POST["city"] == "cairo") ? 'selected' : ' ' ?> value=" cairo">Cairo</option>
                                <option <?= (isset($_POST["city"]) && $_POST["city"] == "giza") ? 'selected' : ' ' ?> value="giza">Giza</option>
                                <option <?= (isset($_POST["city"]) && $_POST["city"] == "alex") ? 'selected' : ' ' ?> value="alex">Alex</option>
                                <option <?= (isset($_POST["city"]) && $_POST["city"] == "other") ? 'selected' : ' ' ?> value="others">Others</option>
                            </select>
                        </div>
                        <br><br>

                        <button type="submit" class="btn btn-outline-primary center" name="submit"> Submit </button>

                        <?php
                        if (isset($_POST["submit"])) { ?>
                            <table class="table mt-5">

                                <thead class="table-primary">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Product Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($_POST["varaieties"])) {
                                        for ($i = 0; $i < $_POST["varaieties"]; $i++) { ?>
                                            <tr>
                                                <td><input type="text" name="productname<?php echo $i ?>" class="form-control" value=""></td>
                                                <td><input type="text" name="price<?php echo $i ?>" class="form-control" value=""></td>
                                                <td><input type="text" name="quantity<?php echo $i ?>" class="form-control" value=""></td>
                                            </tr>
                                    <?php
                                        }
                                    } ?>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-outline-primary center" name="invoice" value="">Recipt</button>
                        <?php } ?>

                        <?php
                        if (isset($_POST["invoice"])) { ?>
                            <table class="table mt-5">
                                <thead class="table-primary">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Product Quantity</th>
                                        <th> total </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $result = 0;
                                    for ($i = 0; $i < $_POST["varaieties"]; $i++) {
                                        $total = $_POST["quantity" . $i] * $_POST["price" . $i];
                                        $result += $total;
                                    ?>
                                        <tr>
                                            <td><?= $_POST["productname" . $i] ?></td>
                                            <td><?= $_POST["price" . $i] ?></td>
                                            <td><?= $_POST["quantity" . $i] ?></td>
                                            <td><?= $total ?></td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                            <?php
                            switch ($_POST["city"]) {
                                case "cairo";
                                    $delivery = 0;
                                    break;
                                case "giza";
                                    $delivery = 30;
                                    break;
                                case "alex";
                                    $delivery = 50;
                                    break;
                                case "other";
                                    $delivery = 100;
                                    break;
                            }

                            $totalbefor = $result;
                            if ($totalbefor < 1000) {
                                $discount = 0;
                            } elseif ($totalbefor >= 1000 && $totalbefor < 3000) {
                                $discount = 0.1;
                            } elseif ($totalbefor >= 3000 && $totalbefor < 4500) {
                                $discount = 0.15;
                            } elseif ($totalbefor >= 4500) {
                                $discount = 0.2;
                            }
                            $discountvalue = $totalbefor * $discount;
                            $totalafter = $totalbefor - $discountvalue;
                            $amount = $totalafter + $delivery;
                            ?>
                            <table class="tabel mt-3">
                                <tr>
                                    <td>User Name</td>
                                    <td><?php echo $_POST["name"] ?></td>
                                </tr>
                                <br>
                                <tr>
                                    <td>City</td>
                                    <td><?= $_POST["city"] ?></td>
                                </tr>
                                <br>
                                <tr>
                                    <td>Total</td>
                                    <td><?= $totalbefor ?></td>
                                </tr>
                                <br>
                                <tr>
                                    <td>Discount</td>
                                    <td><?= $discountvalue ?></td>
                                </tr>
                                <br>
                                <tr>
                                    <td>Total after discount</td>
                                    <td><?= $totalafter ?></td>
                                </tr>
                                <br>
                                <tr>
                                    <td>Delivery</td>
                                    <td><?= $delivery ?></td>
                                </tr>
                                <td class="h4 text-primary">Amount</td>
                                <td class="h4 text-primary"><?= $amount ?></td>

                            </table>
                        <?php }
                        ?>



                </form>

















                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>