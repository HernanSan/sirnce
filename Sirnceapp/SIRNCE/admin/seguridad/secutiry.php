<?php 

	session_start();
	if ($_SESSION['autentificado'] && $_SESSION['nombreuser'] && $_SESSION['rol']) {
		include("../dll/config.php");
		include("../dll/class_mysqli.php");
		$miconexion= new clase_mysqli7;
 		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

	}else{
 		echo "<script>location.href='../index.php'</script>";
	}

?>