<?php
include "conexion.php";
session_start();

if (!empty($_POST["btniniciar"])) {
    if (!empty($_POST["usuario"]) and !empty($_POST["contrasenap"])) {
        
        $usuario=$_POST["usuario"];
        $contrasenap=$_POST["contrasenap"];
        $sql=$conexion->query("SELECT * FROM pacientes where  usuario='$usuario' and contrasenap='$contrasenap' ");
        if ($valor=$sql->fetch_object()) {
            $_SESSION["ID"]=$valor->ID;
            $_SESSION["usuario"]=$valor->usuario;
            $_SESSION["contrasenap"]=$valor ->contrasenap;
            header("location: ../vistas/Inicio_P.php");
            
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado</div>";
        }
        
    } else {
        echo"<div class='alert alert-danger'>Campos vacios</div>";
    }
    
}


?>