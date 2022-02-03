<?php
include('../dll/config.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
extract($_GET);
header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");
header('Content-Disposition: attachment; filename=dataPatrimonioCultural.xls');
  $sql = "SELECT* FROM fichapatrimoniocultural ";
$result = $conn->query($sql);
$arr_FichaC = [];
if ($result->num_rows > 0) {
	$arr_FichaC = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table border= "1" >
		<thead>
            <caption>Fichas de Patrimonios Culturales</caption>
			<tr>
                <td>Id</td>
                <td>Fecha</td>
				<td>Nombre</td>
				<td>Tipo</td>
                <td>Caracteristicas</td>
                <td>Provincia</td>
                <td>Canton</td>
                <td>Parroquia</td>
                <td>Comunidad</td>
                <td>Tipo Patrimonio Oficial</td>
				<td>Registro</td>
				

			</tr>
		</thead>
		<tbody >	
		<?php if(!empty($arr_FichaC)) { ?>			
			<?php foreach($arr_FichaC as $fichaC) { ?>
                    <tr>
                        <td><?php echo $fichaC['id_ficha_cultural']; ?></td>
					    <td><?php echo $fichaC['fecha']; ?></td>
                        <td><?php echo $fichaC['nombre_patrimonio']; ?></td>
                        <td><?php echo $fichaC['tipo']; ?></td>
                        <td><?php echo $fichaC['caracteristicas']; ?></td>
                        <td><?php echo $fichaC['provincia']; ?></td>
                        <td><?php echo $fichaC['canton']; ?></td>
                        <td><?php echo $fichaC['parroquia']; ?></td>
                        <td><?php echo $fichaC['comunidad']; ?></td>
                        <td><?php echo $fichaC['tipoPatrimonioOficial']; ?></td>
                        <td><?php echo $fichaC['registro']; ?></td>
                   </tr>
			<?php } ?>
          <?php } ?>
		</tbody>
			
	</table>