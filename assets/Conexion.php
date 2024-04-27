<?php
$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$DATA_BASE = "restaurantephp";

try {
    $CONEXION = new mysqli($SERVER, $USER, $PASSWORD, $DATA_BASE);
} catch (mysqli_sql_exception $e) {
    header("Location: /Restaurante/pages/errors/ErrorConexionDb.php");
    exit();
}
?>
