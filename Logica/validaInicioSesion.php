<?php


session_start();

extract ($_REQUEST);
require_once '../Datos/Conexion.php';
$objConexion = Conectarse();


$sql= "SELECT * FROM usuario where CcUsuario = ('$_REQUEST[cedula]') and  UsuarioClave = ('$_REQUEST[clave]')";
$resultado= $objConexion ->query ($sql);

$existe = $resultado ->num_rows;

if ($existe ==1)
    
{ 
  $usuario= $resultado -> fetch_object ();
   $_SESSION ['user']= $usuario -> CcUsuario;
  header ("location:../Presentacion/html/inicio.php");
}
else 

{
header ("location:../index.php?x=1");
}







?>