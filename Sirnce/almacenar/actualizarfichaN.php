<?php 
include("../dll/config.php");
include("../dll/class_mysqli.php");
@include("../includes/cabecera2.php");
$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
extract($_GET);
//Consulta
$sql = "select * from fichapatrimonionatural where id_ficha_natural=$idFicha";
$miconexion->consulta($sql);
$listaUser= $miconexion->consultalista();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Natural</title>
</head><br><br>
<body class="registrar_FN">
    <h1 class="tituloF_PN">Actualizacion de Ficha Patrimonio Natural</h1><br>
    <form method = "POST" action="updatefichaN.php" class="datos_FN">
    <input type="hidden" name="idFicha" value = "<?php  echo $listaUser[0]?>"/><br>
    <p>          
         <b>Fecha: </b><br><br>
         <?php $fcha = date("Y-m-d");?>
         <input type="date" class="form-control" name = "fecha"  value="<?php echo $listaUser[1];?> "required> 
        
    </p><br> <br>
         <p>
            <b>Nombre del Patrimonio Natural:</b><br><br>
            <input type="text" name="nombre" size="41" value="<?php echo $listaUser[2]?>"/><br>
        </p><br><br>
        
        <p>
            <b>Descripcion:</b><br><br>
            <input type="text" name="descripcion" size="41" value="<?php echo $listaUser[3]?>"/><br>
        </p><br><br>
        <h2>Ubicación</h2><br>
        <p><b>Provincia: </b><br><br>
            <input type="text" name="provincia"  size="41"value = "<?php  echo $listaUser[4]?>"/><br>
        </p><br><br>

        <p>
            <b>Cantón: </b> <br><br>
            <input type="text" name="canton" size="41"value = "<?php  echo $listaUser[5]?>"/><br>
        </p><br><br>
        <p>
            <b>Parroquia: </b> <br><br>
            <input type="text" name="parroquia" size="41"value = "<?php  echo $listaUser[6]?>"/><br>
        </p><br><br>


        <p>
        <b>Geografia del Lugar:</b><br><br>
            <input type="text" name="geografia" size="41"value="<?php echo $listaUser[7]?>"/><br>
        </p><br><br>

        <p>
            <b>Flora Caracteristica:</b><br><br>
            <input type="text" name="floraCaracteristica" size="41" value="<?php echo $listaUser[8]?>"/><br>
        </p><br><br>

        <p>
            <b>Fauna Caracteristica: </b><br><br>
            <input type="text" name="faunaCaracteristica" size="41" value="<?php echo $listaUser[9]?>"/><br>
        </p><br><br>
        <p>
            <b>Actividades que se pueden realizar en el lugar:</b><br><br>
            <input type="text" name="actividades" value="<?php echo $listaUser[10]?>"/><br>
        </p><br><br>

        <p>
            <b>Recomendaciones Para visitar el lugar: </b><br><br>
            <input type="text" name="recomendaciones" value="<?php echo $listaUser[11]?>"/><br>
        </p><br><br>

        <p>
            <b>Facilidades Turisticas: </b><br><br>
            <input type="text" name="facilidad" value="<?php echo $listaUser[12]?>"/><br>
        </p><br><br>

        <p>
            <b>Como llegar: </b><br><br>
            <input type="text" name="llegar" value="<?php echo $listaUser[13]?>"/><br>
        </p><br><br>

        <p>
            <label for="uploads">
            Elige la imágen que deseas cargar:
            </label>
            <input type="file" id="uploads" name="img" accept=".jpg, .jpeg, .png, .svg" value = "<?php echo $listaUser[14]?>">
         </p><br><br>
            
         <p><br><br>
            <input  class="guardar_PC"  type="submit" value="Guardar  Cambios">
            <div class="atras_PC"><button ><a  href="<?php echo $urlSitio; ?>almacenar/FichasNaturales.php">Atras</a></button></div>
        </p>
    </form>   
</body>
</html>
<?php
include("../includes/piePagina2.php");
?>  
