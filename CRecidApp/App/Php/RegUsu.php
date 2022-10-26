<?php

include_once("conexion.php");

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
            <div class="title"><h1>Usuarios</h1></div>
            <div class="sub"><h4>Añadir un nuevo Usuario</h4></div>
            <div>
                <form  method="POST">
                <input type="text" name="buscar" id="">
                <input type="submit" Value="Buscar">
                <a href="">Nuevo</a>
                </form>
            </div>
            <div class="formu">
            <form action="QueryInsertU.php" id="frmAutentica" name="frmAutentica" method="post">
                    <label for="hospital" >Nombre: &nbsp;&nbsp;&nbsp;</label>
                    <input  type="text" id="hospital" name="hospital" placeholder="Sofia"><br>
                    <label for="hospital" >Apellido Paterno: &nbsp;&nbsp;&nbsp;</label>
                    <input  type="text" id="hospital" name="hospital" placeholder="Garcia"><br>
                    <label for="direccion">Apellido Materno:&nbsp; </label>
                    <input type="text" id="direccion" name="direccion" placeholder="Flores"><br>
                    <label for="telefono">Telefono: &nbsp;</label>
                    <input type="text" id="telefono" name="telefono" placeholder="(844)000-0000"><br><br>
                    <input type="submit" value="Enviar" id="btnEnviar" name="btnEnviar" onclick="validaForma()">
                
                    <tr class=blanco height="60px">
			<td colspan="2">
				<font color="red">
					<div id="msgError"></div>
				</font>
			</td>
	</tr>
                </form>

            </div>


        </div>

        

    </body>
</html>