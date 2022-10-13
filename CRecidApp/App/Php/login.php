<?php

$con=mysqli_connect('localhost','root','','crecid');
include_once'conexion.php';
?>

<!DOCTYPE html>
<html">

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
                <form>
                    <label for="fname">Usuario:</label><br>
                    <input type="text" id="fname" name="fname" value="19051131"><br>
                    <label for="lname">Contraseña:</label><br>
                    <input type="password" id="lname" name="lname" value="*********"><br><br>
                </form>
                <button type="submit" value="Submit" class="block"
                    onclick="location.href='../html/index.html'">Ingresar</button>
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

=======
<!DOCTYPE html>
<html">

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
                <form>
                    <label for="fname">Usuario:</label><br>
                    <input type="text" id="fname" name="fname" placeholder="19051131"><br>
                    <label for="lname">Contraseña:</label><br>
                    <input type="password" id="lname" name="lname" placeholder="*********"><br><br>
                </form>
                <button type="submit" value="Submit" class="block"
                    onclick="location.href='../html/index.html'">Ingresar</button>
                <!-- <a href="#1">Internos</a>
            <a href="#">Hospitales</a>
            <a href="#">Registro de actividades</a>-->
            </div>
            <div class="body">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
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

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
    </body>

>>>>>>> ae3011578bb50803ec8307e07fd063a7366e0dd9:CRecidApp/App/html/login.html
    </html>