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

 <form action="guardarEncuestaP3.php" method = "POST" enctype="multipart/form-data" class="encuesta ">
   
 <h3>REFERENCIAS E INTENCIÓN DEL DESTINO </h3><br>
    <div class="referenciasID">

    <p class="lugarT"><b>5. ¿Usted conoce el lugar Turistico?</b> <br>
        <input type="radio" name="lugar" value="si"/><label>SI</label><br/>
        <input type="radio" name="lugar" value="no"/><label>NO</label>
    </p>

    <h4 class= "opcion">Si su respuesta es NO pase a la pregunta 8</h4>  <br>

    <p class="pregunta6"><b>6. ¿Haz realizado turismo en este destino?</b> <br>
      <input type="radio" name="destino" value="si"/><label>SI</label><br/>
      <input type="radio" name="destino" value="no"/><label>NO</label><br/>
    </p><br>

    
    <div class="pregunta7">
    <p >
    <b>7. Califique las fuentes de información sobre la satisfacción de su viaje, siendo 1 ninguna intensidad y 5 mucha intensidad. </b>
    <p>a. Agencia de viajes 
      <select name="agencia">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
    <p>b. Redes Sociales
      <select name="redes">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>

    <p>c. Amigos y familiares
      <select name="amigos">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>

    </p><p>d. Experiencias de visitas anteriores 
      <select name="experiencia">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
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
    <input type="checkbox" name="viaje" value="solo"/><label>Solo</label><br/>
  
     <input type="checkbox" name="viaje" value="en familia"/><label>En familia</label>
      número de Personas:
       <input type="number" name="personas" placeholder="" size="4"/><br>
      <input type="checkbox" name="viaje" value="con amigos"/><label>Con amigos</label>
       número de Personas:
    <input type="number" name="personas" placeholder="" size="4"/><br>
   </p> 
<div class="pregunta10">
  <p ><b>11. Califique, el motivo principal para viajar al cantón, sobre la satisfacción de su viaje, siendo 1 ninguna intensidad y 5 mucha intensidad.</b><br>
    <p>a. Conocer un lugar diferente 
      <select name="lugar_diferente">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
    <p>b. Descansar y relajarse	 
      <select name="descansar">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
    <p>c. Diversión y placer
      <select name="diversion">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
    <p>d.Disfrutar la gastronomía
      <select name="disfrutar">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
    <p>e.	Enriquecimiento cultural
      <select name="enrrequicimiento">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
    <p>f.	Vacaciones familiares
      <select name="vacaciones">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
    <p>g. Negocios	
      <select name="negocio">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
    <p>h.	Actos sociales y deportivos		
      <select name="acto_social">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
  </p>
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
    
   
  <p>
   <input class="guardar_E" type="submit" value="Continuar">
   
  </p>
</form>   
<!--<div class="atras_E"><button ><a href="<?php echo $urlSitio; ?>almacenar/actualizarE_P1.php">Atras</a></button></div> -->

<div class="atras_E"><button ><a href="<?php echo $urlSitio.'almacenar/actualizarE_P1.php?$idE='.$idE; ?>">Atras</a></button></div>

</body>
</html><br><br>
<?php
include("../includes/piePagina2.php");
?>  