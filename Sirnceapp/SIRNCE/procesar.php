<?php
include("includes/cabecera.php");
extract($_POST);
echo "<hr>";
echo $nombres."<br>";
echo $cedula."<br>";
echo $correo."<br>";

if ($edad>17) {
	echo "Ud es mayor de edad";
}else{
	echo "Ud es menor de edad";
}
echo "<hr>";
include("includes/piePagina.php");
?>