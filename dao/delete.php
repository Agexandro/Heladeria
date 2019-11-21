<?php
    require('../conexion/conectar.php');
    $dato=$_GET['id'];
    $icono ="../".$_GET['content'];
    if($_GET['ref']==1){
        $sql = 'delete from categorias where idcategoria ='.$dato;
        if(mysqli_query($conn,$sql)){
            header("location:../add_cat.php");
            unlink("$icono");
        }else{
            echo ('Datos NO Eliminados: '.mysqli_error());
        }
    }else{
        if($_GET['ref']==2){
            $sql = 'delete from productos where idproducto ='.$dato;
            if(mysqli_query($conn,$sql)){
                header("location:../add_prod.php");
                unlink("$icono");
            }else{
                echo ('Datos NO Eliminados: '.mysqli_error());
            }
        }
    }
mysqli_close($conn);
?>
