<?php 

session_start();
include "../controladores/funcion_eliminarD.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/Style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Perfil</title>
  </head>
  <body>
  <header>

<div>
                <nav class="navbar navbar-expand-lg  menu">
                <a class="navbar-brand" href="mostrar_doctor.php">
                <img src="../img/iconos/user_naranja.png" width="40" height="40" alt=""></a>
                <a class="nav-link liga"href="Inicio_D.php">INICIO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                  <a class="nav-link liga" href="mostrar_citasD.php">CITAS</a>
                  <a class="nav-link liga" href="sesion_contactoD.php" style='text-decoration:none;'>CONTACTO</a>
                  
                  </div>
                </div>
                <form class="form-inline">
                <a class="btn btn-outline-warning" href="../controladores/logout.php"> Cerrar sesion</a>
                  </form>
              </nav>
              </div>
      </header>
         <main>
            <div class="container">
              <div class="row">
                <div class="col-1"></div>
                <div class="col-7">
                            <div class="card carta_perfil">

                            <div class="card-header ">
                              <div class="row">
                                <div class="col-10">
                                  
                              <h5 class="informacion">INFORMACIÓN DE CUENTA</h5>
                              </div>
                              <div class="col-2">
                        
                              </div>
                              </div>
                                
                            </div>
                            <div class="card-body card_cuerpo">
                             
    <?php
      include "../controladores/conexion.php";
      $sql=$conexion->query("SELECT * from doctors where id_d='$_SESSION[id_d]' ");
      while($valor=$sql->fetch_object()) { ?>
            <h3><?= $valor-> Doctor?></h3>
            <h5>Usuario:</h5>
            <p><?= $valor-> user ?></p>
            <h5>Especialidad:</h5>
            <p><?= $valor-> espe ?></p>
            <h5>Numero consultorio:</h5>
            <p><?= $valor-> cnum ?></p>

            
            
                                             
                                    <div class="btn_modal_paciente">
                                                       
                                            <a class="btn btn-outline-primary" href="../formularios/editar_doctor.php"> Editar</a>
                                         
                                     <a onclick="return eliminar()" href="?id_d=<?= $valor->id_d ?>" class="btn btn-outline-danger">Eliminar</a>
                                      </div>       
                                      <?php } ?> 
                               
                            </div>
                            </div>
                            </div>
                            <div class="col-2"></div>
                       </div>
                       
                                        

          </main>
  <br><br><br><br><br><br>
          <footer>
        <div class="container">
        <br>
            <section class="row" >
                <section class="col-4">
                    <h2>Ubicación</h2>
                    <p>28 Jackson Blvd Ste 1020 Chicago il 60604-2340</p>
                    <br>
                    
                    </section>
                    <section class="col-8">
                        <h2>Síguenos</h2>
                        <img src="../img/Redes_sociales/Dakirby309-Simply-Styled-YouTube.24.png" alt="">
                        <img src="../img/Redes_sociales/instagram.png" height="20"width="20"alt="">
                        <img src="../img/Redes_sociales/Limav-Flat-Gradient-Social-Linkedin.24.png" alt="">
                        <img src="../img/Redes_sociales/Papirus-Team-Papirus-Apps-Gnome-twitch.24.png" alt="">
                        <img src="../img/Redes_sociales/Yootheme-Social-Bookmark-Social-facebook-box-blue.24.png" alt="">
                        <p>&copy; 2018 Politica de privacidad</p>
                    </section>
                    
                    </section>
                    </div>
    </footer>
    

   
   
  </body>
</html>