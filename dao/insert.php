<?php 
require('../conexion/conectar.php');
require('../int_crud_cat/upload.php');
$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$prod = strtolower("catalogo_productos/".$nombre.".php");
$icon="images/".$newFileName;
$sql = "insert into categorias(nombre_categoria,descripcion,icono,productos) values('$nombre','$desc','$icon','$prod')";
if(mysqli_query($conn,$sql)){
    $fh = fopen('../'.$prod, 'a');
fwrite($fh, '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>Hola</header>
</body>
</html>');
fclose($fh);
    header("location:../index2.php");
}else{
    echo ('Datos NO Insertados: '.mysqli_error());
}
mysqli_close($conn);
?>