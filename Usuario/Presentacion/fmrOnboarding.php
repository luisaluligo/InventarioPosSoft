
<?php
require_once '../../Datos/Conexion.php';


$objConexion = Conectarse() ;
$sql ="SELECT IdAgente, AgtoNombre,IdAgente FROM agenteonboarding ";
$resultado = $objConexion->query($sql);


$objConexion1 = Conectarse() ;
$sql1 ="SELECT IdRestaurante,RestNombre,RestPos FROM restaurante ";
$resultado1 = $objConexion1->query($sql1);


$objConexion2 = Conectarse() ;
$sql2 ="SELECT IdPos,PosImei FROM pos";
$resultado2 = $objConexion1->query($sql2);
?>



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link rel="Stylesheet" type="text/css" href="../../Presentacion/css/Estilos.css">
         <link rel="stylesheet" href="../../Presentacion/css/bootstrap.min.css">
        <title>Onboarding</title>
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
                        
                        <li><a href="../../Index.php">Salir</a></li>
                    </ul>
                </nav>
            </div>

  </header>
    <br>
    <form  class="formulario" action="../Logica/crearOnboarding.php"      method="POST">
    <div class="contenedor">
         
            <h1> ONBOARDING</h1>
             <i class="fas fa-user icon"></i>
            <label for="Agente"> Agente caso: </label> 
           <select name= "Agente" id="Agente">
               <option VALUE ="0">Seleccione</option>
               
               <?php
               while($agente=$resultado->fetch_object())
               {   
                ?>
                   <option VALUE ="<?php echo $agente->IdAgente?>"><?php echo $agente->AgtoNombre?></option>     
                <?php           
               }
               ?>
               
           </select>
            
            <br>
          <label for="pos"> Pos vinculado:</label>
         <select name= "Pos" id="pos">
               <option VALUE ="0">Seleccione</option>
               
                  <?php
               while($pos=$resultado2->fetch_object())
               {   
                ?>
                   <option VALUE ="<?php echo $pos->IdPos?>"><?php echo $pos->PosImei?></option>     
                <?php           
               }
               ?>
         </select>  
           <br>
           
          <label for="Restaurante"> Restaurante: </label> 
           <select name= "Restaurante" id="Restaurante">
               <option VALUE ="0">Seleccione</option>
               
               
               <?php
               while($restaurante=$resultado1->fetch_object())
               {   
                ?>
                   <option VALUE ="<?php echo $restaurante->IdRestaurante?>"><?php echo $restaurante->RestNombre?></option>     
                <?php           
               }
               ?>
           </select>
          <br>
          <label for="observacion"> Observaciones:</label>
          <textarea name="Comentarios" id="observacion"> </textarea>
              
                 
          <br>
             <label for="estado"> Estado caso :</label>
             <select required name="Estadocaso" id="estado">
                 <option VALUE ="0">Seleccione</option>
                  <option value="asignado">Caso Asignado</option>
                   <option value="pendiente">Caso Pendiente</option>
                    <option value="indagacion">Caso en indagacion</option>
             </select>
                      <center>        
                      <input type="submit" value="guardar registro" class="btn btn-primary btn-lg" >
                      </center>
    </div>
    </form>
        
      
 
        <footer> Copyrigth -todos los drechos reservados ADSI 2.0 </footer>
</body>

</html>
