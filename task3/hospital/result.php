<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $RatingRadios = $_POST['RatingRadios'];
    $RatingRadios1 = $_POST['RatingRadios1'];
    $RatingRadios2 = $_POST['RatingRadios2'];
    $RatingRadios3 = $_POST['RatingRadios3'];
    $RatingRadios4 = $_POST['RatingRadios4'];
    $total = '';
    $final = '';


    switch ($RatingRadios) {
        case 'bad':
            $total = 0;
            break;
        case 'good':
            $total = 3;
            break;
        case 'verygood':
            $total = 5;
            break;
        case 'excelent':
            $total = 10;
            break;
    }
    switch ($RatingRadios1) {
        case 'bad':
            $total += 0;
            break;
        case 'good':
            $total += 3;
            break;
        case 'verygood':
            $total += 5;
            break;
        case 'excelent':
            $total += 10;
            break;
    }
    switch ($RatingRadios2) {
        case 'bad':
            $total += 0;
            break;
        case 'good':
            $total += 3;
            break;
        case 'verygood':
            $total += 5;
            break;
        case 'excelent':
            $total += 10;
            break;
    }
    switch ($RatingRadios3) {
        case 'bad':
            $total += 0;
            break;
        case 'good':
            $total += 3;
            break;
        case 'verygood':
            $total += 5;
            break;
        case 'excelent':
            $total += 10;
            break;
    }

    switch ($RatingRadios4) {
        case 'bad':
            $total += 0;
            break;
        case 'good':
            $total += 3;
            break;
        case 'verygood':
            $total += 5;
            break;
        case 'excelent':
            $total += 10;
            break;
    }



    if ($total <= 25) {
        $totalFinal = "bad";
    } else {
        $totalFinal = "good";
    }


    switch ($totalFinal) {
        case 'bad':
            $alert = "Please Contact With This Patient To Find out The Reason Of Bad Evaluation " . $Num = $_SESSION['number'];;
            break;

        default:
            $alert = "Thanks";
            break;
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

    <div class="form" style="width: 60%; margin: auto; margin-top: 50px;">
        <table class="table">
            <thead class="thead-dark">
                <tr style=" background-color: powderblue ;font-weight: bold;">
                    <th scope="col" style="width: 80%;"> Question</th>
                    <th scope="col" style="text-align: center;"> Review</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Are you satisfied with the level of cleanliness?</td>
                    <td style="text-align: center;"><?php if (isset($RatingRadios)) echo $RatingRadios ?></td>
                </tr>
                <tr>
                    <td>Are you satisfied with the service prices?</td>
                    <td style="text-align: center;"><?php if (isset($RatingRadios1)) echo $RatingRadios1 ?></td>
                </tr>
                <tr>
                    <td>Are you satisfied with the nurcing service?</td>
                    <td style="text-align: center;"><?php if (isset($RatingRadios2)) echo $RatingRadios2 ?></td>
                </tr>
                <tr>
                    <td>Are you satisfied with the level of doctor?</td>
                    <td style="text-align: center;"><?php if (isset($RatingRadios3)) echo $RatingRadios3 ?></td>
                </tr>
                <tr>
                    <td>Are you satisfied with the level of the calmness in the hospital?</td>
                    <td style="text-align: center;"><?php if (isset($RatingRadios4)) echo $RatingRadios4 ?></td>
                </tr>





            </tbody>

            <tfoot>
                <tr style="background-color: powderblue ;font-weight: bold;">
                    <td>Final Review</td>
                    <td style="text-align: center;"><?php if (isset($totalFinal)) echo $totalFinal ?></td>
                </tr>


            </tfoot>

        </table>
        <div style=" width: 60%; margin: auto; text-align: center;"><?php if (isset($alert)) echo $alert ?></div>






        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</body>

</html>