<?php 
include("../dll/config.php");
?>
	<link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">
<body>
   <header >
       <div class="BUser">
           <h5>SIRNCE</h5>
           <h5>Bienvenido:</h5>
       </div>
   <nav class="navR">
       <a href="<?php echo $urlSitio; ?>index.php">Inicio</a>
       <p>Repositorio</p>
      <a class="a1" href="<?php echo $urlSitio; ?>almacenar/FichasNaturales.php"> Fichas de Patrimonio Naturales </a><br><br><br>
      <a class="a2" href="<?php echo $urlSitio; ?>almacenar/FichasCulturales.php"> Fichas de Patrimonio Culturales </a><br><br><br>
      <a class="a3" href="<?php echo $urlSitio; ?>almacenar/Encuestas.php"> Encuestas</a><br><br><br>
      <a href="<?php echo $urlSitio; ?>index.php">Salir</a>
    </nav>
	</header>
</body>


<?php
include("../includes/piePagina.php");
?>