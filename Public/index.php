<?php
/**
 * Created by Danny Eeraerts
 * Date: 2019-12-12
 * Time: 09:31
 */

if ($_SERVER['QUERY_STRING']==''){
    $result = 0;
    $num1 = 0;
    $num2 = 0;
} else {
    $result = $_GET['result'];
    $num1 = $_GET['number1'];
    $num2 = $_GET['number2'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content= "">
    <meta name ="keywords" content = "OOP, PHP, MVC" />
    <meta name ="author" content = "Danny Eeraerts" />

    <!-- Bootstrap CSS -->

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">

    <header>
        <div class="row mt-2 mt-lg-3 mb-2 mb-lg-5">
            <div class="col_12 mx-auto">
                <h1 class="p-3 float-left">Calculator</h1>
            </div>
        </div>
    </header>



    <main>
        <div class="row">
            <div class="offset-1 col-10 offset-md-2 col-md-8 offset-lg-3 col-lg-6 border-top border-right border-left pt-4 px-5 pb-5 bg-light rounded">
                <h4 class="py-4 px-3 mt-3 border border-info bg-white">result:<span class="float-right"><?= $result?></span</h4>
            </div>
        </div>



        <div class="row">
            <div class="offset-1 col-10 offset-md-2 col-md-8 offset-lg-3 col-lg-6 border-bottom border-right border-left pb-4 pb-2 px-5 bg-light rounded">

            <form action="../Controller/calculator.php" method="POST">

                <div class="form-group">
                    <label for="numberOneInput">First number:</label>
                    <input type="number" name="numberOne" id="numberOneInput" class="form-control" step="any" value ="<?= $num1?>">
                </div>
                <div class="form-group">
                    <label for="numberTwoInput">Second number:</label>
                    <input type="number" name="numberTwo" id="numberTwoInput" class="form-control" step="any" value ="<?= $num2?>">
                </div>
                <div class="form-group">
                    <label for="operatorInput">Choose arithmetic operator</label>
                    <select class="custom-select" name="operator" id="operatorInput">
                        <option value="add">+</option>
                        <option value="sub">-</option>
                        <option value="multi">X</option>
                        <option value="div">/</option>
                        <option value="mod">%</option>
                        <option value="square">n&#178;</option>
                        <option value="root">&radic;</option>
                        <option value="exponent">n&#8319;</option>
                        <option value="faculty">!</option>
                    </select>
                </div>
                <div class = "row">

                    <div class="col-12">
                        <button type="submit" class ="btn-block btn-info bg dropdown-toggle p-2 btn-lg my-3">Calculate</button>
                    </div>
                </div>

            </form>
        </div>

    </main>

    <footer class="container-fluid bg-light fixed-bottom row d-flex align-items-center  py-3 mt-2 px-3 border ml-0">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left px-0">
            <p class="mb-0 ml-3">&copy;&nbsp;<?= date("Y")." "; ?><span class="text-danger">ED</span>web&photo Studio</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right px-0">
            <a href="#" class ="text-info mr-4">disclaimer</a>
            <a href="#" class ="text-info mr-4">privacy policy</a>
            <a href="#" class ="text-info mr-2">cookie policy</a>
        </div>
    </footer>

</div>

</body>

</html>
