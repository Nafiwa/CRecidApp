<?php
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="cresid";

    $conexion= new mysqli($server,$user,$pass,$db);

    if($conexion->connect_errno){
        return "Tu puedes, intentale otra ves";
    } else {
        return "Conectado jiji";
    }
    

}
?>
