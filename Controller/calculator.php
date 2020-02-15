<?php

    require_once '../Model/Classes/Calc.php';

    $num1 = $_POST['numberOne'];
    $_SESSION[$num1] = $num1;
    $num2 = $_POST['numberTwo'];
    $operator = $_POST['operator'];

    $calculator = new calc($num1, $num2, $operator);

    $result = $calculator->calcmethode();

    header("Location: ../Public/index.php?result=$result&number1=$num1&number2=$num2");
