<?php 
include("../dll/config.php");
@include("../includes/cabecera2.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>   
    <link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">
    <title>Encuesta</title>
</head><br><br>
<body class="datos_E"> 
    <h1 class="titulo_E">Encuesta</h1> <br><br>

 <form action="guardarEncuesta3.php" method = "POST" enctype="multipart/form-data" class="encuesta ">

  </div><br><br>
  <h3>C.	SATISFACCIÓN Y RECOMENDACIÓN </h3> <br>
  <div class="referenciasID">
  <div class="pregunta17">
  <p>
  <b >17.¿Cómo califica la satisfacción de los servicios ofrecidos? siendo 1 muy insatisfactorio y 5 muy satisfactorio. </b><br>
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
    <p>d.	Experiencia	
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
  </div>
  
  <div class="pregunta17">
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
  </div>

    <div class="pregunta17">
    <p >
    <b>19.	Recomendaría visitar el cantón, donde 1 es nunca y 5 con toda seguridad.  </b>
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
  </div>

  <div class="pregunta17">
  <p>
    <b>20.	Piensa volver a visitar el cantón, donde 1 es nunca y 5 con toda seguridad </b>
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
  </div>

  <div class="pregunta17">
  <p>
  <b>21.	¿Cuánto gastó en la visita? </b> <br>
     <input type="number" name="gasto_visita" placeholder="" size="5"/><br>
  </p>
  </div>

  <div class="pregunta17">
  <P> 
  <b>22.	¿Cuál es el valor de remuneración que usted percibe mensualmente?</b><br>
    <input type="number" name="remuneracion" placeholder="" size="5"/><br>
  </p><br><br><br>
  </div>
  </div>


<p>
   <input class="guardar_E" type="submit" value="Guardar">
   
   <div class="atras_E"><button ><a  href="<?php echo $urlSitio; ?>almacenar/registrarEncuestaP3.php">Atras</a></button></div>
  </p>
  </form>   
</body>
</html><br><br>
<?php
include("../includes/piePagina2.php");
?>  