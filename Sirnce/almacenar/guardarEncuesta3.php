<?php 
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
/*$sql = "insert into encuestas values('','$fecha', '$genero','$edad','$instruccion',
'$residencia'
,'$lugar','$destino','$agencia','$redes','$amigos','$experiencia','$ruta',
'$actividades','$viaje','$personas','$lugar_diferente','$descansar','$diversion','$disfrutar',
'$enrrequicimiento','$vacaciones','$negocio','$acto_social','$eleccion','$tiempo','$transporte',
'$servicioTuristico','$redSocial','$dias',

'$alojamiento','$restauracion','$ocio','$experiencia',
'$viaje_global','$artesanias','$atractivos37','$flora_fauna','$actividades_culturales','$calidad',
'$recomendacion','$volver_visitar','$gasto_visita', '$remuneracion')";*/
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql2 = "insert into encuestaP3 values('',$alojamiento','$restauracion','$ocio','$experiencia',
'$viaje_global','$artesanias','$atractivos','$flora_fauna','$actividades_culturales','$calidad',
'$recomendacion','$volver_visitar','$gasto_visita', '$remuneracion')";
$miconexion->consulta($sql);
//echo '<script>alert("Datos Guardados 👍");</script>';
//echo "<script>location.href='Encuestas.php'</script>";
?>