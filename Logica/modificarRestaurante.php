<?php


$proyecto = new mysqli('127.0.0.1', 'root', '', 'inventariopos');

    if ($proyecto->connect_errno){
    echo "Lo sentimos, esta página está esperimentando problemas";
    exit;
}



$sql ="UPDATE restaurante set  IdRestaurante='$_REQUEST[IdRestaurante]', RestNombre='$_REQUEST[RestNombre]', RestEspecialidad='$_REQUEST[RestEspecialidad]', RestComercial='$_REQUEST[RestComercial]', RestPos='$_REQUEST[RestPos]' WHERE  IdRestaurante = '$_REQUEST[id]' ";
      $resultado = $proyecto->query($sql);
      if ($resultado) {
        echo '<script>alert("Restaurante se ha modificado")</script>';
        echo '<script>location.replace("../Presentacion/html/fmrListarRestaurante.php")</script>';
    } 
    
        else {
            echo ('<script>alert("No está registrado")</script>');
            echo ('<script>location.replace("../Presentacion/html/fmrListarRestaurante.php")</script>');
    }
