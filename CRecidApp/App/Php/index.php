<?php

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
            <br><br>
            <button onclick="Hospital()">Insertar Hospital</button>

                <!--Tabla de Hospitales modificado por Estefanía-->
                <table class="tabla">
                    <tr>
                        <th><strong>Nombre</strong></th>  
                        <th><strong>Direccion</strong></th>
                        <th><strong>Telefono</strong></th>
                    </tr>

                    <!-- php donde se arrastran los datos de la tabla de Hospitales para que se muestren -Estefania-->
                    <?php
                    /* Sentencia para traer los datos con el select y se guardan en la variable $sql */
                    $sql="select NombreHospital, Direccion,Telefono from Hospital";
                    /* traemos la variable $sql que contiene la sentencia del select y traemos la conexión a la base de datos(con)*/
                    $result=mysqli_query($con,$sql);
                    /* ponemos while para que se cumpla la condicion para que se traiga los datos de la variable $result donde se está guardadno todo */
                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['NombreHospital'] ?></td>
                        <td><?php echo $mostrar['Direccion'] ?></td>
                        <td><?php echo $mostrar['Telefono'] ?></td>

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