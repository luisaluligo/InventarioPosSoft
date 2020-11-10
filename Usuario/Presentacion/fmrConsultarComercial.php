<?php
require_once '../../Datos/Conexion.php';



$objConexion = Conectarse() ;
$sql ="SELECT * FROM comercial ";
$resultado = $objConexion->query($sql);

?>




<!doctype html>
<html lang="es">
	<head>
		<!-- Required meta tags -->
                
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="Stylesheet" type="text/css" href="../../Presentacion/css/Estilos.css">
		<!-- Bootstrap CSS -->
                <link rel="stylesheet" href="../../Presentacion/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../Presentacion/css/jquery.dataTables.min.css">
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="../../Presentacion/js/jquery-3.4.1.min.js" ></script>
                <script src="../../Presentacion/js/bootstrap.min.js" ></script>
                <script src="../../Presentacion/js/jquery.dataTables.min.js" ></script>
		
		<title>Listar Comercial</title>
		
		<script>
			$(document).ready(function() {
			$('#tabla').DataTable();
			} );
			
		</script>
		
		
		
		
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
                        <li><>Consultar Restaurante</li>
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
            <br>
            <br>
            <br>
            
		<div class="container">
			<div class="row">
				<h1>Comercial</h1>
			</div>
			
			
                    
			
			<table id="tabla" class="display">
				<thead>
					<tr>
			                 
                                         <th>NombreComercial</th>
                                         <th>ApellidoComercial</th>
                                         <th>CedulaComercial</th>
                                         
					</tr>
				</thead>
				<tbody>
					<?php while($fila = $resultado->fetch_assoc()) { ?>
						<tr>
							
							<td><?php echo $fila['ComNombre']; ?></td>
							<td><?php echo $fila['ComApellido']; ?></td>
                                                        <td><?php echo $fila['ComCedula']; ?></td>
                                                        
						</tr>
					<?php } ?>
				</tbody>
			</table>
                    <br>
                    <a class="btn btn-primary btn-lg" href="../Logica/exportarExcelComercial.php">exportar-excel</a>
		</div>
	 <footer> Copyrigth -todos los drechos reservados ADSI 2.0 </footer>
	
	
</body>
</html>					