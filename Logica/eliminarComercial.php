<?php

require'../Datos/Conexion.php';
$objConexion = Conectarse();
extract ($_REQUEST);


 
   
      $sql ="DELETE FROM comercial WHERE  IdComercial = ('$_REQUEST[Id]')";
      $resultado = $objConexion->query($sql);
      if ($resultado) {
            echo '<script>alert("Comercial se ha eliminado")</script>';
            echo '<script>location.replace("../Presentacion/html/fmrListarComercial.php")</script>';
        } else {
              echo ('<script>alert("El usuario tiene registros asociados, no es posible eliminar ")</script>');
    echo ('<script>location.replace("../Presentacion/html/fmrListarComercial.php")</script>');
        }

?>