<?php

$con=mysqli_connect('localhost','root','','cresid');

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
    <div class="main">
        <div class="menu">
            <a href="#Internos">
            <img src="../img/logoCrecid.png"/>
            </a>
            <br /><br /><br />
            <button class="tablinks" onclick="tabs(event, 'Internos' )">Internos</button>
            <br />
            <button class="tablinks" onclick="tabs(event, 'Hospitales')">Hospitales</button>
            <br />
            <button class="tablinks" onclick="tabs(event, 'Registro')">Registro de actividades</button>

            <!-- <a href="#1">Internos</a>
            <a href="#">Hospitales</a>
            <a href="#">Registro de actividades</a>-->
        </div>
        <div class="body">
            <div id="Internos" class="menuContent">
                <!--<div class="window-notice" id="window-notice">
                    <div class="content">
                        <div class="content-text">Este sitio utiliza cookies para obtener la mejor experiencia en nuestra web. 
                        <a href="#">Leer más.</a></div>
                        <div class="content-buttons"><a href="#Internos" id="close-button">Aceptar</a></div>
                    </div>
                </div>-->
                <div class="titles">
                    <h1>Internos</h1>
                </div>
                <button class="AnadirInt" onclick="newInt()"">Añadir nuevo Interno &#10133;</button>
                <div class="izq">
                    
                </div>
                <div class="der">
                        
                </div>
            </div>
            <div id="Hospitales" class="menuContent">
                <div class="titles">
                    <h1>Hospitales</h1>
                </div>

                <table>
                    <tr>
                        <td><strong>Nombre</strong></td>
                        <td><strong>Usuario</strong></td>
                        <td><strong>Contraseña</strong></td>
                      </tr>

                    <?php
                    $sql="select * from usuario";
                    $result=mysqli_query($con,$sql);
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                      <tr>
                        <td><?php echo $mostrar['Nombre'] ?></td>
                        <td><?php echo $mostrar['Matricula'] ?></td>
                        <td><?php echo $mostrar['Contrasena'] ?></td>

                      </tr>
                      <?php
                      }
                      ?>
                    
                </table>


            </div>
            <div id="Registro" class="menuContent">
                <div class="titles">
                    <h1>Registro de actividades</h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>