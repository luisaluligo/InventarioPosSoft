<?php
require_once '../../Datos/Conexion.php';

$objConexion = Conectarse() ;
$sql = "SELECT * FROM agenteonboarding WHERE IdAgente = '$_REQUEST[id]'";
$resultado = $objConexion->query($sql);
$registro = $resultado->fetch_assoc();
	
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="Stylesheet" type="text/css" href="../css/Estilos.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <title>Actualizar Agente</title>
    </head>

<body>
<header> 

            <div id="header">
                <nav>
                    <ul class="nav">
                        <li><a href="./inicio.php">Inicio</a></li>
                        <li><a >Pos</a>
                        <ul>
                          <li><a href="fmrPos.php">Crear Pos</a></li>
                          <li><a href="fmrListarPos.PHP">Lista Pos</a></li> 
                           
                        </ul>
                        </li>
                        <li><a >Comercial</a>
                        <ul>
                        <li><a href="fmrComercial.php">Crear Comercial</a></li>
                        <li> <a href="fmrListarComercial.php">Lista Comercial </a></li> 
                        
                        </ul>
                        </li>
                        <li><a >Restaurante</a>
                        <ul>   
                        <li><a href="fmrRestaurante.php">Crear Restaurante</a></li>
                        <li><a href="fmrListarRestaurante.php">Lista Restaurante</a></li>
                        </ul>
                        </li>
                        <li><a >Agente Onboarding</a>
                           <ul>
                               <li><a href="fmrAgenteOnboarding.php">Crear Agente Onboarding</a></li>
                               <li><a href="fmrListarAgente.php">Lista Agente Onboarding </a></li> 
                           </ul>
                        </li>
                            
                         <li><a >Onboarding</a>
                         <ul>
                        <li><a href="fmrOnboarding.php">Crear Onboarding</a></li>
                        <li><a href="fmrListarOnboarding.php">Lista Onboarding </a></li> 
                        </ul>
                         </li>
                        <li><a >Reportes</a>
                        <ul>
                        <li><a href="fmrConsultarAgenteOnb.php">Reporte Agente Onboarding</a></li>         
                        <li><a href="fmrConsultarComercial.php">Reporte Comercial </a></li>
                        <li><a href="fmrConsultarOnboarding.php">Reporte Onboarding </a></li>
                        <li><a href="fmrConsultarPos.PHP">Reporte Pos</a></li>
                                           
                        </ul>
                        </li>
                        <li><a href="../../index.php">Salir</a></li>
                    </ul>
                </nav>
            </div>

</header>
       <br>
   
    <form class="formulario" action="../../Logica/modificarAgente.php" method="POST">
    <h1>Agente Onboarding </h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="hidden" name="id" value="<?php echo $registro['IdAgente']; ?>">
            <input type="text" name="nombre" value="<?php echo $registro['AgtoNombre']; ?>" placeholder="Nombre">
            <input type="text" name="apellido" value="<?php echo $registro['AgtoApellido']; ?>" placeholder="Apellido">
            <input type="text" name="correo" value="<?php echo $registro['AgtoCorreo']; ?>" placeholder="Correo">
            <input type="text" name="sueldo" value="<?php echo $registro['AgtoSueldo']; ?>" placeholder="Sueldo">
            <input type="text" name="antiguedad" value="<?php echo $registro['AgtoAntiguedad']; ?>" placeholder="Antiguedad">
        </div>
        <center>
            <input type="submit" value="Actualizar registro" class="btn btn-primary" onclick="return confirmar()"> <br>
            <br><a class="btn btn-secondary" href="./fmrListarAgente.php">regresar</a></p>      
        </center>
        </div> 
    </form>
</body>
</html>