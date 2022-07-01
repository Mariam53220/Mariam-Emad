<?php

session_start();

$errors = [];
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $RatingRadios = $_POST['RatingRadios'];
    $RatingRadios1 = $_POST['RatingRadios1'];
    $RatingRadios2 = $_POST['RatingRadios2'];
    $RatingRadios3 = $_POST['RatingRadios3'];
    $RatingRadios4 = $_POST['RatingRadios4'];

    if (empty($_POST['RatingRadios'])) {
        $errors['RatingRadios'] = "<div class='text-danger font-weight-bold'>please answer the first question</div>";
    }
    if (empty($_POST['RatingRadios1'])) {
        $errors['RatingRadios1'] = "<div class='text-danger font-weight-bold'>please answer the second question</div>";
    }
    if (empty($_POST['RatingRadios2'])) {
        $errors['RatingRadios2'] = "<div class='text-danger font-weight-bold'>please answer third question</div>";
    }
    if (empty($_POST['RatingRadios3'])) {
        $errors['RatingRadios3'] = "<div class='text-danger font-weight-bold'>please answer fourth questions</div>";
    }
    if (empty($_POST['RatingRadios4'])) {
        $errors['RatingRadios4'] = "<div class='text-danger font-weight-bold'>please answer fourth questions</div>";
    }

    if (empty($errors)) {

        header('location:result.php');
        die;
    }
}










?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="result.php" method="post">

        <div class="form" style="width: 60%;margin: auto;margin-top: 50px;">
            <table class="table">
                <thead class="thead-primary">
                    <tr style="background-color: powderblue ;font-weight: bold;">
                        <th scope="col" style="width: 50%;">Question</th>
                        <th scope="col" style="text-align: center;">Bad</th>
                        <th scope="col" style="text-align: center;">Good</th>
                        <th scope="col" style="text-align: center;">Very good</th>
                        <th scope="col" style="text-align: center;">Excelent</th>
                    </tr>
                </thead>
                <tbody>

                    <tr name="Q1">
                        <td>Are you satisfied with the level of cleanliness?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios" id="RatingRadios2" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios" id="RatingRadios2" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="RatingRadios" id="RatingRadios2" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios" id="RatingRadios2" value="excelent">
                            </div>
                        </td>


                    </tr>
                    <tr name="Q2">
                        <td>Are you satisfied with the service prices?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios1" id="QUE1" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios1" id="QUE1" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="RatingRadios1" id="QUE1" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios1" id="QUE1" value="excelent">
                            </div>
                        </td>


                    <tr name="Q3">
                        <td>Are you satisfied with the nurcing service?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios2" id="QUE2" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios2" id="QUE2" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="RatingRadios2" id="QUE2" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios2" id="QUE2" value="excelent">
                            </div>
                        </td>

                    </tr>
                    <tr name="Q4">
                        <td>Are you satisfied with the level of doctor?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios3" id="QUE3" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios3" id="QUE3" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="RatingRadios3" id="QUE3" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios3" id="QUE3" value="excelent">
                            </div>
                        </td>

                    </tr>
                    <tr name="Q5">
                        <td>Are you satisfied with the level of the calmness in the hospital?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios4" id="QUE4" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios4" id="QUE4" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="RatingRadios4" id="QUE4" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="RatingRadios4" id="QUE4" value="excelent">
                            </div>
                        </td>

                    </tr>




                </tbody>

            </table>
            <div><?= $errors['RatingRadios'] ?? "" ?></div>
            <div><?= $errors['RatingRadios1'] ?? "" ?></div>
            <div><?= $errors['RatingRadios2'] ?? "" ?></div>
            <div><?= $errors['RatingRadios3'] ?? "" ?></div>
            <div><?= $errors['RatingRadios4'] ?? "" ?></div>

            <div>
                <button type="submit" class="btn btn-outline-info " style="margin-top: 20px;width: 100%;">Result</button>

            </div>


    </form>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</body>

</html>