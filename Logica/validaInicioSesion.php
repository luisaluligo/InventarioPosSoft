

<?php

session_start();

extract ($_REQUEST);
require_once '../Datos/Conexion.php';
$objConexion = Conectarse();


$sql= "SELECT * FROM usuario where CcUsuario = ('$_REQUEST[cedula]') and  UsuarioClave = ('$_REQUEST[clave]')";
$resultado= $objConexion ->query ($sql);
$fila=mysqli_num_rows($resultado);
$datos=mysqli_fetch_assoc($resultado);

	$_SESSION['usuario']=$datos["UsuarioNombre"];
	//guardo nombre del usuario
	$_SESSION['rol']=$datos['rol'];
	 //guardo el rol , si es administrador o usuario


if(  $_SESSION['rol']=="administrador"  ){
	header ("location:/InventarioPosSena/Presentacion/html/inicio.php");
   }else if ( $_SESSION['rol']== "usuario"){
	header ("location:/InventarioPosSena/Usuario/Presentacion/inicio.php");
   }else 
	{
		header ("location:../index.php?x=1");
		}
		
	



?>



?>