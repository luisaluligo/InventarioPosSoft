<?php
  $conexion=mysqli_connect('localhost','root','','inventariopos') or die ('Error en la base de datos');

 ?>


<!DOCTYPE html>
<html>
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
		
		<title>Listar Pos</title>
		
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
            <br>
            <br>
            <br>
            
		<div class="container">
			<div class="row">
				<h1>Pos</h1>
			</div>
	<table id="tabla" class="display" > 
		<thead>	
			<tr>
				<td>IdPos</td>
				<td>PosEstado</td>
				<td>PosImei</td>
				<td>PosSimcard</td>
				<td></td>	
		</tr>
		</thead>

		<tbody>

		<?php 
		$sql="SELECT * from pos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['IdPos'] ?></td>
			<td><?php echo $mostrar['PosEstado'] ?></td>
			<td><?php echo $mostrar['PosImei'] ?></td>
			<td><?php echo $mostrar['PosSimcard'] ?></td>
			<td>
				
		</td>

		</tr>
	<?php 
	}
	 ?>
	 </tbody>
	</table>
	
                    <a class="btn btn-primary btn-lg" href="../Logica/exportarExcelPos.php">exportar-excel</a>
    


</body>
</html>