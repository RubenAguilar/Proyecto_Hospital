<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_c = isset($_REQUEST['id_c'])? $_REQUEST['id_c'] : null;
    $fechita = isset($_REQUEST['fechita'])? $_REQUEST['fechita'] : null;
    $horita = isset($_REQUEST['horita'])? $_REQUEST['horita'] : null;
    

    //Datos de conexion
$hostDB='localhost';
$nameDB='Aguilarmasterpromax';
$userDB='root';
$passwordDB='';

//Configuracion de conexion
$hostPDO = "mysql:host=$hostDB;dbname=$nameDB;";
$myConexion = new PDO($hostPDO, $userDB, $passwordDB);

// preparar INSERT
$myInsert = $myConexion->prepare('INSERT INTO citap (id_c,fechita, horita)
                                   VALUE (:id_c,:fechita, :horita)');

$myInsert ->execute(
    array(
        'id_c'=>$id_c,
        'fechita' => $fechita,
        'horita' => $horita
        
        
    )
);

  // Redireccionamos a consulta
    header('Location: crear_citas.php');

}

?>