<?php
require_once '../../Datos/Conexion.php';

extract ($_REQUEST);


$objConexion = Conectarse() ;

{
$sql = "INSERT INTO Comercial (IdComercial,ComNombre,ComApellido,ComCedula)VALUES (null,'$_REQUEST[nombreComercial]','$_REQUEST[apellidoComercial]','$_REQUEST[cedulaComercial]')";
        $resultado= $objConexion -> query ($sql);
        if ($resultado) {
            echo '<script>alert("Comercial se ha agregado exitosamaente")</script>';
            echo '<script>location.replace("../Presentacion/FmrComercial.php")</script>';
        } else {
              echo '<script>alert(" Error al crear comercial, intente nuevamente")</script>';
              echo '<script>location.replace("../Presentacion/FmrComercial.php")</script>';
        }
}

