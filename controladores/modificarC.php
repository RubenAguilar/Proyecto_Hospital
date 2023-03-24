<?php


if (!empty($_POST["btneditarcita"])) {
    if (!empty($_POST["fechita"]) and !empty($_POST["horita"])  ) {
        
     
        $fechita=$_POST["fechita"];
        $horita=$_POST["horita"];
        
        
        

        $sql=$conexion->query("UPDATE citap set fechita='$fechita', horita='$horita' where id_c=$id_c");
        if ($sql==1) {
            header("location: ../vistas/mostrar_citas.php");
        } else {
            echo "<div class='alert alert-danger'>Error al modificar la cita.</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}

?>