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

    <title>Crear Citas</title>
</head>
<body>
<header>

<div>
        <nav class="navbar navbar-expand-lg menu">
        <a class="navbar-brand" href="mostrar_paciente.php">
        <img src="img/iconos/user_naranja.png" width="40" height="40" alt=""></a>
        <a class="nav-link liga"href="sesion_iniciada.php">INICIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link disabled" href="crear_citas.php">CITAS</a>
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
<div class="container tabla_citas">
<div class="card">
<h5 class="card-header">Citas agendadas</h5>
<div class="card-body">
  
<table class="table">
  <thead class="thead-dark">
    <div class="row">
    <tr>
      <th class="col-1" scope="col">#</th>
      <th class="col-2" scope="col">Fecha</th>
      <th class="col-2" scope="col">Hora</th>
      <th class="col-5" scope="col">Doctor</th>
      <th class="col-2" scope="col">Consultorio</th>
    </tr>
    </div>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>08/03</td>
      <td>5:20 pm</td>
      <td>Dr. Roberto Ortega Escamilla</td>
      <td>001</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>17/03</td>
      <td>2:30 pm</td>
      <td>Dr. Roberto Ortega Escamilla</td>
      <td>001</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>20/03</td>
      <td>4:45 pm</td>
      <td>Dr. Roberto Ortega Escamilla</td>
      <td>001</td>
    </tr>
  </tbody>
</table>
  <!-- Button trigger modal Editar -->
  <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#Modal_Editar_Cita">
      Editar
  </button>
   <!-- Button trigger modal eliminar -->
   <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#Modal_Eliminar_Cita">
      Eliminar
  </button>
</div>
</div>
</div>
<div class="container">
  <div class="row">
      <div class="col-11">
           
      </div>
                
        <div class="col-1">
              <!-- Button trigger modal Agendar -->
              <a type="button" data-toggle="modal" data-target="#Crear_cita">  <img src="img/Iconos/add.png" ></a>
        </div>
  </div>
</div>

</main>
<br><br><br><br>
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






 <!-- Modal Editar -->
 <div class="modal fade" id="Modal_Editar_Cita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Estas Seguro?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Formulario para editar cita -->
       
              <div class="card-body">
              
       
        <div class="row">
            
            <div class="col-12">
                    <div class="card border-dark mb-3" style="max-width: 68rem;">
                      <div class="card-header">Ingresa los datos</div>
                      <div class="card-body text-dark">
                        <h5 class="card-title">Reagenda tu cita</h5>

                        <form>
                      <div class="form-row">
                        
                        <div class="form-group col-md-3">
                          <label for="inputFecha">Fecha</label>
                          <input type="password" class="form-control" id="inputFecha">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputHora">Hora</label>
                          <input type="password" class="form-control" id="inputHora">
                        </div>
                      </div>
                      <form>
                      <div class="form-group">
                        
                      <div class="form-row">
                        <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1" >Comentarios</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Añade un comentario en caso de que lo desee."></textarea>
                      </div>
                      </div>
                    </form>
                   
                    </form>
                        
                      </div>
                      </div>
                    </div>
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
 <div class="modal fade" id="Modal_Eliminar_Cita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">¿Estas Seguro?</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
      Confirma si deseas eliminar la cita.
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger">Eliminar</button>   
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Descartar</button>
      </div>
      </div>
      </div>
      </div>
      </div>

<!-- Modal -->
<div class="modal fade" id="Crear_cita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingresa los datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Formulario agendar-->
        <form>
          <div class="row">
            <div class="col">
            <label for="inputFecha">Fecha</label>
              <input id="inputFecha" type="text" class="form-control" placeholder="00/00">
            </div>
            <div class="col">
            <label for="inputHora">Hora</label>
              <input id="inputHora"type="text" class="form-control" placeholder="Last name">
            </div>
          </div>
        </form>
        <!--Fin formulario-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Agendar</button>
        <button type="button" class="btn btn-secondary">Cancelar</button>
      </div>
    </div>
  </div>
</div>


</body>
</html>