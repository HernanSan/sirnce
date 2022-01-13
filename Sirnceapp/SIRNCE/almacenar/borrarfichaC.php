<?php 
extract($_GET);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
//$idfichaC = $_POST['idfichaC'];
//$sql = "DELETE from ubicacion where id_ubicaion= '$idficha'";
$sql = "DELETE from fichapatrimoniocultural where id_ficha_cultural= '$idFicha'";
//$sql = "DELETE from fichapatrimoniocultural where id_ficha_cultural= '$idFicha'";
    echo '<script>alert("Datos Eliminados 😃..");</script>';
   // exit();
    echo "<script>location.href='FichasCulturales.php'</script>";
?>
