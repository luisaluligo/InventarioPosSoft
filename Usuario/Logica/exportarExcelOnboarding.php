<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "ListadoOnboarding.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

include_once '../../Datos/Conexion.php';

$objConexion = Conectarse() ;
$consulta = "SELECT * FROM onboarding";
$resultado = $objConexion->query($consulta);
?>

<table id="tabla" class="display">
<thead>
    <tr>
			                 
                  <th>Agente Onboarding</th>
                  <th>Pos Asociado</th>
                  <th>Restaurante Asociado</th>
                  <th>Observaciones</th>
                  <th>Estado Caso</th>
                                        
                                         
    </tr>
</thead>
<tbody>
    <?php while($fila = $resultado->fetch_assoc()) { ?>
	<tr>
	
	
	<td><?php echo $fila['OnbIdAgenteOb']; ?></td>
	<td><?php echo $fila['OnbPos']; ?></td>
        <td><?php echo $fila['OnbRestaurante']; ?></td>
        <td><?php echo $fila['OnbObservaciones']; ?></td>
        <td><?php echo $fila['OnbEstadoCaso']; ?></td>                                               
	</tr>
	<?php } 
         ?>
	</tbody>
	</table>