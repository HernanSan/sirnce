<?php
include("dll/config.php");
include("dll/class_mysqli.php");
$miconexion= new clase_mysqli7;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
extract($_GET);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Proyecto de PHP</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google" content="nositelinkssearchbox">
    <title>Car Template</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</head>
<body id="about">
    <!-- Navigar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
             <img class="logo" src="images/logotipo.png" alt="">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">Inicio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Pratrimonio</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contactos">Contactos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href=" <?php echo $urlSitio; ?>includes/login.php"> <img src="images/usuario1.png" alt=""></a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="background-main">
    <main class="main">
            <h1 class="main-title">SIRNCE
                <a href="" class="typewrite" data-period="3000" data-type='[ "Cultura", "Ecuador", "Información" ]'>
                    <span class="wrap"></span>
                </a>
            </h1>
    </main>
   

    <div class="contenido">
    <div class="texto1"> 
		<p class="sirnce">SIRNCE</p>
		Sistema de Internacionalizacion de Los Recursos Naturales y Culturales del Ecuador.
	</div>
	<div class="frase">
        <div class="texto2"> <samp> “Todo lo que necesitas</samp> es Ecuador ” </div>
	    <div class="texto3"> <samp> “All you</samp> need is Ecuador”</div>
    </div>
    </div>
    </header>
    <br>
    <section class="services-class" id="services">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Informacion de Patrimonios</h2>
                <div class="line-shape"></div>
            </div>
            </div>
        </div>
        <div class="container">
         <div class="row" style=" text-align: center;">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fa fa-university fa-4x mb-3" aria-hidden="true"></i>
                <h3 class="mb-3">Patrimonios Culturales</h3>
                <h3 class="text-muted mb-0"> <?php 
                $miconexion->consulta("select count(*) from fichapatrimoniocultural ");
                $miconexion->verconsulta();
                ?></h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fa fa-leaf fa-4x mb-3" aria-hidden="true"></i>
                <h3 class="mb-3">Patrimonios Naturales</h3>
                <h3 class="text-muted mb-0">
                 <?php 
                $miconexion->consulta("select count(*) from fichapatrimonionatural ");
                $miconexion->verconsulta();
                ?>
            </h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fa fa-address-book fa-4x mb-5" aria-hidden="true"></i>
                <h3 class="mb-3">Encuestas</h3>
                <h3 class="text-muted mb-0">
                <?php 
                $miconexion->consulta("select count(*) from encuestaP3");
                $miconexion->verconsulta();
                ?>
                </h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fa fa-map-signs fa-4x mb-5" aria-hidden="true"></i>
                <h3 class="mb-3">Total Patrimonios</h3>
                <h3 class="text-muted mb-0"> 
                <?php 
               $miconexion->consulta( "SELECT(select count(*)from fichapatrimoniocultural ) + 
               (select count(*) from fichapatrimonionatural) as total FROM dual; ");
                $miconexion->verconsulta();
                ?>
                </h3>
                </div>
            </div>
            
         </div>
        </div>
    </section>
    <div class="container text-center" id="portfolio">
            <h2 class="portfolio-title">Patrimonios</h2>
            <div class="line-shape"></div>
    </div>
    <div class="container text-center" id="portfolio">
            <h2 class="portfolio-title">Patrimonios Naturales</h2>
    </div>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img src="images/quilota.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4"> <?php 
					$sql = "select * from fichapatrimonionatural ";
                    $miconexion->consulta($sql);
                    $listaUser= $miconexion->consultalista();
                    echo $listaUser[2];
					?>
                    </h2>

                    <p> <?php 
					$sql = "select * from fichapatrimonionatural ";
                    $miconexion->consulta($sql);
                    $listaUser= $miconexion->consultalista();
                    echo $listaUser[3];
					?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <img  src="images/recursoN.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        
                   <h2 class="display-4">
                        <?php 
					$sql = "select * from fichapatrimonionatural where id_ficha_natural=16 ";
                    $miconexion->consulta($sql);
                    $listaUser= $miconexion->consultalista();
                    echo $listaUser[2];
					?>
                    </h2>

                    <p> <?php 
					$sql = "select * from fichapatrimonionatural where id_ficha_natural=16";
                    $miconexion->consulta($sql);
                    $listaUser= $miconexion->consultalista();
                    echo $listaUser[3];
					?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container text-center" id="portfolio">
            <h2 class="portfolio-title">Patrimonios Culturales</h2>
    </div>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img  src="images/recursoPa.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">
                        <?php 
					$sql = "select * from fichapatrimoniocultural where id_ficha_cultural=50 ";
                    $miconexion->consulta($sql);
                    $listaUser= $miconexion->consultalista();
                    echo $listaUser[2];
					?>
                    </h2>

                    <p> <?php 
					$sql = "select * from fichapatrimoniocultural where id_ficha_cultural=50 ";
                    $miconexion->consulta($sql);
                    $listaUser= $miconexion->consultalista();
                    echo $listaUser[4];
					?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <img  src="images/quito.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">
                        <?php 
					$sql = "select * from fichapatrimoniocultural where id_ficha_cultural=62 ";
                    $miconexion->consulta($sql);
                    $listaUser= $miconexion->consultalista();
                    echo $listaUser[2];
					?>
                    </h2>

                    <p> <?php 
					$sql = "select * from fichapatrimoniocultural where id_ficha_cultural= 62";
                    $miconexion->consulta($sql);
                    $listaUser= $miconexion->consultalista();
                    echo $listaUser[4];
					?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
</body>
<section class="contact-us" id="contactos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contactos</h2>
                    <div class="line-shape"></div>
                    <p>Si deseas contactarnos o tienes alguna sugerencia  envianos un mensaje!! </p>
                </div>
            </div>
        </div>
        <div class="container">
            <form method="Post" action=".../almacenar/enviarC.php">
                <div class="row">
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">Nombre</label>
                            <input type="text"  name="nombre" class="form-control" id="" placeholder=" Ingrese su nombre" require>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Correo </label>
                            <input type="email" name="correo" class="form-control" id="exampleInputEmail" placeholder=" ingrese su correo" require>
                        </div>	
        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for ="description"> Mensaje</label>
                            <textarea  class="form-control" name="mensaje" id="description" placeholder="Ingrese el mensaje" require></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar</button>
                    </div>        
                </div>
            </form>
        </div>
    </section><br><br>
    <footer class="footer text-center" >
      <div class="logoF"> <img src="images/logotipo.png" alt=""></div>
        <div class="container">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="https://es-la.facebook.com/utpl.loja/">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="https://api.whatsapp.com/send?phone=593999565400&text=%C2%A1Hola!%20">
                    <i class="fab fa-whatsapp"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://twitter.com/utpl?lang=es">
                    <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white" href="https://www.instagram.com/utpl/?hl=es-la">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; Hernan&Joselo UTPL</p>
           <div class="logoU"> <a href="https://www.utpl.edu.ec"> <img src="images/utpl2.png" alt=""></a></div>
           
        </div>
    </footer>
    <br>
<html>



