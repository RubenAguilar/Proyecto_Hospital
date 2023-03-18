<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["Nombre"]) and !empty($_POST["usuario"]) and !empty($_POST["Telefonop"]) and !empty($_POST["contrasenap"])) {
        
        $ID=$_POST["ID"]; 
        $Nombre=$_POST["Nombre"];
        $Email=$_POST["usuario"];
        $Telefono=$_POST["Telefonop"];
        $Descripcion=$_POST["contrasenap"];

        $sql=$conexion->query(" UPDATE practica set Nombre='$Nombre', usuario='$usuario', Telefono=$Telefonop, contrasenap='$contrasenap'  where ID=$ID");
        if ($sql==1) {
            header("location:../mostrar_paciente.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar producto</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}

?>