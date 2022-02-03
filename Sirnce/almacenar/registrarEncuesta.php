<?php 
include("../dll/config.php");
@include("../includes/cabecera2.php")
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">
<head>   
  
    <title>Encuesta</title>
</head><br><br>
<body class="datos_E"> 
    <h1 class="titulo_E">Encuesta</h1> <br><br>

 <form action="guardarEncuesta.php" method = "POST" enctype="multipart/form-data" class="encuesta ">

   <p class="fecha_E">          
         <b>Fecha: </b><br><br>
         <?php $fcha = date("Y-m-d");?>
         <input type="date" class="form-control" name ="fecha" value="<?php echo $fcha;?> "required> 
        
    </p><br> <br>

    <h3>A. PERFIL SOCIODEMOGRÁFICO</h3><br>

    <div class="perfil_S">
    <p class=" genero">
      <b>1. Género:</b><br>
        <input type="radio" name="sexo" value="M"/><label>Masculino</label><br/>
        <input type="radio" name="sexo" value="F"/><label>Femenino</label><br/>
    </p>

    <p class="edad"><b>2. Edad: </b><br>
      <input type="text" name="edad" placeholder="Ingrese su edad" size="10"/><br>
    </p>

    <p class="nivelI">
      <b>3. Nivel de Instruccion:</b><br>
        <input type="radio" name="instruccion" value="ninguno"/><label>Ninguno</label><br/>
        <input type="radio" name="instruccion" value="primario"/><label>Primario</label><br/>
        <input type="radio" name="instruccion" value="secundario"/><label>Secundario</label><br/>
        <input type="radio" name="instruccion" value="superior"/><label>Superior</label><br/>
        <input type="radio" name="instruccion" value="posgrado"/><label>Posgrado</label><br/>
    </p>

    <p class="localidad">
      <b>4. Su localidad de residencia:</b><br>
        <input type="text" name="residencia" placeholder="Ingrese su recidencia" size="30"/><br>
    </p>
    </div> <br>

    <h3>REFERENCIAS E INTENCIÓN DEL DESTINO </h3><br>
    <div class="referenciasID">

    <p class="lugarT"><b>5. ¿Usted conoce el lugar Turistico?</b> <br>
        <input type="radio" name="lugar" value="si"/><label>SI</label><br/>
        <input type="radio" name="lugar" value="no"/><label>NO</label>
    </p>

    <p class="pregunta6"><b>6. ¿Haz realizado turismo en este destino?</b> <br>
      <input type="radio" name="destino" value="si"/><label>SI</label><br/>
      <input type="radio" name="destino" value="no"/><label>NO</label><br/>
    </p><br>

    
    <div class="pregunta7">
    <p >
    <b>7. Califique las fuentes de información sobre la satisfacción de su viaje, siendo 1 ninguna intensidad y 5 mucha intensidad. </b>
   
<div class="form-check form-check-inline">
    a. Agencia de viajes &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="agencia" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="agencia" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="agencia" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="agencia" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="agencia" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
</div>

<div class="form-check form-check-inline">
  b. Redes Sociales &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="redes" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="redes" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="redes" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="redes" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="redes" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
</div>

<div class="form-check form-check-inline">
  c. Amigos &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="amigos" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="amigos" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="amigos" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="amigos" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="amigos" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
</div>

<div class="form-check form-check-inline">
  d. Experiencia  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
</div>


  </p></div> <br>
  
  <p class="pregunta8"><b>8. ¿Le gustaria visitar la ruta? </b><br>
    <input type="radio" name="ruta" value="si"/><label>SI</label><br/>
    <input type="radio" name="ruta" value="no"/><label>NO</label><br/>
  </p>

  <p class="pregunta9"><b>9.¿Qué actividades le gustaría realizar en esta ruta? </b> <br>
    <input type="checkbox" name="actividades" value="Relatos y leyendas anscestrales"/><label>Relatos y leyendas anscestrales</label><br/>      <input type="checkbox" name="actividades" value="Observación de la belleza paisajística"/><label>Observación de la belleza paisajística</label><br/>
    <input type="checkbox" name="actividades" value="Observación de aves"/><label>Observación de aves</label><br/>
    <input type="checkbox" name="actividades" value="Camping"/><label>Camping</label><br/>
    <input type="checkbox" name="actividades" value="Agroturismo"/><label>Agroturismo</label><br/>
    <input type="checkbox" name="actividades" value="Visita a lugares"/><label>Visita a lugares</label><br/>
    <input type="checkbox" name="actividades" value="Compra de artesanías"/><label>Compra de artesanías</label><br/>
    <input type="checkbox" name="actividades" value="Turismo comunitario"/><label>Turismo comunitario</label><br/>
    <input type="checkbox" name="actividades" value="Otros"/><label>Otros</label><br/>
  </p>

  <p class="pregunta10">
    <b>10. ¿Cuál sería su forma de viajar?</b><br>
    <input type="radio" name="viaje" value="solo"/><label>Solo</label><br/>
   <input type="radio" name="viaje" value="en familia"/><label>En familia</label> <br>
    <input type="radio" name="viaje" value="con amigos"/><label>Con amigos</label> <br>
       número de Personas: <br>
    <input type="number" name="personas" placeholder="" size="4"/><br>
   </p> 
<div class="pregunta10">
  <p ><b>11. Califique, el motivo principal para viajar al cantón, sobre la satisfacción de su viaje, siendo 1 ninguna intensidad y 5 mucha intensidad.</b><br>
    
  <div class="form-check form-check-inline">
    a. Conocer un lugar diferente &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="lugar_diferente" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="lugar_diferente" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="lugar_diferente" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="lugar_diferente" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="lugar_diferente" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div>

  <div class="form-check form-check-inline">
    b. Descansar y relajarse  ㅤ  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  
    <input class="form-check-input" type="radio" name="descansar" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="descansar" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="descansar" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="descansar" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="descansar" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div>

  <div class="form-check form-check-inline">
    c. Diversión y placer  ㅤㅤ &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="diversion" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="diversion" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="diversion" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="diversion" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="diversion" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div>

  <div class="form-check form-check-inline">
    d.Disfrutar la gastronomía ㅤ &nbsp &nbsp  &nbsp &nbsp &nbsp 
    <input class="form-check-input" type="radio" name="disfrutar" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="disfrutar" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="disfrutar" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="disfrutar" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="disfrutar" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div>

  <div class="form-check form-check-inline">
    e.  Enriquecimiento cultural &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="enrrequicimiento" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="enrrequicimiento" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="enrrequicimiento" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="enrrequicimiento" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="enrrequicimiento" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div>

<div class="form-check form-check-inline">
    f.  Vacaciones familiares  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="vacaciones" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="vacaciones" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="vacaciones" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="vacaciones" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="vacaciones" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
</div>

  <div class="form-check form-check-inline">
    g. Negocios  ㅤ ㅤ ㅤ ㅤ &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="negocio" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="negocio" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="negocio" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="negocio" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="negocio" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    h.  Actos sociales y deportivos  ㅤ  &nbsp
    <input class="form-check-input" type="radio" name="acto_social" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="acto_social" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="acto_social" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="acto_social" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="acto_social" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  </div>
  <p class="pregunta10">
  <b>12. Mencione la razón más importante por la que usted elige un destino:  </b><br>
    <input type="checkbox" name="eleccion" value="seguridad"/><label>a.	Seguridad	</label><br>
    <input type="checkbox" name="eleccion" value="aplicación de normas de bioseguridad"/><label>b.	Aplicación de normas de bioseguridad</label><br>
    <input type="checkbox" name="eleccion" value="Atractivos turísticos naturales"/><label>c.	Atractivos turísticos naturales	</label><br>
    <input type="checkbox" name="eleccion" value="Oferta turística cultural"/><label>d.	Oferta turística cultural</label><br>
    <input type="checkbox" name="eleccion" value="Calidad en los servicios turísticos"/><label>e.	Calidad en los servicios turísticos</label><br>
    <input type="checkbox" name="eleccion" value="f.Clima"/><label>f.	Clima	</label><br>
    <input type="checkbox" name="eleccion" value="otros"/><label>g.	otros</label>
  </p>

  <p class="pregunta10">
    <b>13.	¿En qué tiempo estaría dispuesto a viajar? </b><br>
    <input type="checkbox" name="tiempo" value="En menos de un mes"/><label>a.	En menos de un mes</label><br>
    <input type="checkbox" name="tiempo" value="Más de un mes"/><label>b.	Más de un mes</label><br>
    <input type="checkbox" name="tiempo" value="En un año"/><label>c.	En un año	</label><br>
  </p>

  <p class="pregunta10">
    <b>14.	¿Cuál sería el medio de transporte que utilizaría para viajar? </b><br>
    <input type="checkbox" name="transporte" value="autobús"/><label>a.	Autobús	</label><br>
    <input type="checkbox" name="transporte" value="automóvil"/><label>b.	Automóvil	</label><br>
    <input type="checkbox" name="transporte" value="ninguno"/><label>d.	Ninguno</label><br>
  </p>

  <p class="pregunta10">
    <b>15. ¿Qué tipo de servicios turísticos contrataría en los lugares a visitar?</b><br>
    <input type="checkbox" name="servicioTuristico" value="alojamiento"/><label>a.	Alojamiento</label><br>
    <input type="checkbox" name="servicioTuristico" value="alimentos y bebidas"/><label>b.	Alimentos y bebidas</label><br>
    <input type="checkbox" name="servicioTuristico" value="transporte"/><label>c.	Transporte</label><br>
    <input type="checkbox" name="servicioTuristico" value="ninguno"/><label>d.	Ninguno</label><br>
  </p>

  <p class="pregunta10">
    <b>16. ¿Cuál sería la red social en la que usted prefería se promocione la oferta?</b><br> 
    <input type="checkbox" name="redSocial" value="Facebook"/><label>a.	Facebook</label><br>
    <input type="checkbox" name="redSocial" value="twitter"/><label>b.	Twitter</label><br>
    <input type="checkbox" name="redSocial" value="instagram"/><label>c.	Instagram</label><br>
    <input type="checkbox" name="redSocial" value="otro"/><label>e.	Otro</label><br>

    <h4 class="pregunta10">Otro</h4>
    <p class="pregunta10">
        1.	¿Cuántos días permanecería en el lugar visitado? 
        <input type="number" name="dias" placeholder="" size="5"/><br><br>
        3.	¿Cuánto estaría dispuesto a gastar en el viaje? 
        <input type="number" name="gasto" placeholder="" size="5"/><br>
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
    <input class="form-check-input" type="radio" name="alojamiento" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="alojamiento" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="alojamiento" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="alojamiento" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="alojamiento" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    b.  Restauración ㅤㅤㅤㅤ  &nbsp
    <input class="form-check-input" type="radio" name="restauracion" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="restauracion" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="restauracion" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="restauracion" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="restauracion" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    c.  Ocio y diversiones   ㅤㅤ 
    <input class="form-check-input" type="radio" name="ocio" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="ocio" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="ocio" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="ocio" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="ocio" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    d.  Experiencia    ㅤㅤㅤㅤㅤ
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="experiencia" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    e.  El viaje global ㅤㅤㅤㅤ
    <input class="form-check-input" type="radio" name="viaje_global" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="viaje_global" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="viaje_global" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="viaje_global" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="viaje_global" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    f.  Artesanías  ㅤㅤㅤㅤ &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="artesanias" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="artesanias" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="artesanias" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="artesanias" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="artesanias" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    g.  Atractivos turísticos  &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="atractivos" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="atractivos" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="atractivos" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="atractivos" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="atractivos" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    h.  Flora y fauna  ㅤㅤ &nbsp &nbsp &nbsp &nbsp &nbsp
    <input class="form-check-input" type="radio" name="flora_fauna" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="flora_fauna" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="flora_fauna" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="flora_fauna" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="flora_fauna" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  <div class="form-check form-check-inline">
    i.  Actividades culturales &nbsp 
    <input class="form-check-input" type="radio" name="actividades_culturales" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="actividades_culturales" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="actividades_culturales" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="actividades_culturales" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="actividades_culturales" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  </div>
  
  <div class="pregunta17">
  <p>
  <b>18.	Cómo califica la expectativa de su viaje con respecto a la calidad de los servicios ofrecidos en el destino visitado, siendo 1 muy baja y 5 muy alta. </b>
    <div class="form-check form-check-inline">
    a.  Expectativa de los servicios recibidos respecto a la calidad. ㅤ 
    <input class="form-check-input" type="radio" name="calidad" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="calidad" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="calidad" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="calidad" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="calidad" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 

  </div>

    <div class="pregunta17">
    <p >
    <b>19.	Recomendaría visitar el cantón, donde 1 es nunca y 5 con toda seguridad.  </b>
    
  <div class="form-check form-check-inline">
    a.  Recomendaría que visiten el Lugar ㅤㅤ
    <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="recomendacion" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 
</div>

  <div class="pregunta17">
  <p>
    <b>20.	Piensa volver a visitar el cantón, donde 1 es nunca y 5 con toda seguridad </b>
    <div class="form-check form-check-inline">
    a.  Piensa visitar el cantón  ㅤㅤㅤ
    <input class="form-check-input" type="radio" name="volver_visitar" id="inlineRadio1" value="1">
    <label class="form-check-label" for="inlineRadio1">1</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="volver_visitar" id="inlineRadio2" value="2">
    <label class="form-check-label" for="inlineRadio2">2</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="volver_visitar" id="inlineRadio2" value="3">
    <label class="form-check-label" for="inlineRadio2">3</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="volver_visitar" id="inlineRadio2" value="4">
    <label class="form-check-label" for="inlineRadio2">4</label>
    &nbsp &nbsp
    <input class="form-check-input" type="radio" name="volver_visitar" id="inlineRadio2" value="5">
    <label class="form-check-label" for="inlineRadio2">5</label>
  </div> 
</div>

  <div class="pregunta17">
  <p>
  <b>21.	¿Cuánto gastó en la visita? </b> <br>
     <input type="number" name="gasto_visita" placeholder="" size="15"/><br>
  </p>
  </div>

  <div class="pregunta17">
  <P> 
  <b>22.	¿Cuál es el valor de remuneración que usted percibe mensualmente?</b><br>
    <input type="number" name="valor" placeholder="" size="15"/><br>
  </p><br><br><br>
  </div>
  </div>

  <p>
   <input class="guardar_E" type="submit" value="Guardar">
   <div class="atras_E"><button ><a  href="<?php echo $urlSitio; ?>almacenar/Encuestas.php">Atras</a></button></div>
  </p>
</form>   

</body>
</html><br><br>
<?php
include("../includes/piePagina2.php");
?>  