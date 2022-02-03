<?php
$sql = "SELECT* FROM fichapatrimonionatural";
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
		<thead style="background-color: blue;color: white; font-weight: bold;">
			<tr>
                <td>Fecha</td>
				<td>Nombre</td>
				<td>Provincia</td>
				<td>Editar</td>
				<td>Eliminar</td>
				<td>Ver</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
                <td>Fecha</td>
				<td>Nombre</td>
				<td>Provincia</td>
				<td>Editar</td>
				<td>Eliminar</td>
				<td>Ver</td>
			</tr>
		</tfoot>
		<tbody >	
		<?php if(!empty($arr_FichaC)) { ?>			
			<?php foreach($arr_FichaC as $fichaC) { ?>
                    <tr>
                        <td><?php echo $fichaC['fecha']; ?></td>
                        <td><?php echo $fichaC['nombre']; ?></td>
					    <td><?php echo $fichaC['provincia']; ?></td>
                      <td style="text-align: center;">
						<span class="btn btn-outline-warning" data-toggle="modal" data-target="#modalEditar" >
							<span class="fa fa-pencil-square-o">
							     <?php 
								 $idFicha = $fichaC['id_ficha_natural'];
								 ?>
							<a href="<?php echo $urlSitio.'almacenar/actualizarfichaN.php?idFicha='.$idFicha; ?>"><img src="../images/editar.png" > </a> 
							</span>
						</span>
					</td>
					    <td style="text-align: center;">
						<span class="btn btn-outline-danger">
							 <span class="fa fa-trash">
								 <?php 
								 $idFicha = $fichaC['id_ficha_natural'];
								 ?>
	
								<a href="<?php echo $urlSitio.'almacenar/borrarfichaN.php?idFicha='.$idFicha; ?>"><img src="../images/eliminar.png" > </a> 						
							</span>					
					<!--	<a href="<?//php echo $urlSitio; ?>almacenar/borrarfichaC.php">Eliminar</a>-->
						</span>
					</td>
					<td style="text-align: center; ">
					  <span class="btn btn-outline-info">
					  <?php 
								 $idFicha = $fichaC['id_ficha_natural'];
								 ?>
					  <a href="<?php echo $urlSitio.'almacenar/verF_N.php?idFicha='.(int)$idFicha; ?>"><img src="../images/ver.png" alt=""></a>
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