<?php 
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$sql = "UPDATE fichapatrimoniocultural  SET fecha = '$fecha',nombre_patrimonio ='$nombre',tipo ='$tipo',
caracteristicas='$caracteristicas',provincia='$provincia',canton='$canton',parroquia='$parroquia',comunidad='$comunidad',
tipoPatrimonioOficial='$nivelPatrimonio', registro='$registro',img='$img' WHERE id_ficha_cultural= '$idFicha' ";
$miconexion->consulta($sql);

echo '<script>alert("Datos Actualizados..");</script>';
echo "<script>location.href='FichasCulturales.php'</script>";
?>