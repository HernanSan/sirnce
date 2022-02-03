<?php 
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = "insert into encuestap3 values('','$fecha',
'$sexo', '$edad', '$instruccion',
'$residencia', '$lugar', '$destino',
'$agencia','$redes', '$amigos',
'$experiencia','$ruta', '$actividades',
'$viaje','$personas','$lugar_diferente',
'$descansar','$diversion','$disfrutar',
'$enrrequicimiento','$vacaciones','$negocio',
'$acto_social', '$eleccion','$tiempo','$transporte',
'$servicioTuristico','$redSocial','$dias', '$gasto',
'$alojamiento','$restauracion','$ocio','$experiencia',
'$viaje_global','$artesanias','$atractivos','$flora_fauna',
'$actividades_culturales','$calidad', '$recomendacion',
'$volver_visitar','$gasto_visita',  '$valor')";

$miconexion->consulta($sql);
exit();
echo '<script>alert("Datos Guardados 👍");</script>';
echo "<script>location.href='registrarEncuestaP2.php'</script>";
?>