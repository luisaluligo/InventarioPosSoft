<?php

require'../Datos/Conexion.php';
$objConexion = Conectarse();
extract ($_REQUEST);


 
   
      $sql ="DELETE FROM onboarding WHERE  Onbcodigo = ('$_REQUEST[Id]')";
      $resultado = $objConexion->query($sql);
      if ($resultado) {
            echo '<script>alert("Onboarding se ha eliminado")</script>';
            echo '<script>location.replace("../Presentacion/html/fmrListarOnboarding.php")</script>';
        } else {
              echo ('<script>alert("Onboarding tiene registros asociados, no es posible eliminar ")</script>');
    echo ('<script>location.replace("../Presentacion/html/fmrListarOnboarding.php")</script>');
        }

?>