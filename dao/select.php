<?php 
function select($tabla){
    require('conexion/conectar.php');
$sql = 'select * from '.$tabla.";";
return $datos = mysqli_query($conn,$sql);
mysqli_close($conn);
}
?>
