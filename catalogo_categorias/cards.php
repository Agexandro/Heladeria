<?php
require("dao/select.php");
$contador = 0;
$consulta = select('categorias');
$tamaño =  mysqli_num_rows($consulta);
if($tamaño>0){
    echo("<div class='container'>");
    while($row = mysqli_fetch_assoc($consulta)){
        $contador=$contador+1;
        $categoria = $row['nombre_categoria'];
        $descripcion = $row['descripcion'];
        $icono = $row['icono'];
        $link = $row['productos'];

        if($contador==1){
            echo("<div class='row'>");
        }
        echo("
            <div class='col'>
             <div class='card'>
                <img src='$icono' height= '300px' class='card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'>$categoria</h5>
                <p class='card-text'>$descripcion</p>
                <a href='$link' class='btn btn-primary'>Ver mas</a>
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