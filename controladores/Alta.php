<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ID = isset($_REQUEST['ID'])? $_REQUEST['ID'] : null;
    $Nombre = isset($_REQUEST['Nombre'])? $_REQUEST['Nombre'] : null;
    $usuario = isset($_REQUEST['usuario'])? $_REQUEST['usuario'] : null;
    $Telefonop = isset($_REQUEST['Telefonop'])? $_REQUEST['Telefonop'] : null;
    $contrasenap = isset($_REQUEST['contrasenap'])? $_REQUEST['contrasenap'] : null;
    
    if (!empty($_POST["btnregistrar"])) {
        if (!empty($_POST["usuario"]) and !empty($_POST["contrasenap"])) {
            
            $usuario=$_POST["usuario"];
            $contrasenap=$_POST["contrasenap"];
            $sql=$conexion->query("SELECT * FROM pacientes where  usuario='$usuario' and contrasenap='$contrasenap' ");
            if ($valor=$sql->fetch_object()) {
                $_SESSION["ID"]=$valor->ID;
                $_SESSION["Nombre"]=$valor->Nombre;
                $_SESSION["usuario"]=$valor->usuario;
                $_SESSION["Telefonop"]=$valor->Telefonop;
                $_SESSION["contrasenap"]=$valor ->contrasenap;
                
                header("location: ../vistas/Inicio_P.php");
                
            } else {
                echo "<div class='alert alert-danger'>Acceso denegado</div>";
            }
            
        } else {
            header("Location: ../formularios/Registrate.php?error=Campos vacios");
        }
        
    }

    //Datos de conexion
$hostDB='localhost';
$nameDB='Aguilarmasterpromax';
$userDB='root';
$passwordDB='';

//Configuracion de conexion
$hostPDO = "mysql:host=$hostDB;dbname=$nameDB;";
$myConexion = new PDO($hostPDO, $userDB, $passwordDB);

// preparar INSERT
$myInsert = $myConexion->prepare('INSERT INTO pacientes (ID,Nombre, contrasenap, usuario, Telefonop)
                                   VALUE (:ID,:Nombre, :contrasenap, :usuario,:Telefonop)');

$myInsert ->execute(
    array(
        'ID'=>$ID,
        'Nombre' => $Nombre,
        'usuario'=> $usuario,
        'Telefonop' => $Telefonop,
        'contrasenap' => $contrasenap
        
        
    )
);

  // Redireccionamos a consulta
    header('Location: ../formularios/inicia_sesion.php');

}

?>