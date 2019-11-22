<?php 
require('../conexion/conectar.php');
require('../int_crud_cat/upload.php');
    $icono ="../".$_GET['content'];
    $ref=$_GET['ref'];
        $id=$_GET['id'];
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['desc'];
        $icon="images/".$newFileName;
        $sql = "update categorias set nombre_categoria ='"."$nombre"."' , descripcion ='"."$descripcion"."',icono ='"."$icon"."' where idcategoria=".$id;
    
    if(mysqli_query($conn,$sql)){
        unlink("$icono");
        header ('location:../add_cat.php');
    }else{
        echo ('Datos NO Actualizados: '.mysqli_error());
    }

mysqli_close($conn);
?>
