<?php
require_once("Conexion.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["id"];
    $clave = $_POST["clave"];

    $query = "SELECT * FROM usuarios WHERE id='$id' AND clave='$clave'";
    $resultado = $CONEXION->query($query);

    if($resultado->num_rows == 1){
        $usuario = $resultado->fetch_assoc();

        session_start();
        $_SESSION["rol"] = $usuario["rol"];

        if($usuario["rol"] == 0){
            header("Location: /Restaurante/pages/admin/Administrador.php");
        }elseif($usuario["rol"] == 1){
            header("Location: /Restaurante/pages/MenuCliente.php");
        }elseif($usuario["rol"] == 2){
            header("Location: /Restaurante/pages/MenuCajero.php");
        }elseif($usuario["rol"] == 3){
            header("Location: /Restaurante/pages/MenuChef.php");
        }
        exit;
    }else{
        header("Location: /Restaurante");
    }
}

$CONEXION->close();
?>