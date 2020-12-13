<?php
$charset="0AaBbCcDdEe2FfGgHh3IiJj4KkMm5NnOo6PpQqRr7SsTt8UuVv9YyZz";
$cad="";
$i="";
for($i;$i<10;$i++){
  $cad.=substr($charset,rand(0,55),1);
}

?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Consulta</title>
  </head>
  <style>
  </style>
  <body>
  <form method="post" >
  <div class="container">
  <h1>Agenda tu cita aqui!</h1>
  <div class="row">
  <div class="col-6">
      <h2>informacion del cliente.</h2>
        <label class="titulo">Nombre</label>
        <input type="text" class="form-control" name="nombre">
        <label class="titulo">Apellidos Paterno</label>
        <input type="text" class="form-control" name="apellidop">
        <label class="titulo">Apellido Materno</label>
        <input type="text" class="form-control" name="apellidom">
        <label class="titulo">Numero Telefonico fijo</label>
        <input type="tel" class="form-control" name="telefonof">
        <label class="titulo">Numero telefonico movil</label>
        <input type="tel" class="form-control" name="telefonom">
        <label class="titulo">Direccion</label>
        <input type="text" class="form-control" name="dire">
        <label class="titulo">Codigo postal</label>
        <input type="text" class="form-control" name="codi">
        <button class="btn" type="submit" name="enviar">Enviar</button>
        <a href="C:/Users/lukami/Documents/Guadalupe/Nueva%20carpeta%20(3)/menu.html">
    <button>regresar</button>
</a>
  </div>
        <div class="col-6">
        <h2>informacion para la cita.</h2>
        <label class="titulo">Descripcion de Sintomas</label>
        <input type="text" class="form-control" name="sint">
  <label class="titulo">Fecha de la cita</label><br> 
  <label class="titulo">Dia</label>
  <input type="number" class="form-control" name="dia">
  <label class="titulo">mes</label>
  <input type="moth" class="form-control" name="mes">
  <label class="titulo">Hora</label>
  <input type="time" class="form-control" name="hora">
  <label class="titulo">Ingresar codigo de indentificacion</label>
  <input type="text" class="form-control" name="idenc">
  <label class="titulo">Su codigo de indentificacion</label>
  <input type="text" class="form-control" name="code" value="<?php echo $cad;?>">
  <label class="titulo">*Se debe de presentar este codigo al momento de la consulta*</label>
      </div>
    </div>
  </div>
  </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>