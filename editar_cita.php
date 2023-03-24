<?php

session_start();
$id_c=$_GET["id_c"];


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Pagina principal</title>
  </head>
  <body>
  <header>

<div>
                
              </div>
      </header>
      <main>
     
      
      <form class="col-4 p-3 m-auto"  method="POST">
         <h3 class="text-center text-dark">Modificar cita </h3>
       
         <input type="hidden" name="id_c" value="<?= $_GET["id_c"]?>">
         <?php
       include "conexion.php";
       include 'controladores/modificarC.php';
       $sql=$conexion->query("SELECT * from citap where id_c='$id_c'  ");
      while($valor=$sql->fetch_object()) { ?>

         <div class="mb-3">
             <label for="Nombre" class="form-label">Fecha:</label>
             <input type="text" class="form-control" id="fechita" name="fechita" value="<?= $valor-> fechita ?>">
         </div>

         <div class="mb-3">
             <label for="usuario" class="form-label">Hora:</label>
             <input type="text" class="form-control" id="horita" name="horita" value="<?= $valor-> horita ?>">
         </div>


         
       

        
         <?php }
         ?>
         <button type="submit" class="btn btn-primary" name="btneditarcita" value="ok">Modificar</button>
        <a class="btn btn-secondary" href="mostrar_citas.php">Atras</a>
      
     </form>
   
    
      </main>
      <footer>
        
    </footer>

   
   
  </body>
</html>