<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../assets/usersHttp/IngresarUsuarios.php" method="post">
        <input type="text" name="nombre">
        <input type="text" name="apellido">
        <input type="text" name="direccion">
        <input type="number" name="telefono">
        <input type="numbre" name="rol">
        <input type="text" name="clave">
        <input type="submit">
    </form>
<?php
$response = file_get_contents('http://localhost/Restaurante/assets/usersHttp/ObtenerUsuarios.php');

$usuarios = json_decode($response, true);

if ($usuarios !== null) {
    foreach ($usuarios as $usuario) {
        echo "ID: " . $usuario['id'] . "<br>";
        echo "Nombre: " . $usuario['nombre'] . "<br>";
        echo "Telefono: " . $usuario['telefono'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Error al obtener los datos de los usuarios.";
}
?>

</body>
</html>