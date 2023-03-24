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
    <title>Eleccion</title>
</head>
<body>
    <header>
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
                    <a class="btn btn-outline-success" href="eleccion_i.php">Iniciar sesion</a>
                    
                      </form>
                  </nav>
    </header>
<main>
    <h1 class="pregunta">¿Eres doctor o paciente?</h1>
    
    
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-5">
                <div class="card" style="width: 18rem;">
                    <img src="img/iconos/doc_icon.png" class="card-img-top" alt="Es el icono de doctor">
                    <div class="card-body">
                        <p class="card-text">En caso de ser docotor haga click aqui abajo.</p>
                        <a class="btn btn-outline-success" href="formularios/registro_doctor.php">Doctor</a>    
                    </div>
                    </div>
                </div>
                <div class="col-3">
                <div class="card" style="width: 18rem;">
                        <img src="img/iconos/patient.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">En caso de ser paciente haga click aqui abajo.</p>
                            <a class="btn btn-outline-success" href="Registrate.php">Paciente</a>
                        </div>
                        </div>
                </div>


            </div>



        </div>
</main>

</body>
</html>