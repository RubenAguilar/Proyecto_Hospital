<?php
session_start();
include "../controladores/Alta_cita";
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
<link rel="stylesheet" href="../css/style.css">    

    <title>Crear Citas</title>
</head>
<body>
<header>

<div>
        <nav class="navbar navbar-expand-lg menu">
        <a class="navbar-brand" href="mostrar_doctor.php">
        <img src="../img/iconos/user_naranja.png" width="40" height="40" alt=""></a>
        <a class="nav-link liga"href="inicio_D.php">INICIO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-link disabled" href="mostrar_citasD.php">CITAS</a>
        <a class="nav-link liga" href="sesion_contactoD.php">CONTACTO</a>

        </div>
        </div>
        <form class="form-inline">
        <a class="btn btn-outline-warning" href="../controladores/logout.php"> Cerrar Sesion</a>
        </form>
        </nav>
</div>
</header>
    
<main>
<?php
    include "../controladores/conexion.php";
    include "../controladores/funcion_eliminarD.php";
    ?>
<div class="container tabla_citas">
<div class="card">
<h5 class="card-header">Citas agendadas</h5>
<div class="card-body">
  
<table class="table">
<thead class="thead-dark">
<tr>
<th  scope="col">ID</th>
  <th scope="col">Fecha</th>
  <th scope="col">Hora</th>
  <th scope="col">Paciente</th>
  <th scope="col">Opciones</th>
  
</tr>
</thead>
<tbody>
                <?php
                include "../controladores/conexion.php";
               include "../controladores/funcion_eliminarD.php";
                $sql=$conexion->query("SELECT * from citap ");
                
                while($valor=$sql->fetch_object()) { ?>
                    <tr>
                     <td ><?= $valor-> id_c ?></td>
                     <td><?= $valor-> fechita ?></td>
                     <td><?= $valor-> horita ?></td>
                     <td><?= $valor-> patient?></td>
                  
                     <td>
                         <a href="../controladores/modificarC.php?id_c=<?= $valor->id_c ?>" class="btn btn-outline-primary">Editar</a>
                         <a onclick="return eliminar()" href="mostrar_citasD.php?id_c=<?= $valor->id_c ?>" class="btn btn-outline-danger">Eliminar</a>
                         
                     </td>
                 </tr>
                <?php } ?>   
             </tbody>

</table>
  
</div>
</div>
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