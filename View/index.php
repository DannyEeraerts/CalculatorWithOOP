<?php
/**
 * Created by Danny Eeraerts
 * Date: 2019-12-12
 * Time: 09:31
 */


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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">

    <header>
        <div class="row  mt-3 mb-5">
            <div class="col_12 mx-auto">
                <h1 class="p-3 float-left">Calculator</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="row">
            <div class="offset-1 col-10 offset-md-2 col-md-8 offset-lg-3 col-lg-6 border-top border-right border-left p-3 bg-light rounded">
                <h4 class="py-4 px-3 mt-3 border bg-white">result:</h4>
            </div>
        </div>

        <div class="row">
            <div class="offset-1 col-10 offset-md-2 col-md-8 offset-lg-3 col-lg-6 border-bottom border-right border-left p-3 bg-light rounded">

            <form>
                <div class="form-group">
                    <label for="decimal">Number of decimals</label>
                    <input type="number" name="decimal" class="form-control" value="2">
                </div>
                <div class="form-group">
                    <label for="numberOne">First number:</label>
                    <input type="number" name="numberOne" class="form-control" value="1.00">
                </div>
                <div class="form-group">
                    <label for="numberTwo">Second number:</label>
                    <input type="number" name="numberTwo" class="form-control" value="1.00">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Choose arithmetic operator</label>
                    <select class="custom-select"">
                        <option>Addition: +</option>
                        <option>Subtraction: -</option>
                        <option>Multiplication: *</option>
                        <option>Division: *</option>
                        <option>Modulo:  %</option>
                        <option>Square: n&#178;</option>
                        <option>Square root: &radic;</option>
                        <option>Exponentation: **</option>
                        <option>Faculty: !</option>
                    </select>
                </div>
                <div class = "row">
                    <div class = mx-auto>
                        <input type="submit" value="Calculate" class ="btn btn-info bg p-2 btn-lg my-3">
                    </div>
                </div>

            </form>
        </div>

    </main>

    <footer class="container-fluid bg-light fixed-bottom row d-flex align-items-center  py-3 mt-2 px-3 border">

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
