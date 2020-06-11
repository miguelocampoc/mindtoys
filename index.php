<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPAM S.A.S</title>
    <?php include 'head.php'?>
</head>
<style>
 .minh-100 {
    height: 100vh;
  }
body{
    background: url(imagenes/toys.jpg) no-repeat fixed center ;
   -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
   height: 100%;
   width: 100% ;
}
.boton.alternativo { 
    background-color: transparent;
    color: #BA80E4!important;
    padding:2%;
    border: 2px solid #BA80E4;
    border-radius: 7px;
}
 
.boton.alternativo:hover {
    background-color: #CBACE1!important;
    padding:2%;
    color: white!important;
    text-decoration: none;
}
</style>
<body style="background-color:black">
<?php include 'nav.php'?>
<div id="mobile">
<div class="pb-5"> </div>
<div class="pb-3"> </div>

</div>
    <div class="container-fluid" id="container-fluid">
           <div class="row  justify-content-center align-items-center minh-100">
                <div class="col-md-5" >
                <p id="align-center" style="color:black; font-size:32px; text-align:center;"> <strong> MIND TOYS</strong> </p>

                <div style="text-align:center">
                <img src="imagenes/jugetes.jpeg" id="align-center"></img>
                </div><br>
               <div style="text-align:center"> <a class="boton alternativo" style="font-size:21px" href="catalogo.php"> Ver Catalogo</a></div> <br>
               <p style="text-align:center; font-size:20px; color:black; "> Una tienda virtual de jugetes para niños con discapacidades intelectuales,visuales,auditivas,motoras, deficit de atencion y tanstorno autista. 
                </p>
           </div>
    </div>
</body>
</html>