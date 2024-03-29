<?php 
session_start();
include '../controladores/login.php';
if (empty($_SESSION["ID"])){
  header ("location: ../formularios/inicia_sesion.php");

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Pagina principal</title>
  </head>
  <body>
  <header>

<div>
                <nav class="navbar navbar-expand-lg menu">
                <a class="navbar-brand" href="mostrar_paciente.php">
                <img src="../img/iconos/user_naranja.png" width="40" height="40" alt=""></a>
                <a class="nav-link disabled">INICIO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                  <a class="nav-link liga" href="mostrar_citas.php">CITAS</a>
                  <a class="nav-link liga" href="sesion_contacto.php">CONTACTO</a>
                  
                  </div>
                </div>
                <form class="form-inline">
                <a class="btn btn-outline-warning" href="../controladores/logout.php"> Cerrar sesion</a>
                
                  </form>
              </nav>
              </div>
      </header>
          <br>
    <main>
       
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-1"></div>
          <div class="col-10">
                    <div id="carouselExampleSlidesOnly " class="carousel slide " data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/hospital-fachada.jpeg" class="d-block w-20" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="../img/hospital-sala.jpeg" class="d-block w-20">
                    </div>
                    <div class="carousel-item">
                      <img src="../img/hospital-cuarto.jpeg" class="d-block w-20" alt="...">
                    </div>
                  </div>
                </div>
           </div>
           <div class="col-1"></div>
         </div>     
      </div>

    </main>

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