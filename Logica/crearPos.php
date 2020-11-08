

<?php

$conexion=mysqli_connect('localhost','root','','inventariopos') or die ('Error en la base de datos');

$sql="INSERT INTO pos VALUES(null,'".$_POST["PosImei"]."','".$_POST["PosSimcard"]."','".$_POST["PosEstado"]."')";

$resultado=mysqli_query($conexion,$sql) or die ('Error en el query');

mysqli_close($conexion);




echo '<script>alert("pos se ha agregado exitosamaente")</script>';
echo '<script>location.replace("../Presentacion/html/fmrPos.php")</script>';









?>


