<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="Stylesheet" type="text/css" href="../css/Estilos.css" media="screen"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>POS</title>
</head>
<script type="text/javascript">


    function confirmar()
    {
    
        var respuesta = confirm(" REGISTRAR POS");
    
        if (respuesta == true)
        {
            return true;
        }
    else{
        return false;
    }
    }
    </script>


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
<br>
 
<form class="formulario" action="../../logica/crearPos.php" method="POST">
    
        <h1>REGISTRAR POS</h1>
         <div class="contenedor">

            
         <div class="input-contenedor">
             <i class="fas fa-user icon"></i>
             <input name=PosImei type="text"required placeholder="Imeipos">
             
             </div>
             <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input name=PosSimcard type="text"required placeholder="Simcardasociada">
                
                </div>
                 <div >
                   <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                 <select required name="PosEstado" id="estado">
                 <option VALUE ="0">Seleccione</option>
                 <option value="activo">Pos Activo</option>
                 <option value="inactivo">Pos Inactivo</option>
             
                 </select>
               
                    </div>
            
                 
             <center>
             <input type="submit" value="guardar registro"  class="btn btn-primary" onclick="return confirmar()">
             <a class="btn btn-secondary " href="inicio.php">Regresar</a>
           </center>
                     <br>
         </div>
        </form>

        <footer> Copyrigth -todos los drechos reservados ADSI 2.0 </footer>
</body>
</html>