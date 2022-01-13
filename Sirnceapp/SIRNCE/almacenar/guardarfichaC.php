<?php 
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = "insert into ubicacion values('', '$provincia', '$canton','$parroquia')";
$sql = "insert into fichapatrimoniocultural values('', '$fcha' '$nombre','$tipo','$caracteristicas','$comunidad','$nivelPatrimonio','$registro','$img')";
$miconexion->consulta($sql);

echo '<script>alert("Datos Guardados 👍");</script>';
echo "<script>location.href='FichasCulturales.php'</script>";
?>