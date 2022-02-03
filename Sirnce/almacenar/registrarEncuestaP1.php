<?php 
include("../dll/config.php");
@include("../includes/cabecera2.php")
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<head>   
    <title>Encuesta</title>
</head><br><br>


<body class="datos_E"> 
    <h1 class="titulo_E">Encuesta</h1> <br><br>

 <form action="guardarEncuesta.php" method = "POST" enctype="multipart/form-data" class="encuesta">

   <p class="fecha_E">          
         <b>Fecha: </b><br><br>
         <?php $fcha = date("Y-m-d");?>
         <input type="date" class="form-control" name ="fecha" value="<?php echo $fcha;?> "required> 
        
    </p><br> <br>
    <h3>A. PERFIL SOCIODEMOGRÁFICO</h3><br>
    <div class="perfil_S">
    <p class=" genero">
      <b>1. Género:</b><br>
        <input type="radio" name="genero" value="M"/><label>Masculino</label><br/>
        <input type="radio" name="genero" value="F"/><label>Femenino</label><br/>
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
        <input type="text" name="residencia" placeholder="Ingrese su recidencia" size="41"/><br>
    </p>
    </div> <br>


  <p>
   <input class="guardar_E" type="submit" value="Continuar">
   
   <div class="atras_E"><button ><a  href="<?php echo $urlSitio; ?>almacenar/Encuestas.php">Atras</a></button></div>
  </p>
</form>   

</body>
</html><br><br>
<?php
include("../includes/piePagina2.php");
?>  