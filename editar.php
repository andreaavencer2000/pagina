<?php


    include "conexion.php";
    $conexion = conectarBaseDatos();


    if(isset($_GET['id'])) {
        $id_registro = $_GET['id'];
        
        
        $sql = $conexion->prepare("SELECT * FROM registros WHERE iDregistros = ?");
        $sql->bind_param("i", $id_registro);
        $sql->execute();
        $result = $sql->get_result();
        $registro = $result->fetch_assoc();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        
        
        $sql_update = $conexion->prepare("UPDATE registros SET nombres=?, apellidos=?, correo=? WHERE iDregistros=?");
        $sql_update->bind_param("sssi", $nombres, $apellidos, $correo, $id_registro);
        $sql_update->execute();
        echo "<script>window.location.href = 'reservaciones.php';</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Registro</title>
</head>
<body>
    <h2>Editar Registro</h2>
    <form method="post" action="">
        <label for="nombres">Nombres:</label>
        <input type="text" name="nombres" value="<?php echo isset($registro['nombres']) ? $registro['nombres'] : ''; ?>"><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" value="<?php echo isset($registro['apellidos']) ? $registro['apellidos'] : ''; ?>"><br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" value="<?php echo isset($registro['correo']) ? $registro['correo'] : ''; ?>"><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>

<?php

$conexion->close();
?>

