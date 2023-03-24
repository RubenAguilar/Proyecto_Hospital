<?php


if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["Nombre"]) and !empty($_POST["usuario"]) and !empty($_POST["Telefonop"]) ) {
        
     
        $Nombre=$_POST["Nombre"];
        $usuario=$_POST["usuario"];
        $Telefonop=$_POST["Telefonop"];
        

        $sql=$conexion->query("UPDATE pacientes set Nombre='$Nombre', usuario='$usuario', Telefonop=$Telefonop   where ID='$_SESSION[ID]'");
        if ($sql==1) {
            header("location: ../vistas/mostrar_paciente.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar el perfil.</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}

?>