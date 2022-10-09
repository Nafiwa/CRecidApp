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
        <div class="title">
            <h1>Hospitales</h1>
        </div>
            <h4 class="sub">Añadir nuevo hospital</h4>
        
        <div>
            <form class="formu">
                <label for="nombre" class="tags">Nombre:</label>
                <input type="text" id="Nombre" name="Nombre"><br>
                <label for="Direccion" class="tags">Dirección:</label>
                <input type="text" id="Direccion" name="Direccion"><br>
                <label for="Telefono" class="tags">Teléfono:</label>
                <input type="text" id="Telefono" name="Telefono">
            </form>
        </div>
    </body>
</html>