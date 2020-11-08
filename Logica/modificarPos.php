<?php

require'../Datos/Conexion.php';
$objConexion = Conectarse();
extract ($_REQUEST);

  $sql ="UPDATE pos set  PosImei='$_REQUEST[PosImei]',PosSimcard='$_REQUEST[PosSimcard]',PosEstado='$_REQUEST[PosEstado]' WHERE  IdPos = '$_REQUEST[id]' ";
      $resultado = $objConexion->query($sql);
      if ($resultado) 
      
           
      {
            echo '<script>alert("pos se ha modificado")</script>';
            echo '<script>location.replace("../Presentacion/html/fmrListarPos.php")</script>';
        } else {
              echo ('<script>alert("no es posible modificar")</script>');
    echo ('<script>location.replace("../Presentacion/html/fmrListarPos.php")</script>');
        }


        
