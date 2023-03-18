<?php
include 'conexion.php';
if (!empty($_GET["ID"])) {
    $ID=$_GET["ID"];
    $sql=$conexion->query(" DELETE from pacientes where ID=$ID ");
    session_destroy ();
    header ('location: home.php');
    
}
    
?>