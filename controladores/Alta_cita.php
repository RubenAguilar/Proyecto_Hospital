<?php 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_c = isset($_REQUEST['id_c'])? $_REQUEST['id_c'] : null;
    $fechita = isset($_REQUEST['fechita'])? $_REQUEST['fechita'] : null;
    $horita = isset($_REQUEST['horita'])? $_REQUEST['horita'] : null;
    $patient = isset($_REQUEST['patient'])? $_REQUEST['patient'] : null;
    
    

    //Datos de conexion
$hostDB='localhost';
$nameDB='Aguilarmasterpromax';
$userDB='root';
$passwordDB='';

//Configuracion de conexion
$hostPDO = "mysql:host=$hostDB;dbname=$nameDB;";
$myConexion = new PDO($hostPDO, $userDB, $passwordDB);

// preparar INSERT
$myInsert = $myConexion->prepare('INSERT INTO citap (id_c,fechita, horita, patient)
                                   VALUE (:id_c,:fechita, :horita,:patient) ');

$myInsert ->execute(
    array(
        'id_c'=>$id_c,
        'fechita' => $fechita,
        'horita' => $horita,
        'patient'=> $patient
      
        
        
    )
);

  // Redireccionamos a consulta
    header('Location: ../vistas/mostrar_citas.php');

}

?>