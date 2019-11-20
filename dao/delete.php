<?php
    require('../conexion/conectar.php');
    $dato=$_GET['id'];
    $icono ="../".$_GET['content'];
    $sql = 'delete from categorias where idcategoria ='.$dato;
if(mysqli_query($conn,$sql)){
    header("location:../add_cat.php");
    unlink("$icono");
}else{
    echo ('Datos NO Eliminados: '.mysqli_error());
}
mysqli_close($conn);
?>
