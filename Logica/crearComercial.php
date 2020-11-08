<?php
require_once '../Datos/Conexion.php';

extract ($_REQUEST);


$objConexion = Conectarse() ;

{
$sql = "INSERT INTO Comercial (IdComercial,ComNombre,ComApellido,ComCedula)VALUES (null,'$_REQUEST[nombreComercial]','$_REQUEST[apellidoComercial]','$_REQUEST[cedulaComercial]')";
        $resultado= $objConexion -> query ($sql);
        if ($resultado) {
            echo '<script>alert("Comercial se ha agregado exitosamaente")</script>';
            echo '<script>location.replace("../Presentacion/html/FmrComercial.php")</script>';
        } else {
              " Error al crear comercial, intente nuevamente";
        }
}

