<?php 
include("../dll/config.php");
include("../dll/class_mysqli.php");
@include("../includes/cabecera2.php");
$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
extract($_GET);

$sql = "select * from encuestap3 where id=$idE";
$miconexion->consulta($sql);
$listaUser= $miconexion->consultalista();
?>
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google" content="nositelinkssearchbox">
    <title>Ficha Cultural</title>
</head><br><br>
<body class="datos_E">
    <h1 class="tituloF_PC">Actualizacion de Encuestas</h1>
    <br>
    <form action="updateE.php" method = "POST" enctype="multipart/form-data" class="encuesta">
    <h3>A. PERFIL SOCIODEMOGRÁFICO</h3><br>
    <input type="hidden" name="idE" value = "<?php  echo $listaUser[0]?>"/><br>
    <p class="fecha_E">          
         <b>Fecha: </b><br><br>
         <?php $fcha = date("Y-m-d");?>
         <input type="date" class="form-control" name ="fecha" value="<?php  echo $listaUser[1]?>"required> 
        
    </p><br> <br>

    <div class="perfil_S">
    <p class=" genero">
      <b>1. Género:</b><br>
        <input type="radio" name="sexo" value="<?php  echo $listaUser[2]?>"/><label>Masculino</label><br/>
        <input type="radio" name="sexo" value="<?php  echo $listaUser[2]?>"/><label>Femenino</label><br/>
    </p>

    <p class="edad"><b>2. Edad: </b><br>
      <input type="text" name="edad" value="<?php  echo $listaUser[3]?>" size="10"/><br>
    </p>

    <p class="nivelI">
      <b>3. Nivel de Instruccion:</b><br>
        <input type="radio" name="instruccion" value="<?php  echo $listaUser[4]?>"/><label>Ninguno</label><br/>
        <input type="radio" name="instruccion" value="<?php  echo $listaUser[4]?>"/><label>Primario</label><br/>
        <input type="radio" name="instruccion" value="<?php  echo $listaUser[4]?>"/><label>Secundario</label><br/>
        <input type="radio" name="instruccion" value="<?php  echo $listaUser[4]?>"/><label>Superior</label><br/>
        <input type="radio" name="instruccion" value="<?php  echo $listaUser[4]?>"/><label>Posgrado</label><br/>
    </p>

    <p class="localidad">
      <b>4. Su localidad de residencia:</b><br>
        <input type="text" name="residencia" value= "<?php  echo $listaUser[5]?>" size="15"/><br>
    </p>
    </div> <br>

    <h3>REFERENCIAS E INTENCIÓN DEL DESTINO </h3><br>
    <div class="referenciasID">

    <p class="lugarT"><b>5. ¿Usted conoce el lugar Turistico?</b> <br>
        <input type="radio" name="lugar" value="<?php  echo $listaUser[6]?>"/><label>SI</label><br/>
        <input type="radio" name="lugar" value="<?php  echo $listaUser[6]?>"/><label>NO</label>
    </p>

    <p class="pregunta6"><b>6. ¿Haz realizado turismo en este destino?</b> <br>
      <input type="radio" name="destino" value="<?php  echo $listaUser[7]?>"/><label>SI</label><br/>
      <input type="radio" name="destino" value="<?php  echo $listaUser[7]?>"/><label>NO</label><br/>
    </p><br>

    
    <div class="pregunta7">
    <p >
    <b>7. Califique las fuentes de información sobre la satisfacción de su viaje, siendo 1 ninguna intensidad y 5 mucha intensidad. </b>
   
<div class="form-check form-check-inline">
    a. Agencia de viajes &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="agencia" id="inlineRadio1" value="<?php  echo $listaUser[8]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="agencia" id="inlineRadio2" value="<?php  echo $listaUser[8]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="agencia" id="inlineRadio2" value="<?php  echo $listaUser[8]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="agencia" id="inlineRadio2" value="<?php  echo $listaUser[8]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="agencia" id="inlineRadio2" value="<?php  echo $listaUser[8]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
</div>

<div class="form-check form-check-inline">
  b. Redes Sociales &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="redes" id="inlineRadio1" value="<?php  echo $listaUser[9]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="redes" id="inlineRadio2" value="<?php  echo $listaUser[9]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="redes" id="inlineRadio2" value="<?php  echo $listaUser[9]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="redes" id="inlineRadio2" value="<?php  echo $listaUser[9]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="redes" id="inlineRadio2" value="<?php  echo $listaUser[9]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
</div>

<div class="form-check form-check-inline">
  c. Amigos &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="amigos" id="inlineRadio1" value="<?php  echo $listaUser[10]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="amigos" id="inlineRadio2" value="<?php  echo $listaUser[10]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="amigos" id="inlineRadio2" value="<?php  echo $listaUser[10]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="amigos" id="inlineRadio2" value="<?php  echo $listaUser[10]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="amigos" id="inlineRadio2" value="<?php  echo $listaUser[10]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
</div>

<div class="form-check form-check-inline">
  d. Experiencia  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio1" value="<?php  echo $listaUser[11]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="<?php  echo $listaUser[11]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="<?php  echo $listaUser[11]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="<?php  echo $listaUser[11]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="<?php  echo $listaUser[11]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
</div>


  </p></div> <br>
  
  <p class="pregunta8"><b>8. ¿Le gustaria visitar la ruta? </b><br>
    <input type="radio" name="ruta" value="<?php  echo $listaUser[12]?>"/><label>SI</label><br/>
    <input type="radio" name="ruta" value="<?php  echo $listaUser[12]?>"/><label>NO</label><br/>
  </p>

  <p class="pregunta9"><b>9.¿Qué actividades le gustaría realizar en esta ruta? </b> <br>
    <input type="checkbox" name="actividades" value="<?php  echo $listaUser[13]?>"/><label>Relatos y leyendas anscestrales</label><br/>      <input type="checkbox" name="actividades" value="Observación de la belleza paisajística"/><label>Observación de la belleza paisajística</label><br/>
    <input type="checkbox" name="actividades" value="<?php  echo $listaUser[13]?>"/><label>Observación de aves</label><br/>
    <input type="checkbox" name="actividades" value="<?php  echo $listaUser[13]?>"/><label>Camping</label><br/>
    <input type="checkbox" name="actividades" value="<?php  echo $listaUser[13]?>"/><label>Agroturismo</label><br/>
    <input type="checkbox" name="actividades" value="<?php  echo $listaUser[13]?>"/><label>Visita a lugares</label><br/>
    <input type="checkbox" name="actividades" value="<?php  echo $listaUser[13]?>"/><label>Compra de artesanías</label><br/>
    <input type="checkbox" name="actividades" value="<?php  echo $listaUser[13]?>"/><label>Turismo comunitario</label><br/>
    <input type="checkbox" name="actividades" value="<?php  echo $listaUser[13]?>"/><label>Otros</label><br/>
  </p>

  <p class="pregunta10">
    <b>10. ¿Cuál sería su forma de viajar?</b><br>
    <input type="radio" name="viaje" value="<?php  echo $listaUser[14]?>"/><label>Solo</label><br/>
    <input type="radio" name="viaje" value="<?php  echo $listaUser[14]?>"/><label>En familia</label> <br>
    <input type="radio" name="viaje" value="<?php  echo $listaUser[14]?>"/><label>Con amigos</label> <br>
       número de Personas: <br>
    <input type="number" name="personas" value= "<?php  echo $listaUser[15]?>" size="2"/><br>
   </p> 
<div class="pregunta10">
  <p ><b>11. Califique, el motivo principal para viajar al cantón, sobre la satisfacción de su viaje, siendo 1 ninguna intensidad y 5 mucha intensidad.</b><br>
    
  <div class="form-check form-check-inline">
    a. Conocer un lugar diferente &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="lugar_diferente" id="inlineRadio1" value="<?php  echo $listaUser[16]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="lugar_diferente" id="inlineRadio2" value="<?php  echo $listaUser[16]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="lugar_diferente" id="inlineRadio2" value="<?php  echo $listaUser[16]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="lugar_diferente" id="inlineRadio2" value="<?php  echo $listaUser[16]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="lugar_diferente" id="inlineRadio2" value="<?php  echo $listaUser[16]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div>

  <div class="form-check form-check-inline">
    b. Descansar y relajarse  ㅤ  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  
    <input class="form-check-input" type="radio" name="descansar" id="inlineRadio1" value="<?php  echo $listaUser[17]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="descansar" id="inlineRadio2" value="<?php  echo $listaUser[17]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="descansar" id="inlineRadio2" value="<?php  echo $listaUser[17]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="descansar" id="inlineRadio2" value="<?php  echo $listaUser[17]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="descansar" id="inlineRadio2" value="<?php  echo $listaUser[17]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div>

  <div class="form-check form-check-inline">
    c. Diversión y placer  ㅤㅤ &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="diversion" id="inlineRadio1" value="<?php  echo $listaUser[18]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="diversion" id="inlineRadio2" value="<?php  echo $listaUser[18]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="diversion" id="inlineRadio2" value="<?php  echo $listaUser[18]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="diversion" id="inlineRadio2" value="<?php  echo $listaUser[18]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="diversion" id="inlineRadio2" value="<?php  echo $listaUser[18]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div>

  <div class="form-check form-check-inline">
    d.Disfrutar la gastronomía ㅤ &nbsp &nbsp  &nbsp &nbsp &nbsp 
    <input class="form-check-input" type="radio" name="disfrutar" id="inlineRadio1" value="<?php  echo $listaUser[19]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="disfrutar" id="inlineRadio2" value="<?php  echo $listaUser[19]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="disfrutar" id="inlineRadio2" value="<?php  echo $listaUser[19]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="disfrutar" id="inlineRadio2" value="<?php  echo $listaUser[19]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="disfrutar" id="inlineRadio2" value="<?php  echo $listaUser[19]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div>

  <div class="form-check form-check-inline">
    e.  Enriquecimiento cultural &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="enrrequicimiento" id="inlineRadio1" value="<?php  echo $listaUser[20]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="enrrequicimiento" id="inlineRadio2" value="<?php  echo $listaUser[20]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="enrrequicimiento" id="inlineRadio2" value="<?php  echo $listaUser[20]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="enrrequicimiento" id="inlineRadio2" value="<?php  echo $listaUser[20]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="enrrequicimiento" id="inlineRadio2" value="<?php  echo $listaUser[20]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div>

<div class="form-check form-check-inline">
    f.  Vacaciones familiares  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="vacaciones" id="inlineRadio1" value="<?php  echo $listaUser[21]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="vacaciones" id="inlineRadio2" value="<?php  echo $listaUser[21]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="vacaciones" id="inlineRadio2" value="<?php  echo $listaUser[21]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="vacaciones" id="inlineRadio2" value="<?php  echo $listaUser[21]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="vacaciones" id="inlineRadio2" value="<?php  echo $listaUser[21]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
</div>

  <div class="form-check form-check-inline">
    g. Negocios  ㅤ ㅤ ㅤ ㅤ &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="negocio" id="inlineRadio1" value="<?php  echo $listaUser[22]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="negocio" id="inlineRadio2" value="<?php  echo $listaUser[22]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="negocio" id="inlineRadio2" value="<?php  echo $listaUser[22]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="negocio" id="inlineRadio2" value="<?php  echo $listaUser[22]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="negocio" id="inlineRadio2" value="<?php  echo $listaUser[22]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    h.  Actos sociales y deportivos  ㅤ  &nbsp
    <input class="form-check-input" type="radio" name="acto_social" id="inlineRadio1" value="<?php  echo $listaUser[23]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="acto_social" id="inlineRadio2" value="<?php  echo $listaUser[23]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="acto_social" id="inlineRadio2" value="<?php  echo $listaUser[23]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="acto_social" id="inlineRadio2" value="<?php  echo $listaUser[23]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="acto_social" id="inlineRadio2" value="<?php  echo $listaUser[23]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  </div>
  <p class="pregunta10">
  <b>12. Mencione la razón más importante por la que usted elige un destino:  </b><br>
    <input type="checkbox" name="eleccion" value="<?php  echo $listaUser[24]?>"/><label>a.	Seguridad	</label><br>
    <input type="checkbox" name="eleccion" value="<?php  echo $listaUser[24]?>"/><label>b.	Aplicación de normas de bioseguridad</label><br>
    <input type="checkbox" name="eleccion" value="<?php  echo $listaUser[24]?>"/><label>c.	Atractivos turísticos naturales	</label><br>
    <input type="checkbox" name="eleccion" value="<?php  echo $listaUser[24]?>"/><label>d.	Oferta turística cultural</label><br>
    <input type="checkbox" name="eleccion" value="<?php  echo $listaUser[24]?>"/><label>e.	Calidad en los servicios turísticos</label><br>
    <input type="checkbox" name="eleccion" value="<?php  echo $listaUser[24]?>"/><label>f.	Clima	</label><br>
    <input type="checkbox" name="eleccion" value="<?php  echo $listaUser[24]?>"/><label>g.	otros</label>
  </p>

  <p class="pregunta10">
    <b>13.	¿En qué tiempo estaría dispuesto a viajar? </b><br>
    <input type="checkbox" name="tiempo" value="<?php  echo $listaUser[25]?>"/><label>a.	En menos de un mes</label><br>
    <input type="checkbox" name="tiempo" value="<?php  echo $listaUser[25]?>"/><label>b.	Más de un mes</label><br>
    <input type="checkbox" name="tiempo" value="<?php  echo $listaUser[25]?>"/><label>c.	En un año	</label><br>
  </p>

  <p class="pregunta10">
    <b>14.	¿Cuál sería el medio de transporte que utilizaría para viajar? </b><br>
    <input type="checkbox" name="transporte" value="<?php  echo $listaUser[26]?>"/><label>a.	Autobús	</label><br>
    <input type="checkbox" name="transporte" value="<?php  echo $listaUser[26]?>"/><label>b.	Automóvil	</label><br>
    <input type="checkbox" name="transporte" value="<?php  echo $listaUser[26]?>"/><label>d.	Ninguno</label><br>
  </p>

  <p class="pregunta10">
    <b>15. ¿Qué tipo de servicios turísticos contrataría en los lugares a visitar?</b><br>
    <input type="checkbox" name="servicioTuristico" value="<?php  echo $listaUser[27]?>"/><label>a.	Alojamiento</label><br>
    <input type="checkbox" name="servicioTuristico" value="<?php  echo $listaUser[27]?>"/><label>b.	Alimentos y bebidas</label><br>
    <input type="checkbox" name="servicioTuristico" value="<?php  echo $listaUser[27]?>"/><label>c.	Transporte</label><br>
    <input type="checkbox" name="servicioTuristico" value="<?php  echo $listaUser[27]?>"/><label>d.	Ninguno</label><br>
  </p>

  <p class="pregunta10">
    <b>16. ¿Cuál sería la red social en la que usted prefería se promocione la oferta?</b><br> 
    <input type="checkbox" name="redSocial" value="<?php  echo $listaUser[28]?>"/><label>e.	Otro</label><br>
    <input type="checkbox" name="redSocial" value="<?php  echo $listaUser[28]?>"/><label>a.	Facebook</label><br>
    <input type="checkbox" name="redSocial" value="<?php  echo $listaUser[28]?>"/><label>b.	Twitter</label><br>
    <input type="checkbox" name="redSocial" value="<?php  echo $listaUser[28]?>"/><label>c.	Instagram</label><br>
    <h4 class="pregunta10">Otro</h4>
    <p class="pregunta10">
        1.	¿Cuántos días permanecería en el lugar visitado? 
        <input type="number" name="dias" value="<?php  echo $listaUser[29]?>" size="5"/><br><br>
        3.	¿Cuánto estaría dispuesto a gastar en el viaje? 
        <input type="number" name="gasto" value="<?php  echo $listaUser[30]?>" size="5"/><br>
      </p>
  </p>
</div><br><br>
  <h3>C.	SATISFACCIÓN Y RECOMENDACIÓN </h3> <br>
  <div class="referenciasID">
  <div class="pregunta17">
  <p>
  <b >17.¿Cómo califica la satisfacción de los servicios ofrecidos? siendo 1 muy insatisfactorio y 5 muy satisfactorio.  </b>

    <div class="form-check form-check-inline">
    a. Alojamiento  ㅤㅤㅤㅤㅤ
    <input class="form-check-input" type="radio" name="alojamiento" id="inlineRadio1" value="<?php  echo $listaUser[31]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="alojamiento" id="inlineRadio2" value="<?php  echo $listaUser[31]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="alojamiento" id="inlineRadio2" value="<?php  echo $listaUser[31]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="alojamiento" id="inlineRadio2" value="<?php  echo $listaUser[31]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="alojamiento" id="inlineRadio2" value="<?php  echo $listaUser[31]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    b.  Restauración ㅤㅤㅤㅤ  &nbsp
    <input class="form-check-input" type="radio" name="restauracion" id="inlineRadio1" value="<?php  echo $listaUser[32]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="restauracion" id="inlineRadio2" value="<?php  echo $listaUser[32]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="restauracion" id="inlineRadio2" value="<?php  echo $listaUser[32]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="restauracion" id="inlineRadio2" value="<?php  echo $listaUser[32]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="restauracion" id="inlineRadio2" value="<?php  echo $listaUser[32]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    c.  Ocio y diversiones   ㅤㅤ 
    <input class="form-check-input" type="radio" name="ocio" id="inlineRadio1" value="<?php  echo $listaUser[33]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="ocio" id="inlineRadio2" value="<?php  echo $listaUser[33]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="ocio" id="inlineRadio2" value="<?php  echo $listaUser[33]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="ocio" id="inlineRadio2" value="<?php  echo $listaUser[33]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="ocio" id="inlineRadio2" value="<?php  echo $listaUser[33]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    d.  Experiencia    ㅤㅤㅤㅤㅤ
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio1" value="<?php  echo $listaUser[34]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="<?php  echo $listaUser[34]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="<?php  echo $listaUser[34]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="<?php  echo $listaUser[34]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="<?php  echo $listaUser[34]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    e.  El viaje global ㅤㅤㅤㅤ
    <input class="form-check-input" type="radio" name="viaje_global" id="inlineRadio1" value="<?php  echo $listaUser[35]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="viaje_global" id="inlineRadio2" value="<?php  echo $listaUser[35]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="viaje_global" id="inlineRadio2" value="<?php  echo $listaUser[35]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="viaje_global" id="inlineRadio2" value="<?php  echo $listaUser[35]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="viaje_global" id="inlineRadio2" value="<?php  echo $listaUser[35]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    f.  Artesanías  ㅤㅤㅤㅤ &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="artesanias" id="inlineRadio1" value="<?php  echo $listaUser[36]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="artesanias" id="inlineRadio2" value="<?php  echo $listaUser[36]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="artesanias" id="inlineRadio2" value="<?php  echo $listaUser[36]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="artesanias" id="inlineRadio2" value="<?php  echo $listaUser[36]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="artesanias" id="inlineRadio2" value="<?php  echo $listaUser[36]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    g.  Atractivos turísticos  &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="atractivos" id="inlineRadio1" value="<?php  echo $listaUser[37]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="atractivos" id="inlineRadio2" value="<?php  echo $listaUser[37]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="atractivos" id="inlineRadio2" value="<?php  echo $listaUser[37]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="atractivos" id="inlineRadio2" value="<?php  echo $listaUser[37]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="atractivos" id="inlineRadio2" value="<?php  echo $listaUser[37]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    h.  Flora y fauna  ㅤㅤ &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="flora_fauna" id="inlineRadio1" value="<?php  echo $listaUser[38]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="flora_fauna" id="inlineRadio2" value="<?php  echo $listaUser[38]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="flora_fauna" id="inlineRadio2" value="<?php  echo $listaUser[38]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="flora_fauna" id="inlineRadio2" value="<?php  echo $listaUser[38]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="flora_fauna" id="inlineRadio2" value="<?php  echo $listaUser[38]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    i.  Actividades culturales &nbsp 
    <input class="form-check-input" type="radio" name="actividades_culturales" id="inlineRadio1" value="<?php  echo $listaUser[39]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="actividades_culturales" id="inlineRadio2" value="<?php  echo $listaUser[39]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="actividades_culturales" id="inlineRadio2" value="<?php  echo $listaUser[39]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="actividades_culturales" id="inlineRadio2" value="<?php  echo $listaUser[39]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="actividades_culturales" id="inlineRadio2" value="<?php  echo $listaUser[39]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  </div>
  
  <div class="pregunta17">
  <p>
  <b>18.	Cómo califica la expectativa de su viaje con respecto a la calidad de los servicios ofrecidos en el destino visitado, siendo 1 muy baja y 5 muy alta. </b>
    <div class="form-check form-check-inline">
    a.  Expectativa de los servicios recibidos respecto a la calidad. ㅤ 
    <input class="form-check-input" type="radio" name="calidad" id="inlineRadio1" value="<?php  echo $listaUser[40]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="calidad" id="inlineRadio2" value="<?php  echo $listaUser[40]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="calidad" id="inlineRadio2" value="<?php  echo $listaUser[40]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="calidad" id="inlineRadio2" value="<?php  echo $listaUser[40]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="calidad" id="inlineRadio2" value="<?php  echo $listaUser[40]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  </div>

    <div class="pregunta17">
    <p >
    <b>19.	Recomendaría visitar el cantón, donde 1 es nunca y 5 con toda seguridad.  </b>
    
  <div class="form-check form-check-inline">
    a.  Recomendaría que visiten el Lugar ㅤㅤ
    <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio1" value="<?php  echo $listaUser[41]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio2" value="<?php  echo $listaUser[41]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio2" value="<?php  echo $listaUser[41]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio2" value="<?php  echo $listaUser[41]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio2" value="<?php  echo $listaUser[41]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 
</div>

  <div class="pregunta17">
  <p>
    <b>20.	Piensa volver a visitar el cantón, donde 1 es nunca y 5 con toda seguridad </b>
    <div class="form-check form-check-inline">
    a.  Piensa visitar el cantón  ㅤㅤㅤ
    <input class="form-check-input" type="radio" name="volver_visitar" id="inlineRadio1" value="<?php  echo $listaUser[42]?>">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="volver_visitar" id="inlineRadio2" value="<?php  echo $listaUser[42]?>">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="volver_visitar" id="inlineRadio2" value="<?php  echo $listaUser[42]?>">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="volver_visitar" id="inlineRadio2" value="<?php  echo $listaUser[42]?>">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="volver_visitar" id="inlineRadio2" value="<?php  echo $listaUser[42]?>">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 
</div>

  <div class="pregunta17">
  <p>
  <b>21.	¿Cuánto gastó en la visita? </b> <br>
     <input type="number" name="gasto_visita" value="<?php  echo $listaUser[43]?>" size="15"/><br>
  </p>
  </div>

  <div class="pregunta17">
  <P> 
  <b>22.	¿Cuál es el valor de remuneración que usted percibe mensualmente?</b><br>
    <input type="number" name="valor" value="<?php  echo $listaUser[44]?>" size="15"/><br>
  </p><br><br><br>
  </div>
  </div>

  <p>
    <input type="submit" value="Guardar información Actualizada">
  </p>
</form>
</body>
</html> <br><br>
<?php
include("../includes/piePagina2.php");
?>         