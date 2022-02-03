<?php 
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = "insert into fichapatrimonionatural values('','$fecha','$nombre','$descripcion','$provincia','$canton','$parroquia','$geografia',
'$floraCaracteristica','$faunaCaracteristica','$actividades','$recomendaciones','$facilidad','$llegar','$img')";

$miconexion->consulta($sql);

echo '<script>alert("Datos Guardados..");</script>';
echo "<script>location.href='FichasNaturales.php'</script>";
?>