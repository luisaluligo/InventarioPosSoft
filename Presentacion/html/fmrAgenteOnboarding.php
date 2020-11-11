<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" type="text/css" href="../css/Estilos.css" media="screen"/>
          <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Agente Onboarding</title>
</head>
<body>
   <!--Estilos Header-->
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
    <br>
   
    <form class="formulario" action="../../logica/crearAgente.php" method="POST">
        <h1>AGENTE ONBOARDING</h1>

        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input require type="text" name="nombre" placeholder="Nombre">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input require type="text" name="apellido" placeholder="Apellido">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input type="email" name="correo" require  placeholder="Correo">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input require type="text" name="sueldo" placeholder="Sueldo">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-user icon"></i>
            <input require type="text" name="antiguedad" placeholder="Antiguedad">
        </div>
        <center>
        <input type="submit" value="Guardar registro" class="btn btn-primary btn-lg" onclick="return confirmar()">
        </center>
        <br>
    </form> 
</body>
</html>