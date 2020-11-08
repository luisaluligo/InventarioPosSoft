<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=TOTALPOS.xls');
    $conexion=mysqli_connect('localhost','root','','inventariopos') or die ('Error en la base de datos');

	
?>



	<table id="tabla" class="display" style="width:100%"> 
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
