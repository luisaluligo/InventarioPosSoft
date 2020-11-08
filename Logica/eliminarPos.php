
<?php

$conexion=mysqli_connect('localhost','root','','inventariopos') or die ('Error en la base de datos');

$id=$_GET['id'];

$sql = "DELETE FROM pos WHERE IdPos='".$id."'";

$resultado=mysqli_query($conexion,$sql) ;

if ($resultado) {
    echo '<script>alert("POS se ha eliminado")</script>';
    echo '<script>location.replace("../Presentacion/html/fmrListarPos.php")</script>';
} else {
      echo ('<script>alert("El usuario tiene registros asociados, no es posible eliminar ")</script>');
echo ('<script>location.replace("../Presentacion/html/fmrListarPos.php")</script>');
}


?>