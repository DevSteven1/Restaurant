<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$response = file_get_contents('http://localhost/Restaurante/assets/getUsuarios.php');

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