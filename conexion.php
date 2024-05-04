<?php
function conectarBaseDatos() {
    // Datos de conexión a la base de datos
    $servername = "localhost"; // Cambia localhost por la dirección del servidor de tu base de datos si es diferente
    $username = "root"; // Usuario root
    $password = ""; // Contraseña vacía
    $database = "trabajo"; // Cambia nombre_base_de_datos por el nombre de tu base de datos

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    } 

    // Retornar el objeto de conexión
    return $conn;
}
?>