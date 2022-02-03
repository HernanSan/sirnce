<?php
include('../dll/config.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
extract($_GET);
header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");
header('Content-Disposition: attachment; filename=dataPatrimonioNatural.xls');
  $sql = "SELECT* FROM fichapatrimonionatural ";
$result = $conn->query($sql);
$arr_FichaC = [];
if ($result->num_rows > 0) {
	$arr_FichaC = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<table border= "1" >
		<thead>
            <caption style="color:blue;"> Fichas de Patrimonios Culturales</caption>
			<tr>
                <td>Id</td>
                <td>Fecha</td>
				<td>Nombre</td>
				<td>Descripcion</td>
                <td>Provincia</td>
                <td>Canton</td>
                <td>Parroquia</td>
                <td>Geografia</td>
                <td>Caracteristica Flora</td>
				<td>Caracteristica Fauna</td>
				<td>Actividades</td>
				<td>Recomendaciones</td>
				<td>Facilidades</td>
				<td>Como Llegar</td>
			</tr>
		</thead>
		<tbody >	
		<?php if(!empty($arr_FichaC)) { ?>			
			<?php foreach($arr_FichaC as $fichaC) { ?>
                    <tr>
                        <td><?php echo $fichaC['id_ficha_natural']; ?></td>
					    <td><?php echo $fichaC['fecha']; ?></td>
                        <td><?php echo $fichaC['nombre']; ?></td>
                        <td><?php echo $fichaC['descripcion']; ?></td>
                        <td><?php echo $fichaC['provincia']; ?></td>
                        <td><?php echo $fichaC['canton']; ?></td>
                        <td><?php echo $fichaC['parroquia']; ?></td>
						<td><?php echo $fichaC['geografia']; ?></td>
                        <td><?php echo $fichaC['floraCaracteristica']; ?></td>
                        <td><?php echo $fichaC['faunaCaracteristica']; ?></td>
                        <td><?php echo $fichaC['actividades']; ?></td>
						<td><?php echo $fichaC['recomendaciones']; ?></td>
						<td><?php echo $fichaC['facilidades']; ?></td>
						<td><?php echo $fichaC['comollegar']; ?></td>
                   </tr>
			<?php } ?>
          <?php } ?>
		</tbody>
			
	</table>