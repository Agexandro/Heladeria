<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar una categoria</title>
    <link rel="stylesheet" href="librerias/bootstrap.min.css">
</head>
<body>
<div class="row">
<div class="col">
<form class='container' enctype="multipart/form-data" method = "post" action="dao/insert.php">
<header><h1>Agregar una categoria</h1></header>
  <div class='form-group'>
    <label for='nombre_cat'>Nombre de la categoria</label>
    <input type='text' class='form-control' id='nombre_cat' name="nombre" required>
  </div>
  <div class='form-group'>
    <label for='descripcion'>Descripcion</label>
    <textarea id="descripcion" name="desc" rows="3" cols="50" class='form-control'></textarea>
  </div>
  <div class='form-group'>
    <label for='icono'>Seleccione la imagen</label>
    <input type="file"  id="icono" name="icon" required></input>
  </div>
  <button type='submit' class='btn btn-primary' name="uploadBtn" value="Upload">Agregar</button>
</form>
</div>
<div class="col">
<table class='container table'>
  <header class="container"><h1>Tabla de categorias</h1></header>
  <br>
        <thead>
          <tr>
            <th scope='col'>Categoria</th>
            <th scope='col'>descripcion</th>
            <th scope='col'>Eliminar</th>
            <th scope='col'>Actualizar</th>
          </tr>
        </thead>
<?php
require("dao/select.php");
$contador = 0;
$consulta = select('categorias',null);
$tamaño =  mysqli_num_rows($consulta);
if($tamaño>0){
  
    while($row = mysqli_fetch_assoc($consulta)){
        $contador=$contador+1;
        $id=$row['idcategoria'];
        $categoria = $row['nombre_categoria'];
        $descripcion = $row['descripcion'];
        $icon = $row['icono'];
        echo("
        <tbody>
          <tr>
            <th scope='row'>$categoria</th>
            <td>$descripcion</td>
            <td><a  class='btn btn-primary' href='dao/delete.php?id=$id&content=$icon'>Eliminar</a></td>
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