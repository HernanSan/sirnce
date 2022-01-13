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
    
    <title>Lista de Patrimonio Culturales</title>
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
      Fichas de Patrimonios Culturales
     </div>
    </div>
    <div class="card-body">
      <div id="tablaDatatable"> </div>
    <a href="<?php echo $urlSitio; ?>almacenar/registrarfichaC.php" class="btn btn-primary">Nueva Encuesta</a>
    <br>
    <br>
    <?php  
    include("../almacenar/tablaF_C.php");
    /*$miconexion = new clase_mysqli7;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = "SELECT * from fichapatrimoniocultural";
$miconexion ->consulta($sql);
$miconexion -> verconsulta2();*/
    ?> 
</div>
<br>
<br>
<br>
<?php 
include("../includes/piePagina2.php");
?>





