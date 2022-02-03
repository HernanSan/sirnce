<?php 
extract($_GET);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = "DELETE from fichapatrimonionatural where fichapatrimonionatural.id_ficha_natural=$idFicha;";
$miconexion->consulta($sql);
echo '<script>alert("Datos Eliminados 😃..");</script>';

echo "<script>location.href='FichasNaturales.php'</script>";
?>
