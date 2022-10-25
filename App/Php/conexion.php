<<<<<<< HEAD:CRecidApp/CRecidApp/CRecidApp/App/Php/conexion.php
<?php
class Database{
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="crecid";

    $conexion= new mysqli($server,$user,$pass,$db);

    if($conexion->connect_errno){
        return "Tu puedes, intentale otra ves";
    } else {
        return "Conectado jiji";
    }
    

}
}

function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="crecid";

    $conexion= new mysqli($server,$user,$pass,$db);

    if($conexion->connect_errno){
        return "Tu puedes, intentale otra ves";
    } else {
        return "Conectado jiji";
    }
    

}


=======
<?php
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="crecid";

    $conexion= new mysqli($server,$user,$pass,$db);

    if($conexion->connect_errno){
        return "Tu puedes, intentale otra ves";
    } else {
        return "Conectado jiji";
    }
    

}
?>
>>>>>>> e1e960f1adef3aac706fd99c2d00613c1a451887:CRecidApp/App/Php/conexion.php
