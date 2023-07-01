<?php


$result = "";
$nameName = "";


if (
    isset($_POST["name_name"]) &&
    isset($_POST["age_age"])
) {

    $nameName = ($_POST["name_name"]);
    $ageAge = intval($_POST["age_age"]); // post trae lo que se guardo en name del formulario



    if ($ageAge >= 18) {


        $result = "Usted es mayor de edad";

    } else {

        $result = "Usted es menor de edad";


    }




}

?>