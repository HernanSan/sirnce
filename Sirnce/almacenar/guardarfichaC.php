<?php 
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = "insert into fichapatrimoniocultural values('','$fecha', '$nombre','$tipo',
'$caracteristicas','$provincia','$canton','$parroquia','$comunidad','$nivelPatrimonio','$registro','$img')";
$miconexion->consulta($sql);
echo '<script>alert("Datos Guardados 👍");</script>';
echo "<script>location.href='FichasCulturales.php'</script>";
?>