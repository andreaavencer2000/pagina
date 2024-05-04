<?php

include"conexion.php";
$conexion=conectarBaseDatos();

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$sql = $conexion->prepare("INSERT INTO registros (nombres, apellidos, correo) VALUES ('".$nombre."', '".$apellidos."', '".$correo."')");
$sql->execute();



echo "<script>window.location.href = 'reservaciones.php';</script>";
?>