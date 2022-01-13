<?php
include("../dll/config.php");
?>
<link rel="stylesheet" type="text/css" href="<?php echo $urlSitio; ?>css/estilos.css">

<body class="ingreso">
<form method="post" action="../dll/validar.php">
     
<div >
      <div class="logo2"><img src="" alt=""> </div>
      <div class="text1">
        <p><samp class="t1">Sistema de Internacionalizacion</samp>  de Recursos Naturales <samp class="t2">y Culturales del Ecuador </samp> </p>
      </div>
      <div class="ErrorLo"></div>
	   <h2>Ingreso al sistema</h2><br>
     <div class="login">
       
     <div class="user"><img src="images/user.png" alt=""></div>
     <div class="ingresoS">
	   <form  method="post" action="../dll/validar.php">
     <p>USUARIO</p>
		 <input class="usu" type="text" name="user" placeholder="Usuario" require><br>
		 <p>CONTRASEÑA</p>
		 <input class="cla" type="password" name="pass" placeholder="Clave" require><br><br>
		 <input  class="botonI" type="submit" value="Ingresar" ><br><br>
	   </form>
     </div>
     </div>
</body>

<?php
include("piePagina2.php");
?>
