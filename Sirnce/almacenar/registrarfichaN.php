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
    <form method = "POST" action="guardarfichaN.php" class="datos_FN">
    <p>          
         <b>Fecha: </b><br><br>
         <?php $fcha = date("Y-m-d");?>
         <input type="date" class="form-control" name = "fecha"  value="<?php echo $fcha;?> "required> 
        
    </p><br> <br>
         <p>
            <b>Nombre del Patrimonio Natural:</b><br><br>
            <input type="text" name="nombre" placeholder="Ingrese el nombres" size="41"/><br>
        </p><br><br>

        <p>
            <b>Descripcion:</b><br><br>
            <input type="text" name="descripcion" placeholder="Ingrese la descripcion del lugar" size="41"/><br>
        </p><br><br>
        <h2>Ubicación</h2><br>
        <p><b>Provincia: </b><br><br>       
        <select name="provincia">  
            <option value="Azuay" selected="selected">Azuay</option>  
            <option value="Cañar">Cañar</option>  
            <option value="Loja">Loja</option>  
            <option value="Carchi">Carchi</option>  
            <option value="Imbabura">Imbabura</option>  
            <option value="Pichincha">Pichincha</option>  
            <option value="Cotopaxi">Cotopaxi</option>  
            <option value="Tungurahua">Tungurahua</option>  
            <option value="Bolívar">Bolívar</option>  
            <option value="Chimborazo">Chimborazo</option>  
            <option value="Sto. Domingo de los Tsachilas">Sto. Domingo de los Tsachilas</option>  
            <option value="Esmeraldas">Esmeraldas</option>  
            <option value="Manabí">Manabí</option>  
            <option value="Guayas">Guayas</option>  
            <option value="Los Ríos">Los Ríos</option>  
            <option value="El Oro">El Oro</option>  
            <option value="Santa Elena">Santa Elena</option>  
            <option value="Sucumbíos">Sucumbíos</option>  
            <option value="Napo">Napo</option>  
            <option value="Pastaza">Pastaza</option>  
            <option value="Orellana">Orellana</option>  
            <option value="Morona Santiago">Morona Santiago</option>  
            <option value="Zamora Chinchipe">Zamora Chinchipe</option>  
            <option value="Galápagos">Galápagos</option>  
        </select>  
        </p><br><br>
        <p>
            <b>Cantón: </b> <br><br>
            <input type="text" name="canton" placeholder="nombre de la cantón "required size="41"/><br><br>
        </p>
            <b> Parroquia: </b> <br><br>
            <input type="text" name="parroquia" placeholder="nombre de la parroquia "required size="41"/><br>
        </p>
        <br>
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
            <input type="text" name="faunaCaracteristica" placeholder="Ingrese la ubicacion" size="41"/><br>
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

        <p>
            <label for="uploads"> Elige la imágen que deseas cargar:</label> 
            <input type="file" id="uploads" name="img" accept=".jpg, .jpeg, .png, .svg" multiple required>
        </p>  
        <br><br><br>
            
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
