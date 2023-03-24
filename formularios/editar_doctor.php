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

      </header>
      <main>
    
      
      <form class="col-4 p-3 m-auto"  method="POST">
        <h3 class="text-center text-dark">Modificar perfil </h3>
         
         <?php
       include "../controladores/conexion.php";
       include '../controladores/modificarD.php';
      $sql=$conexion->query("SELECT * from doctors where id_d='$_SESSION[id_d]' ");
      while($valor=$sql->fetch_object()) { ?>

         <div class="mb-3">
             <label for="Nombre" class="form-label">Nombre</label>
             <input type="text" class="form-control" id="Doctor" name="Doctor" value="<?= $valor->Doctor ?>">
         </div>

         <div class="mb-3">
             <label for="usuario" class="form-label">Usuario:</label>
             <input type="text" class="form-control" id="user" name="user" value="<?= $valor->user ?>">
         </div>

         <div class="mb-3">
             <label for="especialidad" class="form-label">Especialidad:</label>
             <input type="text" class="form-control" id="espe" name="espe" value="<?= $valor->espe ?>">
         </div>

         <div class="mb-3">
             <label for="numC" class="form-label">Numero de consultorio:</label>
             <input type="number" class="form-control" id="cnum" name="cnum" value="<?= $valor->cnum ?>">
         </div>
       

        
         <?php }
         ?>
         <button type="submit" class="btn btn-primary" name="btneditar" value="ok">Modificar</button>
        <a class="btn btn-secondary" href="../vistas/mostrar_doctor.php">Atras</a>
        
     </form>
    
    
      </main>
      <footer>
        
    </footer>

   
   
  </body>
</html>