<?php 
function select($tabla,$fila){
    require('conexion/conectar.php');
if(empty($fila)){
    $sql = 'select * from '.$tabla.";";
}else{
    $sql = 'select * from '.$tabla." where idcategoria="."$fila".";";
}
return $datos = mysqli_query($conn,$sql);
mysqli_close($conn);
}
?>
