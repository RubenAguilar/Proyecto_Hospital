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

    <title>Info Doctor</title>
  </head>
  <body>
  <header>

<div>
                <nav class="navbar navbar-expand-lg  menu">
                <a class="navbar-brand" href="#">
                <img src="img/iconos/user_naranja.png" width="40" height="40" alt=""></a>
                <a class="nav-link liga"href="sesion_iniciada.php">INICIO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                  <a class="nav-link liga" href="crear_citas.php">CITAS</a>
                  <a class="nav-link liga" href="sesion_contacto.php">CONTACTO</a>
                  
                  </div>
                </div>
                <form class="form-inline">
                <a class="btn btn-outline-warning" href="index.php"> Cerrar sesion</a>
                  </form>
              </nav>
              </div>
      </header>
         <main>
            <div class="container">
                            <div class="card carta_perfil">

                            <div class="card-header">
                              <div class="row">
                                <div class="col-11">
                              <h5>Información de la cuenta de Doctor</h5>
                              </div>
                              <div class="col-1">
                          
                              <img src="img/iconos/Profile.png" width="40" height="40" alt="">
                              </div>
                              </div>
                                
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Dr. Roberto Ortega Escamilla</h3>
                                <h6>Correo:</h6>
                                <p class="card-text">Correo_de_ejemplo@hotmail.com</p>
                               <h6>Telefóno:</h6>
                                <p class="card-text">9811066255</p>
                                <h6>Consultorio:</h6>
                                <p class="card-text">001</p>

                                <div class="btn_modal_paciente">
                                                        <!-- Button trigger modal Editar -->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Editar">
                                            Editar
                                            </button>
                                    

                                                        <!-- Button trigger modal Eliminar-->
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Eliminar">
                                            Eliminar
                                            </button>
                                      </div>    
                                      <!-- Modal Editar -->
                                      <div class="modal fade" id="Modal_Editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">¿Estas Seguro?</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                  <!-- Formulario para editar paciente -->
                                                  <div class="card">
                                                      <h5 class="card-header">Edita tus datos</h5>
                                                      <div class="card-body">
                                                      <form>
                                                          <div class="form-group">
                                                      <label for="exampleInputNombre">Nombre:</label>
                                                      <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" placeholder="Tu nombre completo." >
                                                      
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail">Correo Electronico:</label>
                                                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Tu correo">
                                                  </div>
                                                              
                                                  <div class="form-group">
                                                      <label for="exampleInputTelefono">Numero telefónico:</label>
                                                      <input type="text" class="form-control" id="Num_telefonico" placeholder="Ejemplo: 981-102-4200" >
                                                      
                                                  </div>
                                                  
                                                  </form>
                                                  <br>
                                                          <a href="sesion_iniciada.php" class="btn btn-primary">Registrarte</a>
                                                      </div>
                                                      </div>
                                                  </div>
                                                  <!-- Fin editar paciente-->
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-primary">Guardar</button>
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Descartar</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!-- Modal Eliminar -->
                                          <div class="modal fade" id="Modal_Eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">¿Estas Seguro?</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                          <div class="modal-body">
                                          Confirma si deseas dar de baja este perfil.
                                         </div>
                                    <div class="modal-footer">
                                            <button type="button" class="btn btn-danger">Eliminar</button>   
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Descartar</button>
                                    </div>   
                                    
                               
                            </div>
                            
                            </div>
            </div>

         </main>
  <br><br><br>
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
                        <img src="img/Redes_sociales/Dakirby309-Simply-Styled-YouTube.24.png" alt="">
                        <img src="img/Redes_sociales/instagram.png" height="20"width="20"alt="">
                        <img src="img/Redes_sociales/Limav-Flat-Gradient-Social-Linkedin.24.png" alt="">
                        <img src="img/Redes_sociales/Papirus-Team-Papirus-Apps-Gnome-twitch.24.png" alt="">
                        <img src="img/Redes_sociales/Yootheme-Social-Bookmark-Social-facebook-box-blue.24.png" alt="">
                        <p>&copy; 2018 Politica de privacidad</p>
                    </section>
                    
                    </section>
                    </div>
    </footer>
    

   
   
  </body>
</html>