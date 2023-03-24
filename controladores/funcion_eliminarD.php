<?php
include 'conexion.php';
if (!empty($_GET["id_d"])) {
    $id_d=$_GET["id_d"];
    $sql=$conexion->query(" DELETE from doctors where id_d=$id_d ");
    session_destroy ();
    header ('location: ../home.php');
    
}
    
?>