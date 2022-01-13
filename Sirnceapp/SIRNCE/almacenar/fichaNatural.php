<?php 
include("../dll/config.php");
@include("../includes/cabecera2.php");
?>
<link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">
<!DOCTYPE html>
<html lang="en">

<body class="FichaNatural">
   <h1>Ficha Patrimonio Natural</h1>
    <form action="#" method = "POST">
        <p class="N_NPatrimonio">
            <b>Nombre del Patrimonio Natural:</b><br>
            <input type="text" name="nombre" placeholder="Ingrese el nombres" size="41"/><br>
        </p>
        <div class="N_Datos">
        <p >
            <b>Ubicación:</b><br>
            <input type="text" name="ubicacion" placeholder="Ingrese la ubicacion" size="41"/><br>
        </p>
        <p>
            <b>Descripcion:</b><br>
            <input type="text" name="descripcion" placeholder="Ingrese la descripcion del lugar" size="41"/><br>
        </p>
        <p>
        <b>Geografia del Lugar:</b><br>
            <input type="text" name="geografia" placeholder="Ingrese la geografia" size="41"/><br>
        </p>
        </div>
        <div class="N_Caracteristicas">
        <p>
            <b>Flora Caracteristica:</b><br>
            <input type="text" name="Fauna Caracteristica" placeholder="" size="41"/><br>
        </p>

        <p>
            <b>Fauna Caracteristica: </b><br>
            <input type="text" name="Fauna Caracteristican" placeholder="" size="41"/><br>
        </p>
        </div>
        <div class="N_Info">
        <p>
            <b>Actividades que se pueden realizar en el lugar:</b><br>
            <input type="text" name="actividades" placeholder="Ingrese " size="41"/><br>
        </p>

        <p>
            <b>Recomendaciones Para visitar el lugar: </b><br>
            <input type="text" name="recomendaciones" placeholder="Ingrese" size="41"/><br>
        </p>

        <p>
            <b>Facilidades Turisticas: </b><br>
            <input type="text" name="facilidad" placeholder="Ingrese" size="41"/><br>
        </p>

        <p>
            <b>Como llegar: </b><br>
            <input type="text" name="llegar" placeholder="Ingrese" size="41"/><br>
        </p>
        </div>

        <form method="post" enctype="multipart/form-data">
            <p>
            <label for="uploads">
            Elige las imágenes que deseas cargar:
            </label>
            <input type="file" id="uploads" name="uploads" accept=".jpg, .jpeg, .png, .svg, .gif" multiple>
            </p>
            <label for="start">Fecha:</label>
            <input type="date" id="start" name="trip-start"
            value="2021-12-15"
            min="2021-01-01" max="2025-01-01">
        </form>
        <p>
            <input type="submit" value="Guardar Información">
        </p>
    </form>   
</body>
</html>
<?php
@include("../includes/piePagina3.php");
?>
