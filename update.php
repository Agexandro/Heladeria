<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar categoria</title>
    <link rel="stylesheet" href="librerias/bootstrap.min.css">

</head>
<body>
<form class='container' enctype="multipart/form-data" method = "post" action="dao/update.php?ref=1&id=10009">
<header><h1>Actualizar categoria</h1></header>
  <div class='form-group'>
    <label for='nombre_cat'>Nuevo nombre de la categoria</label>
    <input type='text' class='form-control' id='nombre_cat' name="nombre" required>
  </div>
  <div class='form-group'>
    <label for='descripcion'>Nueva descripcion</label>
    <textarea id="descripcion" name="desc" rows="3" cols="50" class='form-control'></textarea>
  </div>
  <div class='form-group'>
    <label for='icono'>Seleccione nueva imagen</label>
    <input type="file"  id="icono" name="icon" required></input>
  </div>
  <button type='submit' class='btn btn-primary' name="uploadBtn" value="Upload">Agregar</button>
</form>
</body>
</html>