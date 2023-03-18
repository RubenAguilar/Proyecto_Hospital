<?php 
  include 'Alta.php';
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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<header>
     
  <div>
            <nav class="navbar navbar-expand-lg menu">
            <a class="nav-link liga" href="home.php">INICIO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
              <a class="nav-link disabled">CITAS</a>
              <a class="nav-link liga" href="contacto.php">CONTACTO</a>
              
              </div>
            </div>
            <form class="form-inline">
            <a class="btn btn-outline-success" href="inicio_sesion.php">Iniciar sesion</a>
            
              </form>
          </nav>
          </div>
  </header>

  
    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-6">
<div class="card">
  <h5 class="card-header">REGISTRATE</h5>
  <div class="card-body">
  <form class="container"action="Alta.php" method="POST">
    
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Usuario</label>
      <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingresa tu usuario">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">contraseña</label>
      <input type="text" class="form-control" id="contrasenap" name="contrasenap"placeholder="Ingresa tu contraseña">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Nombre</label>
    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingresa tu nombre">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Numero Telefonico</label>
    <input type="number" class="form-control " id="Telefonop" name="Telefonop" placeholder="ejemplo: 981-139-7736">
  </div>
  <div class="row">
    <div class="col-10">
 
  <a class="btn btn-outline-primary" href="inicia_sesion.php">Inicia sesion</a>
  <button type="submit" value="Guardar" name="btnregistrar" class="btn btn-outline-success">Registrarte</button>
  <a class="btn btn-outline-danger"href="home.php">Cancelar</a>
  </div>
  
  
  </div>
</form>
  </div>
  </div>
</div>
</div>
</body>
</html>