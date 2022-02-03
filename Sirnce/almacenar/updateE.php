<?php 
extract($_POST);
include("../dll/config.php");
include("../dll/class_mysqli.php");

$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

$sql = "UPDATE encuestaP1  SET  fecha ='$fecha', sexo='$sexo',edad='$edad',
instruccion='$instruccion',residencia='$residencia', lugar='$lugar', destino= '$destino',
agencia='$agencia',redes='$redes', amigos= '$amigos',
experiencias='$experiencia',ruta='$ruta', actividades='$actividades',
viaje='$viaje',	num_personas='$personas', lugar_diferente'$lugar_diferente',
descansar='$descansar',diversion='$diversion',disfrutar='$disfrutar',
enrrequicimiento='$enrrequicimiento',vacaciones='$vacaciones',negocio='$negocio',
acto_social='$acto_social', eleccion='$eleccion',tiempo='$tiempo',transporte='$transporte',
servicioTuristico='$servicioTuristico',redSocial='$redSocial',dias='$dias', gastar='$gasto',
alojamiento='$alojamiento',restauracion='$restauracion',ocio='$ocio',experiencia='$experiencia',
viaje_global='$viaje_global',artesanias='$artesanias',atractivos'$atractivos',flora_fauna='$flora_fauna',
actividades_culturales='$actividades_culturales',calidad='$calidad', recomendacion='$recomendacion',
volver_visitar='$volver_visitar',gasto_visita='$gasto_visita', 	remuneracion='$valor' WHERE id ='$idE'";

$miconexion->consulta($sql);

//echo "<script>location.href='Encuestas.php'</script>";
?>