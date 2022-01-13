<?php 
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = "insert into encuestas values('', '', '$genero','$edad','$instruccion','$recidencia','$lugar','$destino','','$ruta','$actividades','$viaje','','','$eleccion','$tiempo','$transporte','$servicioTuristico','$redSocial','$dias','$gasto','','$calidad','$recomendacion','$volver_visitar','$gasto_visita', '$remuneracion')";
$sql = "insert into forma_viajar values('', '$personas')";
$sql = "insert into satisfaccion_viaje values('', '$agencia' ,'$redes','$amigos','$experiencia')";
$sql = "insert into motivo_viaje values('', '$lugar_diferente', '$descansar', '$diversion', '$disfrutar', '$enrrequicimiento', '$vacaciones', '$negocio', '$acto_social')";
$sql = "insert into satisfaccion_viaje_canton values('', '$alojamiento', '$restauracion', '$ocio', '$experiencia', '$viaje_global', '$artesanias', '$atractivos', '$flora_fauna', '$actividades_culturales')";
$miconexion->consulta($sql);

echo '<script>alert("Datos Guardados..");</script>';
//echo "<script>location.href=''.php'</script>";
?>