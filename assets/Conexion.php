<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DATA_BASE = "restaurantephp";

$CONEXION = new mysqli($SERVER,$USER,$PASSWORD,$DATA_BASE);

if($CONEXION -> connect_error){
    die("Error de conexion: " . $CONEXION -> connect_error);
}
?>