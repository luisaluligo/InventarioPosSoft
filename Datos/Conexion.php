<?php


function Conectarse() {
    

$conexion= new mysqli ("localhost","root","","InventarioPos");

if ($conexion->connect_errno) {
        echo "Problemas en la Conexion" . $conexion->connect_error;
    } else {
        return $conexion;
    }
    
}

    ?>
