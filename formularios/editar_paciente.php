<?php

session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Pagina principal</title>
  </head>
  <body>
  <header>

<div>
                <nav class="navbar navbar-expand-lg menu">
                <a class="navbar-brand" href="../vistas/mostrar_paciente.php">
                <img src="img/iconos/user_naranja.png" width="40" height="40" alt=""></a>
                <a class="nav-link disabled">INICIO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                  <a class="nav-link liga" href="../vistas/mostrar_citas.php">CITAS</a>
                  <a class="nav-link liga" href="../vistas/sesion_contacto.php">CONTACTO</a>
                  
                  </div>
                </div>
                <form class="form-inline">
                <a class="btn btn-outline-warning" href="../controladores/logout.php"> Cerrar Sesion</a>
                
                  </form>
              </nav>
              </div>
      </header>
      <main>
     
      
      <form class="col-4 p-3 m-auto"  method="POST">
         <h3 class="text-center text-dark">Modificar perfil </h3>
         <input type="hidden" name="ID" value="<?= $_GET["ID"]?>">
         <?php
       include "../controladores/conexion.php";
       include '../controladores/modificar.php';
      $sql=$conexion->query("SELECT * from pacientes where ID='$_SESSION[ID]' ");
      while($valor=$sql->fetch_object()) { ?>

         <div class="mb-3">
             <label for="Nombre" class="form-label">Nombre</label>
             <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?= $valor->Nombre ?>">
         </div>

         <div class="mb-3">
             <label for="usuario" class="form-label">Usuario:</label>
             <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $valor->usuario ?>">
         </div>

         <div class="mb-3">
             <label for="Telefono" class="form-label">Telefono</label>
             <input type="number" class="form-control" id="Telefonop" name="Telefonop" value="<?= $valor->Telefonop ?>">
         </div>

         
       

        
         <?php }
         ?>
         <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar</button>
        <a class="btn btn-secondary" href="../vistas/mostrar_paciente.php">Atras</a>
     </form>

    
      </main>
      
    

   
   
  </body>
</html>