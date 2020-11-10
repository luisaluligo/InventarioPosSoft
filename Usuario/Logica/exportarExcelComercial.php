<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "LIstadoComercial.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

require_once '../../Datos/Conexion.php';



$objConexion = Conectarse() ;
$sql ="SELECT * FROM comercial ";
$resultado = $objConexion->query($sql);
?>

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
					<?php } 
                                        ?>
				</tbody>
			</table>