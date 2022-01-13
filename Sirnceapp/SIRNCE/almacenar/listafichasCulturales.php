<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Fichas Culturales</title>
</head>
<body>
    <h1>Lista Fichas Culturales</h1>
    <?php 
    extract($_POST);
    include("../dll/config.php");
    include("../dll/class_mysqli.php");

    $miconexion= new clase_mysqli7;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $sql = "select * from ubicacion";
    $sql = "select * from fichapatrimoniocultural";
    $miconexion->consulta($sql);
    $miconexion->verconsulta();
    ?>  
</body>
</html>
