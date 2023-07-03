<?php



$result1 = "";
$result3 = "";
$age = "";
$name = "";






if (
    isset($_POST["age"])
    && isset($_POST["name"])

) {


    $edad = new DateTime($_POST["age"]);
    $today = new DateTime();
    $newDate = $edad->diff($today);
    $name = ($_POST["name"]);

    $age = $newDate->y;




    if ($newDate->days >= 6574) {

        $result1 = "su edad es:";
        $result3 = "por tanto usted es mayor de edad";


    } else {

        $result1 = "su edad es:";
        $result3 = " por tanto usted es menor de edad";

    }



}



?>