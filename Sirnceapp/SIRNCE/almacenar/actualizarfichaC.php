<?php 
include("../dll/config.php");
include("../dll/class_mysqli.php");
@include("../includes/cabecera2.php");
$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
extract($_GET);
//$sql = "select * from ubicacion where id=$idFicha";
$sql = "select * from fichapatrimoniocultural where id_ficha_cultural=$idFicha";
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
<body class="registrar_FC">
    <h1 class="tituloF_PC">Actualizacion de Ficha Patrimonio Cultural</h1>
    <br><br><br>
    <form method= "post"  action= "updatefichaC.php" class="datos_FC">
        <p>
            <b>Nombre del Patrimonio Cultural: </b><br><br>
            <input type="text" name="nombre" size="41" value = "<?php echo $listaUser[1]?>"/><br>
        </p><br><br>
        
        <p>
            <b>Tipo: </b> <br><br>
            <input type="radio" name="tipo" value="<?php echo $listaUser[2]?>"/><label>Tangible</label><br/>
            <input type="radio" name="tipo" value="<?php echo $listaUser[2]?>"/><label>Intangible</label><br/>
        </p><br><br>
        <p>
            <b>Principales caracteristicas: </b> <br><br>
            <input type="text" name="caracteristicas" size="41"value = "<?php echo $listaUser[3]?>"/><br>
        </p><br><br>

        <h2>Ubicación</h2><br><br>

        <p><b>Provincia: </b><br><br>
            <input type="text" name="provincia"  size="41"value = "<?php  echo $listaUser[1]?>"/><br>
        </p><br><br>

        <p>
            <b>Cantón: </b> <br><br>
            <input type="text" name="canton" size="41"value = "<?php  echo $listaUser[1]?>"/><br>
        </p><br><br>
        <p>
            <b>Parroquia: </b> <br><br>
            <input type="text" name="parroquia" size="41"value = "<?php  echo $listaUser[1]?>"/><br>
        </p><br><br>
        

        <p>
            <b>Comunidad: </b> <br><br>
            <input type="text" name="comunidad" size="41" value = "<?php echo $listaUser[4]?>"/><br>
        </p><br><br>

        <p>
            <b>Es patrimonio a nivel:  </b> <br><br>
            <input type="radio" name="nivelPatrimonio" value = "<?php echo $listaUser[5]?>"/><label>Internacional</label><br/>
            <input type="radio" name="nivelPatrimonio" value = "<?php echo $listaUser[5]?>"/><label>Nacional</label><br/>
        </p><br><br>
        <p>
        <b>Esta regisradio en:</b><br><br>
            <input type="radio" name="registro" value = "<?php echo $listaUser[6]?>"/><label>UNESCO</label><br/>
            <input type="radio" name="registro" value = "<?php echo $listaUser[6]?>"/><label>INPC</label><br/>
        </p><br><br>

        <p>
            <label for="uploads">
            Elige la imágen que deseas cargar:
            </label>
            <input type="file" id="uploads" name="img" accept=".jpg, .jpeg, .png, .svg," value = "<?php echo $listaUser[7]?>">
         </p><br><br>
        <p>
            <input class="guardar_PC" type="submit" value="Guardar  Cambios">
            <div class="atras_PC"><button ><a  href="<?php echo $urlSitio; ?>almacenar/FichasCulturales.php">Atras</a></button></div>
        </p>
    </form>
</body>
</html> 
<?php
include("../includes/piePagina2.php");
?>         