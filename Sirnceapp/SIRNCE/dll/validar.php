<?php
	session_start();
	if(($_POST['user']) && $_POST['pass']){
		$usuario=$_POST['user'];
		$clave=$_POST['pass'];

		//llamada a la capa de datos
		include("config.php");
		include("class_mysqli.php");
		$miconexion= new clase_mysqli7;
 		$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
 		$miconexion->consulta("SELECT * from usuarios where usuario='$usuario' and clave='$clave'");
 		$lista=$miconexion->consultaLista();
 		if ($lista[0]) {
 			$_SESSION['autentificado']=TRUE;
 			$_SESSION['nombreuser']=$lista[1];
 		//	$_SESSION['rol']=$lista[5];
			
 			echo "<script>location.href='../admin/repositorio2.php'</script>";
 		}else{
			echo '<script>alert("Datos incorrectos");</script>';
 			echo "<script>location.href='../includes/login.php'</script>";
 		}

	}else{
		echo "<script>location.href='../includes/login.php'</script>";
	}
?>