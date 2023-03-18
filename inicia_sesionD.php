<?php
session_start();
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Style.css">
    <title>Inicio de sesion</title>
</head>
<body>
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6">
<div class="card">
  <h5 class="card-header">INICIA SESION</h5>
  <div class="card-body">
  <form method="POST" >

  <div class="form-group">
  <?php
          include "controladores/loginD.php";
          ?> 
      <br>
    <label for="inputAddress">Usuario</label>
    <input type="text" class="form-control" id="user" name="user" placeholder="Ingresa tu usuario">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Contraseña</label>
    <input type="password" class="form-control" id="contrasenad" name="contrasenad" placeholder="Ingresa tu contraseña">
  </div>
  <button type="submit" value="Guardar" name="btniniciard" class="btn btn-primary">Enviar</button>
  <a class="btn btn-outline-danger"href="eleccion_i.php">Cancelar</a>
</form>
  </div>
  </div>
</div>
</div>
</body>
</html>