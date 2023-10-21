<?php

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["RFC"]) || empty($_POST["contraseña"])) {
        echo '<div class=" alert alert-danger">LOS CAMPOS ESTAN VACIOS</div>';
    } else {
        $usuario=$_POST ["RFC"];
        $clave=$_POST ["contraseña"];
        $sql = $conexion->query("SELECT * FROM usuario WHERE RFC = '$usuario' AND contraseña = '$clave' ");
        if ($datos=$sql->fetch_object()){
            header("location:inicio.php");
        } else{
            echo '<div class=" alert alert-danger">Acceso denegado</div>';
        }
    }
}

?>