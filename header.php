<?php ob_start(); #esto evita los errores de envios de headers
set_error_handler("var_dump");
include 'conexion.php';
session_start(); #inicializamos variables de sesion
 #si esta logueado lo dejo trabajar y sino lo mando al login de nuevo 
 if ( isset( $_SESSION['usuario'] )!='Admin'){
    header("location:login.php");
    die();
} ?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Dongle&family=Edu+VIC+WA+NT+Beginner:wght@500&family=Fjalla+One&family=Lato:ital@1&family=Montserrat:wght@300&family=Oswald:wght@200&family=Poppins:ital,wght@0,400;0,600;0,700;1,700&family=Roboto:wght@300&family=The+Nautigal:wght@700&family=Updock&display=swap&family=Edu+SA+Beginner:wght@500" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/estilos.css">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Portfolio</title>

</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top" aria-label="Third navbar example">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav ms-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <div class="p-3 d-flex">
                            <img src="./assets/img/portfolio.gif" style="width:40px;height:40px"/>
                            <a class="nav-link active" aria-current="page"  href="index.php">Ir al PortFolio</a>
                        </div>  
                    </li>
                    <li class="nav-item">
                        <div class="p-3 d-flex">
                            <img src="./assets/img/folder-proyectos.gif" style="width:40px;height:40px"/>
                            <a class="nav-link active" aria-current="page"  href="index_admin.php">Ver proyectos</a>
                        </div>  
                    </li>
                    <li class="nav-item">
                        <div class="p-3 d-flex">
                            <img src="./assets/img/abm.gif" style="width:55px;height:55px"/>
                            <a class="nav-link active" aria-current="page"  href="galeria.php">ABM</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="p-3 d-flex">
                            <img src="./assets/img/exit.gif" style="width:50px;height:50px"/>
                            <a class="nav-link active" href="cerrar.php">Cerrar Sesión de User: <span><?php echo $_SESSION['usuario']; ?></span>  </a> 
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</body>
</html>