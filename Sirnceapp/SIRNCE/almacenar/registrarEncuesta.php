<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>
<body>
    <h1>Encuesta</h1>
    <formaction="#" method= "POST">
    <h3>A. PERFIL SOCIODEMOGRÁFICO</h3>
    <p>
      <b>1. Género:</b><br>
        <input type="radio" name="genero" value="M"/><label>Masculino</label><br/>
        <input type="radio" name="genero" value="F"/><label>Femenino</label><br/>
    </p>

    <p><b>2. Edad: </b><br>
      <input type="text" name="edad" placeholder="Ingrese su edad" size="10"/><br>
    </p>

    <p>
      <b>3. Nivel de Instruccion:</b><br>
        <input type="radio" name="instruccion" value="ninguno"/><label>Ninguno</label><br/>
        <input type="radio" name="instruccion" value="primario"/><label>Primario</label><br/>
        <input type="radio" name="instruccion" value="secundario"/><label>Secundario</label><br/>
        <input type="radio" name="instruccion" value="superior"/><label>Superior</label><br/>
        <input type="radio" name="instruccion" value="posgrado"/><label>Posgrado</label><br/>
    </p>

    <p>
      <b>4. Su localidad de residencia:</b><br>
        <input type="text" name="recidencia" placeholder="Ingrese su recidencia" size="41"/><br>
    </p>

    <h3>REFERENCIAS E INTENCIÓN DEL DESTINO </h3>

    <p><b>5. ¿Usted conoce el lugar Turistico?</b> <br>
        <input type="radio" name="lugar" value="si"/><label>SI</label><br/>
        <input type="radio" name="lugar" value="no"/><label>NO</label><br/>
    </p>

    <h4 class= "opcion">Si su respuesta es NO pase a la pregunta 8. <h4></h4>  

    <p><b>6. ¿Haz realizado turismo em este destino?</b> <br>
      <input type="radio" name="destino" value="si"/><label>SI</label><br/>
      <input type="radio" name="destino" value="no"/><label>NO</label><br/>
    </p>

    <p><b>7. Califique las fuentes de información sobre la satisfacción de su viaje, siendo 1 ninguna intensidad y 5 mucha intensidad. </b>
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
  </p>
  
  <p><b>8. ¿Le gustaria visitar la ruta? </b><br>
    <input type="radio" name="ruta" value="si"/><label>SI</label><br/>
    <input type="radio" name="ruta" value="no"/><label>NO</label><br/>
  </p>

  <p><b>9.¿Qué actividades le gustaría realizar en esta ruta? (puede escoger varios) </b> <br>
    <input type="checkbox" name="actividades" value="Relatos y leyendas anscestrales"/><label>Relatos y leyendas anscestrales</label><br/>      <input type="checkbox" name="actividades" value="Observación de la belleza paisajística"/><label>Observación de la belleza paisajística</label><br/>
    <input type="checkbox" name="actividades" value="Observación de aves"/><label>Observación de aves</label><br/>
    <input type="checkbox" name="actividades" value="Camping"/><label>Camping</label><br/>
    <input type="checkbox" name="actividades" value="Agroturismo"/><label>Agroturismo</label><br/>
    <input type="checkbox" name="actividades" value="Visita a lugares"/><label>Visita a lugares</label><br/>
    <input type="checkbox" name="actividades" value="Compra de artesanías"/><label>Compra de artesanías</label><br/>
    <input type="checkbox" name="actividades" value="Turismo comunitario"/><label>Turismo comunitario</label><br/>
    <input type="checkbox" name="actividades" value="Otros"/><label>Otros</label><br/>
  </p>

  <p><b>10. ¿Cuál sería su forma de viajar?</b><br>
    <input type="checkbox" name="viaje" value="solo"/><label>Solo</label><br/>
  </p>

  <p>
  <input type="checkbox" name="viaje" value="en familia"/><label>En familia</label>
  número de Personas:
  <input type="number" name="personas" placeholder="" size="4"/><br>
  </p>

  <p>
    <input type="checkbox" name="viaje" value="con amigos"/><label>Con amigos</label>
    número de Personas:
    <input type="number" name="personas" placeholder="" size="4"/><br>
  </p>    
  <p><b>11. Califique, el motivo principal para viajar al cantón, sobre la satisfacción de su viaje, siendo 1 ninguna intensidad y 5 mucha intensidad.</b><br>
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

  <p>
  <b>12. Mencione la razón más importante por la que usted elige un destino:  </b><br>
    <input type="checkbox" name="eleccion" value="seguridad"/><label>a.	Seguridad	</label><br>
    <input type="checkbox" name="eleccion" value="aplicación de normas de bioseguridad"/><label>b.	Aplicación de normas de bioseguridad</label><br>
    <input type="checkbox" name="eleccion" value="Atractivos turísticos naturales"/><label>c.	Atractivos turísticos naturales	</label><br>
    <input type="checkbox" name="eleccion" value="Oferta turística cultural"/><label>d.	Oferta turística cultural</label><br>
    <input type="checkbox" name="eleccion" value="Calidad en los servicios turísticos"/><label>e.	Calidad en los servicios turísticos</label><br>
    <input type="checkbox" name="eleccion" value="f.	Clima"/><label>f.	Clima	</label><br>
    <input type="checkbox" name="eleccion" value="otros"/><label>g.	otros</label>
  </p>

  <p>
    <b>13.	¿En qué tiempo estaría dispuesto a viajar? </b><br>
    <input type="checkbox" name="tiempo" value="En menos de un mes"/><label>a.	En menos de un mes</label><br>
    <input type="checkbox" name="tiempo" value="Más de un mes"/><label>b.	Más de un mes</label><br>
    <input type="checkbox" name="tiempo" value="En un año"/><label>c.	En un año	</label><br>
  </p>

  <p>
    <b>14.	¿Cuál sería el medio de transporte que utilizaría para viajar? </b><br>
    <input type="checkbox" name="transporte" value="autobús"/><label>a.	Autobús	</label><br>
    <input type="checkbox" name="transporte" value="automóvil"/><label>b.	Automóvil	</label><br>
    <input type="checkbox" name="transporte" value="ninguno"/><label>d.	Ninguno</label><br>
  </p>

  <p>
    <b>15. ¿Qué tipo de servicios turísticos contrataría en los lugares a visitar?</b><br>
    <input type="checkbox" name="servicioTuristico" value="alojamiento"/><label>a.	Alojamiento</label><br>
    <input type="checkbox" name="servicioTuristico" value="alimentos y bebidas"/><label>b.	Alimentos y bebidas</label><br>
    <input type="checkbox" name="servicioTuristico" value="transporte"/><label>c.	Transporte</label><br>
    <input type="checkbox" name="servicioTuristico" value="ninguno"/><label>d.	Ninguno</label><br>
  </p>

  <p>
    <b>16. ¿Cuál sería la red social en la que usted prefería se promocione la oferta?</b><br> 
    <input type="checkbox" name="redSocial" value="Facebook"/><label>a.	Facebook</label><br>
    <input type="checkbox" name="redSocial" value="twitter"/><label>b.	Twitter</label><br>
    <input type="checkbox" name="redSocial" value="instagram"/><label>c.	Instagram</label><br>
    <input type="checkbox" name="redSocial" value="otro"/><label>e.	Otro</label><br>

    <h4>Otro</h4>
      <p>
        1.	¿Cuántos días permanecería en el lugar visitado? 
        <input type="number" name="dias" placeholder="" size="5"/><br>
        3.	¿Cuánto estaría dispuesto a gastar en el viaje? 
        <input type="number" name="gasto" placeholder="" size="5"/><br>
      </p>
  </p>
  <h3>C.	SATISFACCIÓN Y RECOMENDACIÓN </h3>
  <p>
  <b>17.	En caso de haber realizado turismo en el cantón ¿Cómo califica la satisfacción de los servicios ofrecidos? siendo 1 muy insatisfactorio y 5 muy satisfactorio.  </b>
    <p>a. Alojamiento 
      <select name="alojamiento">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>

    <p>b.	Restauración	 
      <select name="restauracion">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>

    <p>c.	Ocio y diversiones	
      <select name="ocio">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
    <p>
      d.	Experiencia	
      <select name="experiencia">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>

    <p>e.	El viaje global	
      <select name="viaje_global">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
    <p>f.	Artesanías	
      <select name="artesanias">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>

    <p>g.	Atractivos turísticos	
      <select name="atractivos">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>

    <p>h.	Flora y fauna	
      <select name="flora_fauna">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>

    <p>i.	Actividades culturales
      <select name="actividades_culturales">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
  </p>

  <p>
  <b>18.	Cómo califica la expectativa de su viaje con respecto a la calidad de los servicios ofrecidos en el destino visitado, siendo 1 muy baja y 5 muy alta. </b>
      <p>a.	Expectativa de los servicios recibidos respecto a la calidad. 
        <select name="calidad">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
  </p>
    <P>
    <b>19.	Recomendaría visitar el cantón (-------------), donde 1 es nunca y 5 con toda seguridad.  </b>
    <p>a.	Recomendaría que visiten el Lugar
        <select name="recomendacion">
          <option>5</option>
          <option>4</option>
          <option>3</option>
          <option>2</option>
          <option>1</option>
        </select>
      </p>
    <p>
  </p>

  <p>
    <b>20.	Piensa volver a visitar el cantón (---------), donde 1 es nunca y 5 con toda seguridad </b>
  <p>a.	Piensa visitar el cantón 
      <select name="volver_visitar">
        <option>5</option>
        <option>4</option>
        <option>3</option>
        <option>2</option>
        <option>1</option>
      </select>
    </p>
  </p> 
  
  <p>
  <b>21.	¿Cuánto gastó en la visita? </b> <br>
     <input type="number" name="gasto_visita" placeholder="" size="15"/><br>
  </p>

  <P> 
  <b>22.	¿Cuál es el valor de remuneración que usted percibe mensualmente?</b><br>
    <input type="number" name="remuneracion" placeholder="" size="15"/><br>
  </p>
  <p>
    <input type="submit" value="Guardar información ">
  </p>
</form>    
</body>
</html>