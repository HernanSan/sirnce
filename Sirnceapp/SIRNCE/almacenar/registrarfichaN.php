<?php 
include("../dll/config.php");
@include("../includes/cabecera2.php")
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
    <h1 class="tituloF_PN">Ficha Patrimonio Natural</h1><br>
    <form action="guardarfichaN.php" method = "POST" enctype="multipart/form-data" class="datos_FN">
        <p>
            <b>Nombre del Patrimonio Natural:</b><br><br>
            <input type="text" name="nombre" placeholder="Ingrese el nombres" size="41"/><br>
        </p><br><br>

        <p>
            <b>Ubicación:</b><br><br>
            <input type="text" name="ubicacion" placeholder="Ingrese la ubicacion" size="41"/><br>
        </p><br><br>
        <p>
            <b>Descripcion:</b><br><br>
            <input type="text" name="descripcion" placeholder="Ingrese la descripcion del lugar" size="41"/><br>
        </p><br><br>
        <p>
        <b>Geografia del Lugar:</b><br><br>
            <input type="text" name="geografia" placeholder="Ingrese la geografia" size="41"/><br>
        </p><br><br>
        <p>
            <b>Flora Caracteristica:</b><br><br>
            <input type="text" name="floraCaracteristica" placeholder="" size="41"/><br>
        </p><br><br>

        <p>
            <b>Fauna Caracteristica: </b><br><br>
            <input type="text" name="floraCaracteristica" placeholder="Ingrese la ubicacion" size="41"/><br>
        </p><br><br>
        <p>
            <b>Actividades que se pueden realizar en el lugar:</b><br><br>
            <input type="text" name="actividades" placeholder="Ingrese " size="41"/><br>
        </p><br><br>

        <p>
            <b>Recomendaciones Para visitar el lugar: </b><br><br>
            <input type="text" name="recomendaciones" placeholder="Ingrese" size="41"/><br>
        </p><br><br>

        <p>
            <b>Facilidades Turisticas: </b><br><br>
            <input type="text" name="facilidad" placeholder="Ingrese" size="41"/><br>
        </p><br><br>

        <p>
            <b>Como llegar: </b><br><br>
            <input type="text" name="llegar" placeholder="Ingrese" size="41"/><br>
        </p><br><br>
    

        <form method="post" >
            <p>
            <label for="uploads">
            Elige las imágenes que deseas cargar:
            </label>
            <input type="file" id="uploads" name="img" accept=".jpg, .jpeg, .png, .svg" multiple>
        <p><br><br>
            <input  class="guardar_PC"  type="submit" value="Guardar">
            <div class="atras_PC"><button ><a  href="<?php echo $urlSitio; ?>almacenar/FichasNaturales.php">Atras</a></button></div>
        </p>
    </form>   
</body>
</html>
<?php
include("../includes/piePagina2.php");
?>  
