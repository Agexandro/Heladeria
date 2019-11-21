<?php 
require('conexion/conectar.php');

$sql = 'update categorias set nombre_categoria = "Paletas" , descripcion = "Nueva descripcion" where idcategoria=2';

if(mysqli_query($conn,$sql)){
    echo ('Datos Actualizados');
}else{
    echo ('Datos NO Actualizados: '.mysqli_error());
}
mysqli_close($conn);
?>
