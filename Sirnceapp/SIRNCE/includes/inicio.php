<?php
include("dll/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Proyecto de PHP</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Noto+Sans+JP&display=swap"
      rel="stylesheet" />
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
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
                    <a class="nav-link js-scroll-trigger" href="#contact">Contactos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href=" <?php echo $urlSitio; ?>includes/login.php"> <img src="images/usuario1.png" alt=""></a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="background-main">
    </header>
    <div class="contenido">
    <div class="texto1"> 
		<p class="sirnce">SIRNCE</p>
		Sistema de Internacionalizacion de Los Recursos Naturales y Culturales del Ecuador.
	</div>
	<div class="frase">
        <div class="texto2"> <samp> “Todo lo que necesitas</samp> es Ecuador ” </div>
	    <div class="texto3"> <samp> “All you</samp> need is Ecuador”</div>
    </div>
    </div >
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
            <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-gem text-primary mb-3 sr-icon-1"></i>
                <h3 class="mb-3">Patrimonios Culturales</h3>
                <p class="text-muted mb-0">12</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
                <h3 class="mb-3">Patrimonios Naturales</h3>
                <p class="text-muted mb-0">10</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
                <h3 class="mb-3">Provincias</h3>
                <p class="text-muted mb-0">6</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
                <h3 class="mb-3">Cantones</h3>
                <p class="text-muted mb-0">10</p>
                </div>
            </div>
            </div>
        </div>
    </section>
    <br>
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
                        <h2 class="display-4">Laguna de Quilotoa</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
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
                        <h2 class="display-4">Volcan de Cotopaxi</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
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
                        <h2 class="display-4">Cuenca</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
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
                        <h2 class="display-4">Quito</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
</body>
<footer class="footer">
		<div class="logoF"> <img src="images/logotipo.png" alt=""></div>
	 
      <div class="redes">
	      <a href="https://www.utpl.edu.ec"> <img src="images/utpl.png" alt=""></a>
		  <a href="https://www.utpl.edu.ec">  <img src="images/face.png" alt="" > </a>
	      <a href="https://www.utpl.edu.ec"> <img src="images/tweter.png" alt="" ></a>
	      <a href="https://www.utpl.edu.ec"><img src="images/insta.png" alt="" > </a>
		  <h6>Derechos Reservados UTPL  by:Joselo & Hernan (SIRNCE 2021)	</h6>
	  </div>
	  
	</footer>
<html>
