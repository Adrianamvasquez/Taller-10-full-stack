<?php
const CONNECTION = new mysqli("localhost", "root", "", "mi_proyecto");
// siempre se crea una constante ya que nunca cambia; 
//se  crea un objeto, digita el nombre  del servidor,usario de conexion  de datos , "" para contraseña el nombre de la base de datos

$quey = mysqli_query(CONNECTION, "SELECT * FROM usuarios");

print_r(mysqli_fetch_all($quey, MYSQLI_ASSOC));


?>