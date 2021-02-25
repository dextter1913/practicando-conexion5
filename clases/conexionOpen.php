<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "colegio";

    $table = "usuarios";
    $table2 = "estudiante";

    error_reporting(0);
    $conexion = new mysqli($host, $user, $pass, $database);

    if ($conexion->connect_errno) {
        echo "lo sentimos, el servicio no esta disponible actuamente";
    }
?>