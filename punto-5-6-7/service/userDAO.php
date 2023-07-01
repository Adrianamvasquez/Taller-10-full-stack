<?php
include "connection.php"; // llamar la conexion 

function getAllUsers()
{

    return mysqli_query(CONNECTION, "SELECT * FROM usuarios");

}



//print_r(mysqli_fetch_all($quey, MYSQLI_ASSOC));  mostrar en pantalla





?>