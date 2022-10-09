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
        <div class="regitrarH">
            <div class="title"><h1>Hospitales</h1></div>
            <div class="sub"><h4>Añadir nuevo hospital</h4></div>
            <div class="formu">
                <form>
                    <label for="hosp" >Nombre:  </label>
                    <input type="text" id="hosp" name="hosp" placeholder="Hospital General..."><br>
                    <label for="direccion">Dirección: </label>
                    <input type="text" id="direccion" name="direccion" placeholder="Avenida . . . "><br>
                    <label for="telefono">Telefono:  </label>
                    <input type="text" id="telefono" name="telefono" placeholder="(844)000-0000"><br><br>
                </form>
            </div>
            <div class="guardar">
            <button type="submit" value="Submit" class=""
                    onclick="location.href='../html/index.html'">Guardar +</button>
            </div>
        </div>
    </body>
</html>