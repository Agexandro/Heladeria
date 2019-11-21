<?php 
require('../conexion/conectar.php');
require('../int_crud_cat/upload.php');
$id=$_GET['id'];
if($id == 1){
    $nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$prod = "cards.php";
$icon="images/".$newFileName;
$sql = "insert into categorias(nombre_categoria,descripcion,icono,productos) values('$nombre','$desc','$icon','$prod')";
if(mysqli_query($conn,$sql)){
    header("location:../add_cat.php");
}else{
    echo ('Datos NO Insertados: '.mysqli_error());
}
}else{
if($id==2){
$select = $_POST['categorias'];
$nombre = $_POST['nombre'];
$desc = $_POST['desc'];
$precio = $_POST['prec'];
$icon="images/".$newFileName;
$sql = "insert into productos(nombre_producto,precio,descripcion,idcategoria,icono) values('$nombre','$precio','$desc','$select','$icon')";
if(mysqli_query($conn,$sql)){
    header("location:../add_prod.php");
}else{
    echo ('Datos NO Insertados: '.mysqli_error());
}
}
}
mysqli_close($conn);
?>