<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="Stylesheet" type="text/css" href="../css/Estilos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>restaurante</title>
</head>
<!-- <script type="text/javascript">


    function confirmar()
    {
    
        var respuesta = confirm(" REGISTRAR RESTAURANTE");
    
        if (respuesta == true)
        {
            return true;
        }
    else{
        return false;
    }
    }
    </script> -->
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
   
<form class="formulario" action="../../Logica/crearRestaurante.php" method="POST">
    
        <h1>RESTAURANTE</h1>
         <div class="contenedor">
         
         <div class="input-contenedor">
             <i class="fas fa-user icon"></i>
             <input type="text" placeholder="Nombre del restaurante" name="RestNombre">
             
             </div>
             <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Especialidad del restaurante" name="RestEspecialidad">
                
                </div>
            
            <div class="input-contenedor">
               <i class="fas fa-user icon"></i>
               <input type="text" placeholder="Comercial Asociado" name="RestComercial">
               
               </div>


               <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="POS Asociado" name="RestPos">
                
                </div>   
   
    
             <!-- <input type="submit" value="guardar registro" class="button"onclick="return confirmar()"> -->
            <center>    
             <input type="submit" value="Guardar registro" class="btn btn-secondary btn-lg" onclick="return confirmar()">
             <a href="..inicio.html" class="btn btn-primary btn-lg" tabindex="-1" role="button" aria-disabled="true">Regresar</a>
       <!--       <a href="../PHP/borrarRestaurante.php" class="btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Borrar</a> -->
             <a href="listarRestaurante.php" class="btn btn-danger btn-lg" tabindex="-1" role="button" aria-disabled="true">Listado</a>
             <!-- <input type="submit" value="borrar registro" class="btn btn-danger btn-lg"onclick="return confirmar()"> -->
            </center>
         </div>
        </form>

        <footer> Copyrigth -todos los derechos reservados ADSI 2.0 </footer>
    
</body>
</html>