<?php
    require('../conexion/conectar.php');
    $dato=$_GET['id'];
    $icono ="../".$_GET['content'];
    $prod ="../".$_GET['producto'];
    $sql = 'delete from categorias where idcategoria ='.$dato;
    unlink("$icono");
    unlink("$prod");
if(mysqli_query($conn,$sql)){
    header("location:../index2.php");
}else{
    echo ('Datos NO Eliminados: '.mysqli_error());
}
mysqli_close($conn);
?>
