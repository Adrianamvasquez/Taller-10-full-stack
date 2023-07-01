<?php


$totalPrice = 0;

if (
    isset($_POST["first_number"]) && //si el usuario ya diligencio ese dato
    isset($_POST["second_number"]) &&
    isset($_POST["operation_one"])
) {


    $firstNumber = intval($_POST["first_number"]);
    $secondNumber = intval($_POST["second_number"]);
    $operation = $_POST["operation_one"];


    switch ($operation) {
        case "Suma":
            $totalPrice = $firstNumber + $secondNumber;
            break;

        case "Resta":
            $totalPrice = $firstNumber - $secondNumber;
            break;

        case "Multiplicacion":
            $totalPrice = $firstNumber * $secondNumber;
            break;

        case "Division":
            $totalPrice = $firstNumber / $secondNumber;
            break;
        default:
            0;

    }


}



?>