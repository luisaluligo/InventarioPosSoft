<?php

require '../Datos/Conexion.php';
$objConexion = Conectarse();
extract ($_REQUEST);

    $consul = ("DELETE FROM agenteonboarding WHERE IdAgente = ('$_REQUEST[id]')");
    $resultado = $objConexion->query($consul);

    if($resultado === TRUE){
        echo '<script type="text/javascript">
        alert("Registro eliminado")
        window.location.href="../Presentacion/html/fmrListarAgente.php";
        </script>';  
    }else{
        echo '<script type="text/javascript">
        alert("Falla al eliminar el registro")
        window.location.href="../Presentacion/html/fmrListarAgente.php";
        </script>';  
    }
?>