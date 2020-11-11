<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=listarestaurantes.xls');
    $conexion=mysqli_connect('localhost','root','','inventariopos') or die ('Error en la base de datos');

	
?>



	<table id="tabla" class="display" style="width:100%"> 
		<thead>	
			<tr>
				<td>IdRestaurante</td>
				<td>RestNombre</td>
				<td>RestEspecialidad</td>
				<td>RestComercial</td>
				<td>RestPos</td>
				<td></td>	
		</tr>
		</thead>

		<tbody>

		<?php 
		$sql="SELECT * from restaurante";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['IdRestaurante'] ?></td>
			<td><?php echo $mostrar['RestNombre'] ?></td>
			<td><?php echo $mostrar['RestEspecialidad'] ?></td>
			<td><?php echo $mostrar['RestComercial'] ?></td>
			<td><?php echo $mostrar['RestPos'] ?></td>
			<td>
				
		</td>

		</tr>
	<?php 
	}
	 ?>
	 </tbody>
	</table>

