<?php
include "../Conexion.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$rol = $_POST["rol"];
$clave = $_POST["clave"];

$query = "INSERT INTO usuarios(nombre,apellido,direccion,telefono,rol,clave) 
    VALUES ('$nombre', '$apellido', '$direccion', '$telefono', '$rol', '$clave')";

if ($CONEXION->query($query) === TRUE) {
    echo "Datos Guardados";
} else {
    echo "Error al guardar los datos";
}

$CONEXION->close();
