<<?php 

$con=mysqli_connect('localhost','root','','crecid');
include_once("conexion.php");

$sqlSelect = "SELECT * FROM hospital";
$resultSelect=mysqli_query($con,$sqlSelect);
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
        <div>
            HOSPITALES
        </div>
        <BR><BR>
        <div style="overflow-x: auto;">
        <TABLE CLASS="TABLA-RESPONSIVA">
            <thead>
                <tr>
                    <th class="th-responsiva"><strong>Nombre</strong></th>  
                    <th class="th-responsiva"><strong>Dirección</strong></th>
                    <th class="th-responsiva"><strong>Teléfono</strong></th>
                    <th class="th-responsiva"><strong>Estatus</strong></th>
                    <th class="th-responsiva"></th>
                    <th class="th-responsiva"></th>
                </tr>
            </thead>

            <tbody>
                <?php
                while($mostrar=mysqli_fetch_array($resultSelect)){
                    ?>
                    <tr>
                        <td class="th-responsiva"><?php echo $mostrar['NombreHospital'] ?></td>
                        <td class="th-responsiva"><?php echo $mostrar['Direccion'] ?></td>
                        <td class="th-responsiva"><?php echo $mostrar['Telefono'] ?></td>
                        <td class="th-responsiva"><?php echo $mostrar['Estatus'] ?></td>
                        <td class="th-responsiva"><a href="modificarHospitales.php">
                            <img src="../img/icono.png" height="20px" width="20px">
                            </a></td>
                        <td class="th-responsiva"><a href="modificarHospitales.php">
                            <img src="C:\xampp\htdocs\CRecidApp\CRecidApp\CRecidApp\imagenes\pencil.png">
                        </a></td>
                    </tr>
                    <?php
            
                    }
                    ?>
            </tbody>
        </TABLE>
        </div>
    </body>
</html>