<?php
session_start();
include 'conexion.php';
include 'Alta_cita.php';

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
  <?php
       include "conexion.php";
       include 'controladores/modificarD.php';
      $sql=$conexion->query("SELECT * from pacientes where ID='$_SESSION[ID]' ");
      while($valor=$sql->fetch_object()) { ?>
  <form action="<?php  $_SESSION['usuario'];   ?>" method="POST">
  
        
      
          <div class="row">
            <div class="col">
            <label for="inputFecha">Fecha</label>
            <input type="date" class="form-control" name="fechita" id="fechita">
            </div>
            <div class="col">
            <label for="inputHora">Hora</label>
            <input type="time" class="form-control" name="horita"id="horita">
            </div>
        
            <input hidden type="text" class="form-control" id="patient" name="patient" value="<?= $valor->usuario ?>">
          </div>
         
          <?php }
         ?>
          <br>
          <div class="row">
            <div class="col">
              <button type="submit" value="Guardar" name="btniniciar" class="btn btn-primary">Enviar</button>
              <a class="btn btn-outline-danger"href="mostrar_citas.php">Cancelar</a>
            </div>
          
          </div>
       

</form>
  </div>
  </div>
</div>
</div>
</body>
</html>