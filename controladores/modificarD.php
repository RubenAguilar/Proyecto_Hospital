<?php


if (!empty($_POST["btneditar"])) {
    if (!empty($_POST["Doctor"]) and !empty($_POST["user"]) and !empty($_POST["espe"]) and !empty($_POST["cnum"]) ) {
        
     
        $Doctor=$_POST["Doctor"];
        $user=$_POST["user"];
        $espe=$_POST["espe"];
        $cnum=$_POST["cnum"];
        

        $sql=$conexion->query("UPDATE doctors set Doctor='$Doctor', user='$user', espe='$espe', cnum=$cnum  where id_d='$_SESSION[id_d]'");
        if ($sql==1) {
            header("location: ../vistas/mostrar_doctor.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar el perfil.</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}

?>