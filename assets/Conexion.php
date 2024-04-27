<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DATA_BASE = "restaurantephp";

$CONEXION = new mysqli($SERVER,$USER,$PASSWORD,$DATA_BASE);

if($CONEXION -> connect_error){
    header("Location: /Restaurante/pages/errors/ErrorConexionDb.php");
}
?>