<?php 
include("../dll/config.php");
session_start();
?>
<link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap"
      rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="http://www.example.com/style.css?ts=<?=time()?>" />
</head>

<body id="inicio">
   <header >
     <div class="logoR">
       <img src="" alt="">
     </div>
     <div class="welco">

           <div class="log2"> <img src="" alt=""></div>
           <div class="logoR2"><img src="" alt=""></div>
          <h4 class="Bienvenido">Bienvenido: <?php echo $_SESSION['nombreuser'];?> </h4>
   
		<div id="header">
			<ul class="navD">
				<li class="center_D"><a href="../admin/repositorio2.php">Repositorio</a></li>
				<li class="center_D"><a href="">Fichas  de Patrimonios</a>
					<ul class="m_Despegable">
						<li><a href="<?php echo $urlSitio; ?>almacenar/FichasNaturales.php">Patrimonios Naturales</a></li>
						<li><a href="<?php echo $urlSitio; ?>almacenar/FichasCulturales.php">Patrimonios Culturales</a></li>
					</ul> 
				</li>
				<li class="center_D"><a href="<?php echo $urlSitio; ?>almacenar/Encuestas.php">Encuestas</a></li>
				<li class="center_D"><a href="../index.php">Salir</a></li>
			</ul>
		</div>
     </div>
	</header>
</body>
</html>
