<?php
include("../dll/config.php");
@include("../includes/cabecera2.php");
include("../dll/class_mysqli.php");
?>
<br>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">
    <link rel="stylesheet" type="text/css" href="../libreria/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../libreria/datatable/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../libreria/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../libreria/datatable/bootstrap.css">
    <link rel="stylesheet" href="../libreria/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="../libreria/alertifyjs/css/themes/bootstrap.css">

    <script src="../libreria/jquery.slim.min.js"></script>
    <script src="../libreria/bootstrap/popper.min.js"></script>
    <script src="../libreria/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../libreria/datatable/jquery.dataTables.min.js"></script>
    <script src="../libreria/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../libreria/alertifyjs/alertify.js"></script>
    
    <title>Fichas Culturales|SIRNCE</title>
<link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">
<div class="F_C">
            <h2 >Patrimonios Culturales</h2>
            <div class="line-shape"></div>
</head>
<body>
<br>
<div>
    <div class="card">
      <div class="card-header">
      Fichas de Patrimonios Culturales  </div>
    </div>
    <div class="card-body">
     <button type="button" class="btn btn-outline-success " style="position:relative ;right: 37%;">Descargar <a  href="<?php echo $urlSitio; ?>almacenar/exportarC.php" >
        <img src="../images/descargar.png" alt=""> 
      </a></button>
    
       <a class="btn btn-primary" href="<?php echo $urlSitio; ?>almacenar/registrarfichaC.php" >
       Nueva Ficha <img class="btn btn-primary" src="../images/agregar.png" alt="">
      </a>
    <br><br>
    <?php  
    include("../almacenar/tablaF_C.php");
    ?> 
</div>
<br>
<br>
<br>
<?php 
include("../includes/piePagina2.php");
?>





