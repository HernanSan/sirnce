<?php 
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$sql = "UPDATE fichapatrimonionatural  SET fecha = '$fecha',nombre ='$nombre', descripcion='$descripcion',
provincia='$provincia', canton='$canton', parroquia='$parroquia', geografia='$geografia', 
floraCaracteristica='$floraCaracteristica', faunaCaracteristica ='$faunaCaracteristica',
actividades= '$actividades',recomendaciones = '$recomendaciones', facilidades= '$facilidad', comollegar='$llegar',
imagen='$img' WHERE id_ficha_natural= '$idFicha'";

$miconexion->consulta($sql);
echo '<script>alert("Datos Actualizados..");</script>';
echo "<script>location.href='FichasNaturales.php'</script>";
?>