<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_d = isset($_REQUEST['id_d'])? $_REQUEST['id_d'] : null;
    $Doctor = isset($_REQUEST['Doctor'])? $_REQUEST['Doctor'] : null;
    $user = isset($_REQUEST['user'])? $_REQUEST['user'] : null;
    $espe = isset($_REQUEST['espe'])? $_REQUEST['espe'] : null;
    $cnum = isset($_REQUEST['cnum'])? $_REQUEST['cnum'] : null;
    $contrasenad = isset($_REQUEST['contrasenad'])? $_REQUEST['contrasenad'] : null;
    

    //Datos de conexion
$hostDB='localhost';
$nameDB='Aguilarmasterpromax';
$userDB='root';
$passwordDB='';

//Configuracion de conexion
$hostPDO = "mysql:host=$hostDB;dbname=$nameDB;";
$myConexion = new PDO($hostPDO, $userDB, $passwordDB);

// preparar INSERT
$myInsert = $myConexion->prepare('INSERT INTO doctors (id_d,Doctor, contrasenad, user, cnum, espe)
                                   VALUE (:id_d,:Doctor, :contrasenad, :user, :cnum, :espe)');

$myInsert ->execute(
    array(
        'id_d'=>$id_d,
        'Doctor' => $Doctor,
        'user'=> $user,
        'espe'=> $espe,
        'cnum' => $cnum,
        'contrasenad' => $contrasenad
        
        
    )
);

  // Redireccionamos a consulta
    header('Location: inicia_sesionD.php');

}

?>