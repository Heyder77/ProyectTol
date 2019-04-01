<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <script src="main.js"></script>
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="logo">
            <a href="#"> <img src="assets/images/logo-concretol-v7.png" /></a>
        </div>
        <div class="blank">
        </div>
        <div class="HoraReal">
            <?=date ('d-m-Y'); ?> <br/>
            <?=date (' H:i:s'); ?>

        </div>
        <div class="usuario">
            <a href="#"> Usuario </a>
        </div>
        
    </div>
    <!--Fin Header -->
    <!-- Navbar -->
    <div class="navbar">
        <div>
            <a>Administracion</a>
        </div>
        <div>
            <a href="Areas.php">Areas</a>
        </div>
        <div>
            <a href="modulos.php"> Modulos </a>
        </div>
        <div>
            <a> Herramientas </a>
        </div>
    </div>
    <!-- Contenido de la hoja --->
    <div class="wrapper">
        <div class="container">

            
        </div>
    </div>
    <!-- Fin navbar -->
</body>
</html>