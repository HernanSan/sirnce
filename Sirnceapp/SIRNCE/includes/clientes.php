<?php
include("../dll/config.php");
include("../dll/class_mysqli.php");
@include("cabecera.php");
?>
<div class="contenedor2">
	<h2>Lista de clientes</h2>
	<?php 
		$miconexion= new clase_mysqli7;
 		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
 		$miconexion->consulta("select nombres, apellidos, cedula, correo from inscritos");
 		$miconexion->verconsulta();
 	?>
</div>

<?php
include("piePagina.php");
?>