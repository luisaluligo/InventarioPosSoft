<?php

require'../Datos/Conexion.php';
$objConexion = Conectarse();
extract ($_REQUEST);

  $sql ="UPDATE comercial set  ComNombre='$_REQUEST[nombreComercial]',ComApellido='$_REQUEST[apellidoComercial]',ComCedula='$_REQUEST[cedulaComercial]' WHERE  IdComercial = '$_REQUEST[Id]' ";
      $resultado = $objConexion->query($sql);
      if ($resultado) 
      
           
      {
            echo '<script>alert("Comercial se ha modificado")</script>';
            echo '<script>location.replace("../Presentacion/html/fmrListarComercial.php")</script>';
        } else {
              echo ('<script>alert("no es posible modificar")</script>');
    echo ('<script>location.replace("../Presentacion/html/fmrListarComercial.php")</script>');
        }


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        