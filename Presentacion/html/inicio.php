<?php
session_start();
if (!isset($_SESSION ['user'])) {
    header("location:../../index.php?x=2");
}
if (!isset($_REQUEST ['pg'])) {
    $pg = "pginicial";
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="Stylesheet" type="text/css" href="../css/Estilos.css">
        <title>Principal</title>
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
                        <li><a href="fmrConsutarOnboarding.php">Reporte Onboarding </a></li>
                        <li><a href="fmrConsultarPos.PHP">Reporte Pos</a></li>
                                           
                        </ul>
                        </li>
                        <li><a href="../../index.php">Salir</a></li>
                    </ul>
                </nav>
            </div>

         </header>
<br>
<br>
        <div id= "contentsection">
            <section class="section">
                <article>
                    <H1>Bienvenido al software de inventario POS DE DOMICILIOS.COM</H1>
                    <br>
                    <p> <font face="Comic Sans MS,Arial,Verdana" size=5>
                        
                        -	Satisfacer  las  necesidades del cliente <br>
                        -	Completo registro de los activos de la empresa (POS)<br>
                        -	Listado general de los POS activos, perdidos, robados o dañados.<br> 
                        -	Cualquier usuario, con los debidos permisos, sin conocimiento previo de computación pueda hacer uso del software. <br>      
                        -	Cumplir con los requerimientos  funcionales y no funcionales establecidos. <br>
                        -	Tener un buen control sobre los activos. <br>
                        </font> </p>
                </article>      
            </section>
        </div>







        <footer> Copyrigth -todos los drechos reservados ADSI 2.0 </footer>


    </body>
</html> 