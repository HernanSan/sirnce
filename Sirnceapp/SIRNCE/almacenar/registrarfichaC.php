<?php
include("../dll/config.php");
@include("../includes/cabecera2.php")
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Ficha Cultural</title>
</head>
<br>
<body class="registrar_FC">
    <h1 class="tituloF_PC">Ficha Patrimonio Cultural</h1>
    <br><br>
    <form method= "post"  action= "guardarfichaC.php" class="datos_FC">
    <input type="hidden" name="idRegistro" value = ""/><br>  
   
     <p>          
         <b>Fecha: </b><br><br>
         <?php $fcha = date("Y-m-d");?>
         <input type="date" class="form-control"  value="<?php echo $fcha;?> "required> 
        
    </p><br> <br>

    <p>           
            <b>Nombre del Patrimonio Cultural: </b><br><br>
            <input type="text" name="nombre" placeholder="Ingrese el nombres" required size="41"/><br>
        </p>
        <br><br>
        <p>
            <b>Tipo: </b> <br><br>
            <input type="radio" name="tipo" value="Tangible" required/><label>Tangible</label><br/>
            <input type="radio" name="tipo" value="Intangible" required/><label>Intangible</label><br/>
        </p>
        <br>
        <p>
            <b>Principales caracteristicas: </b> <br><br>
            <input type="text" name="caracteristicas" placeholder="Ingrese las caracteristicas" size="41"/><br>
        </p>
        <br>
        <h2>Ubicación</h2><br>

        <p><b>Provincia: </b><br><br>       
        <select name="Provincia">  
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
            <b>Comunidad: </b> <br><br>
            <input type="text" name="comunidad" placeholder="nombre de la parroquia "required size="41"/><br>
        </p>
        <br>
        <p>
            <b>Es patrimonio a nivel:  </b> <br><br>
            <input type="radio" name="nivelPatrimonio" value="Internacional" required/><label>Internacional</label><br/>
            <input type="radio" name="nivelPatrimonio" value="Nacional" required/><label>Nacional</label><br/>
        </p>
        <br>
        <p>
        <b>Esta regisradio en:</b><br><br>
            <input type="radio" name="registro" value="UNESCO" required/><label>UNESCO</label><br/>
            <input type="radio" name="registro" value="INPC" required/><label>INPC</label><br/>
        </p>
        <br>
        <p>
            <label for="uploads">
            Elige la imágen que deseas cargar:
            </label> 
            <input type="file" id="uploads" name="img" accept=".jpg, .jpeg, .png, .svg, .gif" multiple required>
         </p>
         <br><br><br>
        <p>
            <input class="guardar_PC" type="submit" value="Guardar">
            <div class="atras_PC"><button ><a  href="<?php echo $urlSitio; ?>almacenar/FichasCulturales.php">Atras</a></button></div>

        </p>
    </form>
</body>
</html> 
<br><br>
<?php
include("../includes/piePagina2.php");
?>       