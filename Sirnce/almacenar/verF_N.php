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

<body class="ver_FC">
<div class="verFNatural"> 
<div class="tituloVer" style="text-align: center;" >
            <h2 class="portfolio-title"> Vizualizacion de Ficha Natural </h2>
    <div class="line-shape"></div> 
    </div>
    <div class="ver_Img">
        <div>
          <?php //echo "$listaUser[11]"?>
            <img src="../images/carchi.png" alt="">
            <?php 
            // echo $listaUser[11]?>
        </div>
    </div><br>
    <p>
            <h1 class="verTitulo">
            <?php echo $listaUser[2]?>
            </h1> 
    </p><br>

    <p>          
         <b>✔ Fecha de Ingreso del Patrimonio: </b><br><br>
         <div class="disenoVer">
         <?php echo $listaUser[1];?>
         </div>
    </p>
        <div class="verDes">
        <p>
            <b>✔ Descripcion: </b> <br><br>
            <div class="disenoVer2">
               <?php echo $listaUser[3]?>
            </div>
        </p>
        </div>


    

    <div class="ver_UbicacionN">
        <h3> Ubicacion</h3><br>
        <p><b>✔ Provincia: </b><br><br>
        <div class="disenoVer">
        <?php  echo $listaUser[4]?>
        </div>       
        </p><br>

        <p>
            <b>✔ Cantón: </b> <br><br>
            <div class="disenoVer">
            <?php  echo $listaUser[5]?>
            </div>
            
        </p><br>
        <p>
            <b>✔ Parroquia: </b> <br><br>
            <div class="disenoVer">
            <?php  echo $listaUser[6]?>
            </div>
        </p><br>
        <p>
        <b>✔ Geografia del Lugar:</b><br><br>
        <div class="disenoVer">
            <?php  echo $listaUser[7]?>
            </div>
        </p><br><br>
    
        <p>
            <b>✔ Flora Caracteristica:</b><br><br>
            <div class="disenoVer">
            <?php  echo $listaUser[8]?>
            </div>
        </p><br><br>

        <p>
            <b>✔ Fauna Caracteristica: </b><br><br>
            <div class="disenoVer">
            <?php  echo $listaUser[9]?>
            </div>
        </p><br><br>
        <p>
            <b>✔ Actividades que se pueden realizar en el lugar:</b><br><br>
            <div class="disenoVer">
            <?php  echo $listaUser[10]?>
            </div>
        </p><br><br>
        </div>

        <div class="verRec">
        <p>
            <b>✔ Recomendaciones Para visitar el lugar: </b><br><br>
            <div class="disenoVer2">
            <?php  echo $listaUser[11]?>
            </div>
        </p><br><br>

        <p>
            <b>✔ Facilidades Turisticas: </b><br><br>
            <div class="disenoVer2">
            <?php  echo $listaUser[12]?>
            </div>
        </p><br><br>

        <p>
            <b>✔ Como llegar: </b><br><br>
            <div class="disenoVer2">
            <?php  echo $listaUser[13]?>
            </div>
        </p><br><br>
        </div>
        </div> 
            
        
            <div class="atras_verC"><button ><a  href="<?php echo $urlSitio; ?>almacenar/FichasNaturales.php">Atras</a></button></div>
        
</body>
</html>
<?php
include("../includes/piePagina2.php");
?>  
