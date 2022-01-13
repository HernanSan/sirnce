<?php 
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
//$sql = "UPDATE ubicacion set provincia='$provincia', canton='$canton', parroquia='$parroquia'where id_ubicaion= '$idFicha'";
$sql = "UPDATE fichapatrimoniocultural set nombre_patrimonio='$nombre',tipo='$tipo',caracteristicas='$caracteristicas',comunidad= '$comunidad',tipoPatrimonioOficial='$nivelPatrimonio',registro='$registro',img='$img' where id_ficha_cultural= '$idFicha'";
$miconexion->consulta($sql);
exit();
echo '<script>alert("Datos Actualizados..");</script>';
echo "<script>location.href='listafichasCulturales.php'</script>";
?>