<?php
require("dao/select.php");
$contador = 0;
$consulta = select('productos',);
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
                <h5 class='card-title'>$precio</h5>
            </div>
        </div> 
            
            </div>
        ");

        if($contador==4 || $contador==$tamaño){
            echo("</div><br>");
            $contador=0;
        }
    }
    echo("</div>");
}

?>