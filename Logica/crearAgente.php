<?php

require_once '../Datos/Conexion.php';

extract($_REQUEST);

$objConexion = Conectarse();


    $consul = "INSERT INTO agenteonboarding (IdAgente, AgtoNombre, AgtoApellido, AgtoCorreo, AgtoSueldo, AgtoAntiguedad) VALUES (null, '$_REQUEST[nombre]',
                                              '$_REQUEST[apellido]',
                                              '$_REQUEST[correo]',
                                              '$_REQUEST[sueldo]',
                                              '$_REQUEST[antiguedad]')";

    $resultado = $objConexion -> query($consul);
    
       
    if ($resultado) {
        echo '<script type="text/javascript">
        alert("Registro insertado")
         window.location.href="../Presentacion/html/fmrAgenteOnboarding.php";
        
        </script>';  
    } else {
        echo '<script type="text/javascript">
        alert("Falla al registrar");
        window.location.href="../Presentacion/html/fmrAgenteOnboarding.php";
        </script>';  
    }
?>