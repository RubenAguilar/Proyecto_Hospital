<?php
include "conexion.php";
session_start();

if (!empty($_POST["btniniciard"])) {
    if (!empty($_POST["user"]) and !empty($_POST["contrasenad"])) {
        
        $user=$_POST["user"];
        $contrasenad=$_POST["contrasenad"];
        $sql=$conexion->query("SELECT * FROM doctors where  user='$user' and contrasenad='$contrasenad' ");
        if ($valor=$sql->fetch_object()) {
            $_SESSION["id_d"]=$valor->id_d;
            $_SESSION["user"]=$valor->user;
            $_SESSION["contrasenad"]=$valor ->contrasenad;
            header("location: Inicio_D.php");
            
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
        
    } else {
        echo"<div class='alert alert-danger'>Campos vacios</div>";
    }
    
}


?>