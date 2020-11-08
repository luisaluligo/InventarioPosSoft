<?php

require_once '../Datos/Conexion.php';

$objConexion = Conectarse();

extract ($_REQUEST);
    
    $consulta = ("UPDATE agenteonboarding SET
                        AgtoNombre='$_REQUEST[nombre]',
                        AgtoApellido='$_REQUEST[apellido]',
                        AgtoCorreo='$_REQUEST[correo]',
                        AgtoSueldo='$_REQUEST[sueldo]',
                        AgtoAntiguedad='$_REQUEST[antiguedad]' 
                        WHERE IdAgente= '$_REQUEST[id]'");
    $resultado = $objConexion->query($consulta);
    if ($resultado){
        echo '<script type="text/javascript">
        alert("Cambios Guardados")
        window.location.href="../Presentacion/html/fmrListarAgente.php";
        </script>';
    } else {
        echo '<script type="text/javascript">
         alert("Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario")
         window.location.href="../Presentacion/html/fmrListarAgente.php";
         </script>';
    }
?>