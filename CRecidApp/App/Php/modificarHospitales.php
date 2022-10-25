<<<<<<< HEAD:CRecidApp/CRecidApp/CRecidApp/App/Php/modificarHospitales.php
<?php

include_once("conexion.php");
$con=mysqli_connect('localhost','root','','crecid');

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <script type="text/javascript" src="../javaScript/javascript.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet" />
        <title>C•Recid</title>
    </head>
    <body>
        <?php
        error_reporting(0);
        $hospital = $_GET["hospital"];
        $direccion = $_GET["direccion"];
        $telefono = $_GET["telefono"];
        ?>

        <h1> ACTUALIZAR HOSPITAL </h1><br> <br>
        <div><?php echo isset($alert) ? $alert : ''; ?></div>
        <div style="overflow-x: auto;">
        
        <form action="ModHosp.php" method="post">

                    <label for="hospital" >Nombre: &nbsp;&nbsp;&nbsp;</label>
                    <input  type="text" id="hospital" name="hospital" value="<?=$hospital?>"><br>
                    
                    <label for="direccion">Dirección:&nbsp; </label>
                    <input type="text" id="direccion" name="direccion" value="<?=$direccion?>"><br>
                    
                    <label for="telefono">Telefono: &nbsp;</label>
                    <input type="text" id="telefono" name="telefono" value="<?=$telefono?>"><br><br>
                    
                    
                    <input type="submit" value="Actualizar">
                    <td><a href="ejemplo.php">Cancelar</a></td>
                   
                    
                </form>

        </div>
    </body>
=======
<<?php 

session_start();
$con=mysqli_connect('localhost','root','','crecid');
include("conexion.php");

if(!empty($_POST)){

}


$NombreHospital = $_REQUEST['NombreHospital'] ;

$sqlUpdate = mysqli_query($con,"SELECT * FROM hospital WHERE NombreHospital=$NombreHospital");
mysqli_close($con);
$result_sql = mysqli_num_rows($sqlUpdate);

if($result_sql =0){
    header('Location: ejemplo.php');

}else{
    while($data = mysqli_fetch_array($sqlUpdate)){
        $NombreHospital = $data['NombreHospital'];
        $Direccion = $data['Direccion'];
        $Telefono = $data['Telefono'];
        $Estatus = $data['Estatus'];

    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <script type="text/javascript" src="../javaScript/javascript.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet" />
        <title>C•Recid</title>
    </head>
    <body>
        <h1> ACTUALIZAR HOSPITAL </h1>
        <div><?php echo isset($alert) ? $alert : ''; ?></div>
        <div style="overflow-x: auto;">
        
        <form action="" method="post">
        <label for="hospital" >Nombre: &nbsp;&nbsp;&nbsp;</label>
                    <input  type="hidden" id="NombreHospital" name="NombreHospital" value="<?php echo $NombreHospital; ?>"><br>
                    <label for="direccion">Dirección:&nbsp; </label>
                    <input type="text" id="Direccion" name="Direccion" value="<?php echo $Direccion; ?>"><br>
                    <label for="telefono">Telefono: &nbsp;</label>
                    <input type="text" id="Telefono" name="Telefono"value="<?php echo $Telefono; ?>"><br><br>
                    <input type="text" id="Estatus" name="Estatus" value="<?php echo $Estatus; ?>"><br><br>
                    <input type="submit" value="Actualizar">
        </form>

        </div>
    </body>
>>>>>>> e1e960f1adef3aac706fd99c2d00613c1a451887:CRecidApp/App/Php/modificarHospitales.php
</html>