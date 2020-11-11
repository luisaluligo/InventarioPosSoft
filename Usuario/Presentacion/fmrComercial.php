 <!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
       <link rel="Stylesheet" type="text/css" href="../../Presentacion/css/Estilos.css">
       <link rel="stylesheet" href="../../Presentacion/css/bootstrap.min.css">
       

        <title>FormularioComecial</title>
    </head>

    <body>

         <header> 

            <div id="header">
                <nav>
                    <ul class="nav">
                        <li><a href="inicio.php">Inicio</a></li>
                        <li><a >Pos</a>
                        <ul>
                          <li><a href="fmrPos.php">Crear Pos</a></li>
                          <li><a href="fmrConsultarPos.PHP">Consultar Pos</a></li> 
                           
                        </ul>
                        </li>
                        <li><a >Comercial</a>
                        <ul>
                        <li><a href="fmrComercial.php">Crear Comercial</a></li>
                        <li> <a href="fmrConsultarComercial.php">Consultar Comercial </a></li> 
                        
                        </ul>
                        </li>
                        <li><a >Restaurante</a>
                        <ul>   
                        <li><a href="fmrRestaurante.php">Crear Restaurante</a></li>
                        <li><a href="fmrConsultarRestaurante.php">Consultar Restaurante</a></li>
                        </ul>
                        </li>
                                                   
                         <li><a >Onboarding</a>
                         <ul>
                        <li><a href="fmrOnboarding.php">Crear Onboarding</a></li>
                        <li><a href="fmrConsultarOnboarding.php">Consultar Onboarding </a></li> 
                        </ul>
                         </li>
                        
                        <li><a href="../../index.php">Salir</a></li>
                    </ul>
                </nav>
            </div>

  </header>

 
        <br>

<form id='fmrComercial' class="formulario" action="../Logica/crearComercial.php" method="POST">
    
        <h1>COMERCIAL </h1>
         <div class="contenedor">
             <div class="input-contenedor">
             <i class="fas fa-user icon"></i>
             <input type="text" required placeholder=" Nombre comercial" name="nombreComercial" autocomplete="off"> 
             </div>
             <div class="input-contenedor">
             <i class="fas fa-user icon"></i>
             <input type="text" required placeholder="Apellido comercial" name="apellidoComercial" autocomplete="off">
             </div>
             <div class="input-contenedor">
             <i class="fas fa-user icon"></i>
             <input type="number" required placeholder="CedulaComercial" name="cedulaComercial"  autocomplete="off"  >
             </div>

             <center>
             <input type="submit" value="guardar registro" class="btn btn-primary" onclick="return confirmar()">
             <a href="inicio.php" class="btn btn-secondary " tabindex="-1" role="button" aria-disabled="true">Regresar</a>
             <br>
             </center>
           
             <br>
       
           
            
             
         </div>
        </form>

       




        <footer> Copyrigth -todos los drechos reservados ADSI 2.0 </footer>


    </body>
</html> 