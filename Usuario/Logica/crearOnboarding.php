<?php

require_once '../../Datos/Conexion.php';

extract ($_REQUEST);


$objConexion = Conectarse() ;

$sql = "INSERT INTO onboarding (OnbCodigo,OnbIdAgenteOb,OnbPos,OnbRestaurante,OnbObservaciones,OnbEstadoCaso) VALUES (null,'$_REQUEST[Agente]','$_REQUEST[Pos]','$_REQUEST[Restaurante]','$_REQUEST[Comentarios]','$_REQUEST[Estadocaso]')";
    $resultado= $objConexion -> query ($sql);
        if ($resultado) {
            echo '<script>alert("Onboarding se ha agregado exitosamente")</script>';
            echo '<script>location.replace("../Presentacion/fmrOnboarding.php")</script>';
        } else {
            echo '<script>alert("Error,no ha creado Onboarding")</script>';
        }   echo '<script>location.replace("../Presentacion/fmrOnboarding.php")</script>';


 ?>