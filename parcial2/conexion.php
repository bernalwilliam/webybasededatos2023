<?php

    $Server = "localhost";
    $user = "root";
    $password = "";

    //conexion
    $conexion = new mysql($Server, $user, $password);

    //revisar conexion
    if($conexion->connect_error){
        die("fallo la conexion" . $conexion->connect_error);
    }

?>