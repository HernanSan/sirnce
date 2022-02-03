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
</head>

<body class="ver_FC">
    <div class="tituloVer" style="text-align: center;" >
            <h2 class="portfolio-title"> Vizualizacion de Ficha Cultural </h2>
    <div class="line-shape"></div> 
    </div><br><br>
    <div class="ver_Img">
        <div>
          <?php //echo "$listaUser[11]"?>
            <img src="../images/recursoPa.png" alt="">
            <?php 
            // echo $listaUser[11]?>
        </div>
    </div>
    
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
    </p><br> 
   
        <p>
            <b>✔ Tipo: </b> <br><br>
             <div class="disenoVer">
             <?php echo $listaUser[3]?>
             </div>
              
        </p>

        <div class="verPrin">
        <p>
            <b>✔ Principales caracteristicas: </b> <br><br>
            <div class="verCar">
               <?php echo $listaUser[4]?>
            </div>
        </p>
        </div>

    <div class="ver_Ubicacion">
        <h3> Ubicacion</h3><br>
        <p><b>✔ Provincia: </b><br><br>
        <div class="disenoVer">
        <?php  echo $listaUser[5]?>
        </div>       
        </p><br>

        <p>
            <b>✔ Cantón: </b> <br><br>
            <div class="disenoVer">
            <?php  echo $listaUser[6]?>
            </div>
            
        </p><br>
        <p>
            <b>✔ Parroquia: </b> <br><br>
            <div class="disenoVer">
            <?php  echo $listaUser[7]?>
            </div>
        </p><br>
        </div>

        
         <!-- ver comunidad e informacion del Patrimonio-->
        <div class="ver_Info2">
        <div class="verComu">
        <p>
            <b>✔ Comunidad: </b> <br><br>
            <div class="disenoVer">
            <?php  echo $listaUser[8]?>
            </div>
        </p>
        </div>

        <div class="verPaNi">
        <p>
            <b>✔ Es patrimonio a nivel:  </b> <br><br>
            <div class="disenoVer1">
            <?php  echo $listaUser[9]?> 
            </div>
        </p>
        </div>

        <div class="verRegi">
        <p> 
        <b>✔ Esta registrado en:</b><br><br>
            <div class="disenoVer2">
            <?php  echo $listaUser[10]?>
            </div>
        </p>
        </div>
        </div>
    </div>
       <div class="atras_verC"><button ><a  href="<?php echo $urlSitio; ?>almacenar/FichasCulturales.php">Atras</a></button></div>

</body>
</html> 
<?php
include("../includes/piePagina2.php");
?>         