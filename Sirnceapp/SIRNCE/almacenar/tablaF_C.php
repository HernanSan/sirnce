<?php
$sql = "SELECT* FROM fichapatrimoniocultural";
$result = $conn->query($sql);
$arr_FichaC = [];
if ($result->num_rows > 0) {
	$arr_FichaC = $result->fetch_all(MYSQLI_ASSOC);
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
</head>
<body>
<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>

				<td>Nombre</td>
				<td>Tipo</td>
				<td>Registro</td>
				<td>Tipo Patrimonio Oficial</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Tipo</td>
				<td>Registro</td>
				<td>Tipo Patrimonio Oficial</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
		</tfoot>
		<tbody >	
		<?php if(!empty($arr_FichaC)) { ?>			
			<?php foreach($arr_FichaC as $fichaC) { ?>
                    <tr>
                        <td><?php echo $fichaC['nombre_patrimonio']; ?></td>
                        <td><?php echo $fichaC['tipo']; ?></td>
					    <td><?php echo $fichaC['registro']; ?></td>
                        <td><?php echo $fichaC['tipoPatrimonioOficial']; ?></td>
                      <td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" >
							<span class="fa fa-pencil-square-o">
							     <?php 
								 $idFicha = $fichaC['id_ficha_cultural'];
								 ?>
							<a href="<?php echo $urlSitio.'almacenar/actualizarfichaC.php?idFicha='.$idFicha; ?>">Actualizar </a> 
							</span>
						</span>
					</td>
					    <td style="text-align: center;">
						<span class="btn btn-danger btn-sm">
							 <span class="fa fa-trash">
								 <?php 
								 $idFicha = $fichaC['id_ficha_cultural'];
								 ?>
	
								<a href="<?php echo $urlSitio.'almacenar/borrarfichaC.php?idFicha='.$idFicha; ?>">Borrar </a> 						
							</span>					
					<!--	<a href="<?//php echo $urlSitio; ?>almacenar/borrarfichaC.php">Eliminar</a>-->
						</span>
					</td>
                   </tr>
			<?php } ?>
          <?php } ?>
		</tbody>
		
		
	</table>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
	  $('#iddatatable').DataTable();
	});
	</script>
	</body>
	</html>