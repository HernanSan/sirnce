<?php 
include("seguridad/secutiry.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Administracion del sistema</h1>

<h4>Bienvenido: <?php $_SESSION['nombreuser'];?> <a href="seguridad/salir.php?salir=true">Salir</a></h4>
<?php 
	$miconexion->consulta("select * from usuarios ");
 	$miconexion->verconsulta();

?>
</body>
</html>