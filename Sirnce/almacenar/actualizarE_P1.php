<?php 
include("../dll/config.php");
include("../dll/class_mysqli.php");
@include("../includes/cabecera2.php");
$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
extract($_GET);

$sql = "SELECT* FROM encuestaP1";
$miconexion->consulta($sql);
$listaUser= $miconexion->consultalista();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Cultural</title>
</head><br><br>
<body class="datos_E"> 
    <h1 class="titulo_E">Encuesta</h1> <br><br>

 <form action="updateE_P1.php" method = "POST" enctype="multipart/form-data" class="encuesta">
   <input type="hidden" name="idE" value = "<?php  echo $listaUser[0]?>"/><br>
   <p class="fecha_E">          
         <b>Fecha: </b><br><br>
         <?php $fcha = date("Y-m-d");?>
         <input type="date" class="form-control" name ="fecha" value="<?php echo $listaUser[1];?> "required> 
        
    </p><br> <br>
    <h3>A. PERFIL SOCIODEMOGRÁFICO</h3><br>
    <div class="perfil_S">
    <p class=" genero">
      <b>1. Género:</b><br>
        <input type="radio" name="genero" value="<?php echo $listaUser[2];?>"/><label>Masculino</label><br/>
        <input type="radio" name="genero" value="<?php echo $listaUser[2];?>"/><label>Femenino</label><br/>
    </p>

    <p class="edad"><b>2. Edad: </b><br>
      <input type="text" name="edad" value="<?php echo $listaUser[3];?>" size="10"/><br>
    </p>

    <p class="nivelI">
      <b>3. Nivel de Instruccion:</b><br>
        <input type="radio" name="instruccion" value="<?php echo $listaUser[4];?>"/><label>Ninguno</label><br/>
        <input type="radio" name="instruccion" value="<?php echo $listaUser[4];?>"/><label>Primario</label><br/>
        <input type="radio" name="instruccion" value="<?php echo $listaUser[4];?>"/><label>Secundario</label><br/>
        <input type="radio" name="instruccion" value="<?php echo $listaUser[4];?>"/><label>Superior</label><br/>
        <input type="radio" name="instruccion" value="<?php echo $listaUser[4];?>"/><label>Posgrado</label><br/>
    </p>

    <p class="localidad">
      <b>4. Su localidad de residencia:</b><br>
        <input type="text" name="residencia" value="<?php echo $listaUser[5];?>" size="41"/><br>
    </p>
    </div> <br>


  <p>
   <input class="guardar_E" type="submit" value="Continuar">
   
   <div class="atras_E"><button ><a  href="<?php echo $urlSitio; ?>almacenar/Encuestas.php">Atras</a></button></div>
  </p>
</form>   

</body>
</html> 

<?php
include("../includes/piePagina2.php");
?>         