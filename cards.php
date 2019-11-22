<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
    <link rel="stylesheet" href="librerias/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
<?php
require("assesst/header.php");
require("dao/select.php");
$contador = 0;
$idcategoria = $_GET['id'];
$consulta = select('productos',$idcategoria);
$tamaño =  mysqli_num_rows($consulta);
if($tamaño>0){
    echo("<div class='container'>");
    while($row = mysqli_fetch_assoc($consulta)){
        $contador=$contador+1;
        $producto = $row['nombre_producto'];
        $descripcion = $row['descripcion'];
        $icono = $row['icono'];
        $precio = $row['precio'];

        if($contador==1){
            echo("<div class='row'>");
        }
        echo("
            <div class='col'>
             <div class='card'>
                <img src='$icono' height= '300px' class='card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'>$producto</h5>
                <p class='card-text'>$descripcion</p>
                <h5 class='card-title'>Precio: $ $precio</h5>
            </div>
        </div> 
            </div>
        ");

        if($contador==3 || $contador==$tamaño){
            echo("</div><br>");
            $contador=0;
        }
    }
    echo("</div>");
}

?>
</body>
</html>