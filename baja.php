<?php

    include "conexion.php";
    $id = $_GET['id'];

    $conexion = conectarBaseDatos();

    $sql = $conexion->prepare("DELETE FROM registros WHERE IDregistros = ".$id);

    $sql->execute();

    echo "<script>window.location.href = 'reservaciones.php';</script>";


?>