<?php 
header("Pragma: public");
header("Expires: 0");
$filename = "ListadoAgente.xls";
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

include_once '../Datos/Conexion1.php';

$consulta = $bdatos->query("SELECT * FROM agenteonboarding");
$registros = $consulta->fetchAll(PDO::FETCH_OBJ);
?>

<table>
    <thead>
        <tr>
            <th>IDAGENTE</th>
            <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>CORREO</th>
            <th>SUELDO</th>
            <th>ANTIGUEDAD</th>
            <th colspan="2">Operaciones</th>
        </tr>
    </thead>
    <tbody>
                <?php foreach($registros as $registro){?>
                    <tr>
                        <td><?php echo $registro->IdAgente ?></td>
                        <td><?php echo $registro->AgtoNombre ?></td>
                        <td><?php echo $registro->AgtoApellido ?></td>
                        <td><?php echo $registro->AgtoCorreo ?></td>
                        <td><?php echo $registro->AgtoSueldo ?></td>
                        <td><?php echo $registro->AgtoAntiguedad ?></td>
                    </tr>
                <?php } ?>
            </tbody>
</table>