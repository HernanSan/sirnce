<?php
include("../dll/config.php");
include("../dll/class_mysqli.php");
@include("../includes/cabecera2.php");
$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
extract($_GET);
//$sql = "select * from ubicacion where id=$idFicha";
?>
<br>
<head>
     <title>
         Repositorio|SIRNCE
     </title>
</head>
<div class="F_C">
            <h2 >Repositorio</h2>
            <div class="line-shape"></div>
 </div>
 <br>
<body class="menuR" >
    <section class="contenidoR">
     <div class="nP_N">
           <h3>
           <a href="<?php echo $urlSitio; ?>almacenar/FichasCulturales.php">Patrimonios Culturales</a>
           </h3>
           <p> 
           <?php 
 		    $miconexion->consulta("select count(*) from fichapatrimoniocultural ");
 		    $miconexion->verconsulta();
 	       ?>
           </p>
     </div><br>
     <div class="n_E">
        <h3>
        <a href="<?php echo $urlSitio; ?>almacenar/Encuestas.php">Encuestas</a>
        </h3>
        <p>
        <?php 
                $miconexion->consulta("select count(*) from encuestaP3");
                $miconexion->verconsulta();
        ?>
        </p>
   </div><br>
      <div class="nP_C">
        <h3>
        <a href="<?php echo $urlSitio; ?>almacenar/FichasNaturales.php">Patrimonios Naturales</a>
        </h3>
        <p>
        <?php 
               $miconexion->consulta("select count(*) from fichapatrimonionatural ");
 		    $miconexion->verconsulta();
 	       ?>
        </p>
        </div>
     <br>

     </section>
</body>
<?php 
include("../includes/piePagina2.php");
?>