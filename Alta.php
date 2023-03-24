<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ID = isset($_REQUEST['ID'])? $_REQUEST['ID'] : null;
    $Nombre = isset($_REQUEST['Nombre'])? $_REQUEST['Nombre'] : null;
    $usuario = isset($_REQUEST['usuario'])? $_REQUEST['usuario'] : null;
    $Telefonop = isset($_REQUEST['Telefonop'])? $_REQUEST['Telefonop'] : null;
    $contrasenap = isset($_REQUEST['contrasenap'])? $_REQUEST['contrasenap'] : null;
    

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
    header('Location: ../inicia_sesion.php');

}

?>