<?php
require_once '../Datos/Conexion.php';

extract ($_REQUEST);


$objConexion = Conectarse() ;
$sql ="SELECT * FROM comercial where ComCedula  = ('$_REQUEST[cedulaComercial]')";
$resultado = $objConexion->query($sql);
//imprimir
if ($comercial = $resultado->fetch_object()) 

{    
    echo  "<br> ID COMERCIAL :" .$comercial ->IdComercial; 
    echo "<br> COMERCIAL NOMBRE: " . $comercial->ComNombre;
    echo "<br> COMERCIAL APELLIDO: " . $comercial->ComApellido;
    echo "<br> COMERCIAL CEDULA: " . $comercial->ComCedula;
} else {
    echo "no exite";
}
?>