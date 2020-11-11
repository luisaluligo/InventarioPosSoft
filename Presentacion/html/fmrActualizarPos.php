<?php
	
	$conexion=mysqli_connect('localhost','root','','inventariopos') or die ('Error en la base de datos');

    $id=$_GET['id'];
	
	$sql = "SELECT PosImei, PosSimcard, PosEstado FROM pos WHERE IdPos= $id LIMIT 1";
	$resultado=mysqli_query($conexion,$sql) or die ('Error en el query');

    $fila = $resultado->fetch_assoc();
	
	
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" type="text/css" href="../css/Estilos.css" media="screen"/>
    <title>POS</title>
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
                        <li><a href="fmrConsultarRestaurante.php.">Reporte Restaurante</a></li>
                                               
                        </ul>
                        </li>
                        <li><a href="../../index.php">Salir</a></li>
                    </ul>
                </nav>
            </div>

          </header>

						
<br> <br>
<br><br>
<br><br>



 
<form class="formulario" action="../../logica/modificarPos.php" method="POST">
    
        <h1>EDITAR POS</h1>
         <div class="contenedor">

            
         <div class="input-contenedor">
             <i class="fas fa-user icon"></i>
             <input name=PosImei type="text" required placeholder="Imeipos" value="<?php echo $fila['PosImei']; ?>">
             <input type="hidden" id="id" name="id" value="<?php echo $id; ?>" />
             </div>
             <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input name=PosSimcard type="text" required placeholder="Simcardasociada" value="<?php echo $fila['PosSimcard']; ?>">
                
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-user icon"></i>
                    <input name= PosEstado  required type="radio" value ="activo <?php if('activo' == $fila['PosEstado']) { echo 'selected'; } ?>">activo
                     <input name= PosEstado  required type="radio"  value ="inactivo <?php if('activo' == $fila['PosEstado']) { echo 'selected'; } ?>">inactivo


                    </div>
            
             <br><br>
                <div class="form-group">
							<button class="btn btn-primary" id="guarda" name="guarda" type="submit">Guardar- cambios</button>
						</div>
    

    
         </div>
        </form>

        <footer> Copyrigth -todos los drechos reservados ADSI 2.0 </footer>
</body>
</html>