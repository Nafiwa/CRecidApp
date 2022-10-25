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
            <div class="login">
                <a href="../html/login.html" class="logo">
                    <img src="../img/logoCrecid.png" />
                </a>
                <br /><br /><br />
                <form action="validarLogin.php" method="POST"> 
                <label for="Usuario">Usuario:</label><br>
                    <input type="text" id="Usuario" name="Usuario" value="19051131"><br>
                    <label for="Contrasena">Contraseña:</label><br>
                    <input type="password" id="Contrasena" name="Contrasena" value="*********"><br><br>
                    <div> <?php echo isset($alert) ? $alert : '' ?> </div>
                    <input type="submit" id="Ingresar">
                </form>

                
                <!-- <a href="#1">Internos</a>
            <a href="#">Hospitales</a>
            <a href="#">Registro de actividades</a>-->
            </div>
            <div class="body">
                <!-- Slideshow container -->
                <!--<div class="slideshow-container">

                    <!-- Full-width images with number and caption text 
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="../img/img1.jpg" style="width:80%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="../img/img3.jpg" style="width:80%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="../img/img1.jpg" style="width:80%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons 
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles 
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>-->
            </div>
        </div>
    </body>

