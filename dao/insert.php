<?php 
require('../conexion/conectar.php');
require('../int_crud_cat/upload.php');
$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$prod = "cards.php";
$icon="images/".$newFileName;
$sql = "insert into categorias(nombre_categoria,descripcion,icono,productos) values('$nombre','$desc','$icon','$prod')";
if(mysqli_query($conn,$sql)){
    header("location:../index2.php");
}else{
    echo ('Datos NO Insertados: '.mysqli_error());
}
mysqli_close($conn);
?>