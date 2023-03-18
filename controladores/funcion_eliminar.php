<?php
if (!empty($_GET["id_c"])) {
    $id_c=$_GET["id_c"];
    $sql=$conexion->query(" delete from citap where id_c=$id_c ");
   
    
}

?>