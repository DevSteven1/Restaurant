<?php
include 'conexion.php';

$query = "SELECT * FROM usuarios";
$resultado = $CONEXION->query($query);

if ($resultado->num_rows > 0) {
    $usuarios = array();
    
    while($fila = $resultado->fetch_assoc()) {
        $usuarios[] = $fila;
    }  
    echo json_encode($usuarios);
} else {
    echo "No se encontraron usuarios";
}

$CONEXION->close();
?>
