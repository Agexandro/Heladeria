<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="librerias/bootstrap.min.css">
    <title>Agregar un producto</title>
</head>
<body>

<div class="row">
<div class="col">
<form class='container' enctype="multipart/form-data" method = "post" action="dao/insert.php?id=2">
<header><h1>Agregar un producto</h1></header>
  <div class='form-group'>
    <label for='nombre_prod'>Nombre del producto</label>
    <input type='text' class='form-control' id='nombre_prod' name="nombre" required>
  </div>
  <div class='form-group'>
    <label for='descripcion'>Descripcion</label>
    <textarea id="descripcion" name="desc" rows="3" cols="50" class='form-control'></textarea>
  </div>
  <div class='form-group'>
    <label for='precio'>Precio</label>
    <input  type='text' class='form-control' id='precio' name="prec" required></input>
  </div>
  <div class='form-group'>
    <label for='icono'>Seleccione la imagen</label>
    <input type="file"  id="icono" name="icon" require></input>
  </div>

  <select name='categorias'>
<option value='' disabled selected>Seleccione una categoria...</option>
<?php
require("dao/select.php");
$contador = 0;
$consulta = select('categorias',null);
$tamaño =  mysqli_num_rows($consulta);
echo("");
if($tamaño>0){
    while($row = mysqli_fetch_assoc($consulta)){
        $contador=$contador+1;
        $id = $row['idcategoria'];
        $nombre = $row['nombre_categoria'];
        echo("
          <option value='$id'>$nombre</option>
        ");
    }
}
echo("</select>");
?>
  <button style="margin:0px 0px 0px 80px" type='submit' class='btn btn-primary' name="uploadBtn" value="Upload">Agregar</button>
</form>


</div>
<div class="col">
<table class='container table'>
  <header class="container"><h1>Tabla de productos</h1></header>
  <br>
        <thead>
          <tr>
            <th scope='col'>producto</th>
            <th scope='col'>descripcion</th>
            <th scope='col'>precio</th>
            <th scope='col'>Eliminar</th>
            <th scope='col'>Actualizar</th>
          </tr>
        </thead>
<?php
$contador = 0;
$consulta = select('productos',null);
$tamaño =  mysqli_num_rows($consulta);
if($tamaño>0){
    while($row = mysqli_fetch_assoc($consulta)){
        $contador=$contador+1;
        $id=$row['idproducto'];
        $producto = $row['nombre_producto'];
        $descripcion = $row['descripcion'];
        $icon = $row['icono'];
        $precio = $row['precio'];
        echo("
        <tbody>
          <tr>
            <th scope='row'>$producto</th>
            <td>$descripcion</td>
            <td>$precio</td>
            <td><a  class='btn btn-primary' href='dao/delete.php?ref=2&id=$id&content=$icon'>Eliminar</a></td>
            <td><a class='btn btn-primary' href='dao/delete.php';>Actualizar</a></td>
          </tr>
          </tbody>
        ");

    }
  }
?>
      </table>

</div>
</div>
    
</body>
</html>