<?php

$edad = "";
$today = "";
$result = "";
$result1 = "";
$result3 = "";
$age = "";
$age1 = "";






if (
    isset($_POST["age"])

) {


    $edad = new DateTime($_POST["age"]);
    $today = new DateTime();
    $newDate = $edad->diff($today);

    $age = $newDate->y;




    if ($newDate->days >= 6570) {

        $result1 = "su edad es:";
        $result3 = "por tanto usted es mayor de edad";


    } else {

        $result1 = "su edad es:";
        $result3 = " por tanto usted es menor de edad";

    }



}



?>