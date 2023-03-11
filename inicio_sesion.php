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
    <title>Inicio de sesion</title>
</head>
<body>
<header>
     
                <div>
                <nav class="navbar navbar-expand-lg menu">
                     <a class="nav-link liga" href="index.php">INICIO</a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                       <div class="navbar-nav">
                       <a class="nav-link disabled">CITAS</a>
                       <a class="nav-link liga" href="Contacto.php">CONTACTO</a>
                       
                       </div>
                     </div>
                     <form class="form-inline">
                     <a class="btn btn-outline-success" href="eleccion.php">Registrarse</a>
                     
                       </form>
                   </nav>
                   </div>
           </header>
           <br>
           <main>
            <div class="container">
                    <div class="card">
                            <h5 class="card-header">Ingresa los datos correspondientes</h5>
                            <div class="card-body">
                            <form>
                                <div class="form-group">
                            <label for="exampleUsuario">Usuario</label>
                            <input type="text" class="form-control" id="Usuario" aria-describedby="UsuarioHelp" placeholder="Escribe tu usuario" >
                            
                        </div>
                                    
                       
                        <div class="form-group">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>
 
                        </form>
                        <br>
                                <a href="sesion_iniciada.php" class="btn btn-primary">Iniciar</a>
                            </div>
                            </div>
                            </div>
           </main>
</body>
</html>