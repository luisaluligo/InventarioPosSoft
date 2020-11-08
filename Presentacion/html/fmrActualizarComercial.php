<?php
require_once '../../Datos/Conexion.php';

$objConexion = Conectarse() ;
$sql ="SELECT * FROM comercial where IdComercial= '$_REQUEST[Id]'";
$resultado = $objConexion->query($sql);
$fila = $resultado->fetch_assoc();
	
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="Stylesheet" type="text/css" href="../css/Estilos.css">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
       
               <title>FormularioComecial</title>
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



 
 <form id='fmrComercial' class="formulario" action="../../Logica/modificarComercial.php" method="POST">
    
        <h1>COMERCIAL </h1>
         <div class="contenedor">
        
             <i class="fas fa-user icon"></i>
            
             <input type="hidden" id="id" name="Id" value="<?php echo $fila['IdComercial']; ?>" />
             <p>Nombre: <input type="text" required placeholder=" Nombre comercial" name="nombreComercial" value="<?php echo $fila['ComNombre']; ?>"  ></p>
             <p> Apelido: <input type="text" required placeholder="Apellido comercial" name="apellidoComercial" value="<?php echo $fila['ComApellido'];?>"></p>
             <p>Cedula: <input type="number" required placeholder="CedulaComercial" name="cedulaComercial" value="<?php echo $fila['ComCedula']; ?>" ></p>
             </div>
             <center>
             <input type="submit" value="Actualizar registro" class="btn btn-secondary btn-lg" onclick="return confirmar()">
             <a href="inicio.php" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Salir</a>
            </center>
   
         </div>
        </form>

       




        <footer> Copyrigth -todos los drechos reservados ADSI 2.0 </footer>


    </body>
</html> 